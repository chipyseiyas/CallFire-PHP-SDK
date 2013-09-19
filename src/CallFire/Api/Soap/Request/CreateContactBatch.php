<?php

namespace CallFire\Api\Soap\Request;

use CallFire\Api\Soap\AbstractRequest as AbstractRequest;

class CreateContactBatch extends AbstractRequest
{

    /**
     * @var anyURI
     */
    protected $requestId = null;

    /**
     * @var long
     */
    protected $broadcastId = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $scrubBroadcastDuplicates = null;

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getBroadcastId()
    {
        return $this->broadcastId;
    }

    public function setBroadcastId($broadcastId)
    {
        $this->broadcastId = $broadcastId;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getScrubBroadcastDuplicates()
    {
        return $this->scrubBroadcastDuplicates;
    }

    public function setScrubBroadcastDuplicates($scrubBroadcastDuplicates)
    {
        $this->scrubBroadcastDuplicates = $scrubBroadcastDuplicates;

        return $this;
    }

}