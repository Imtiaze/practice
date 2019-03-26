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

    public function edit(Project $project){
        return view('projects.edit',['project' => $project]);
    }

    public function show(Project $project /*$id*/){
        //$project = Project::findOrFail($id);

        //return $project;


        return view('projects.show', compact('project'));
    }

    public function update(Project $project){
    //    $project = Project::findOrFail($id);
    //    $project->title = request  ('name');
    //    $project->description = request('details');
    //    $project->save();

        // $project->update([
        //     'title' => request('name'),
        //     'description' => request('details')
        // ]);

        $project->update(request(['title', 'description']));
       return redirect('/projects/'.$project->id);
    }

    
    public function store(){
       /*$project = new Project();

       $project->title = request('name');
       $project->description = request('details');

       $project->save();*/

    //    Project::create([
    //        'title' => request('name'),
    //        'description' => request('details')
    //    ]);

      // Project::create(request()->all());

      $project = request()->validate([
          'title' => 'required',
          'description' => 'required',
      ]);
      Project::create($project);
       return redirect('/projects');
    }

    public function destroy($id){
        project::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
