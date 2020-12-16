@extends('master')

@section("content")


<div class="custom-product">



<div class ="col-sm-10">
<a href="/">Go back to home page</a>
<div class="trending-wrapper">
<h3>Products Results</h3>
@foreach ($products as $item)

<div class="row searched-item cart-list-divider">
<div class="col-sm-3">
<a href="detail/{{$item->id}}"> 

      <img class="trending-image" src="{{$item->gallery}}" alt="{{$item->name}}">
    
      </a>


</div>

<div class="col-sm-4">
<a href="detail/{{$item->id}}"> 

      <div class="">
      <h2>{{$item->name}}</h2>
      <h5>{{$item->description}}</h5>
 

      </div>
      </a>


</div>

<div class="col-sm-3">
<button class="btn btn-warning">Remove to cart</button>


</div>
</div>
@endforeach
</div>
</div>

@endsection
