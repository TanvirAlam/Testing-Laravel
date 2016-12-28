<?php

use App\Product;
use App\Order;

class OrderTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function anOrderConsistsOfProducts()
    {
        $order = new Order;

        $product1 = new Product('Fallout 4', 59);
        $product2 = new Product('Fallout 9', 7);

        $order->add($product1);
        $order->add($product2);

        $this->assertCount(2, $order->products());
    }
}