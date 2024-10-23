<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {   
        $welcomeMessage = 'Categories Products'; 
        $categories = Category::paginate(10);
        return view('backend.pages.category.create',compact('categories','welcomeMessage'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
          ]);

        return back()->with('success', 'Category created successfully!');

    }

    public function edit($slug)
    {
        $welcomeMessage = 'Edit Categories Products'; 
        $category = Category::where('slug', $slug)->firstOrFail();
        $categories = Category::paginate(10);
        return view('backend.pages.category.create', compact('category', 'categories','welcomeMessage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }


    public function destroy($slug)
    {
        $category = Category::findOrFail($slug); 
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }

}
