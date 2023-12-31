<?php

if (!function_exists('baseURL')) {
    function baseURL()
    {
        // return 'http://41.59.227.219/membership'; #test API
        return 'http://41.59.228.145:2023'; # LIVE API
        
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

function countMembers(){
    $URL  = baseUrl().'/list-members';
    $result  =  Http::post($URL);
    $members = json_decode($result);
        
    return count($members);
}



function billedAmount(){
    $URL  = baseUrl().'/list-bills';
    $result  =  Http::post($URL,
    [
        'paid_status'=>'0',
    ]);
    $members = json_decode($result);

    $amount = [];
    foreach($members as $member){
        $amount[] = $member->amount;
    }
        
    return array_sum($amount);
}



function totalPaid(){
    $URL  = baseUrl().'/list-bills';
    $result  =  Http::post($URL,
    [
        'paid_status'=>'1',
    ]);
    $members = json_decode($result);

    $amount = [];
    foreach($members as $member){
        $amount[] = $member->amount;
    }
        
    return array_sum($amount);
}




function permissions()
{
    $permissions = json_decode(Request::cookie('perm'));

    return $permissions;
}

function token()
{
    return Request::cookie('token');
}



function fullname()
{
    return Request::cookie('fullname');
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






