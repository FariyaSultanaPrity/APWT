@extends('layouts.app')
@section('content')

    @if(Session::get('user')) 
        
           <html>
           <div class="col-md-9 form-group">
        <h1>Welcome, {{Session::get('user')}}</h1>
      
    </div>

              
           </html>
      
    @endif 
@endsection 