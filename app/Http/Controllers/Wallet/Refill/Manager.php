<?php

namespace App\Http\Controllers\Wallet\Refill;

use App\Strategies\Wallet\OperationStrategiesRepository;
use App\Strategies\Wallet\RefillOperationStrategy;

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
    public function refill()
    {
        $strategy = $this->strategiesRepository->get(RefillOperationStrategy::NAME);

        $strategy->execute();
    }
}
