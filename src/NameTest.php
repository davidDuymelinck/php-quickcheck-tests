<?php

namespace QuickcheckTests;

use Faker\Factory;
use PHPUnit\Framework\TestCase;
use Eris\Generator;

class NameTest extends TestCase
{
    use \Eris\TestTrait;

    public function testFullName() {
        $faker = Factory::create('nl_BE');

        $this
            ->forAll(
                Generator\frequency(
                    [1, Generator\constant('David')],
                    [50, Generator\map(function($void) use ($faker) {
                        return $faker->firstName();
                    }, Generator\constant('void'))]
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
