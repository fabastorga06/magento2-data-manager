<?php

namespace ConfettiInserts\Manager\Model;

use ConfettiInserts\Manager\Api\Data\ConfettiInsertsPricesExtensionInterface;
use ConfettiInserts\Manager\Api\Data\ConfettiInsertsPricesInterface;
use ConfettiInserts\Manager\Model\ResourceModel\ConfettiInsertsPrices as ResourceModelConfettiInsertsPrices;
use \Magento\Framework\DataObject\IdentityInterface;
use \Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Class ConfettiInsertsPrices
 */
class ConfettiInsertsPrices extends AbstractExtensibleModel implements ConfettiInsertsPricesInterface, IdentityInterface
{
    const CACHE_TAG = 'confetti_inserts_prices';

    /**
     * @var string
     * @codingStandardsIgnoreStart
     */
    protected $_cacheTag = 'confetti_inserts_prices';
    // @codingStandardsIgnoreEnd

    /**
     * @var string
     * @codingStandardsIgnoreStart
     */
    protected $_eventPrefix = 'confetti_inserts_prices';
    // @codingStandardsIgnoreEnd

    /**
     * Initialize resource model
     * @codingStandardsIgnoreStart
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init(ResourceModelConfettiInsertsPrices::class);
    }

    /**
     * @inheritdoc
     */
    public function getSku()
    {
        return $this->_getData(self::SKU);
    }

    /**
     * @inheritdoc
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * @inheritdoc
     */
    public function getCurrency()
    {
        return $this->_getData(self::CURRENCY);
    }

    /**
     * @inheritdoc
     */
    public function setCurrency($currency)
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * @inheritdoc
     */
    public function getPriceLevel()
    {
        return $this->_getData(self::PRICE_LEVEL);
    }

    /**
     * @inheritdoc
     */
    public function setPriceLevel($priceLevel)
    {
        return $this->setData(self::PRICE_LEVEL, $priceLevel);
    }

    /**
     * @inheritdoc
     */
    public function getMinQuantity()
    {
        return $this->_getData(self::MIN_QUANTITY);
    }

    /**
     * @inheritdoc
     */
    public function setMinQuantity($minQuantity)
    {
        return $this->setData(self::MIN_QUANTITY, $minQuantity);
    }

    /**
     * @inheritdoc
     */
    public function getUnitPrice()
    {
        return $this->_getData(self::UNIT_PRICE);
    }

    /**
     * @inheritdoc
     */
    public function setUnitPrice($unitPrice)
    {
        return $this->setData(self::UNIT_PRICE, $unitPrice);
    }

    /**
     * @inheritdoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inheritdoc
     */
    public function setExtensionAttributes(ConfettiInsertsPricesExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}