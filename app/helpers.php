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
    /**
     * This function returns a direction for sorting
     */
    function directionIsDesc($direction): bool
    {
        return $direction === 'desc' ? true : false;
    }
}
