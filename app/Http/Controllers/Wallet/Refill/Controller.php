<?php

namespace App\Http\Controllers\Wallet\Refill;

use App\Http\Requests\Wallet\RefillRequest;
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
     * @param RefillRequest $request
     * @return JsonResponse
     */
    public function __invoke(RefillRequest $request)
    {
        return response()->json(['refill']);
    }
}
