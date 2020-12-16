@extends('master')

@section("content")


<div class="custom-product">



<div class ="col-sm-10">
<a href="/">Go back to home page</a>
<div class="trending-wrapper">
<h3>My orders</h3>

@foreach ($orders as $item)

<div class="row searched-item cart-list-divider">
<div class="col-sm-3">
<a href="detail/{{$item->id}}"> 

      <img class="trending-image" src="{{$item->gallery}}" alt="{{$item->name}}">
    
      </a>


</div>

<div class="col-sm-4">
<a href="detail/{{$item->id}}"> 

      <div class="">
      <h2>Name: {{$item->name}}</h2>
      <h5>Delivery status: {{$item->status}}</h5>
 
      <h5>Address: {{$item->address}}</h5>
      <h5>Payment status: {{$item->payment_status}}</h5>
      <h5>Payment method: {{$item->payment_method}}</h5>

      </div>
      </a>


</div>


</div>
@endforeach



</div>
</div>

@endsection
