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

/**
 * Contactdata Model
 *
 * This resource can be used to examine and manipulate the associated extra static
 * data of a contact.
 */
class Contactdata implements ModelInterface
{

    /**
     *
     */
    protected $ContactID = null;

    /**
     * Static data in an array with Name, Value pairs.
     */
    protected $Data = null;

    /**
     * ID of this resource. It equals the Contact ID.
     */
    protected $ID = null;

    /**
     * Sets the 
     *
     * @param int
     * @return Contactdata
     */
    public function setContactID($ContactID = null)
    {
        $this->ContactID = $ContactID;
        return $this;
    }

    /**
     * Gets the 
     *
     * @return int
     */
    public function getContactID()
    {
        return $this->ContactID;
    }

    /**
     * Sets the Static data in an array with Name, Value pairs.
     *
     * @param int
     * @return Contactdata
     */
    public function setData($Data = null)
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * Gets the Static data in an array with Name, Value pairs.
     *
     * @return int
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Sets the ID of this resource. It equals the Contact ID.
     *
     * @param int
     * @return Contactdata
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the ID of this resource. It equals the Contact ID.
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }


}

