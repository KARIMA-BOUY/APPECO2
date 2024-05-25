<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\http\controllers\ProductController;
class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $produit = Product::all();
   return view ('Product.index',compact('produit'));
  }
  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
   $info=$request->validate([
      'name'=>'required|min:5',
      'description'=>'required',
      'quantity'=>'required',
      'image'=>'required',
      'price'=>'required',
    ]);
    Product::create($info);
    return redirect()->route('products.index')->with('success', 'Poproduct created successfully.');
  }
  /**
   * Update the specified resource in storage. 
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'title' => 'required|max:255',
      'body' => 'required',
    ]);
    $post = Product::find($id);
    $post->update($request->all());
    return redirect()->route('product.index')
      ->with('success', 'Post updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product)
  {
    $product->delete();
    return redirect()->route('products.index')
      ->with('success', 'product deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   */
  public function create()
  {
    return view('product.create');
  }
  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $product = Product::find($id);
    return view('product.show', compact('product'));
  }
  public function edit($id)
  {
    $product = Product::find($id);
    return view('product.edit', compact('product'));
  }
}