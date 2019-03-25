@extends('layout')

@section('content')
    <h1>Update Data</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
           <label for="exampleInputEmail1">Name</label>
        <input type="text" value="{{ $project->title }}" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
           <label for="exampleInputPassword1">details</label>
           <input type="text" value="{{ $project->description }}" name="details" class="form-control" id="exampleInputPassword1" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>

     <br>

     <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        
        <button type="submit" class="btn btn-primary">Delete</button>
     </form>
@endsection