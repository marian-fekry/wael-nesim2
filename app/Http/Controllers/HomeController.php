<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Models\Silder;
use App\Models\HomeWeight;
use App\Models\AboutUs;
use App\Models\Project;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $silders=\App\Models\Silder::get();
        $weights=\App\Models\HomeWeight::get();
        $aboutParts=\App\Models\AboutUs::get();
        $projects=\App\Models\Project::get();
        return view('home.index' , ['silders'=> $silders,'weights'=>$weights, 'aboutParts'=>$aboutParts,'projects'=>$projects]);
    }
}
