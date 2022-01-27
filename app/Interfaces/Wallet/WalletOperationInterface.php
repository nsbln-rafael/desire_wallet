<?php

namespace App\Interfaces\Wallet;

interface WalletOperationInterface
{
    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return string
     */
    public static function getName(): string;
}
