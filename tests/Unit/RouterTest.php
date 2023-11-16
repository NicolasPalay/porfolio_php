<?php

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use Router\Router;

class RouterTest extends testCase
{
    /** @test */
    public function it_registers_get_routes() : void
    {
        $router = new Router();
        $router->get('/', ['Controller\HomeController', 'index']);

        $this->assertEquals(
            ['GET' => ['/' => ['Controller\HomeController', 'index']] ],
            $router->getRoutes()
        );
    }
    /** @test */
    public function it_registers_post_routes() : void
    {
        $router = new Router();
        $router->post('/', ['Controller\HomeController', 'add']);

        $this->assertEquals(
            ['POST' => ['/' => ['Controller\HomeController', 'add']] ],
            $router->getRoutes()
        );
    }
    /** @test */
    public function it_doesnt_have_any_routes_before_register_routes() : void
    {
        $router = new Router();
        $this->assertEmpty($router->getRoutes());
    }
}