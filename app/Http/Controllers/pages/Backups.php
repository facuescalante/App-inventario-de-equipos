<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backup;




class Backups extends Controller
{
    //
    public function index(){
        $backups = Backup::all();
        return view('content.pages.backups', compact('backups'));
    }
}
