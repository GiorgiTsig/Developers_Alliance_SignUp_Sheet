<?php

namespace Giorgi\Tsignadze\Model\ResourceModel\SignUp;

use Giorgi\Tsignadze\Model\ResourceModel\SignUp as ResourceModel;
use Giorgi\Tsignadze\Model\SignUp as Model;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'SignUp_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
