<?php

namespace Realhome\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Realhome\Captcha
 */
class Captcha extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() { return 'captcha'; }

}
