@extends('layout')

@section('content')
    
    <h1>{{ $project->title}}</h1>
    <br>
    <p>{{ $project->description}}</p>
    <a class="btn btn-info" href="/projects/{{$project->id}}/edit">Edit</a>
    <a class="btn btn-dark" href="/projects">Home</a>
    <br>
    <br>
    @if ($project->tasks->count())
        <div class="border border-info container p-5">
            <h3>Task lists</h3>
            @foreach ($project->tasks as $task)
                
                    <form method="POST" action="/tasks/{{$task->id}}">   {{--projects/{{$project->id}} --}}
                        @method('PATCH')
                        @csrf
                        <input type="checkbox" name="completed" class="form-check-input" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        <label class="form-check-label {{ $task->completed ? 'is-complete' : '' }} " for="completed">{{ $task->description }}</label>
                    </form>
                    
                
            @endforeach
        </div>
    @endif

    <div class="border border-dark container">
        <form method="post" action="/projects/{{$project->id}}/tasks">
            @csrf
            <div class="form-group ">
                <label for="my-input">New Task</label>
                <input name="description" id="my-input" class="form-control" type="text">
            </div>
            <input class="btn btn-primary" type="submit" value="Add Task">
        </form>
        
    </div>

    @include('errors')
    
@endsection