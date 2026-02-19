<?php
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $data = ['message' => 'Hello World'];
        $this->assertEquals('こんにちは', $data['message']);
    }
}