@extends('ayouts.app')
@section('contenu')
    <h3 class="text-center">Ajouter Auteur</h3>
    @if ($errors->any())
        <h6>Errors :</h6>
        <ul> 
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="container w-50" >
    <form action="{{ route('auteur.store') }}" method="POST" >
        @csrf
        <div class="mb-3">
            <label class="form-label">id</label>
            <input type="text" name="name" class="form-control">
            @error('auteur')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">author_name</label>
            <input type="text" name="author_name" class="form-control" >
            @error('author_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Ajouter auteur</button>
    </form>
</div>
@endsection
