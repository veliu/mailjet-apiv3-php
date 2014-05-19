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
 * Contactfilter Api
 *
 * A list of filter expressions for use in newsletters.
 *
 * @see http://mjdemo.poxx.net/~shubham/contactfilter.html
 */
class Contactfilter extends AbstractApi
{

    /**
     * Api name
     */
    protected $name = 'contactfilter';

    /**
     * Supported Filters
     */
    protected $filters = array(
        'ShowDeleted' => array(
            'name' => 'ShowDeleted',
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
        'Description' => array(
            'name' => 'Description',
            'dataType' => 'string',
            'required' => false
            ),
        'Expression' => array(
            'name' => 'Expression',
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
            ),
        'Status' => array(
            'name' => 'Status',
            'dataType' => 'int',
            'required' => false
            )
        );

    /**
     * Post __construct initializations
     */
    public function init()
    {
        $this->getResultSetPrototype()->setObjectPrototype(new Mailjet\Model\Contactfilter);
        $this->setUrl('http://api.mailjet.com/v3/REST/contactfilter/');
    }

    /**
     * Return list of Mailjet\Model\Contactfilter
     *
     * Return list of Mailjet\Model\Contactfilter filtered by $filters if provided
     *
     *
     * @param array key/val filters
     * @return ResultSet\ResultSet List of Mailjet\Model\Contactfilter
     */
    public function getList(array $filters = array())
    {
        return parent::_list($filters);
    }

    /**
     * Return list of Mailjet\Model\Contactfilter with ShowDeleted = $ShowDeleted
     *
     * @param bool
     * @return ResultSet\ResultSet
     */
    public function getByShowDeleted($ShowDeleted)
    {
        $result = $this->getList(array('ShowDeleted' => $ShowDeleted));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Contactfilter with Status = $Status
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
     * Return Mailjet\Model\Contactfilter with id = $id
     *
     * @param int Id of resource to get
     * @return Mailjet\Model\Contactfilter
     */
    public function get($id)
    {
        if (empty($id)) {
            throw new Exception\InvalidArgumentException("You must specify the ID");
        }

        return parent::_get($id);
    }

    /**
     * Update existing Contactfilter
     *
     * @param Mailjet\Model\Contactfilter
     * @return Mailjet\Model\Contactfilter|false Object created or false
     */
    public function update(Mailjet\Model\Contactfilter &$Contactfilter)
    {
        return parent::_update($Contactfilter);
    }

    /**
     * Create a new Contactfilter
     *
     * @param Mailjet\Model\Contactfilter
     * @return Mailjet\Model\Contactfilter|false Object created or false
     */
    public function create(Mailjet\Model\Contactfilter &$Contactfilter)
    {
        return parent::_create($Contactfilter);
    }

    /**
     * Delete the Contactfilter with id = $id
     *
     * @param integer Id to delete
     * @return bool True on success
     */
    public function delete($id)
    {
        return parent::_delete($id);
    }


}

