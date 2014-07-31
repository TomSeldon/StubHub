<?php

namespace StubHubTest;

use StubHub\Venue;

class VenueTest extends \PHPUnit_Framework_TestCase
{

    public function testVenueSearch()
    {
        $response = new \stdClass();
        $response->response = new \stdClass();

        $client = $this->getMock('StubHub\Client');
        $client->expects($this->exactly(2))
            ->method('make_request')
            ->willReturn($response);

        $venue = new Venue($client);

        $searchResponse = $venue->search('Wrigley');
        $this->assertEquals($searchResponse, $response);

        $findByIdResponse = $venue->find_venue_by_id(10);
        $this->assertEquals($findByIdResponse, $response);
    }

}