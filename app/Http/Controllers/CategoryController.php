<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){

        //veritabanından veriyi çektik
        $categories = Category::all();

        //viewe veriyi gönderdik
        $title = "Category Sayfamıza Hoşgeldiniz!";

        return view("admin.category.index",[
            "categoryList" => $categories,
            "myTitle" => $title
        ]);
    }

    public function create(){
        return view("admin.category.create");
    }

    public function store(Request $request){
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->status = $request->status;
        $newCategory->slug = $request->slug;
        $newCategory->save();
        return redirect()->route("admin.category.index");
    }
    public function destroy($categoryid){ // 3
        $category = Category::find($categoryid); // kiralık prefabrik ev
        $category->delete();
        return redirect()->back();
    }

    public function edit(Category $category,$id){
        $data = Category::find($id);
        $datalist = DB::table('categories')->get()->where('parent_id',0);
        return view('admin.category.edit',['data' => $data, 'datalist' => $datalist]);
    }
    public function update(Request $request,$categoryid)
    {
        $data = Category::find($categoryid);
        $data->name = $request->input('name');
        $data->status = $request->input('status');
        $data->slug = $request->input('slug');

        $data->save();
        return redirect() -> route('admin.category.index');

    }
}
