<?php
/**
 * Price calculation extension point
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Model\Product;

use Magento\Catalog\Model\Product;

/**
 * @api
 */
interface PriceModifierInterface
{
    /**
     * Modify price
     *
     * @param mixed $price
     * @param Product $product
     * @return mixed
     * @api
     */
    public function modifyPrice($price, Product $product);
}
