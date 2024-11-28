<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $welcomeMessage = 'Create Products'; 
        $products = Product::with('sizes', 'category')->get();
        $categories = Category::all();
        return view('backend.pages.product.create',compact('products','categories','welcomeMessage','user'));
    }

    public function list(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'List Products'; 
        $query = htmlspecialchars($request->input('query'), ENT_QUOTES, 'UTF-8');
        $products = Product::with(['sizes', 'category', 'imagedetail'])
        ->when($query, function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%") 
              ->orWhereHas('category', function ($q) use ($query) {
                  $q->where('name', 'like', "%{$query}%");
              });
        })
        ->paginate(10);
        $categories = Category::all();
        return view('backend.pages.product.list',compact('products','categories','welcomeMessage','user'));
    }

    public function detail($slug){
        $user = Auth::user();
        $welcomeMessage = 'Detail Products'; 
        $product = Product::with(['category', 'imagedetail', 'sizes'])
        ->where('slug', $slug)
        ->firstOrFail();
        return view('backend.pages.product.detail', compact('product','welcomeMessage','user'));
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
            'effect' => $request->effect,
            'sku' => $request->sku,
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
        
        Alert::success('Success', 'Product created successfully!');
        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit($slug){
        $user = Auth::user();
        $welcomeMessage = 'Edit Products'; 
        $product = Product::with(['category', 'imagedetail'])->where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('backend.pages.product.edit', compact('product', 'categories','welcomeMessage','user'));
    }

    public function update(Request $request, $id)
    {

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
            'effect' => $request->effect,
            'sku' => $request->sku,
            'stock' => $request->stock,
            'price' => $request->price,
            'discount' => $request->discount,
            'longdescription' => $request->longdescription,
            'ingrediens' => $request->ingrediens,
            'howtouse' => $request->howtouse
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

        $requestedSizes = collect($request->sizes)->pluck('size')->toArray();

        $product->sizes()->whereNotIn('size', $requestedSizes)->delete();

        foreach ($request->sizes as $index => $size) {
            $product->sizes()->updateOrCreate(
                ['size' => $size],
                [
                    'price' => $request->price[$index],
                    'stock' => $request->stock[$index],
                    'discount' => $request->discount[$index] ?? 0,
                ]
            );
        }

        Alert::info('Updated', 'Category updated successfully');
        return back()->with('success', 'Product updated successfully!');
    }



    public function destroy($id)
    {
        $product = Product::findOrFail($id); 
        $product->delete();
        Alert::error('Deleted', 'Product deleted successfully');
        return redirect()->route('product.list')->with('success', 'Product deleted successfully.');
    }
}
