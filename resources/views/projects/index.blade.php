@extends('layout')

@section('content')
<h1>Project</h1>
    

<ul>
    @foreach($projects as $project)
    <h5><a href="/projects/{{$project->id}}">{{ $project->title}}</a></h5>   
    @endforeach
    
</ul>
@endsection
