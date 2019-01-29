<?php

namespace Tests\Controllers;

use Tests\TestCase;

class ClientControllerTest extends TestCase {
 
    public function testIndex()
    {
        $this->call('GET', 'client');
    
        $this->assertViewHas('client.index');
    }
 
}