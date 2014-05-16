<?php
/**
 * MailJet Api
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


namespace Mailjet\Api;

use Mailjet;
use Mailjet\Model;
use Mailjet\Api\ResultSet;
use Zend\Json\Json;
use Zend\InputFilter;
use \Datetime;

/**
 * Contactdata Api
 *
 * This resource can be used to examine and manipulate the associated extra static
 * data of a contact.
 *
 * @see http://dev.mailjet.com/email-api/v3/contactdata/
 */
class Contactdata extends AbstractApi
{

    /**
     * Api name
     */
    protected $name = 'contactdata';

    /**
     * Supported Filters
     */
    protected $filters = array(
        'Campaign' => array(
            'name' => 'Campaign',
            'required' => false
            ),
        'ContactsList' => array(
            'name' => 'ContactsList',
            'required' => false
            ),
        'Fields' => array(
            'name' => 'Fields',
            'required' => false
            ),
        'IsUnsubscribed' => array(
            'name' => 'IsUnsubscribed',
            'required' => false
            ),
        'LastActivityAt' => array(
            'name' => 'LastActivityAt',
            'required' => false
            ),
        'Recipient' => array(
            'name' => 'Recipient',
            'required' => false
            ),
        'Status' => array(
            'name' => 'Status',
            'required' => false
            )
        );

    /**
     * Supported properties
     */
    protected $properties = array(
        'ContactID' => array(
            'name' => 'ContactID',
            'dataType' => 'int',
            'required' => false
            ),
        'Data' => array(
            'name' => 'Data',
            'dataType' => 'int',
            'required' => false
            ),
        'ID' => array(
            'name' => 'ID',
            'dataType' => 'int',
            'required' => false
            )
        );

    /**
     * Post __construct initializations
     */
    public function init()
    {
        $this->getResultSetPrototype()->setObjectPrototype(new Mailjet\Model\Contactdata);
        $this->setUrl('http://api.mailjet.com/v3/REST/contactdata/');
    }

    /**
     * Return list of Mailjet\Model\Contactdata
     *
     * Return list of Mailjet\Model\Contactdata filtered by $filters if provided
     *
     *
     * @param array key/val filters
     * @return ResultSet\ResultSet List of Mailjet\Model\Contactdata
     */
    public function getList(array $filters = array())
    {
        return parent::_list($filters);
    }

    /**
     * Return list of Mailjet\Model\Contactdata with Campaign = $Campaign
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByCampaign($Campaign)
    {
        $result = $this->getList(array('Campaign' => $Campaign));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contactdata with ContactsList = $ContactsList
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByContactsList($ContactsList)
    {
        $result = $this->getList(array('ContactsList' => $ContactsList));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contactdata with Fields = $Fields
     *
     * @param string
     * @return ResultSet\ResultSet
     */
    public function getByFields($Fields)
    {
        $result = $this->getList(array('Fields' => $Fields));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contactdata with IsUnsubscribed = $IsUnsubscribed
     *
     * @param bool
     * @return ResultSet\ResultSet
     */
    public function getByIsUnsubscribed($IsUnsubscribed)
    {
        $result = $this->getList(array('IsUnsubscribed' => $IsUnsubscribed));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contactdata with LastActivityAt = $LastActivityAt
     *
     * @param \Datetime
     * @return ResultSet\ResultSet
     */
    public function getByLastActivityAt(\Datetime $LastActivityAt)
    {
        $result = $this->getList(array('LastActivityAt' => $LastActivityAt));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contactdata with Recipient = $Recipient
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByRecipient($Recipient)
    {
        $result = $this->getList(array('Recipient' => $Recipient));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contactdata with Status = $Status
     *
     * @param string
     * @return ResultSet\ResultSet
     */
    public function getByStatus($Status)
    {
        $result = $this->getList(array('Status' => $Status));
        return $result;
    }

    /**
     * Return Mailjet\Model\Contactdata with id = $id
     *
     * @param int Id of resource to get
     * @return Mailjet\Model\Contactdata
     */
    public function get($id)
    {
        if (empty($id)) {
            throw new Exception\InvalidArgumentException("You must specify the ID");
        }

        return parent::_get($id);
    }

    /**
     * Update existing Contactdata
     *
     * @param Mailjet\Model\Contactdata
     * @return Mailjet\Model\Contactdata|false Object created or false
     */
    public function update(Mailjet\Model\Contactdata &$Contactdata)
    {
        return parent::_update($Contactdata);
    }

    /**
     * Create a new Contactdata
     *
     * @param Mailjet\Model\Contactdata
     * @return Mailjet\Model\Contactdata|false Object created or false
     */
    public function create(Mailjet\Model\Contactdata &$Contactdata)
    {
        return parent::_create($Contactdata);
    }

    /**
     * Delete the Contactdata with id = $id
     *
     * @param integer Id to delete
     * @return bool True on success
     */
    public function delete($id)
    {
        return parent::_delete($id);
    }


}

