<?php

namespace StubHubTest;

use StubHub\Geo;

class GeoTest extends \PHPUnit_Framework_TestCase
{

    public function testGeoSearch()
    {
        $response = new \stdClass();
        $response->response = new \stdClass();

        $client = $this->getMock('StubHub\Client');
        $client->expects($this->exactly(3))
            ->method('make_request')
            ->willReturn($response);

        $event = new Geo($client);

        $searchResponse = $event->search('Q');
        $this->assertEquals($searchResponse, $response);

        $findByLocaleResponse = $event->find_by_locale('Chicago');
        $this->assertEquals($findByLocaleResponse, $response);

        $findByGeoResponse = $event->find_by_geo_id(10);
        $this->assertEquals($findByGeoResponse, $response);
    }

}