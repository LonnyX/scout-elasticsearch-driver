<?php

namespace BabenkoIvan\ScoutElasticsearchDriver\Core\Contracts\Client;

interface ClientFactory
{
    /**
     * @param array $config
     * @return Client
     */
    public static function fromConfig(array $config): Client;
}