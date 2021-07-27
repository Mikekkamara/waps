<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Date;
use App\Models\campaignPhoto;
use App\Models\Campaign;
use App\Models\CampaignDriver;
use App\Models\CampaignVehicle;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CampaignController extends Controller
{

    public function index(Request $request)
    {
        $campaigns = Campaign::with('campaignVehicles', 'customer')->get();

        $allCampaignCount = $this->allCampaignsCount();
        $activeCampaignsCount = $this->activeCampaignsCount();
        $finishedCampaignsCount = $this->finishedCampaignsCount();
        return view('campaign.index', compact('allCampaignCount', 'campaigns', 'finishedCampaignsCount', 'activeCampaignsCount'));
    }
    public function allCampaignsCount()
    {
        return Campaign::with('campaignVehicles')->count();
    }
    public function activeCampaignsCount()
    {
        return Campaign::with('campaignVehicles')->where([
            ['status', '=', 1],
        ])->count();
    }
    public function finishedCampaignsCount()
    {
        return Campaign::with('campaignVehicles')->where([
            ['status', '=', 2],
        ])->count();
    }
    public function create()
    {
        $drivers_with_campaigns = CampaignDriver::pluck('driver_id');
        // dd($drivers_with_campaigns);
        $user_type = 2;
        $drivers =  Driver::whereHas('user', function($q) use($user_type){

            $q->where('user_type', '=', $user_type);

        })->whereNotIn('id', $drivers_with_campaigns)->
        where('status',1)->get();
        $customers = Customer::with('user')->get();
        return view('campaign.create', compact('customers', 'drivers'));
    }
    public function edit($campaign_id)
    {


        $campaigns = Campaign::with('customer', 'campaignVehicles')->where('id', $campaign_id)->get();

        $drivers_with_campaigns = CampaignDriver::pluck('driver_id');
        // dd($drivers_with_campaigns);
        $user_type = 2;
        $alldrivers = Driver::whereHas('user', function($q) use($user_type){

            $q->where('user_type', '=', $user_type);

        })->whereNotIn('id', $drivers_with_campaigns)->
        where('status',1)->get();

        // dd($alldrivers);
        $campaign_drivers_id = CampaignDriver::where('campaign_id', $campaign_id)->pluck('driver_id');
        $customers = Customer::with('user')->get();
        return view('campaign.edit', compact('customers', 'campaign_drivers_id', 'campaigns', 'alldrivers'));
    }
    public function store(Request $request)
    {
        
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $request->validateWithBag('Date',[
            'startDate' => 'date|required',
            'endDate' => 'required|date'
        ]);
        $driver_ids = $request->driver_id;
        
        $campaign = new Campaign();
        $campaign->customer_id = $request->customer_id;
        $campaign->name = $request->name;
        $campaign->goal = $request->goal;
        $campaign->status = 1;
        $campaign->startDate = $startDate;
        $campaign->endDate = $endDate;
        if ($campaign->save()) {
            foreach ($driver_ids as $driver_id) {

                $campaign_drivers = new CampaignDriver();
                $campaign_drivers->campaign_id = $campaign->id;
                $campaign_drivers->driver_id = $driver_id;
                $campaign_drivers->save();
            }
        }
        // create a folder for campaign photos when a campaign is created
        $campaignPhotoDirectory = $campaign->id;
        $path = Storage::makeDirectory('./public/'.$campaignPhotoDirectory);
        // dd($path);
        if ($campaign_drivers->save()) {
            return redirect()->route('campaign.index')->with(['success' => 'Campaign Created Succesfully']);
        } else {

            return redirect()->route('campaign.index')->with(['error' => 'Campaign not Created']);
        }
    }
    public function show(Request $request,$campaign_id)
    {
        /* get the file names for photos of the specific campaign
            that had been stored earlier in the campaign photos table,
            paginate because of space

            $campaignPhotos = File::allFiles('../storage/app/public/' . $campaign_id);

        */
        
        $photos = campaignPhoto::where('campaign_id', $campaign_id)->paginate(3);
        // dd($photos);
        
        $distanceCovered = new DistanceController();
        $distanceCovered = $distanceCovered->getCampaignDistanceCovered($campaign_id);
        // dd($distanceCovered);

        $campaigns = Campaign::with('customer', 'campaignVehicles')->where('id', $campaign_id)->get();

        $campaign_drivers_id = CampaignDriver::where('campaign_id', $campaign_id)->pluck('driver_id');
        // dd($campaign_drivers_id);

        return view('campaign.show', compact('campaigns', 'campaign_drivers_id', 'distanceCovered', 'photos'));
    }
    public function update(Request $request, $campaign_id)
    {
        // new driver
        $driver_ids = $request->driver_id;
        // existing driver
        $driver_user_ids = $request->driver_user_id;
// both new and existing drivers
        if ($driver_user_ids != null && $driver_ids != null) {
            $current_campaign_drivers_ids = [];
            foreach ($driver_user_ids as $driver_user_id) {
                $current_campaign_drivers_ids[] = Driver::where('user_id', $driver_user_id)->pluck('id')->first();
            }

            if ($current_campaign_drivers_ids != null && $driver_ids != null) {

                $merged = [];
                $merged = array_merge($current_campaign_drivers_ids, $driver_ids);

                if (Campaign::where('id', $campaign_id)->update([
                    'name' => $request->name,
                    'customer_id' => $request->customer_id,
                    'goal' => $request->goal,
                ])) {



                    foreach ($merged as $driver_id) {
                        CampaignDriver::where('campaign_id', $campaign_id,)
                            ->delete();
                    }
                    foreach ($merged as $driver_id) {
                        $campaign_drivers = new CampaignDriver();
                        $campaign_drivers->campaign_id = $campaign_id;
                        $campaign_drivers->driver_id = $driver_id;
                        $campaign_drivers->save();
                    }


                    return redirect()->route('campaign.index')->with(['success' => 'Campaign Updated Succesfully']);
                } else {
                    return redirect()->back()->with(['error' => 'Campaign not Updated']);
                }
            }
            // only current drivers
        } elseif ($driver_user_ids != null && $driver_ids == null) {

            $current_campaign_drivers_ids = [];
            foreach ($driver_user_ids as $driver_user_id) {
                $current_campaign_drivers_ids[] = Driver::where('user_id', $driver_user_id)->pluck('id')->first();
            }


            if ($current_campaign_drivers_ids != null && $driver_ids == null) {

                if (Campaign::where('id', $campaign_id)->update([
                    'name' => $request->name,
                    'customer_id' => $request->customer_id,
                    'goal' => $request->goal,
                ])) {



                    foreach ($current_campaign_drivers_ids as $driver_id) {
                        CampaignDriver::where('campaign_id', $campaign_id,)
                            ->delete();
                    }
                    foreach ($current_campaign_drivers_ids as $driver_id) {
                        $campaign_drivers = new CampaignDriver();
                        $campaign_drivers->campaign_id = $campaign_id;
                        $campaign_drivers->driver_id = $driver_id;
                        $campaign_drivers->save();
                    }


                    return redirect()->route('campaign.index')->with(['success' => 'Campaign Updated Succesfully']);
                } else {
                    return redirect()->back()->with(['error' => 'Campaign not Updated']);
                }
            }

            // only new drivers
        } elseif ($driver_user_ids == null && $driver_ids != null) {



            if (Campaign::where('id', $campaign_id)->update([
                'name' => $request->name,
                'customer_id' => $request->customer_id,
                'goal' => $request->goal,
            ])) {



                foreach ($driver_ids as $driver_id) {
                    CampaignDriver::where('campaign_id', $campaign_id,)
                        ->delete();
                }
                foreach ($driver_ids as $driver_id) {
                    $campaign_drivers = new CampaignDriver();
                    $campaign_drivers->campaign_id = $campaign_id;
                    $campaign_drivers->driver_id = $driver_id;
                    $campaign_drivers->save();
                }


                return redirect()->route('campaign.index')->with(['success' => 'Campaign Updated Succesfully']);
            } else {
                return redirect()->back()->with(['error' => 'Campaign not Updated']);
            }
        }else{


            return redirect()->back()->with(['error' => 'Select Drivers for this Campaign']);


        }
    }
    public function uploadPhotos(Request $request, $campaign_id){
        $images = $request->file('uploadPictures');
        if($images == null){
            return redirect()->route('campaign.show', ['id' => $campaign_id])->with(['error' => 'Please Select An Image To upload']);
        } else{
            $images->store('./public/'.$campaign_id);
            $imageName = $images->hashName();
            // dd($imageName);
            campaignPhoto::create([
                'campaign_id' => $campaign_id,
                'image_name' => $imageName
            ]);
            return redirect()->route('campaign.show', ['id' => $campaign_id])->with(['success' => 'Uploaded Succesfully', 'id' => $campaign_id]);
        }
        // dd($store);
        // $folder = Storage::allFiles($campaign_id);
        // dd($folder);
    }

    /*      When the end date of a campaign is due, the campaign is declared over 
    *       and the campaign should be moved to archives?
    *       should there be a column in the table campaigns that's set to 1 when a 
    *       campaign is archieved or should the whole data row with the campaign be 
    *       removed and placed in a new table called archivessss. What happens to the photos of the said campaign?
    *
    *       maybe a fx to check if a campaign's end date is due,
    */

    public function archiveCampaign($campaign_id){
            // All the campaigns or 1 single campaign?
        // A single campaign
        $campaign = Campaign::where('id',$campaign_id)->value('endDate');
        // Creating a new date instance from the date returned from the db
        $date = date_create($campaign)->format('d/m/y');
        if ( $date < date('d/m/y')){
            dd('This is expired');
        } else{
            dd('still on');
        }
        // dd($date);
    }


}
