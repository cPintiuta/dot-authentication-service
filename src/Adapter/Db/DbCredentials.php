<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authentication-service
 * @author: n3vrax
 * Date: 5/19/2016
 * Time: 12:37 AM
 */

declare(strict_types=1);

namespace Dot\Authentication\Adapter\Db;

/**
 * Class DbCredentials
 * @package Dot\Authentication\Adapter\Db
 */
class DbCredentials
{
    /** @var  string */
    protected $identity;

    /** @var string */
    protected $identityColumn;

    /** @var  string */
    protected $credential;

    /** @var string */
    protected $credentialColumn;

    /**
     * DbCredentials constructor.
     * @param string $identity
     * @param string $credential
     * @param string $identityColumn
     * @param string $credentialColumn
     */
    public function __construct(
        string $identity,
        string $credential,
        string $identityColumn = '',
        string $credentialColumn = ''
    ) {
        $this->identity = $identity;
        $this->identityColumn = $identityColumn;
        $this->credential = $credential;
        $this->credentialColumn = $credentialColumn;
    }

    /**
     * @return string
     */
    public function getIdentity(): string
    {
        return $this->identity;
    }

    /**
     * @param string $identity
     */
    public function setIdentity(string $identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return string
     */
    public function getIdentityColumn(): string
    {
        return $this->identityColumn;
    }

    /**
     * @param string $identityColumn
     */
    public function setIdentityColumn(string $identityColumn)
    {
        $this->identityColumn = $identityColumn;
    }

    /**
     * @return string
     */
    public function getCredential(): string
    {
        return $this->credential;
    }

    /**
     * @param string $credential
     */
    public function setCredential(string $credential)
    {
        $this->credential = $credential;
    }

    /**
     * @return string
     */
    public function getCredentialColumn(): string
    {
        return $this->credentialColumn;
    }

    /**
     * @param string $credentialColumn
     */
    public function setCredentialColumn(string $credentialColumn)
    {
        $this->credentialColumn = $credentialColumn;
    }
}
