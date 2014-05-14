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
 * Csvimport Model
 */
class Csvimport implements ModelInterface
{

    /**
     * Timestamp when the CSV import background job reported a status.
     */
    protected $AliveAt = null;

    /**
     * Contacts list for which the import should be started.
     */
    protected $ContactsListID = null;

    /**
     * Number of contacts detected in the CSV file.
     */
    protected $Count = null;

    /**
     * Number of processed contacts.
     */
    protected $Current = null;

    /**
     * ID of uploaded CSV data file.
     */
    protected $DataID = null;

    /**
     * Number of errors encountered so far.
     */
    protected $Errcount = null;

    /**
     * Maximum number of errors that can occur before the job is aborted.
     */
    protected $ErrTreshold = null;

    /**
     * Unique ID of this CSV import file.
     */
    protected $ID = null;

    /**
     * a string with a JSON structure describing the import options in effect.
     */
    protected $ImportOptions = null;

    /**
     * When the job was ended.
     */
    protected $JobEnd = null;

    /**
     * When the job was started.
     */
    protected $JobStart = null;

    /**
     * Method to use when importing a list of contacts.
     */
    protected $Method = 'Unknown';

    /**
     * Time when the job was registered.
     */
    protected $RequestAt = null;

    /**
     * Current status of the job. If set during POST, the only allowed value is
     * 'Upload'. During PUT, the only allowed value is 'Abort'.
     */
    protected $Status = 'Upload';

    /**
     * Sets the Timestamp when the CSV import background job reported a status.
     *
     * @param \Datetime
     * @return Csvimport
     */
    public function setAliveAt(\Datetime $AliveAt = null)
    {
        $this->AliveAt = $AliveAt;
        return $this;
    }

    /**
     * Gets the Timestamp when the CSV import background job reported a status.
     *
     * @return \Datetime
     */
    public function getAliveAt()
    {
        return $this->AliveAt;
    }

    /**
     * Sets the Contacts list for which the import should be started.
     *
     * @param int
     * @return Csvimport
     */
    public function setContactsListID($ContactsListID)
    {
        $this->ContactsListID = $ContactsListID;
        return $this;
    }

    /**
     * Gets the Contacts list for which the import should be started.
     *
     * @return int
     */
    public function getContactsListID()
    {
        return $this->ContactsListID;
    }

    /**
     * Sets the Number of contacts detected in the CSV file.
     *
     * @param int
     * @return Csvimport
     */
    public function setCount($Count = null)
    {
        $this->Count = $Count;
        return $this;
    }

    /**
     * Gets the Number of contacts detected in the CSV file.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * Sets the Number of processed contacts.
     *
     * @param int
     * @return Csvimport
     */
    public function setCurrent($Current = null)
    {
        $this->Current = $Current;
        return $this;
    }

    /**
     * Gets the Number of processed contacts.
     *
     * @return int
     */
    public function getCurrent()
    {
        return $this->Current;
    }

    /**
     * Sets the ID of uploaded CSV data file.
     *
     * @param int
     * @return Csvimport
     */
    public function setDataID($DataID)
    {
        $this->DataID = $DataID;
        return $this;
    }

    /**
     * Gets the ID of uploaded CSV data file.
     *
     * @return int
     */
    public function getDataID()
    {
        return $this->DataID;
    }

    /**
     * Sets the Number of errors encountered so far.
     *
     * @param int
     * @return Csvimport
     */
    public function setErrcount($Errcount = null)
    {
        $this->Errcount = $Errcount;
        return $this;
    }

    /**
     * Gets the Number of errors encountered so far.
     *
     * @return int
     */
    public function getErrcount()
    {
        return $this->Errcount;
    }

    /**
     * Sets the Maximum number of errors that can occur before the job is aborted.
     *
     * @param int
     * @return Csvimport
     */
    public function setErrTreshold($ErrTreshold = null)
    {
        $this->ErrTreshold = $ErrTreshold;
        return $this;
    }

    /**
     * Gets the Maximum number of errors that can occur before the job is aborted.
     *
     * @return int
     */
    public function getErrTreshold()
    {
        return $this->ErrTreshold;
    }

    /**
     * Sets the Unique ID of this CSV import file.
     *
     * @param int
     * @return Csvimport
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the Unique ID of this CSV import file.
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets the a string with a JSON structure describing the import options in effect.
     *
     * @param string
     * @return Csvimport
     */
    public function setImportOptions($ImportOptions = null)
    {
        $this->ImportOptions = $ImportOptions;
        return $this;
    }

    /**
     * Gets the a string with a JSON structure describing the import options in effect.
     *
     * @return string
     */
    public function getImportOptions()
    {
        return $this->ImportOptions;
    }

    /**
     * Sets the When the job was ended.
     *
     * @param \Datetime
     * @return Csvimport
     */
    public function setJobEnd(\Datetime $JobEnd = null)
    {
        $this->JobEnd = $JobEnd;
        return $this;
    }

    /**
     * Gets the When the job was ended.
     *
     * @return \Datetime
     */
    public function getJobEnd()
    {
        return $this->JobEnd;
    }

    /**
     * Sets the When the job was started.
     *
     * @param \Datetime
     * @return Csvimport
     */
    public function setJobStart(\Datetime $JobStart = null)
    {
        $this->JobStart = $JobStart;
        return $this;
    }

    /**
     * Gets the When the job was started.
     *
     * @return \Datetime
     */
    public function getJobStart()
    {
        return $this->JobStart;
    }

    /**
     * Sets the Method to use when importing a list of contacts.
     *
     * @param string
     * @return Csvimport
     */
    public function setMethod($Method = null)
    {
        $this->Method = $Method;
        return $this;
    }

    /**
     * Gets the Method to use when importing a list of contacts.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->Method;
    }

    /**
     * Sets the Time when the job was registered.
     *
     * @param \Datetime
     * @return Csvimport
     */
    public function setRequestAt(\Datetime $RequestAt = null)
    {
        $this->RequestAt = $RequestAt;
        return $this;
    }

    /**
     * Gets the Time when the job was registered.
     *
     * @return \Datetime
     */
    public function getRequestAt()
    {
        return $this->RequestAt;
    }

    /**
     * Sets the Current status of the job. If set during POST, the only allowed value
     * is 'Upload'. During PUT, the only allowed value is 'Abort'.
     *
     * @param string
     * @return Csvimport
     */
    public function setStatus($Status = null)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * Gets the Current status of the job. If set during POST, the only allowed value
     * is 'Upload'. During PUT, the only allowed value is 'Abort'.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }


}

