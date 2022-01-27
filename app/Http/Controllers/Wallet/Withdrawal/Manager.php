<?php

namespace App\Http\Controllers\Wallet\Withdrawal;

use App\Strategies\Wallet\OperationStrategiesRepository;
use App\Strategies\Wallet\WithdrawalOperationStrategy;

class Manager
{
    /**
     * @var OperationStrategiesRepository
     */
    private $strategiesRepository;

    /**
     * @param OperationStrategiesRepository $strategiesRepository
     */
    public function __construct(OperationStrategiesRepository $strategiesRepository)
    {
        $this->strategiesRepository = $strategiesRepository;
    }

    /**
     * @return void
     * @throws \Exception
     */
    public function withdrawal()
    {
        $strategy = $this->strategiesRepository->get(WithdrawalOperationStrategy::NAME);

        $strategy->execute();
    }
}
