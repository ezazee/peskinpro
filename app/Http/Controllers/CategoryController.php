<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $welcomeMessage = 'Categories Products'; 
        $categories = Category::paginate(10);
        return view('backend.pages.category.create',compact('categories','welcomeMessage','user'));
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


        Alert::success('Success', 'Category created successfully!');
        return back()->with('success', 'Category created successfully!');

    }

    public function edit($slug)
    {
        $user = Auth::user();
        $welcomeMessage = 'Edit Categories Products'; 
        $category = Category::where('slug', $slug)->firstOrFail();
        $categories = Category::paginate(10);
        return view('backend.pages.category.create', compact('category', 'categories','welcomeMessage','user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        Alert::info('Updated', 'Category updated successfully');
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }


    public function destroy($slug)
    {
        $category = Category::findOrFail($slug); 
        $category->delete();
        Alert::error('Deleted', 'Category deleted successfully.');
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }

}
