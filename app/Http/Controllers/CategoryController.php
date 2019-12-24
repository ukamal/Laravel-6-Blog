<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('category.add_category');
    }
    public function storeCategory(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:25|min:4',
            'slug' => 'required|unique:categories|max:25|min:4',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
       $category=DB::table('categories')->insert($data);
       if ($category){
           $notification=array(
               'message' => 'Successfully category Inserted',
               'alert-type' => 'Success'
           );
           return redirect()->route('all-category')->with($notification);
       }else{
           $notification=array(
               'message' => 'something went wrong',
               'alert-type' => 'error'
           );
           return redirect()->back()->with($notification);
       }
    }

    public function allCategory(){
       $category=DB::table('categories')->get();
       //return response()->json($category);
        return view('category.all_category',compact('category'));
    }

    public function viewCategory($id){
        $category=DB::table('categories')->where('id',$id)->first();
        //return view('category.view_category',compact('category'));
        return view('category.view_category',compact('category'));
    }

    public function deleteCategory($id){
        $delete=DB::table('categories')->where('id',$id)->delete();
        $notification=array(
            'message' => 'Successfully Category Deleted',
            'alert-type' => 'Success'
        );
        return redirect()->back()->with($notification);
    }
    public function editCategory($id){
        $category=DB::table('categories')->where('id',$id)->first();
        return view('category.edit_category',compact('category'));
    }
    public function updateCategory(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:4',
            'slug' => 'required|max:25|min:4',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->where('id',$id)->update($data);
        if ($category){
            $notification=array(
                'message' => 'Successfully category updated',
                'alert-type' => 'Success'
            );
            return redirect()->route('all-category')->with($notification);
        }else{
            $notification=array(
                'message' => 'Nothing to update',
                'alert-type' => 'error'
            );
            return redirect()->route('all-category')->with($notification);
        }
    }
}
