<?php

namespace Services\GlitterInserts\Api\Data;

use Magento\Framework\Api\CustomAttributesDataInterface;

/**
 * Interface GlitterMetallicInsertsPricesInterface
 */
interface GlitterMetallicInsertsPricesInterface extends CustomAttributesDataInterface
{
    const TABLE        = 'glitter_metallic_inserts_prices';
    const ID           = 'id';
    const SKU          = 'sku';
    const CURRENCY     = 'currency';
    const PRICE_LEVEL  = 'price_level';    
    const MIN_QUANTITY = 'min_quantity';
    const UNIT_PRICE   = 'unit_price';

    /**
     * Retrieve the sku
     *
     * @return string
     */
    public function getSku();

    /**
     * Set sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * Retrieve currency
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Set currency
     *
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency);

    /**
     * Retrieve price level
     *
     * @return string
     */
    public function getPriceLevel();

    /**
     * Set price level
     *
     * @param string $priceLevel
     * @return $this
     */
    public function setPriceLevel($priceLevel);

    /**
     * Retrieve minimum quantity
     *
     * @return int
     */
    public function getMinQuantity();

    /**
     * Set min quantity
     *
     * @param int $minQuantity
     * @return $this
     */
    public function setMinQuantity($minQuantity);

    /**
     * Retrieve minimum quantity
     *
     * @return float
     */
    public function getUnitPrice();

    /**
     * Set min quantity
     *
     * @param float $minQuantity
     * @return $this
     */
    public function setUnitPrice($unitPrice);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Services\GlitterInserts\Api\Data\GlitterMetallicInsertsPricesExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Services\GlitterInserts\Api\Data\GlitterMetallicInsertsPricesExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Services\GlitterInserts\Api\Data\GlitterMetallicInsertsPricesExtensionInterface $extensionAttributes);
}