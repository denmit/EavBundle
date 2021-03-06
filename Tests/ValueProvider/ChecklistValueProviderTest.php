<?php

namespace Opifer\EavBundle\Tests\ValueProvider;

use Opifer\EavBundle\ValueProvider\ChecklistValueProvider;

class ChecklistValueProviderTest extends \PHPUnit_Framework_TestCase
{
    private $provider;

    public function __construct()
    {
        $option = 'Opifer\EavBundle\Tests\TestData\Option';
        $this->provider = new ChecklistValueProvider($option);
    }

    public function testEntityExists()
    {
        $this->assertTrue(class_exists($this->provider->getEntity()));
    }
}
