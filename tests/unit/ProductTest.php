<?php

use App\Product;

class ProductTest extends PHPUnit_Framework_TestCase
{
    protected $product;

    public function setUp()
    {
        $this->product = new Product('Fallout 4', 400);
    }

    /** @test */
    function AProductHasName()
    {
        $this->assertEquals('Fallout 4', $this->product->name());
    }

    function testAProductPrice()
    {
        $this->assertEquals(400, $this->product->price());
    }
}