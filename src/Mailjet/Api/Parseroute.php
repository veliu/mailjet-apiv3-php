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

/**
 * Parseroute Api
 *
 * ParseRoute description
 *
 * @see http://dev.mailjet.com/email-api/v3/parseroute/
 */
class Parseroute extends AbstractApi
{

    /**
     * Api name
     */
    protected $name = 'parseroute';

    /**
     * Supported Filters
     */
    protected $filters = array('APIKey' => array(
            'name' => 'APIKey',
            'required' => false
            ));

    /**
     * Supported properties
     */
    protected $properties = array(
        'APIKeyID' => array(
            'name' => 'APIKeyID',
            'dataType' => 'int',
            'required' => true
            ),
        'Email' => array(
            'name' => 'Email',
            'dataType' => 'string',
            'required' => true
            ),
        'ID' => array(
            'name' => 'ID',
            'dataType' => 'int',
            'required' => false
            ),
        'Url' => array(
            'name' => 'Url',
            'dataType' => 'string',
            'required' => true
            )
        );

    /**
     * Post __construct initializations
     */
    public function init()
    {
        $this->getResultSetPrototype()->setObjectPrototype(new Mailjet\Model\Parseroute);
        $this->setUrl('http://api.mailjet.com/v3/REST/parseroute/');
    }

    /**
     * Return list of Mailjet\Model\Parseroute
     *
     * Return list of Mailjet\Model\Parseroute filtered by $filters if provided
     *
     *
     * @param array key/val filters
     * @return ResultSet\ResultSet List of Mailjet\Model\Parseroute
     */
    public function getList(array $filters = array())
    {
        return parent::_list($filters);
    }

    /**
     * Return list of Mailjet\Model\Parseroute with APIKey = $APIKey
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByAPIKey($APIKey)
    {
        $result = $this->getList(array('APIKey' => $APIKey));
        return $result;
    }

    /**
     * Return Mailjet\Model\Parseroute with id = $id
     *
     * @param int Id of resource to get
     * @return Mailjet\Model\Parseroute
     */
    public function get($id)
    {
        if (empty($id)) {
            throw new Exception\InvalidArgumentException("You must specify the ID");
        }

        return parent::_get($id);
    }

    /**
     * Update existing Parseroute
     *
     * @param Mailjet\Model\Parseroute
     * @return Mailjet\Model\Parseroute|false Object created or false
     */
    public function update(Mailjet\Model\Parseroute &$Parseroute)
    {
        return parent::_update($Parseroute);
    }

    /**
     * Create a new Parseroute
     *
     * @param Mailjet\Model\Parseroute
     * @return Mailjet\Model\Parseroute|false Object created or false
     */
    public function create(Mailjet\Model\Parseroute &$Parseroute)
    {
        return parent::_create($Parseroute);
    }

    /**
     * Delete the Parseroute with id = $id
     *
     * @param integer Id to delete
     * @return bool True on success
     */
    public function delete($id)
    {
        return parent::_delete($id);
    }


}

