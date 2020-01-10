 @extends('layout')

 @section('content')


 <div class="container text-center">
     <h1 class="display-4">List of contacts</h1>

     <div>

         <table class="table">
             <thead>
                 <tr>
                     <th>First Name</th>
                     <th>Email</th>
                     <th>created_at</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>

                 @foreach($listOfContacts as $c)

                 <tr>
                     <td>{{$c->first_name}}</td>
                     <td> {{$c->email_address}}</td>
                     <td>{{$c->created_at->diffForHumans()}}</td>
                     <td>
                         <button class="btn btn-primary btn-sm">Edit</button>
                         <a href="/destroy-contact/{{$c->id}}" class="btn btn-danger btn-sm">Delete</a>
                     </td>
                 </tr>

                 @endforeach

             </tbody>
         </table>



     </div>

 </div>

 @endsection