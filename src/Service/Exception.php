<?php
/**
 * Exception.php
 *
 * @date        10.08.2015
 * @author      Pascal Paulis <pascal.paulis@continuousphp.com>
 * @file        Exception.php
 * @license     http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright   Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Service;

/**
 * Class Exception
 * 
 * @package     Model
 * @subpackage  Service
 * @author      Pascal Paulis <pascal.paulis@continuousphp.com>
 * @license     http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright   Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */
class Exception extends \Exception
{
    const TYPE_GATEWAY_TIMEOUT   = 'gateway_timeout';
    const TYPE_TOO_MANY_REQUESTS = 'too_many_requests';

    protected $type;
    protected $errorMessage;
    protected $errorDetails;

    /**
     * @param string $type
     * @param int $errorMessage
     * @param string $errorDetails
     */
    public function __construct($type, $errorMessage, $errorDetails)
    {
        $this->type = $type;
        $this->errorMessage = $errorMessage;
        $this->errorDetails = $errorDetails;
    }

    /**
     * @param string $errorDetails
     * @return Exception
     */
    public function setErrorDetails($errorDetails)
    {
        $this->errorDetails = $errorDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param string $errorMessage
     * @return Exception
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $type
     * @return Exception
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}