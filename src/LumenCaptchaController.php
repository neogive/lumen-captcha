<?php
namespace Neo\LumenCaptcha;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

/**
 * Class CaptchaController
 */
class LumenCaptchaController extends Controller
{
    /**
     * 
     *
     * @access public
     *
     * @author xuao & 2018-09-08T09:52:43+0800
     *
     * @param  Captcha Neo\LumenCaptcha\Captcha   
     * @param  string  string     
     * @param  [type]  string
     *
     * @return
     */
    public function getCaptcha(Captcha $captcha, $type = 'default', $captchaId)
    {
        return $captcha->createById($type, $captchaId);
    }

}