@extends('ayouts.app')
@section('contenu')

<div class="d-flex justify-content-between align-items-center">
<h1> PRODUCT LIST</h1>
<a href="{{route('products.create')}}" class="btn btn-prmary">create</a>
</div>
<table class="container">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>image</th>
            <th>Quantite</th>
            <th>Actions</th>   
        </tr>
</thead>
 @foreach ($produit as $product)
 <tr> 
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->image}}</td>
            <td>{{$product->Quantite}}</td>
            <td>{{$product->Actions}}</td>   
            <td><div  class="btn-group">
        <a href="{{route('products.edit',$product)}}" class="btn btn-primary">Update</a>
        <form method="post" action="{{route('products.destroy',$product) }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="delete"></td></div>
</tr>

  
</form>
@endforeach 
      
</table>
@endsection