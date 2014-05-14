<?php
/**
 * MailJet Model
 *
 * Copyright (c) 2013, Mailjet.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *     * Redistributions in binary form must reproduce the above copyright notice,
 *       this list of conditions and the following disclaimer in the documentation
 *       and/or other materials provided with the distribution.
 *
 *     * Neither the name of Zend Technologies USA, Inc. nor the names of its
 *       contributors may be used to endorse or promote products derived from this
 *       software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */


namespace Mailjet\Model;

use \Datetime;

/**
 * User Model
 *
 * User account definition for Mailjet.
 */
class User implements ModelInterface
{

    /**
     * Timestamp when object was created in database.
     */
    protected $CreatedAt = 'Current time';

    /**
     * Email address of user.
     */
    protected $Email = null;

    /**
     * Unique numerical ID for this object.
     */
    protected $ID = null;

    /**
     * Has the user accepted the Mailjet Rules ?.
     */
    protected $IsRulesAccepted = false;

    /**
     * IP address of last contact from user.
     */
    protected $LastIp = 'The same as FirstIP';

    /**
     * Timestamp when user last logged in.
     */
    protected $LastLoginAt = null;

    /**
     * Locale in which the information in this record is recorded.
     */
    protected $Locale = 'en_US';

    /**
     * Maximum number of API keys the user is allowed to have.
     */
    protected $MaxAllowedAPIKeys = 5;

    /**
     * Timezone for this user.
     */
    protected $Timezone = 'etc/UTC';

    /**
     * User name.
     */
    protected $Username = 'Undefined';

    /**
     * Timestamp when user was last warned about hitting his rate limit.
     */
    protected $WarnedRatelimitAt = null;

    /**
     * Sets the Timestamp when object was created in database.
     *
     * @param \Datetime
     * @return User
     */
    public function setCreatedAt(\Datetime $CreatedAt = null)
    {
        $this->CreatedAt = $CreatedAt;
        return $this;
    }

    /**
     * Gets the Timestamp when object was created in database.
     *
     * @return \Datetime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * Sets the Email address of user.
     *
     * @param string
     * @return User
     */
    public function setEmail($Email = null)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * Gets the Email address of user.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets the Unique numerical ID for this object.
     *
     * @param int
     * @return User
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the Unique numerical ID for this object.
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets the Has the user accepted the Mailjet Rules ?.
     *
     * @param bool
     * @return User
     */
    public function setIsRulesAccepted($IsRulesAccepted = null)
    {
        $this->IsRulesAccepted = $IsRulesAccepted;
        return $this;
    }

    /**
     * Gets the Has the user accepted the Mailjet Rules ?.
     *
     * @return bool
     */
    public function getIsRulesAccepted()
    {
        return $this->IsRulesAccepted;
    }

    /**
     * Sets the IP address of last contact from user.
     *
     * @param string
     * @return User
     */
    public function setLastIp($LastIp)
    {
        $this->LastIp = $LastIp;
        return $this;
    }

    /**
     * Gets the IP address of last contact from user.
     *
     * @return string
     */
    public function getLastIp()
    {
        return $this->LastIp;
    }

    /**
     * Sets the Timestamp when user last logged in.
     *
     * @param \Datetime
     * @return User
     */
    public function setLastLoginAt(\Datetime $LastLoginAt = null)
    {
        $this->LastLoginAt = $LastLoginAt;
        return $this;
    }

    /**
     * Gets the Timestamp when user last logged in.
     *
     * @return \Datetime
     */
    public function getLastLoginAt()
    {
        return $this->LastLoginAt;
    }

    /**
     * Sets the Locale in which the information in this record is recorded.
     *
     * @param string
     * @return User
     */
    public function setLocale($Locale = null)
    {
        $this->Locale = $Locale;
        return $this;
    }

    /**
     * Gets the Locale in which the information in this record is recorded.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->Locale;
    }

    /**
     * Sets the Maximum number of API keys the user is allowed to have.
     *
     * @param int
     * @return User
     */
    public function setMaxAllowedAPIKeys($MaxAllowedAPIKeys = null)
    {
        $this->MaxAllowedAPIKeys = $MaxAllowedAPIKeys;
        return $this;
    }

    /**
     * Gets the Maximum number of API keys the user is allowed to have.
     *
     * @return int
     */
    public function getMaxAllowedAPIKeys()
    {
        return $this->MaxAllowedAPIKeys;
    }

    /**
     * Sets the Timezone for this user.
     *
     * @param string
     * @return User
     */
    public function setTimezone($Timezone = null)
    {
        $this->Timezone = $Timezone;
        return $this;
    }

    /**
     * Gets the Timezone for this user.
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->Timezone;
    }

    /**
     * Sets the User name.
     *
     * @param string
     * @return User
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
        return $this;
    }

    /**
     * Gets the User name.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Sets the Timestamp when user was last warned about hitting his rate limit.
     *
     * @param \Datetime
     * @return User
     */
    public function setWarnedRatelimitAt(\Datetime $WarnedRatelimitAt = null)
    {
        $this->WarnedRatelimitAt = $WarnedRatelimitAt;
        return $this;
    }

    /**
     * Gets the Timestamp when user was last warned about hitting his rate limit.
     *
     * @return \Datetime
     */
    public function getWarnedRatelimitAt()
    {
        return $this->WarnedRatelimitAt;
    }


}

