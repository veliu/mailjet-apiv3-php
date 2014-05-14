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
 * Contactmetadata Model
 *
 * Definition of available extra data items for contacts.
 */
class Contactmetadata implements ModelInterface
{

    /**
     * Type of data.
     */
    protected $Datatype = str;

    /**
     * ID of this definition.
     */
    protected $ID = null;

    /**
     * The name of the data. The name must be unique within a namespace.
     */
    protected $Name = null;

    /**
     * The namespace for this data. There are 2 possible values: static and historic.
     */
    protected $NameSpace = 'static';

    /**
     * Sets the Type of data.
     *
     * @param int
     * @return Contactmetadata
     */
    public function setDatatype($Datatype)
    {
        $this->Datatype = $Datatype;
        return $this;
    }

    /**
     * Gets the Type of data.
     *
     * @return int
     */
    public function getDatatype()
    {
        return $this->Datatype;
    }

    /**
     * Sets the ID of this definition.
     *
     * @param int
     * @return Contactmetadata
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the ID of this definition.
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets the The name of the data. The name must be unique within a namespace.
     *
     * @param string
     * @return Contactmetadata
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Gets the The name of the data. The name must be unique within a namespace.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the The namespace for this data. There are 2 possible values: static and
     * historic.
     *
     * @param string
     * @return Contactmetadata
     */
    public function setNameSpace($NameSpace)
    {
        $this->NameSpace = $NameSpace;
        return $this;
    }

    /**
     * Gets the The namespace for this data. There are 2 possible values: static and
     * historic.
     *
     * @return string
     */
    public function getNameSpace()
    {
        return $this->NameSpace;
    }


}

