<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Models\Contact;
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


    //Form function on the home page
    public function store(HomeRequest $request){

        $demande = new Contact();
        $demande->name = $request->name;
        $demande->email = $request->email;
        $demande->subject = $request->subject;
        $demande->description = $request->description;
        $demande->save();

        return back();
    }
}
