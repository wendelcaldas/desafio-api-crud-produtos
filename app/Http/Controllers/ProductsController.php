<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // busca em todos os produtos e filtra somente os que estão com status ativo - "is_active = 1"
        
        // comentando pra poder testar o query builder DB
        
        // $products = Products::all()->where('is_active', '=', 1)->whereNull('deleted_at');
        
        $products = DB::table('products')
                        ->leftjoin('category_products', 'products.id', '=', 'category_products.product_id')
                        ->leftjoin('categories', 'category_products.category_id', '=', 'categories.id')
                        ->select('products.*','categories.id as category_id', 'categories.name as category_name')
                        ->where('products.is_active', '=', 1)
                        ->OrderBy('products.id')
                        ->get();

        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = Products::create($request->all());
        return $produto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        // busca e comparação do parametro slug solicitado no desafio
        $produtos = Products::where('slug', '=', $slug)->get();

        return $produtos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products, $id)
    {
        /*
        print_r($request->all());
        echo '<hr>';
        print_r($products->getAttributes());
        */
        $products = Products::findOrFail($id);
        $products->update($request->all());
        return $products;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        //
        $productToDel = Products::where('id', '=', $id)->get();
        $productToDel->each->update(array('is_active' => 0));
        $productToDel->each->delete();
        
        return $productToDel;
    }
}
