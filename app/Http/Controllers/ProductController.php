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
        $products = Product::with('sizes', 'category')->get();
        $categories = Category::all();
        return view('backend.pages.product.create',compact('products','categories'));
    }

    public function list(){
        $products = Product::with(['category', 'imagedetail','sizes'])->paginate(10);
        $categories = Category::all();
        return view('backend.pages.product.list',compact('products','categories'));
    }

    public function create(Request $request)
    {
        // dd($request);

        $frontImagePath = $request->file('front_image')->store('product_images', 'public');
        $backImagePath = $request->file('back_image')->store('product_images', 'public');

        $product = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'description' => $request->description,
            'front_image' => $frontImagePath,
            'back_image' => $backImagePath,
            'longdescription' => $request->longdescription,
            'ingredients' => $request->ingredients,
            'howtouse' => $request->howtouse
        ]);


        if ($request->hasfile('imagedetail')) {
            foreach ($request->file('imagedetail') as $image) {
                $imagePath = $image->store('products/details', 'public');
                $product->images()->create(['image_path' => $imagePath]);
            }
        }

        foreach ($request->sizes as $index => $size) {
            $product->sizes()->create([
                'size' => $size,
                'price' => $request->price[$index],
                'stock' => $request->stock[$index],
                'discount' => $request->discount[$index] ?? 0,
            ]);
        }
    
        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit($id){
        $product = Product::with(['category', 'imagedetail'])->findOrFail($id);
        $categories = Category::all();
        // dd($product);
        return view('backend.pages.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            // 'weight' => 'required|numeric',
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
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'discount' => $request->discount,
            'longdescription' => $request->longdescription,
            'ingrediens' => $request->ingrediens,
            'howtouse' => $request->howtouse
        ]);

        $product->size()->delete();

        if ($request->input('sizes')) {
            foreach ($request->input('sizes') as $size) {
                Size::create([
                    'product_id' => $product->id,
                    'name' => $size,
                ]);
            }
        }

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
