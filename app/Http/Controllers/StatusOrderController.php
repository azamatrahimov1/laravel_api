<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeOrderStatusRequest;
use App\Models\Order;
use App\Models\Status;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;

class StatusOrderController extends Controller
{
    use ApiResponses;

    public function store(Status $status, ChangeOrderStatusRequest $request): JsonResponse
    {
        $order = Order::findOrFail($request['order_id']);
        $order->update(['status_id' => $status->id]);

        return $this->yes('Status changed');
    }
}
