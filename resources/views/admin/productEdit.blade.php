@extends('template.dashboard')
@section('content')

<div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin/'.$products->id)}}" method="post">
    {!! csrf_field() !!}
        @method ("PATCH")
        <label>ID</label></br>
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id"/></br>
        <label>Menu</label></br>
        <input type="text" name="menu" id="name" value="{{$products->menu}}" class="form-control"></br>
        <label>Ingredients</label></br>
        <input type="text" name="ingredients" id="name" value="{{$products->ingredients}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="name" value="{{$products->price}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="name" value="{{$products->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@stop  