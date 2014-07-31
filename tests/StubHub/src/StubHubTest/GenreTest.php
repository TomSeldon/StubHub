<?php

namespace StubHubTest;

use StubHub\Genre;

class GenreTest extends \PHPUnit_Framework_TestCase
{

    public function testEventSearch()
    {
        $response = new \stdClass();
        $response->response = new \stdClass();

        $client = $this->getMock('StubHub\Client');
        $client->expects($this->once())
            ->method('make_request')
            ->willReturn($response);

        $event = new Genre($client);

        $searchResponse = $event->search('Q');

        $this->assertEquals($searchResponse, $response);
    }

}