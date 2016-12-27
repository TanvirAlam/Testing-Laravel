<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // 1. Visit the home page
        // 2. Press a click me link
        // 3. See "you been clicked, punk"
        // 4. Assert that the current URL is /feedback
        // 1. Visit the home page


        /*$this->visit('/');
        $this->click('Click Me');
        $this->see("you been clicked, punk");
        $this->seePageIs('/feedback');*/

        $this->visit('/')->click('Click Me')->see("you been clicked, punk")->seePageIs('/feedback');
    }
}
