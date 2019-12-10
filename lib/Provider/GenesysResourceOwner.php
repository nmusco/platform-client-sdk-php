<?php

declare(strict_types=1);

namespace Intercom\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class GenesysResourceOwner implements ResourceOwnerInterface
{
    use ArrayAccessorTrait;
    
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;
    
    /**
     * 
     * @param array $response
     */
    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

	/**
     * 
     * {@inheritDoc}
     * @see \League\OAuth2\Client\Provider\ResourceOwnerInterface::getId()
     */
    public function getId()
    {
        return $this->getValueByKey($this->response, 'id');
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \League\OAuth2\Client\Provider\ResourceOwnerInterface::toArray()
     */
    public function toArray()
    {
        return $this->response;
    }
}