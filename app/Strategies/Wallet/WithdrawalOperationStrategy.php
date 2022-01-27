<?php

namespace App\Strategies\Wallet;

use App\Interfaces\Wallet\WalletOperationInterface;

class WithdrawalOperationStrategy implements WalletOperationInterface
{
    public const NAME = 'Withdrawal';

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
