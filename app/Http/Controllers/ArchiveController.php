<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;


class ArchiveController extends Controller
{
    public function index(){
        dd(Campaign::all());
        return view('archive.archiveIndex');
    }
    public function show(){

    }
}
