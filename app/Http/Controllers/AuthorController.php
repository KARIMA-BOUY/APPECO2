<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::with('biography', 'books.genres')->paginate(6);
        return view('index', compact('authors'));
    }
    // public function show(Author $author)
    // {
    //     $author->load('biography', 'books.genres');
    //     return view('show', compact('author'));
    // }
    public function create()
    {
      return view('create');
    }
    public function store(Request $request)
    {
    //  $info=$request->validate([
    //     'id'=>'required',
    //     'author_name'=>'required',
    //   ]);
    author::create($request->all());
      return redirect()->route('auteur.index')->with('success', 'auteur created successfully.');
}
// public function destroy(Author $author)
// {
//     $author->delete();
//   return redirect()->route('auteur.index')
//     ->with('success', 'Auteur deleted successfully');
// }
public function update(Request $request, $id)
  {
    // $request->validate([
    //   'title' => 'required|max:255',
    //   'body' => 'required',
    // ]);
    $post = Author::find($id);
    $post->update();
    return redirect()->route('auteur.index')
      ->with('success', 'Post updated successfully.');
  }
  public function edit($id)
  {
    $auteur = Author::find($id);
    return view('edit', compact('auteur'));
  }
  public function destroy(Author $author , $id)
{
  $author=Author::find($id);
    $author->delete();
  return redirect()->route('auteur.index')
    ->with('success', 'Auteur deleted successfully');
}
public function show(Author $author){
  return view('show',compact('author'));
}
 }