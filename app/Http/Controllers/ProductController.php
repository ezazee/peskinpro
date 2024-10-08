<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {   
        $categories = Category::all();
        return view('backend.pages.product.create',compact('categories'));
    }

    public function list(){
        $products = Product::with(['category', 'imagedetail'])->paginate(10);
        $categories = Category::all();
        return view('backend.pages.product.list',compact('products','categories'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'weight' => 'required|numeric',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            // 'front_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'back_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'imagedetail.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $frontImage = $request->file('front_image')->store('products', 'public');
        $backImage = $request->file('back_image')->store('products', 'public');

        $product = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'weight' => $request->weight,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'discount' => $request->discount,
            'front_image' => $frontImage,
            'back_image' => $backImage
        ]);

        if ($request->hasfile('imagedetail')) {
            foreach ($request->file('imagedetail') as $image) {
                $imagePath = $image->store('products/details', 'public');
                $product->images()->create(['image_path' => $imagePath]);
            }
        }

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit($id){
        $product = Product::with(['category', 'imagedetail'])->findOrFail($id);
        $categories = Category::all();
        return view('backend.pages.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'weight' => 'required|numeric',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            // 'front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'back_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'imagedetail.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('front_image')) {
            if ($product->front_image) {
                Storage::disk('public')->delete($product->front_image);
            }
            $frontImage = $request->file('front_image')->store('products', 'public');
            $product->front_image = $frontImage;
        }

        if ($request->hasFile('back_image')) {
            if ($product->back_image) {
                Storage::disk('public')->delete($product->back_image);
            }
            $backImage = $request->file('back_image')->store('products', 'public');
            $product->back_image = $backImage;
        }

        $product->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'weight' => $request->weight,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'discount' => $request->discount
        ]);

        if ($request->hasfile('imagedetail')) {
            foreach ($product->imagedetail as $image) {
                Storage::disk('public')->delete($image->image_path); 
                $image->delete();
            }

            foreach ($request->file('imagedetail') as $image) {
                $imagePath = $image->store('products/details', 'public');
                $product->images()->create(['image_path' => $imagePath]);
            }
        }

        return back()->with('success', 'Product updated successfully!');
    }



    public function destroy($id)
    {
        $category = Product::findOrFail($id); 
        $category->delete();
        return redirect()->route('product.list')->with('success', 'Category deleted successfully.');
    }
}
