<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <h1>Data</h1>
    

    <ul>
        @foreach($projects as $project)
        <li><a href="/projects/{{$project->id}}">{{ 'Title: '.$project->title}}</a> {{" Description: ".$project->description }}</li>   
        @endforeach
        
    </ul>
</body>
</html>