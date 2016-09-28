<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('My Contacts', $crawler->filter('.page-header')->text());
        $this->assertContains('+381(64)1566311', $crawler->filter('.list-group-item')->text());
    }
    
    
    
    
    
    
}
