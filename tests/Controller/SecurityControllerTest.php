<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        // Assert that the login page is rendered successfully
        $this->assertResponseIsSuccessful();

        
    }

    public function testLogout()
    {
        $client = static::createClient();
        $client->request('GET', '/logout');

        // Assert that logout method throws the expected exception
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('This method can be blank - it will be intercepted by the logout key on your firewall.');

       
    }
}