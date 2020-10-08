<?php

namespace Javanile\VtigerPsr4\Tests;

class InstanceTest extends TestCase
{
    public function testInstance()
    {
        $class = 'Javanile\\VtigerPsr4\\Views\\IndexView';
        $instance = new $class;
    }
}
