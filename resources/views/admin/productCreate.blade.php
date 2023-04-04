 @extends('template.dashboard')
 @section('content')
  
 <div class="card">
  <div class="card-body">   
    <form action="{{url('/admin')}}" method="post">
        {!! csrf_field() !!}
        <label>ID</label></br>
        <input type="hidden" name="id" id="number" class="form-control"></br>
        <label>Menu</label></br>
        <input type="text" name="menu" id="text" class="form-control"></br>
        <label>Ingredients</label></br>
        <input type="text" name="ingredients" id="text" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="text" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="text" class="form-control"></br>
        <input type="submit" value="ADD" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@endsection
