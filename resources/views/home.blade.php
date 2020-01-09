 @extends('layout')

 @section('content')

 <div class="jumbotron text-center">
     <h1 class="display-4">Jumbo heading</h1>
     <p class="lead">Jumbo helper text</p>
     <hr class="my-2">
     <p>More info</p>
     <p class="lead">
         <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
     </p>
 </div>


 <div class="container">
     <!-- //validation errors here -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if (!empty(session('message')))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif



     <form action="/landingform" method="post">
         @csrf

         <div class="form-group">
             <label for="">First Name</label>
             <input type="text" name="first_name" id="" class="form-control" placeholder="Enter your first name" aria-describedby="helpId">
             <small id="helpId" class="text-muted">Help text</small>
         </div>


         <div class="form-group">
             <label for="">Email</label>
             <input type="email" name="email_address" id="" class="form-control" placeholder="" aria-describedby="helpId">
             <small id="helpId" class="text-muted">We will not share your email</small>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>

 </div>

 @endsection