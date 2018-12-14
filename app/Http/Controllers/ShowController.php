<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
use App\Material;
use App\Style;
class ShowController extends Controller
{
    //public function showType($slug)
    public function showType($slugtype)
    {   
        $type = Type::where('slug',$slugtype)->get();
        $products = $type[0]->products;
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
    public function showMaterial($slugmaterial)
    {   
        $material = Material::where('slug',$slugmaterial)->get();
        $products = $material[0]->products;
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
    public function showStyle($slugstyle)
    {   
        $style = Style::where('slug',$slugstyle)->get();
        $products = $style[0]->products;
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
    public function showMT($slugmaterial, $slugtype)
    {   
         $material = Material::where('slug',$slugmaterial)->get();
         $type = Type::where('slug',$slugtype)->get();
         $types = Type::all();
         $materials = Material::all();
         $styles = Style::all();
         $products = [];
         $productsMat = $material[0]->products;
         $productsType = $type[0]->products;
         foreach($productsMat as $proMat){
           foreach($productsType as $proType){
                if($proMat==$proType){
                    array_push($products, $proType);
                }
           } 
         }
         $data = array(
            'products'=>$products,
            'types'=>$types,
            'materials'=>$materials,
            'styles'=>$styles
        );
         return view('\product\index')->with($data);
         // return $slugmaterial;
    }
    public function showMS($slugmaterial, $slugstyle)
    {   
         $material = Material::where('slug',$slugmaterial)->get();
         $style = Style::where('slug',$slugstyle)->get();
         $types = Type::all();
         $materials = Material::all();
         $styles = Style::all();
         $products = [];
         $productsMat = $material[0]->products;
         $productsStyle = $style[0]->products;
         foreach($productsMat as $proMat){
           foreach($productsStyle as $proStyle){
                if($proMat==$proStyle){
                    array_push($products, $proStyle);
                }
           } 
         }
         $data = array(
            'products'=>$products,
            'types'=>$types,
            'materials'=>$materials,
            'styles'=>$styles
        );
         return view('\product\index')->with($data);
         // return $slugmaterial;
    }
    public function showTS($slugtype, $slugstyle)
    {   
         $type = Type::where('slug',$slugtype)->get();
         $style = Style::where('slug',$slugstyle)->get();
         $types = Type::all();
         $materials = Material::all();
         $styles = Style::all();
         $products = [];
         $productsType = $type[0]->products;
         $productsStyle = $style[0]->products;
         foreach($productsType as $proType){
           foreach($productsStyle as $proStyle){
                if($proType==$proStyle){
                    array_push($products, $proStyle);
                }
           } 
         }
         $data = array(
            'products'=>$products,
            'types'=>$types,
            'materials'=>$materials,
            'styles'=>$styles
        );
         return view('\product\index')->with($data);
         // return $slugmaterial;
    }
    public function showMTS($slugmaterial, $slugtype, $slugstyle)
    {   
         $type = Type::where('slug',$slugtype)->get();
         $style = Style::where('slug',$slugstyle)->get();
         $material = Material::where('slug',$slugmaterial)->get();
         $types = Type::all();
         $materials = Material::all();
         $styles = Style::all();
         $products = [];
         $productsType = $type[0]->products;
         $productsStyle = $style[0]->products;
         $productsMat = $material[0]->products;
         foreach($productsType as $proType){
           foreach($productsStyle as $proStyle){
                if($proType==$proStyle){
                    foreach($productsMat as $proMat){
                        if($proMat == $proStyle){
                            array_push($products, $proStyle);
                        }
                    }
                }
           } 
         }
         $data = array(
            'products'=>$products,
            'types'=>$types,
            'materials'=>$materials,
            'styles'=>$styles
        );
         return view('\product\index')->with($data);
         // return $slugmaterial;
    }
}
