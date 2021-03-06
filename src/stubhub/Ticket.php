<?php

namespace StubHub;

    /**
     * StubHubApi
     * ticket.php
     * Author: Tom Seldon (http://tomseldon.co.uk)
     * URL: http://www.github.com/TomSeldon/StubHubApi
     * Created: 24/05/2013
     * Changed: 24/05/2013
     * Version: 0.1
     * License: GPL v3 (http://www.gnu.org/licenses/gpl.txt)
     */

    class Ticket
    {
        /**
         * @var Client
         */
        protected $client;

        public function __construct(Client $client)
        {
            $this->client = $client;
        }

        /**
         * find_ticket_by_id()
         * Get ticket details by ticket ID.
         * @param $ticket_id
         * @param array $options
         * @return string
         */
        public function find_ticket_by_id($ticket_id, $options=array())
        {
            $params = array(
                "stubhubDocumentType"   =>  "ticket",
                "id"                    =>  $ticket_id
            );

            return $this->client->make_request($params, $options);
        }
    }