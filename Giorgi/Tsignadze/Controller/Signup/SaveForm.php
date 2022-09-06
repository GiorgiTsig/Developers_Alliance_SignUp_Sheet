<?php

namespace Giorgi\Tsignadze\Controller\Signup;

use Magento\Framework\App\Action\Action as ParentAction;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\LocalizedException;
use Giorgi\Tsignadze\Api\Data\SignUpInterfaceFactory;
use Giorgi\Tsignadze\Api\SignUpRepositoryInterface;
use Magento\Framework\HTTP\PhpEnvironment\Request;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\App\Request\DataPersistorInterface;

class SaveForm extends ParentAction
{
    private $signUpRepository;
    private $signUpModelFactory;
    private $dataPersistorInterafce;


    public function __construct(
        Context $context,
        SignUpRepositoryInterface $signUpRepository,
        SignUpInterfaceFactory $signUpModelFactory,
        DataPersistorInterface $dataPersistor
        )
    {
        $this->signUpRepository = $signUpRepository;
        $this->signUpModelFactory = $signUpModelFactory;
        $this->DataPersistorInterface=$dataPersistor;
        parent::__construct($context);
    }

    public function validation($request)
    {
        $error = [];

        if (trim($request->getParam('fname')) === '') {
            $error[] = "Please Enter correct name";

        }
        if (trim($request->getParam('date')) === '') {
            $error[] = "Please Enter correct date";
        }

        return $error;
    }

    public function execute()
    {
        $request = $this->getRequest();

        if ($request->isPost()) {
            $name = $request->getParam('fname');
            $date = $request->getParam('date');
            $request = $this->getRequest();
            $errors = $this->validation($request);
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    $this->messageManager->addErrorMessage($error);
                }

                $this->DataPersistorInterface->set('fname', $name);
                $this->DataPersistorInterface->set('date', $date);
            } else {
                $this->messageManager->addSuccessMessage("SUCCESS");
                $signUp = $this->signUpModelFactory->create();
                $signUp->setFname($name);
                $signUp->setDate($date);
                $this->signUpRepository->save($signUp);
            }
            return $this->resultRedirectFactory->create()->setUrl("http://magento.localhost/signup/signup/index");
        }
    }
}
