<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
use App\Material;
use App\Style;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::all();
        $types = Type::all();
        $materials = Material::all();
        $styles = Style::all();

        $data = array(
            'products'=>$products,
            'types'=>$types,
            'materials'=>$materials,
            'styles'=>$styles
        );
        return view('\product\index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $types = DB::table('types')->pluck('name', 'id');
        $materials = DB::table('materials')->pluck('name', 'id');
        $styles = DB::table('styles')->pluck('name', 'id');
        $data = array(
            'types'=>$types,
            'materials'=>$materials,
            'styles'=>$styles
        );
        return view('\product\create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->type_id = $request->input('type');
        $product->style_id = $request->input('style');
        $product->material_id = $request->input('material');
        $product->price = $request->input('price');
        $product->link = $request->input('link');
        $product->img1 = $request->input('img1');
        $product->img2 = $request->input('img2');
        $product->save();
        return redirect('\product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function addType(Request $request){
        $type = new Type;
        $type->name = $request->input('name');
        $type->save();
        return redirect('\product\create');
    }
    public function addMaterial(Request $request){
        $material = new Material;
        $material->name = $request->input('name');
        $material->save();
        return redirect('\product\create');
    }
    public function addStyle(Request $request){
        $style = new Style;
        $style->name = $request->input('name');
        $style->save();
        return redirect('\product\create');
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
