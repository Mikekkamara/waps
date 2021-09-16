<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Support\Carbon;
use App\Http\Controllers\CampaignController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ArchiveController extends Controller
{
    public function index(){
        $this->update();
        $campaigns = Campaign::where('status',2)->with('campaignVehicles', 'customer')->paginate(6);
        return view('archive.archiveIndex', compact('campaigns'));
    }
    public function show(){

    }
    public function update(){
        
        $campaigns = Campaign::all();
        $edit = new Campaign();
        foreach($campaigns as $campaign){
            if($campaign->endDate < date('Y-m-d')){
                $edit->where('id', $campaign->id)->update(['status' => 2]);
            }else{
                $edit->where('id', $campaign->id)->update(['status' => 1]);
            }
        }
    }
}
