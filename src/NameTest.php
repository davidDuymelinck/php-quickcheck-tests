<?php

namespace QuickcheckTests;

use PHPUnit\Framework\TestCase;
use Eris\Generator;

class NameTest extends TestCase
{
    use \Eris\TestTrait;

    public function testFullName() {
        $this
            ->forAll(
                Generator\string(),
                Generator\char(),
                Generator\string()
            )
            ->then(function($firstName, $separator, $lastName) {
                $name = new Name($firstName, $lastName);

                $this->assertEquals($firstName.$separator.$lastName, $name->getFullName($separator));
            });
    }
}
