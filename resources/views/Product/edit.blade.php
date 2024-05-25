@extends('ayouts.app')
@section('contenu')
    <h3>UPDATE PRODUCT</h3>

    @if ($errors->any())
        <h6>Errors :</h6>
        <ul> 
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="container w-50" >
    <form action="{{ route('products.update',$product) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
            @error('poduct')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text" name="description" class="form-control" value="{{ old('description', $product->description) }}">
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">quantite</label>
            <input type="text" name="quantite" class="form-control" value="{{ old('quantite', $product->quantite) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">image</label>
            <input type="file" name="image" class="form-control" value="{{ old('image', $product->image) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}">
        </div>
        <button type="submit" class="btn btn-success">Modifier Product</button>
    </form>
</div>
@endsection
