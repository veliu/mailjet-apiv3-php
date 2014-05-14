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
 * Contactfilter Model
 *
 * A list of filter expressions for use in newsletters.
 */
class Contactfilter implements ModelInterface
{

    /**
     * Textual escription of the filter.
     */
    protected $Description = null;

    /**
     * Filter Expression. Checked for syntactical correctness when writing
     */
    protected $Expression = null;

    /**
     * ID of the filter
     */
    protected $ID = null;

    /**
     * A unique name for this filter.
     */
    protected $Name = null;

    /**
     *
     */
    protected $Status = unused;

    /**
     * Sets the Textual escription of the filter.
     *
     * @param string
     * @return Contactfilter
     */
    public function setDescription($Description = null)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Gets the Textual escription of the filter.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the Filter Expression. Checked for syntactical correctness when writing
     *
     * @param string
     * @return Contactfilter
     */
    public function setExpression($Expression = null)
    {
        $this->Expression = $Expression;
        return $this;
    }

    /**
     * Gets the Filter Expression. Checked for syntactical correctness when writing
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->Expression;
    }

    /**
     * Sets the ID of the filter
     *
     * @param int
     * @return Contactfilter
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the ID of the filter
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets the A unique name for this filter.
     *
     * @param string
     * @return Contactfilter
     */
    public function setName($Name = null)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Gets the A unique name for this filter.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the 
     *
     * @param int
     * @return Contactfilter
     */
    public function setStatus($Status = null)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * Gets the 
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }


}

