<?php
namespace Yazdan\MobileAuth\Facade;

use Illuminate\Support\Facades\Facade;

class MobileAuthFacade extends Facade
{

    protected static function getFacadeAccessor() : string
    {
        return 'MobileAuth';
    }

}

