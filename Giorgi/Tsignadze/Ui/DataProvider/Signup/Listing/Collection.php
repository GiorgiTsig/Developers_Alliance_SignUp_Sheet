<?php

namespace Giorgi\Tsignadze\Ui\DataProvider\Signup\Listing;

use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

class Collection extends SearchResult
{
   protected function initSelect()
   {
     $this->addFilterToMap('singup_id','main_table.signup_id');
     $this->addFilterToMap('fname','main_table.fname');
     $this->addFilterToMap('date','main_table.date');
     parent::_initSelect();
   }

}
