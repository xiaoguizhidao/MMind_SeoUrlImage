<?php

/**
 * MageMind
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magemind.com/magento-license
 *
 * @category   model
 * @package    MMind_SeoUrlImage
 * @copyright  Copyright (c) 2015 MageMind (http://www.magemind.com)
 * @license    http://www.magemind.com/magento-license
 */
class MMind_SeoUrlImage_Model_Product_Media_Config extends Mage_Catalog_Model_Product_Media_Config
{
    /**
     * Filesystem directory path of product images
     * relatively to media folder
     *
     * @return string
     */
    public function getBaseMediaPathAddition()
    {
        return 'product';
    }

    /**
     * Web-based directory path of product images
     * relatively to media folder
     *
     * @return string
     */
    public function getBaseMediaUrlAddition()
    {
        return 'product';
    }

    public function getBaseMediaPath()
    {
        return Mage::getBaseDir('media') . DS . 'product';
    }

    public function getBaseMediaUrl()
    {
        return Mage::getBaseUrl('media') . 'product';
    }
}