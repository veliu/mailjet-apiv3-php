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
use Mailjet\Type\TCustomStatus;
use Mailjet\Type\TRunLevel;

/**
 * Apikey Model
 *
 * Manage your Mailjet API Keys. API keys are used as credentials to access the API
 * and SMTP server.
 */
class Apikey implements ModelInterface
{

    /**
     * The unique key for this API Key.
     */
    protected $APIKey = 'Automatically generated value';

    /**
     * Timestamp when object was created in database.
     */
    protected $CreatedAt = 'Current time';

    /**
     * Status of this API Key.
     */
    protected $CustomStatus = 'up';

    /**
     * Unique numerical ID for this object.
     */
    protected $ID = null;

    /**
     * Is this API Key active ?.
     */
    protected $IsActive = false;

    /**
     * Is this API Key the master key for the user.
     */
    protected $IsMaster = false;

    /**
     * User readable name for this API Key.
     */
    protected $Name = null;

    /**
     * Runlevel, used to indicate data is migrated and reduced performance is expected.
     */
    protected $Runlevel = 'Normal';

    /**
     * Secret key for this API Key (equivalent to password).
     */
    protected $SecretKey = 'Automatically generated value';

    /**
     * Host to be used when tracking clicks, opens, unsub requests for this API Key.
     */
    protected $TrackHost = 'r.mailjet.com';

    /**
     * User ID for this API key
     */
    protected $UserID = null;

    /**
     * Sets the The unique key for this API Key.
     *
     * @param string
     * @return Apikey
     */
    public function setAPIKey($APIKey)
    {
        $this->APIKey = $APIKey;
        return $this;
    }

    /**
     * Gets the The unique key for this API Key.
     *
     * @return string
     */
    public function getAPIKey()
    {
        return $this->APIKey;
    }

    /**
     * Sets the Timestamp when object was created in database.
     *
     * @param \Datetime
     * @return Apikey
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
     * Sets the Status of this API Key.
     *
     * @param TCustomStatus
     * @return Apikey
     */
    public function setCustomStatus(TCustomStatus $CustomStatus = null)
    {
        $this->CustomStatus = $CustomStatus;
        return $this;
    }

    /**
     * Gets the Status of this API Key.
     *
     * @return TCustomStatus
     */
    public function getCustomStatus()
    {
        return $this->CustomStatus;
    }

    /**
     * Sets the Unique numerical ID for this object.
     *
     * @param int
     * @return Apikey
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
     * Sets the Is this API Key active ?.
     *
     * @param bool
     * @return Apikey
     */
    public function setIsActive($IsActive = null)
    {
        $this->IsActive = $IsActive;
        return $this;
    }

    /**
     * Gets the Is this API Key active ?.
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets the Is this API Key the master key for the user.
     *
     * @param bool
     * @return Apikey
     */
    public function setIsMaster($IsMaster = null)
    {
        $this->IsMaster = $IsMaster;
        return $this;
    }

    /**
     * Gets the Is this API Key the master key for the user.
     *
     * @return bool
     */
    public function getIsMaster()
    {
        return $this->IsMaster;
    }

    /**
     * Sets the User readable name for this API Key.
     *
     * @param string
     * @return Apikey
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Gets the User readable name for this API Key.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the Runlevel, used to indicate data is migrated and reduced performance is
     * expected.
     *
     * @param TRunLevel
     * @return Apikey
     */
    public function setRunlevel(TRunLevel $Runlevel = null)
    {
        $this->Runlevel = $Runlevel;
        return $this;
    }

    /**
     * Gets the Runlevel, used to indicate data is migrated and reduced performance is
     * expected.
     *
     * @return TRunLevel
     */
    public function getRunlevel()
    {
        return $this->Runlevel;
    }

    /**
     * Sets the Secret key for this API Key (equivalent to password).
     *
     * @param string
     * @return Apikey
     */
    public function setSecretKey($SecretKey = null)
    {
        $this->SecretKey = $SecretKey;
        return $this;
    }

    /**
     * Gets the Secret key for this API Key (equivalent to password).
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->SecretKey;
    }

    /**
     * Sets the Host to be used when tracking clicks, opens, unsub requests for this
     * API Key.
     *
     * @param string
     * @return Apikey
     */
    public function setTrackHost($TrackHost = null)
    {
        $this->TrackHost = $TrackHost;
        return $this;
    }

    /**
     * Gets the Host to be used when tracking clicks, opens, unsub requests for this
     * API Key.
     *
     * @return string
     */
    public function getTrackHost()
    {
        return $this->TrackHost;
    }

    /**
     * Sets the User ID for this API key
     *
     * @param int
     * @return Apikey
     */
    public function setUserID($UserID = null)
    {
        $this->UserID = $UserID;
        return $this;
    }

    /**
     * Gets the User ID for this API key
     *
     * @return int
     */
    public function getUserID()
    {
        return $this->UserID;
    }


}

