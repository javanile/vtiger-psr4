<?php

namespace Javanile\VtigerPsr4\Tests;

class InstanceTest extends TestCase
{
    public function testInstance()
    {
        $classes = [
            '\\Javanile\\VtigerPsr4\\Views\\IndexView'
        ];

        foreach ($classes as $class) {
            $this->assertInstanceOf($class, new $class);
        }
    }
}
