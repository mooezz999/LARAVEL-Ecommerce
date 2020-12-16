@extends('master')

@section("content")


<div class="custom-product">



<div class ="col-sm-10">
<table class="table table-striped">

    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
       
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
       
      </tr>
      <tr>
        <td>Delivery charges</td>
        <td>$ 10</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total + 10}}</td>
        
      </tr>
    </tbody>
  </table>
<div>

<form action="/orderplace" method="POST">
@csrf
  <div class="form-group">
    <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div  class="form-group">
    <label for="exampleInputPassword1">Payment method</label><br><br>
    <input type="radio" value="online" name="payment"><span>online payment</span><br><br>
    <input type="radio" value="EMI" name="payment"><span>EMI payment</span><br><br>
<input type="radio" value="delivery" name="payment"><span>payment on delivery</span><br><br>

  </div>
  
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>

</div>
</div>
</div>

@endsection
