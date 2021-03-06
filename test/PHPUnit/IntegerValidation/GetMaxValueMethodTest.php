<?php

namespace Fabstract\Component\Validator\Test\PHPUnit\IntegerValidation;

use Fabstract\Component\UnitTest\MethodTestBase;
use Fabstract\Component\Validator\Validation\IntegerValidation;

class GetMaxValueMethodTest extends MethodTestBase
{

    public function testGetEqualsSet()
    {
        $this->assertEquals(10, $this->call(IntegerValidation::create()->setMaxValue(10)));
    }
}
