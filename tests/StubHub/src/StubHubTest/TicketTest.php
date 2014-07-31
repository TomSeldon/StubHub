<?php

namespace StubHubTest;

use StubHub\Ticket;

class TicketTest extends \PHPUnit_Framework_TestCase
{

    public function testTicketSearch()
    {
        $response = new \stdClass();
        $response->response = new \stdClass();

        $client = $this->getMock('StubHub\Client');
        $client->expects($this->exactly(1))
            ->method('make_request')
            ->willReturn($response);

        $ticket = new Ticket($client);

        $findByIdResponse = $ticket->find_ticket_by_id(10);
        $this->assertEquals($findByIdResponse, $response);
    }

}