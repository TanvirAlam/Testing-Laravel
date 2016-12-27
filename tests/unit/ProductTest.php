<?php

use App\Product;

class ProductTest extends PHPUnit_Framework_TestCase
{
    function testAProductHasName()
    {
        $product = new Product('Fallout 4', 400);

        $this->assertEquals('Fallout 4', $product->name());
    }

    function testAProductPrice()
    {
        $product = new Product('Fallout 4', 400);

        $this->assertEquals(400, $product->price());

    }
}