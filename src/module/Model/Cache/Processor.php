<?php
/**
 * Custom store code
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @copyright Copyright (c) 2016 EcomDev BV (http://www.ecomdev.org)
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author    Ivan Chepurnyi <ivan@ecomdev.org>
 */

/**
 * Custom cache processor
 *
 */
class EcomDev_CustomStoreCode_Model_Cache_Processor
{
    /**
     * Sets custom request object into application, 
     * so custom store matching functionality will work
     * 
     * @param string|bool $content
     * @return string|bool
     */
    public function extractContent($content)
    {
        Mage::app()->setRequest(
            new EcomDev_CustomStoreCode_Model_Rewrite_Http_Request()
        );
        return $content;
    }
}
