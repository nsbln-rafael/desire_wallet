<?php

namespace App\Http\Controllers\Wallet\Transfer;

use App\Http\Requests\Wallet\TransferRequest;
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
     * @param TransferRequest $request
     * @return JsonResponse
     */
    public function __invoke(TransferRequest $request)
    {
        try {
            $this->manager->transfer();
        } catch (\Exception $e) {

        }

        return response()->json(['transfer']);
    }
}
