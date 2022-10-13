<?php

namespace App\Http\Controllers;

use App\Models\Filial;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getAllProducts()
    {
    }

    public function getProductsByFilial(Filial $filial)
    {
        $filial = Filial::find($filial->id);

        $productsFilial = $filial->products;

        foreach ($productsFilial as $key => $productFilial) {
            $product = Product::find($productFilial->product_id);

            $data[$key]['id'] = $product->id;
            $data[$key]['name'] = $product->name;
            $data[$key]['price'] = $productFilial->price;
            $data[$key]['category_id'] = $product->category_id;
        }

        return $data;
    }
}
