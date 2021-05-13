<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductTypeController extends Controller
{
    //
    public function index()
    {
        $newsData = ProductType::get();
        return view('admin.product_type.index',compact('newsData'));
    }

    public function create()
    {
        return view('admin.product_type.create');
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();

        // if($request->hasFile('img')) {
        //     $file = $request->file('img');
        //     $path = Stroage::disk('myfile')->putFile('product',$file);
        //     $requsetData['img'] = $path;Stroage::disk('myfile')->url($path);
        // } 
        
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file,'product');
            $requsetData['img'] = $path;
        }        
        
        ProductType::create($requsetData);
        return redirect('/admin/product_type');
    }

    public function edit($id)
    {
        $news = ProductType::find($id);
        return view('admin.product_type.edit',compact('news'));
    }

    public function update($id,Request $request)
    {
        $item = ProductType::find($id);

        $requsetData = $request->all();
        if($request->hasFile('img')) {
            $old_image = $item->img;
            $file = $request->file('img');
            $path = $this->fileUpload($file,'product');
            $requsetData['img'] = $path;
            File::delete(public_path().$old_image);
        }

        $item->update($requsetData);
        return redirect('/admin/product_type');
    }

    public function delete($id)
    {
        $item = ProductType::find($id);
        $old_image = $item->img;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $item->delete();
        // News::find($id)->delete();
        return redirect('/admin/product_type');
    }

    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }
}
