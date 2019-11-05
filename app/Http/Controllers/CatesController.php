<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Subcate;
class CatesController extends Controller
{
    public function getList()
    {
    	$cate = Cate::all();
    	return view('admin.cates.index',compact('cate'));
    }
    public function getAdd()
    {
    	return view('admin.cates.add');

	}
	
	public function getDelete($id){
		$cate = Cate::find($id);
		$cate->delete();
		return  redirect('quantri/cate/list')->with('thongbao','Bạn đã thêm thành công');
	}

	public function getEdit($id)
    {
		$cate = Cate::where('id',$id)->first();
    	return view('admin.cates.edit',compact('cate'));
	}

	public function postEdit(Request $res,$id)
    {
		// dd(1);
		$cate = Cate::find($id);
		
		$this->validate($res,
    		[
				'name'=>'required|min:3|max:100',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập danh mục chính',
				'name.min'=>'Tên phải có nhiều hơn 3 kí tự',
    			'name.max'=>'Tên phải có ít hơn 100 kí tự',
    		]);
		$cate->title = $res->name;
    	$cate->save();

    	return  redirect('quantri/cate/add')->with('thongbao','Bạn đã thêm thành công');
	}

    public function postAdd(Request $res)
    {
    	$this->validate($res,
    		[
				'name'=>'required|min:3|max:100',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập danh mục chính',
				'name.min'=>'Tên phải có nhiều hơn 3 kí tự',
    			'name.max'=>'Tên phải có ít hơn 100 kí tự',
			]);
		$cate = new Cate;
		$cate->title = $res->name;
    	$cate->save();

    	return  redirect('quantri/cate/add')->with('thongbao','Bạn đã thêm thành công');

    	return  redirect('quantri/cate/add')->with('thongbao','Bạn đã thêm thành công');
    }
}
