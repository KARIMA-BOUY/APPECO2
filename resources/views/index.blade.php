<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@extends('ayouts.app')
@section('contenu')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="w-100 text-center">Authors</h1>
    <a href="{{ route('auteur.create') }}" class="btn btn-primary">Create</a>
</div>
<table class="table container">
    <thead>
        <tr>
            <th>ID</th>
            <th>Author Name</th>
            <th>Actions</th>   
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td><a href="{{ route('auteur.show', $author->id) }}">{{ $author->author_name }}</a></td>
            <td class="d-flex">
            <a href="{{route('auteur.edit',$author)}}" class="btn btn-primary me-1">Update</a>
            <a href="{{route('auteur.show',$author->id)}}" class="btn btn-success me-1">Show</a>
                <form method="post" action="{{ route('auteur.destroy', $author) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-3">
    {{ $authors->links() }}
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>