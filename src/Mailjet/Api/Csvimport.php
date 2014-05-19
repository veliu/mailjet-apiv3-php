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

/**
 * Csvimport Api
 *
 * @see http://mjdemo.poxx.net/~shubham/csvimport.html
 */
class Csvimport extends AbstractApi
{

    /**
     * Api name
     */
    protected $name = 'csvimport';

    /**
     * Supported Filters
     */
    protected $filters = array();

    /**
     * Supported properties
     */
    protected $properties = array(
        'AliveAt' => array(
            'name' => 'AliveAt',
            'dataType' => '\Datetime',
            'required' => false
            ),
        'ContactsListID' => array(
            'name' => 'ContactsListID',
            'dataType' => 'int',
            'required' => true
            ),
        'Count' => array(
            'name' => 'Count',
            'dataType' => 'int',
            'required' => false
            ),
        'Current' => array(
            'name' => 'Current',
            'dataType' => 'int',
            'required' => false
            ),
        'DataID' => array(
            'name' => 'DataID',
            'dataType' => 'int',
            'required' => true
            ),
        'Errcount' => array(
            'name' => 'Errcount',
            'dataType' => 'int',
            'required' => false
            ),
        'ErrTreshold' => array(
            'name' => 'ErrTreshold',
            'dataType' => 'int',
            'required' => false
            ),
        'ID' => array(
            'name' => 'ID',
            'dataType' => 'int',
            'required' => false
            ),
        'ImportOptions' => array(
            'name' => 'ImportOptions',
            'dataType' => 'string',
            'required' => false
            ),
        'JobEnd' => array(
            'name' => 'JobEnd',
            'dataType' => '\Datetime',
            'required' => false
            ),
        'JobStart' => array(
            'name' => 'JobStart',
            'dataType' => '\Datetime',
            'required' => false
            ),
        'Method' => array(
            'name' => 'Method',
            'dataType' => 'string',
            'required' => false
            ),
        'RequestAt' => array(
            'name' => 'RequestAt',
            'dataType' => '\Datetime',
            'required' => false
            ),
        'Status' => array(
            'name' => 'Status',
            'dataType' => 'string',
            'required' => false
            )
        );

    /**
     * Post __construct initializations
     */
    public function init()
    {
        $this->getResultSetPrototype()->setObjectPrototype(new Mailjet\Model\Csvimport);
        $this->setUrl('http://api.mailjet.com/v3/REST/csvimport/');
        $hydrator = $this->getResultSetPrototype()->getHydrator();
        $hydrator->addStrategy('AliveAt', new TRFC3339DateTimeStrategy());
        $hydrator->addStrategy('JobEnd', new TRFC3339DateTimeStrategy());
        $hydrator->addStrategy('JobStart', new TRFC3339DateTimeStrategy());
        $hydrator->addStrategy('RequestAt', new TRFC3339DateTimeStrategy());
    }

    /**
     * Return current Mailjet\Model\Csvimport
     *
     * @return Mailjet\Model\Csvimport
     */
    public function current()
    {
        return parent::_get();
    }

    /**
     * Update existing Csvimport
     *
     * @param Mailjet\Model\Csvimport
     * @return Mailjet\Model\Csvimport|false Object created or false
     */
    public function update(Mailjet\Model\Csvimport &$Csvimport)
    {
        return parent::_update($Csvimport);
    }

    /**
     * Create a new Csvimport
     *
     * @param Mailjet\Model\Csvimport
     * @return Mailjet\Model\Csvimport|false Object created or false
     */
    public function create(Mailjet\Model\Csvimport &$Csvimport)
    {
        return parent::_create($Csvimport);
    }


}

