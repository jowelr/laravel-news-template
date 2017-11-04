<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategoryInfo() {

        return view('admin.category.add-category');
    }

    public function saveCategoryInfo(Request $request) {

        $category = New Category();
        $category-> category_name = $request->category_name;
        $category-> category_description = $request->category_description;
        $category-> publication_status = $request->publication_status;
        $category->save();

        return redirect('/category/add')->with('message', 'Category info save successfully');
    }

    public function manageCategoryInfo() {

        $allCategories = Category::all();

        return view('admin.category.manage-category', [
            'allCategories'=>$allCategories
        ]);
    }

    public function editCategoryInfo($id){

        $categoryById = Category::find($id);

        return view('admin.category.edit-category', [
            'categoryById'=>$categoryById
        ]);
    }

    public function deleteCategoryInfo($id) {

        $categoryById = Category::find($id);
        $categoryById->delete();
        return redirect('/category/manage')->with('message', 'Category info delete successfully');
    }
    public function updateCategoryInfo(Request $request) {

        $categoryById = Category::find($request->category_id);
        $categoryById->category_name = $request->category_name;
        $categoryById->category_description = $request->category_description;
        $categoryById->publication_status = $request->publication_status;
        $categoryById->save();

        return redirect('category/manage')->with ('message', 'Category info update successfully');
    }
}
