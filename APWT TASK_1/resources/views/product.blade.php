@extends('layouts.app')
@section('content')
<div class="containter">
    <h1 class="text-success"><u>Product List</u></h1>
    <table class="table table-border table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Service Charge</th>
            <th scope="col">Delivery Charge</th>
        </tr>
        </thead>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->service_charge}}</td>
                <td>{{$product->delivery_charge}}</td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection