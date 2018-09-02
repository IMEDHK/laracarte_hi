<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTitle()
    {

        $this->assertEquals("About|Laracarte",getTile('About'));

    }
    public function testClassForRoute()
    {
        $this->get(route('root_path'));
        $this->assertEquals("active",getRouteName('root_path'));
        $this->assertEquals("",getRouteName('about_path'));
    }
}
