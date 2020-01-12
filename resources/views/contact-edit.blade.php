 @extends('layout')

 @section('content')

 <div class="jumbotron text-center">
     <h2>Editing contact</h2>
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





     <form action="/contact-update/{{$contact->id}}" method="post">
         @csrf

         <div class="form-group">
             <label for="">First Name</label>
             <input value="{{$contact->first_name}}" type="text" name="first_name" id="" class="form-control" placeholder="Enter your first name" aria-describedby="helpId">
             <small id="helpId" class="text-muted">Help text</small>
         </div>


         <div class="form-group">
             <label for="">Email</label>
             <input value="{{$contact->email_address}}" type="email" name="email_address" id="" class="form-control" placeholder="" aria-describedby="helpId">
             <small id="helpId" class="text-muted">We will not share your email</small>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>

 </div>

 @endsection