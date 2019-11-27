<?php

declare(strict_types=1);

namespace StompPhp\StompBundle\Stomp;

use Stomp\StatefulStomp;

final class ClientFactory
{
    /**
     * @param array $options
     *
     * @return StatefulStomp
     *
     * @throws \Stomp\Exception\ConnectionException
     */
    public static function newClient(array $options): StatefulStomp
    {
        $builder = new ClientBuilder();
        $builder->setOptions($options);

        return $builder->getClient();
    }
}
