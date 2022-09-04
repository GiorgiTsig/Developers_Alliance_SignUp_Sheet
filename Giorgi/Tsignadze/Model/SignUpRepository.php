<?php

namespace Giorgi\Tsignadze\Model;

use Giorgi\Tsignadze\Api\Data\SignUpInterface;
use Giorgi\Tsignadze\Api\SignUpRepositoryInterface;
use Giorgi\Tsignadze\Model\ResourceModel\SignUp;



class SignUpRepository implements SignUpRepositoryInterface
{

    public function save(SignUpInterface $signUp)
    {
        // TODO: Implement save() method.
    }

    public function get($signUpId)
    {
        // TODO: Implement get() method.
    }

    public function getList($searchCriteria)
    {
        // TODO: Implement getList() method.
    }

    public function delete(SignUpInterface $signUp)
    {
        // TODO: Implement delete() method.
    }

    public function deleteById($signUpId)
    {
        // TODO: Implement deleteById() method.
    }
}
