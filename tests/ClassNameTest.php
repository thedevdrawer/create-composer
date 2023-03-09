<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DevDrawer\Tutorial\ClassName;
use PHPUnit\Framework\TestCase;

class ClassNameTest extends TestCase
{
    public function testConstructor()
    {
        $className = new ClassName();

        ob_start();
        $className->__construct();
        $output = ob_get_clean();
        
        $this->assertEquals('Hello World!', $output, 'Constructor did not output "Hello World"');
    }
}
