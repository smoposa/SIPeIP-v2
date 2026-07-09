<?php

namespace App\Services;

abstract class BaseService
{
    /**
     * Respuesta estándar de éxito.
     */
    protected function success(
        string $message,
        mixed $data = null
    ): array {
        return [
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ];
    }

    /**
     * Respuesta estándar de error.
     */
    protected function error(
        string $message,
        mixed $data = null
    ): array {
        return [
            'success' => false,
            'message' => $message,
            'data'    => $data,
        ];
    }
}