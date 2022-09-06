<?php

namespace Giorgi\Tsignadze\Model;

use Giorgi\Tsignadze\Api\Data\SignUpInterface;
use Giorgi\Tsignadze\Api\SignUpRepositoryInterface;
use Giorgi\Tsignadze\Model\ResourceModel\SignUp;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Giorgi\Tsignadze\Model\ResourceModel\SignUp\CollectionFactory;
use Giorgi\Tsignadze\Model\SignUpFactory;



class SignUpRepository implements SignUpRepositoryInterface
{
    protected $resource;

    protected $slideFactory;

    protected $searchResultsFactory;

    protected $SignUpCollectionFactory;

    public function __construct(SignUp $resource, SignUpFactory $signUpFactory, SearchResultsInterface $searchResultsFactory, CollectionFactory $SignUpCollectionFactory)
    {
        $this->resource=$resource;

        $this->signUpFactory=$signUpFactory;

        $this->searchResultsFactory = $searchResultsFactory;

        $this->SignUpCollectionFactory = $SignUpCollectionFactory;

    }

    public function save(SignUpInterface $signUp)
    {
        $this->resource->save($signUp);
        return $signUp;
    }

    public function get($signUpId)
    {
        $signUp = $this->signUpFactory->create();
        $this->resource->load($signUp ,$signUpId);
        return $signUp;
    }

    public function getList($searchCriteria)
    {
        $searchResults = $this->searchResultsFactory;
        $searchResults->setSearchCriteria($searchCriteria);
        $collection = $this->SignUpCollectionFactory->create();
        return $this->searchResultsFactory;

    }

    public function delete(SignUpInterface $signUp)
    {
        $this->resource->delete($signUp);
    }

    public function deleteById($signUpId)
    {
        $this->delete($this->get($signUpId));
    }
}
