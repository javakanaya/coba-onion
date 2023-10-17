<?php

namespace App\Http\Module\Product\Infrastructure\Repository;

use Illuminate\Support\Facades\DB;
use App\Http\Module\Product\Domain\Model\Product;
use App\Http\Module\Product\Domain\Services\Repository\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function save(Product $product)
    {
        DB::table('products')->insert(
            [
                'nama' => $product->nama,
                'price' => $product->price,
                'description' => $product->description,
            ]
        );
    }
}