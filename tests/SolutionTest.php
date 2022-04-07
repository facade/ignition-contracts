<?php

namespace Facade\IgnitionContracts\Tests;

use Facade\IgnitionContracts\BaseSolution;
use Facade\IgnitionContracts\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /** @test */
    public function it_can_instantiate_a_base_solution()
    {
        $solution = BaseSolution::create('my title');

        $this->assertInstanceOf(BaseSolution::class, $solution);
        $this->assertInstanceOf(Solution::class, $solution);

        // Make sure these old contracts still work for the new spatie/ignition.
        $this->assertInstanceOf(\Spatie\Ignition\Contracts\BaseSolution::class, $solution);
        $this->assertInstanceOf(\Spatie\Ignition\Contracts\Solution::class, $solution);
    }
}
