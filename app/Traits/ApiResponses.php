<?php

namespace App\Traits;

trait ApiResponses
{
    protected function yes($message)
    {
        return $this->success($message, 200);
    }
    protected function success($message, $status = 200)
    {
        return response()->json([
            'success' => $message,
            'status' => $status,
        ], $status);
    }

    protected function no($message)
    {
        return $this->error($message, 400);
    }
    protected function error(string $message, $status = 400)
    {
        return response()->json([
            'success' => $message,
            'status' => $status,
        ], $status);
    }
}
