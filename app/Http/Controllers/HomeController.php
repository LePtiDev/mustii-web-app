<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // function to get home page
    public function index(){

        //Get three first projects
        $homeProjects = [];
        for($i = 0; $i < 3; $i++){
            $project = DB::table('projects')->where('id', "=", $i + 1)->get();
            array_push($homeProjects, $project[0]);
        }

        return view('front.home', [
            'projects' => $homeProjects
        ]);
    }
}
