<?php

namespace QuickcheckTests;

use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function testEmptyFullName() {
        $name = new Name('', '');

        $this->assertEquals(' ', $name->getFullName());
    }
}
