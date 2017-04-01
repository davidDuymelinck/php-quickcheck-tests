<?php

namespace QuickcheckTests;

interface NameInterface
{
    /**
     * @param string $nameSeparator
     * @return string
     */
    public function getFullName(string $nameSeparator = ' '): string;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @return string
     */
    public function getLastName(): string;
}