<?php

namespace App\Strategies\Wallet;

use App\Interfaces\Wallet\WalletOperationInterface;
use Exception;

class OperationStrategiesRepository
{
    /**
     * @var WalletOperationInterface[]
     */
    private $strategies;

    public function __construct()
    {
        foreach (config('services.walletOperationStrategies') as $strategyClass) {
            /** @var WalletOperationInterface $strategyClass */
            if (!isset($strategies[$strategyClass::getName()])) {
                $this->strategies[$strategyClass::getName()] = new $strategyClass;
            }
         }
    }

    /**
     * @param string $name
     * @return WalletOperationInterface
     * @throws Exception
     */
    public function get(string $name): WalletOperationInterface
    {
        $result = $this->strategies[$name] ?? null;

        if (is_null($result))
        {
            throw new Exception('Strategy not found:' . $name);
        }

        return $result;
    }
}
