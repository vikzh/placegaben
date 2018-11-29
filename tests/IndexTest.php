<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class IndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetIndexPage()
    {
        $response = $this->get(route('index'));
        $response->assertResponseOk();
    }
}
