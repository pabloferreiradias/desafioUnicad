<?php
namespace Tests\Models;

use Tests\TestCase;

abstract class TestCaseModel extends TestCase
{
    abstract function getModel();

    public function testRules()
    {
        $rules = $this->getModel()->rules();
        $this->assertInternalType('array', $rules);
    }
}
