<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filial;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProducts()
    {
        $filialID = (isset($_GET['pointID']) && !empty($_GET['pointID'])) ? $_GET['pointID'] : false;

        if ($filialID) {
            $productsFilial = Product::join('product_filials', 'products.id', '=', 'product_filials.product_id')
                ->where('product_filials.filial_id', $filialID)
                ->get();

            $grouped = $productsFilial->groupBy('category_id');
            $groupedArray = $grouped->toArray();

            foreach ($groupedArray as $key => $group) {
                $category = Category::find($key);

                $items = array();

                foreach ($group as $groupKey => $item) {
                    $items[$groupKey]['id'] = $item['id'];
                    $items[$groupKey]['name'] = $item['name'];
                    $items[$groupKey]['price'] = $item['price'];
                }

                $data[] = array(
                    'category_id' => $category->id,
                    'name' => $category->name,
                    'items' => $items
                );
            }

            return $data;
        }
    }
}
