<?php

namespace Boolxy\Trendyol\Tests;

class ModelTest extends TestCase
{
    /** @test */
    public function testProductCanBeJsonSerialized()
    {
        $json = $this->getTestProduct()->toJson();

        $this->assertJson($json);
    }
}
