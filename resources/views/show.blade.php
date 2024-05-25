<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <div class="container mt-5">
        <h1>Books by Author</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>id</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($author->books as $b)
                    <tr>
                        <td>{{ $b->book_title }}</td>
                        <td>{{ $b->author_id }}</td>
                
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('auteur.index') }}">Back to Authors</a>
</body>
</html>
