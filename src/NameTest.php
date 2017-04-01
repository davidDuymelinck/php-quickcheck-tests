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
                Generator\frequency(
                    [1, Generator\constant('David')],
                    [50, Generator\string()]
                ),
                Generator\char(),
                Generator\string()
            )
            ->then(function($firstName, $separator, $lastName) {
                echo $firstName.PHP_EOL;
                $name = new Name($firstName, $lastName);

                $this->assertEquals($firstName.$separator.$lastName, $name->getFullName($separator));
            });
    }
}
