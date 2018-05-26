<?php

if (! function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @return mixed|MyApp\Application
     */
    function app()
    {
        return new MyApp\Application();
    }
}


if (! function_exists('config')) {
    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed|\Illuminate\Config\Repository
     */
    function config($key = null, $default = null)
    {
        if (is_null($key)) {
            echo app()->config();
            return;
        }
        if (is_array($key)) {
            echo app()->config()->set($key);
            return;
        }
        echo app()->config()->get($key, $default);
        return;
    }
}