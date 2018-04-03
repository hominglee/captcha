<?php

namespace Realhome\Captcha;

use Illuminate\Routing\Controller;

/**
 * Class CaptchaController
 * @package Realhome\Captcha
 */
class CaptchaController extends Controller
{

    /**
     * get CAPTCHA
     *
     * @param \Realhome\Captcha\Captcha $captcha
     * @param string $config
     * @return \Intervention\Image\ImageManager->response
     */
    public function getCaptcha(Captcha $captcha, $config = 'default')
    {
        return $captcha->create($config);
    }

}
