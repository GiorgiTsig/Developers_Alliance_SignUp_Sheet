<?php

namespace Giorgi\Tsignadze\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class YesNO implements ArrayInterface
{
    /**
     * @return array|void
     */
    public function toOptionArray()
    {
        return [
            ['value' => '0', 'label' => __('No')],
            ['value' => '1', 'label' => __('Yes')]
        ];
    }
}
