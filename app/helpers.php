<?php

if (! function_exists('getShortenBody')) {
    /**
     * This function returns a limited string
     */
    function limitStringLength($string, $length): string
    {
        return mb_strlen($string) > $length ? mb_substr($string, 0, $length).'...' : $string;
    }
}

if (! function_exists('directionIsDesc')) {
    function directionIsDesc($direction): bool
    {
        return $direction === 'desc';
    }
}

if (! function_exists('initSort')) {
    function initSort(
        $data,
        $defaultField = null,
        $defaultFieldDirection = null
    ): array {
        return $data ?? ['field' => $defaultField, 'direction' => $defaultFieldDirection];
    }
}
