@if ($errors->any())
      <div class="notification form-control btn-danger container">
         <ul>
            @foreach ($errors->all() as $error)
            {{$error}}  
            @endforeach
         </ul>
      </div>
   @endif