<?php

namespace App\Http\Controllers\Wallet\Withdrawal;

use App\Http\Requests\Wallet\WithdrawalRequest;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    /**
     * @var Manager
     */
    private $manager;

    /**
     * @param Manager $manager
     */
    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param WithdrawalRequest $request
     * @return JsonResponse
     */
    public function __invoke(WithdrawalRequest $request)
    {
        return response()->json(['withdrawal']);
    }
}
