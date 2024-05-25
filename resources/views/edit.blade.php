@extends('ayouts.app')
@section('contenu')
    <h3 class="w-100 text-center">UPDATE AUTEUR</h3>

    @if ($errors->any())
        <h6>Errors :</h6>
        <ul> 
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="container w-50" >
    <form action="{{ route('auteur.update',$auteur) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">id</label>
            <input type="text" name="id" class="form-control" >
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
        <button type="submit" class="btn btn-success">Modifier auteur</button>
    </form>
</div>
@endsection
