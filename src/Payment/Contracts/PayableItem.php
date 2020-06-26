<?php

namespace Madnest\Madstore\Payment\Contracts;

interface PayableItem
{
    /**
     * Get Payment option title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get Payment option amount
     *
     * @return integer
     */
    public function getAmount(): int;

    /**
     * Get Payment option price
     *
     * @return integer
     */
    public function getPrice(): float;
}
