<?php

namespace Neo\LumenCaptcha;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

/**
 * Class CaptchaController
 * @package Mews\Captcha
 */
class LumenCaptchaController extends Controller
{
    /**
     * get CAPTCHA
     * @param Captcha $captcha
     * @param string $type
     * @param $captchaId
     * @return \Intervention\Image\ImageManager
     */
    public function getCaptcha(Captcha $captcha, $type = 'default', $captchaId)
    {
        return $captcha->createById($type, $captchaId);
    }
}
