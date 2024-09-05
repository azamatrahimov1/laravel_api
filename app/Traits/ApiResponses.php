<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponses
{
    protected function yes($message): JsonResponse
    {
        return $this->success($message, 200);
    }
    protected function success($message, $status = 200): JsonResponse
    {
        return response()->json([
            'success' => $message,
            'status' => $status,
        ], $status);
    }

    protected function no($message): JsonResponse
    {
        return $this->error($message, 400);
    }
    protected function error(string $message, $status = 400): JsonResponse
    {
        return response()->json([
            'error' => $message,
            'status' => $status,
        ], $status);
    }
}
