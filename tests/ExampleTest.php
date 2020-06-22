<?php

namespace Madnest\Madstore\Tests;

use Orchestra\Testbench\TestCase;
use Madnest\Madstore\MadstoreServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MadstoreServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
