<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('parent_id','=',0)->with('childs')->get();
        return view("admins.content.category.index",["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('parent_id','=',0)->with('childs')->get();
        return view("admins.content.category.create", ["categories"=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->parent_id = $request->parent_id;
        $category->status = 1;
        $category->save();
        return redirect()->route("admin.category.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Category::find($id);
        $categories = Category::where('parent_id','=',0)->with('childs')->get();
        return view("admins.content.category.edit", ["categories"=>$categories, "item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Category::find($id);
            if($item){
                $input = $request->all();
                $item["name"] = $input["name"];
                $item["slug"] = $input["slug"];
                $item["parent_id"] = $input["parent_id"];
                $item->save();
         }
 
         return redirect()->route("admin.category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteChilds($id){
        $item = Category::find($id);
        if($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->deleteChilds($child->id);
                }
            }
            $item->delete();
        }
    }
    public function destroy($id){
        $this->deleteChilds($id);
        return redirect()->route("admin.category.index");
    }
}
