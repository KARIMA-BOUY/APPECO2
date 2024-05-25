@extends('ayouts.app')
@section('contenu')
 <h1>Create Product</h1>
<form action="{{route ('Products.store')}}"method= "post">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control">
     </div>
     <div class="form-group">
        <label for="description" class="form-label">description</label>
        <input type="text" name="description" id="description" class="form-control">
     </div>
     <div class="form-group">
        <label for="quantite" class="form-label">quantite</label>
        <input type="text" name="quantite" id="quantite" class="form-control">
     </div>
     <div class="form-group">
        <label for="image" class="form-label">image</label>
        <input type="file" name="image" id="image" class="form-control">
     </div>
     <div class="form-group">
        <label for="price" class="form-label">price</label>
        <input type="number" name="price" id="price" class="form-control">
     </div>
     <div class="form-group-my-3">
      <input type="submit" class="btn btn-primary w-100" value="add">
     </div>
</form>
@endsection