<?php
// src/Services/ComplexObject.php
namespace App\Services;

class MyFirstObject
{
    private $foo;
    private $bar;
    private $baz;
    private $other;

    public function __construct(
        Foo $foo,
        Bar $bar,
        Baz $baz,
        Other $other
    )
    {
        $this->foo = $foo;
        $this->bar = $bar;
        $this->baz = $baz;
        $this->other = $other;
    }

    public function doSomething() {
        echo 'hello';
    }
}