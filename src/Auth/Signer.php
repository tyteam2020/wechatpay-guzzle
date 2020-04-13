<?php
/**
 * Signer
 * PHP version 5
 *
 * @category Class
 * @package  WechatPay
 * @author   WeChat Pay Team
 * @link     https://pay.weixin.qq.com
 */

namespace TyTeam\WechatPay\Auth;

use TyTeam\WechatPay\Auth\SignatureResult;

/**
 * Interface abstracting Signer.
 *
 * @package  WechatPay
 * @author   WeChat Pay Team
 */
interface Signer
{

    /**
     * Sign Message
     *
     * @param string $message Message to sign
     *
     * @return SignatureResult
     */
    public function sign($message);
}
