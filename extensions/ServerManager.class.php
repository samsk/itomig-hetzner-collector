<?php

class ServerManager extends Manager
{
    public function __construct(HetznerClient $client)
    {
        parent::__construct($client);
        $this->uri = "servers";
    }
}