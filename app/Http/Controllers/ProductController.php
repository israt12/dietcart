<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function index()
    {
    	$prolist = DB::table('product')
    		->get();
    	return view('product.index')
    		->with('prolist', $prolist);
    		// echo $prolist;
    }

    public function create()
    {
    	return view('product.create');
    }

    public function store(Request $request)
    {
    	$params = [
    		'productName' => $request->pname,
    		'productUnit' => $request->punit,
    		'productPrice' => $request->pprice,
    		'productDescription' => $request->pdescription,
    		'productImage' => $request->pimage,
    		'productCatagory' => $request->pcatagory,
    		'productType' => $request->ptype
    	];

    	DB::table('product')
    		->insert($params);
    	return redirect('/product/create');
    }


    public function edit($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.edit')
            ->with('pro', $pro);
    }

    public function update(Request $request)
    {
        $params = [
            'productName' => $request->pname,
            'productUnit' => $request->punit,
            'productPrice' => $request->pprice,
            'productDescription' => $request->pdescription,
            'productImage' => $request->pimage,
            'productCatagory' => $request->pcatagory,
            'productType' => $request->ptype
        ];

        DB::table('product')
            ->where('productId', $request->pid)
            ->update($params);

        return redirect('/product');
    }


    public function delete($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.delete')
            ->with('pro', $pro);
    }

    public function destroy($id)
    {
        DB::table('product')
            ->where('productId', $id)
            ->delete();

        return redirect('/product');
    }



    public function normal()
    {
    	$type = "normalWeight";
    	$normal = DB::table('product')
    		->where('productType', $type)
    		->get();
    	return view('product.normal')
    		->with('normal', $normal);
    }


    public function under()
    {
    	$type = "underWeight";
    	$under = DB::table('product')
    		->where('productType', $type)
    		->get();
    	return view('product.under')
    		->with('under', $under);
    }


    public function over()
    {
    	$type = "overWeight";
    	$over = DB::table('product')
    		->where('productType', $type)
    		->get();
    	return view('product.over')
    		->with('over', $over);
    }
}
