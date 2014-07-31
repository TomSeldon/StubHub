<?php

namespace StubHubTest;

use StubHub\Event;

class EventTest extends \PHPUnit_Framework_TestCase
{

    public function testEventSearch()
    {
        $response = new \stdClass();
        $response->response = new \stdClass();

        $client = $this->getMock('StubHub\Client');
        $client->expects($this->once())
            ->method('make_request')
            ->willReturn($response);

        $event = new Event($client);

        $searchResponse = $event->search('Cubs');

        $this->assertEquals($searchResponse, $response);
    }

}