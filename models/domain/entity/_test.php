<?php

namespace app\models\domain\entity;

use PHPUnit\Framework\TestCase;


final class ProductoTest extends TestCase
{

    protected function setUp(): void
    {
        echo "\npreparando..\n";
    }

    protected function tearDown(): void
    {
        echo "finalizando...\n";
    }

    public function testAlgo(){
        echo "ejecutando\n";
        $producto = new Producto();

        $this->assertEquals(3, $producto->suma(2, 1), 'la suma no coincide');
    }

}