<?php

namespace App\Strategies\Wallet;

use App\Interfaces\Wallet\WalletOperationInterface;

class TransferOperationStrategy implements WalletOperationInterface
{
    public const NAME = 'Transfer';

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
