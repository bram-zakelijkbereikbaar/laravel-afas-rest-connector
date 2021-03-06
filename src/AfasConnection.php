<?php

namespace WeSimplyCode\LaravelAfasRestConnector;

class AfasConnection
{
    /**
     * The configuration of the selected connection
     * @var array
     */
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Get a getConnector for the selected connection
     * @param string $name
     * @return AfasGetConnector
     */
    public function getConnector(string $name): AfasGetConnector
    {
        if (!array_key_exists($name, $this->config['getConnectors'])) {
            throw new \InvalidArgumentException("GetConnector $name is not configured for this connection.");
        }

        $config = $this->config['getConnectors'][$name];

        unset($this->config['getConnectors']);

        return new AfasGetConnector($this, $config);
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->config['token'];
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->config['environment'];
    }
}
