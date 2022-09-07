<?php
namespace Giorgi\Tsignadze\Block;

use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\View\Element\Template;
use Giorgi\Tsignadze\Controller\Signup;
use Magento\Framework\App\Config\ScopeConfigInterface;
use phpDocumentor\Reflection\Types\Self_;


class Example extends Template
{

    protected $scopeConfig;

    const XML_PATH_YesNO = 'customer/create_account/Signup';

    public function __construct(
        Template\Context $context,
        DataPersistorInterface $dataPersistor,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    )
    {
        $this->dataPersistorInterface=$dataPersistor;
        $this->scopeConfig=$scopeConfig;
        parent::__construct($context, $data);
    }

    public function getname()
    {
        $name = $this->dataPersistorInterface->get('fname');
        $this->dataPersistorInterface->clear('fname');
        return $name;
    }

    public function getdate()
    {
        $date = $this->dataPersistorInterface->get('date');
        $this->dataPersistorInterface->clear('date');
    }

    public function getReciveYesNO()
    {
        $scopeConfig = ScopeConfigInterface::SCOPE_TYPE_DEFAULT;

        return $this->scopeConfig->getValue(self::XML_PATH_YesNO, $scopeConfig);
    }
}
