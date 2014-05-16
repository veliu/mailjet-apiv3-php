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
use Mailjet\Hydrator\Strategy\TRFC3339DateTimeStrategy;
use Zend\Json\Json;
use Zend\InputFilter;
use \Datetime;

/**
 * Contacthistorydata Api
 *
 * This resource can be used to examine the associated extra historical data of a
 * contact.
 *
 * @see http://dev.mailjet.com/email-api/v3/contacthistorydata/
 */
class Contacthistorydata extends AbstractApi
{

    /**
     * Api name
     */
    protected $name = 'contacthistorydata';

    /**
     * Supported Filters
     */
    protected $filters = array(
        'Contact' => array(
            'name' => 'Contact',
            'required' => false
            ),
        'Last' => array(
            'name' => 'Last',
            'required' => false
            ),
        'MaxCreatedAt' => array(
            'name' => 'MaxCreatedAt',
            'required' => false
            ),
        'MinCreatedAt' => array(
            'name' => 'MinCreatedAt',
            'required' => false
            ),
        'Name' => array(
            'name' => 'Name',
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
        'CreatedAt' => array(
            'name' => 'CreatedAt',
            'dataType' => '\Datetime',
            'required' => false
            ),
        'Data' => array(
            'name' => 'Data',
            'dataType' => 'string',
            'required' => false
            ),
        'ID' => array(
            'name' => 'ID',
            'dataType' => 'int',
            'required' => false
            ),
        'Name' => array(
            'name' => 'Name',
            'dataType' => 'string',
            'required' => false
            )
        );

    /**
     * Post __construct initializations
     */
    public function init()
    {
        $this->getResultSetPrototype()->setObjectPrototype(new Mailjet\Model\Contacthistorydata);
        $this->setUrl('http://api.mailjet.com/v3/REST/contacthistorydata/');
        $hydrator = $this->getResultSetPrototype()->getHydrator();
        $hydrator->addStrategy('CreatedAt', new TRFC3339DateTimeStrategy());
    }

    /**
     * Return list of Mailjet\Model\Contacthistorydata
     *
     * Return list of Mailjet\Model\Contacthistorydata filtered by $filters if provided
     *
     *
     * @param array key/val filters
     * @return ResultSet\ResultSet List of Mailjet\Model\Contacthistorydata
     */
    public function getList(array $filters = array())
    {
        return parent::_list($filters);
    }

    /**
     * Return list of Mailjet\Model\Contacthistorydata with Contact = $Contact
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByContact($Contact)
    {
        $result = $this->getList(array('Contact' => $Contact));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contacthistorydata with Last = $Last
     *
     * @param bool
     * @return ResultSet\ResultSet
     */
    public function getByLast($Last)
    {
        $result = $this->getList(array('Last' => $Last));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contacthistorydata with MaxCreatedAt =
     * $MaxCreatedAt
     *
     * @param \Datetime
     * @return ResultSet\ResultSet
     */
    public function getByMaxCreatedAt(\Datetime $MaxCreatedAt)
    {
        $result = $this->getList(array('MaxCreatedAt' => $MaxCreatedAt));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contacthistorydata with MinCreatedAt =
     * $MinCreatedAt
     *
     * @param \Datetime
     * @return ResultSet\ResultSet
     */
    public function getByMinCreatedAt(\Datetime $MinCreatedAt)
    {
        $result = $this->getList(array('MinCreatedAt' => $MinCreatedAt));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contacthistorydata with Name = $Name
     *
     * @param string
     * @return ResultSet\ResultSet
     */
    public function getByName($Name)
    {
        $result = $this->getList(array('Name' => $Name));
        return $result;
    }

    /**
     * Return Mailjet\Model\Contacthistorydata with id = $id
     *
     * @param int Id of resource to get
     * @return Mailjet\Model\Contacthistorydata
     */
    public function get($id)
    {
        if (empty($id)) {
            throw new Exception\InvalidArgumentException("You must specify the ID");
        }

        return parent::_get($id);
    }

    /**
     * Create a new Contacthistorydata
     *
     * @param Mailjet\Model\Contacthistorydata
     * @return Mailjet\Model\Contacthistorydata|false Object created or false
     */
    public function create(Mailjet\Model\Contacthistorydata &$Contacthistorydata)
    {
        return parent::_create($Contacthistorydata);
    }

    /**
     * Delete the Contacthistorydata with id = $id
     *
     * @param integer Id to delete
     * @return bool True on success
     */
    public function delete($id)
    {
        return parent::_delete($id);
    }


}

