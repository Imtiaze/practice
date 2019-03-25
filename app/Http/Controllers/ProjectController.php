<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        
        return view('projects.index', ['projects'=>$project]);
    } 
    
    public function create(){
        return view('projects.create');
    }

    public function edit($id){
        $projects  =  Project::findOrFail($id);
        return view('projects.edit',['project' => $projects]);
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function update($id){
       $project = Project::findOrFail($id);
       $project->title = request('name');
       $project->description = request('details');
       $project->save();


       return redirect('/projects');
    }

    
    public function store(){
       $project = new Project();

       $project->title = request('name');
       $project->description = request('details');

       $project->save();

       return redirect('/projects');
    }

    public function destroy($id){
        project::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
