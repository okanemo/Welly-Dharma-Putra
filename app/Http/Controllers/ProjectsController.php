<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectsController extends Controller
{
    public function Projectspage(){
        $projects=Project::get();
        return view('projects',compact('projects'));
    }

    public function ProjectbyCategory($id){
        $projects=Project::get()->where('category_id',$id);
        return view('projects',compact('projects'));        
    }

    public function GetProjectDetail($id){
        $projects=Project::find($id);
        return view('detail',compact('projects'));
    }
}
