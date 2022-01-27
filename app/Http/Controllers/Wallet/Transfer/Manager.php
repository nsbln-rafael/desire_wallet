<?php

namespace App\Http\Controllers\Wallet\Transfer;

use App\Strategies\Wallet\OperationStrategiesRepository;
use App\Strategies\Wallet\TransferOperationStrategy;

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
    public function transfer()
    {
        $strategy = $this->strategiesRepository->get(TransferOperationStrategy::NAME);

        $strategy->execute();
    }
}
