<?php

namespace Tests\Unit;

use Tests\TestCase;

class RouteTest extends TestCase
{
    public function testRoute()
    {
        $this->get("/fortesting")->assertStatus(200);
    }
}
