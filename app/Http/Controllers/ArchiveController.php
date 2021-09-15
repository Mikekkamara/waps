<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;


class ArchiveController extends Controller
{
    public function index(){
        return view('archive.archiveIndex');
    }
    public function show(){

    }
    public function update(){
        $campaigns = Campaign::all();
        $edit = new Campaign();
        foreach($campaigns as $campaign){
            if($campaign->endDate < now()->subDay()){
                $edit->where('id', $campaign->id)->update(['status' => 2]);
            }else{
                $edit->where('id', $campaign->id)->update(['status' => 1]);
            }
        }
    }
}
