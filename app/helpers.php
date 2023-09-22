<?php

if (!function_exists('baseURL')) {
    function baseURL()
    {
        // return 'http://41.59.227.219/membership'; #test API
        return 'http://41.59.228.145:2023';
        
    }
}

if (!function_exists('sector')) {
    function sector()
    {
        $URL  = baseURL().'/sectors';
        $result  =  Http::get($URL);
        $result = json_decode($result);
        return $result;

    }
}

if (!function_exists('professional_category')) {
    function professional_category()
    {
        $URL  = baseURL().'/professional-categories';
        $result  =  Http::get($URL);
        $result = json_decode($result);
        return $result;

    }
}

if (!function_exists('regions')) {
    function regions()
    {
        $URL  = baseURL().'/regions';
        $result  =  Http::get($URL);
        $result = json_decode($result);
        return $result;

    }
}

if (!function_exists('countries')) {
    function countries()
    {
        $URL  = baseURL().'/countries';
        $result  =  Http::get($URL);
        $result = json_decode($result);
        return $result;

    }
}






