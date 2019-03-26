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
   <h1>Create Data</h1>

   <div class="container">
      <form method="POST" action="/projects">
         @csrf
         <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name='title'  class="form-control {{$errors->has('title') ? 'danger': ''}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">details</label>
            <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>
         
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
   <br>
   @include('errors')
</body>
</html>