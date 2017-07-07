<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Cms\Model\Page\Source;

/**
 * Custom layout source
 */
class CustomLayout extends PageLayout
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return array_merge([['label' => 'Default', 'value' => '']], parent::toOptionArray());
    }
}
