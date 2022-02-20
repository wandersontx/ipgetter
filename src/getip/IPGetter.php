<?php

namespace IPGetter;

class IPGetter
{

    /**
     * get IP address of the user
     * 
     * @return void
     */
    public static function getIPAdress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}