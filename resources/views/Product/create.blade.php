@extends('ayouts.app')
@section('contenu')
    <h3 class="text-center">Ajouter PRODUCT</h3>
    @if ($errors->any())
        <h6>Errors :</h6>
        <ul> 
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="container w-50" >
    <form action="{{ route('products.store') }}" method="POST" >
        @csrf
        <div class="mb-3">
            <label class="form-label">name</label>
            <input type="text" name="name" class="form-control">
            @error('poduct')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text" name="description" class="form-control" >
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">quantite</label>
            <input type="text" name="quantity" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Ajouter Product</button>
    </form>
</div>
@endsection
