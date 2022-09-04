<?php

namespace Giorgi\Tsignadze\Model;

use Giorgi\Tsignadze\Api\Data\SignUpInterface;
use Giorgi\Tsignadze\Model\ResourceModel\SignUp as ResourceModel;
use Magento\Framework\Model\AbstractModel;


class SignUp extends AbstractModel implements SignUpInterface
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'SignUp_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    public  function getId()
    {
        return parent::getId();
    }

    public function setFname($fname)
    {
        return $this->setData(SignUpInterface::NAME, $fname);
    }

    public function getFname()
    {
        return $this->getData(self::NAME);
    }

    public function setDate($date)
    {
        return $this->setData(SignUpInterface::DATE, $date);
    }

    public function getDate()
    {
        return $this->getData(self::DATE);
    }
}
