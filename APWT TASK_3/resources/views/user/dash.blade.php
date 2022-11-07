@extends('layouts.app')
@section('content')

    @if(Session::get('user')) 
        
           <html>
           <div class="col-md-9 form-group">
        <h1>Welcome, {{Session::get('user')}}</h1>
        <h3>Email: {{Session::get('email')}}</h3>
        <h3>Phone: {{Session::get('phone')}}</h3>
        <h3>Date of birth: {{Session::get('dob')}}</h3>
        <h3>Gender: {{Session::get('gender')}}</h3>
        <h1>Address: {{Session::get('address')}}</h1>
        
    </div>

              
           </html>
      
    @endif 
@endsection 