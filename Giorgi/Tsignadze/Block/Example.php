<?php
namespace Giorgi\Tsignadze\Block;

use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\View\Element\Template;
use Giorgi\Tsignadze\Controller\Signup;


class Example extends Template
{

    public function __construct(
        Template\Context $context,
        DataPersistorInterface $dataPersistor,
        array $data = []
    )
    {
        $this->dataPersistorInterface=$dataPersistor;
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
}
