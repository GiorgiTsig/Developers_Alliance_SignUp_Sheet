<?php

namespace Giorgi\Tsignadze\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SignUp extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'SignUp_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('signup', 'signup_id');
        $this->_useIsObjectNew = true;
    }
}
