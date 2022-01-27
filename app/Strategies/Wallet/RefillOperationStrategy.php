<?php

namespace App\Strategies\Wallet;

use App\Interfaces\Wallet\WalletOperationInterface;

class RefillOperationStrategy implements WalletOperationInterface
{
    public const NAME = 'Refill';

    /**
     * @return mixed|void
     */
    public function execute()
    {
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return self::NAME;
    }
}
