<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "categories";
        $categories = Category::all();
        return view('categories', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        Category::create($request->all());

        $notification = [
            'message' => "Category has been added",
            'alert-type' => 'success',
        ];

        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->withErrors(['Category not found']);
        }

        return view('category.show', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|max:100']);

        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->withErrors(['Category not found']);
        }

        $category->update(['name' => $request->name]);

        $notification = [
            'message' => "Category has been updated",
            'alert-type' => 'success',
        ];

        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->withErrors(['Category not found']);
        }

        $category->delete();

        $notification = [
            'message' => "Category has been deleted",
            'alert-type' => 'success',
        ];

        return back()->with($notification);
    }
}
