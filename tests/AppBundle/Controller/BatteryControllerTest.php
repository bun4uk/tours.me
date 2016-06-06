<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 12/05/2016
 * Time: 11:05
 */

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BatteryControllerTest extends WebTestCase
{


    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    protected function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/battery');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Recycle', $crawler->filter('h1')->text());
    }

    public function testAddError()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/battery/add');
        $form = $crawler->selectButton('Drop the batteries')->form();
        $form['battery[type]'] = 'AA';
        $form['battery[name]'] = 'Lucas';
        $form['battery[count]'] = 'asd';
        $crawler = $client->submit($form);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('not valid', $crawler->filter('li')->text());
    }

    public function testAddValid()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/battery/add');
        $form = $crawler->selectButton('Drop the batteries')->form();
        $form['battery[type]'] = 'AA';
        $form['battery[name]'] = 'Lucas';
        $form['battery[count]'] = 2;
        $crawler = $client->submit($form);
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }


}