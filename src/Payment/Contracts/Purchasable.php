<?php

namespace Madnest\Madstore\Payment\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Madnest\Madstore\Payment\Contracts\HasPayerInfo;
use Madnest\Madstore\Shipping\Contracts\ShippableItem;
use Madnest\Madstore\Shipping\Contracts\ShippingOption;

interface Purchasable
{
    /**
     * Get model
     *
     * @return void
     */
    public function getModel(): Model;

    /**
     * Get language
     *
     * @return void
     */
    public function getLanguage(): string;

    /**
     * Get currency code
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Get UUID
     *
     * @return string
     */
    public function getUUID(): string;

    /**
     * Get variable symbol
     *
     * @return string
     */
    public function getVarSymbol(): string;

    /**
     * Get price sum
     *
     * @return integer
     */
    public function getAmount(): int;

    /**
     * Get discount amount
     *
     * @return integer
     */
    public function getDiscountAmount(): int;

    /**
     * Get final amount
     *
     * @return integer
     */
    public function getFinalAmount(): int;

    /**
     * Get final price
     *
     * @return integer
     */
    public function getFinalPrice(): float;

    /**
     * Get Purchasable items collection
     *
     * @return Collection
     */
    public function getItems(): Collection;

    /**
     * Get payer info
     *
     * @return HasPayerInfo
     */
    public function getPayerInfo(): HasPayerInfo;

    /**
     * Get ShippingOption
     *
     * @return ShippingOption
     */
    public function getShippingOption(): ShippingOption;

    /**
     * Get ShippableItem
     *
     * @return ShippableItem
     */
    public function getShippableItem(): ShippableItem;

    /**
     * Get PaymentOption
     *
     * @return PaymentOption
     */
    public function getPaymentOption(): PaymentOption;

    /**
     * Get PaymentOptionItem
     *
     * @return PaymentOptionItem
     */
    public function getPaymentOptionItem(): PaymentOptionItem;
}
