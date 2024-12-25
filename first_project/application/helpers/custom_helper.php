<?php

use Illuminate\Support\Collection;

if (! function_exists('collectCollection')) {
    /**
     * Create a collection from the given value.
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param  \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|iterable<TKey, TValue>|null  $value
     * @return \Illuminate\Support\Collection<TKey, TValue>
     */
    function collectCollection($value = [])
    {
        echo "hello";
        return new Collection($value);
    }
}
