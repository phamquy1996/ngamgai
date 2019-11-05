<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
class ProductsController extends Controller
{
    public function getList()
    {
    	$product = Product::all();
    	return view('admin.products.index',compact('product'));
	}
	
	public function getEdit($id)
    {
		// dd($id);
		$product = Product::where('id',$id)->with('images')->first();
		$subcate = Subcate::get();
		$subphu = Subphu::get();
		$cate = Cate::get();
		$images = ProductImages::where('product_id',$id)->get();
    	return view('admin.products.edit',compact('product','subcate','subphu','cate'));
	}

	public function postEdit(Request $res,$id)
    {
		// dd(1);
		$products = Product::find($id);
		$this->validate($res, 
    		[
				'title'=>'required|min:3|max:100',
				'price'=>'required',
				'description'=>'required',
				'subphu_id'=>'required',
				'thuonghieu'=>'required',
				'descriptionBasic'=>'required',
    		],
    		[
    			'title.required'=>'Bạn chưa nhập danh mục chính',
				'title.min'=>'Tên phải có nhiều hơn 3 kí tự',
				'price.required'=>'Bạn chưa chọn giá',
				'subphu_id.required'=>'Bạn chưa chọn danh mục phụ',
				'description.required'=>'Bạn chưa nhập miêu tả',
				'thuonghieu.required'=>'Bạn chưa nhập thuong hiệu',
				'descriptionBasic.required' => 'Bạn chưa nhập mô tả cơ bản',
				'title.max'=>'Tên phải có ít hơn 100 kí tự',
			]);
		$products->title = $res->title;
		$products->price = $res->price;
		$products->code = rand(100000,999999);
		$products->thuonghieu = $res->thuonghieu;
		$products->descriptionBasic = $res->descriptionBasic;
		$products->discount = $res->discount;
		$products->description = $res->description;
		$products->subphu_id = $res->subphu_id;
		
		if($res->hasFile('image'))
			{
				$file=$res->file('image');
				$name= $file->getClientOriginalName();
				$file->move("img",$name);
				$products->image = $name;
			}
    	$products->save();
		if($res->images){
			foreach($res->images as $item){
				// $get=$item->file('image');
				$name= $item->getClientOriginalName();
				$item->move("img",$name);
				$productImages = new ProductImages;
				$productImages->title = $name;
				$productImages->product_id = $products->id;
				$productImages->save();
			}
		}

    	return  redirect('quantri/products/list')->with('thongbao','Bạn đã sửa thành công');
	}

    public function getAdd()
    {
		$subcate = Subcate::get();
		$cate = Cate::get();
		$subphu = Subphu::get();
    	return view('admin.products.add');
	}
	
    public function postAdd(Request $res)
    {
		// dd($res->all());
    	$this->validate($res, 
    		[
				'title'=>'required|min:3|max:100',
				'price'=>'required',
				'description'=>'required',
				'subphu_id'=>'required',
				'thuonghieu'=>'required',
				'descriptionBasic'=>'required',
    		],
    		[
    			'title.required'=>'Bạn chưa nhập danh mục chính',
				'title.min'=>'Tên phải có nhiều hơn 3 kí tự',
				'price.required'=>'Bạn chưa chọn giá',
				'subphu_id.required'=>'Bạn chưa chọn danh mục phụ',
				'description.required'=>'Bạn chưa nhập miêu tả',
				'thuonghieu.required'=>'Bạn chưa nhập thuong hiệu',
				'descriptionBasic.required' => 'Bạn chưa nhập mô tả cơ bản',
				'title.max'=>'Tên phải có ít hơn 100 kí tự',
			]);
		$products = new Product;
		$products->title = $res->title;
		$products->price = $res->price;
		$products->code = rand(100000,999999);
		$products->thuonghieu = $res->thuonghieu;
		$products->descriptionBasic = $res->descriptionBasic;
		$products->discount = $res->discount;
		$products->description = $res->description;
		$products->subphu_id = $res->subphu_id;
		
		if($res->hasFile('image'))
			{
				$file=$res->file('image');
				$name= $file->getClientOriginalName();
				$file->move("img",$name);
				$products->image = $name;
			}
    	$products->save();
		if($res->images){
			foreach($res->images as $item){
				// $get=$item->file('image');
				$name= $item->getClientOriginalName();
				$item->move("img",$name);
				$productImages = new ProductImages;
				$productImages->title = $name;
				$productImages->product_id = $products->id;
				$productImages->save();
			}
		}
    	return  redirect('quantri/products/add')->with('thongbao','Bạn đã thêm thành công');
    }
}
