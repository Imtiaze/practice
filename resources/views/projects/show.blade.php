@extends('layout')

@section('content')
    <h1>Details for "{{ $project->title }}"</h1>

   
        title = {{ $project->title}}
        <br>
        description = {{ $project->description}}
        <br>
        <a href="/projects/{{$project->id}}/edit">Edit</a>
@endsection