<?php

namespace Giorgi\Tsignadze\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Giorgi\Tsignadze\Api\Data\SignUpInterface;



interface SignUpRepositoryInterface
{

    public function save(SignUpInterface  $signUp);

    public function get($signUpId);

    public function getList($searchCriteria);

    public function delete(SignUpInterface $signUp);

    public function deleteById($signUpId);
}


