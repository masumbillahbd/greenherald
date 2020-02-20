<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;

class CategoryController extends Controller
{
    public function createCategory(){
    	return view('admin.category.createCategory');
    }

    public function storeCategory(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'position' => 'required',
    	]);

    	$slug = str_replace(' ', '-', $request->name);

    	DB::table('categories')->insert([
    		'name'=>$request->name,
    		'slug'=> $slug,
    		'position'=>$request->position,
    	]);

    	return redirect()->back()->with('message', 'Category save successfully');

    }

    public function manageCategory(){

		// $categories = Category::orderBy('id', 'desc')->get();
		$categories = Category::select('id', 'name', 'slug', 'position')->orderBy('id', 'desc')->get();
		return view('admin.category.manageCategory',['categories'=> $categories]);

    }


    public function categoryPost($id){
        $category = Category::find($id);
        return view('admin.category.categoryPost', compact('category'));
    }


}
