<?php

namespace App\Http\Module\Product\Domain\Model;

class Product
{
    /**
     * @param string $nama
     * @param float $price
     * @param string $description
     */
    public function __construct(
        public string $nama,
        public float $price,
        public string $description,
    )
    {
    }
}