<?php

namespace Facade\IgnitionContracts\Tests;

use PHPUnit\Framework\TestCase;
use Facade\IgnitionContracts\BaseSolution;

class SolutionTest extends TestCase
{
    /** @test */
    public function it_can_instanciate_a_base_solution()
    {
        $solution = BaseSolution::create('my title');

        $this->assertInstanceOf(BaseSolution::class, $solution);
    }
}
