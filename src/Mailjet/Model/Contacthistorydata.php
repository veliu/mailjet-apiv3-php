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
 * Contacthistorydata Model
 *
 * This resource can be used to examine the associated extra historical data of a
 * contact.
 */
class Contacthistorydata implements ModelInterface
{

    /**
     * Contact for which this is the historical data.
     */
    protected $ContactID = null;

    /**
     * Timestamp when the historical data was registered by Mailjet
     */
    protected $CreatedAt = 'Current time';

    /**
     * The data as a string.
     */
    protected $Data = null;

    /**
     * ID of the data item.
     */
    protected $ID = null;

    /**
     * Name of the history data item.
     */
    protected $Name = null;

    /**
     * Sets the Contact for which this is the historical data.
     *
     * @param int
     * @return Contacthistorydata
     */
    public function setContactID($ContactID = null)
    {
        $this->ContactID = $ContactID;
        return $this;
    }

    /**
     * Gets the Contact for which this is the historical data.
     *
     * @return int
     */
    public function getContactID()
    {
        return $this->ContactID;
    }

    /**
     * Sets the Timestamp when the historical data was registered by Mailjet
     *
     * @param \Datetime
     * @return Contacthistorydata
     */
    public function setCreatedAt(\Datetime $CreatedAt = null)
    {
        $this->CreatedAt = $CreatedAt;
        return $this;
    }

    /**
     * Gets the Timestamp when the historical data was registered by Mailjet
     *
     * @return \Datetime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * Sets the The data as a string.
     *
     * @param string
     * @return Contacthistorydata
     */
    public function setData($Data = null)
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * Gets the The data as a string.
     *
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Sets the ID of the data item.
     *
     * @param int
     * @return Contacthistorydata
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the ID of the data item.
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets the Name of the history data item.
     *
     * @param string
     * @return Contacthistorydata
     */
    public function setName($Name = null)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Gets the Name of the history data item.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }


}

