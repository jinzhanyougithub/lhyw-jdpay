<?php

namespace Lhyw\JdPay;

class JdPay
{
    public static function execute($config)
    {
        $data = [];

        $data['v_mid'] = config('jd.v_mid'); //商户ID
        $data['v_url'] = config('jd.v_url'); //支付完成 返回地址
        $data['key'] = config('jd.key');
        $data['remark2'] = config('jd.remark2'); // 支付完成 异步通知
        $data['v_oid'] = $config['order_sn']; //订单号
        $data['v_amount'] = 1; //订单金额
        $data['v_moneytype'] = 'CNY'; //金额类型
        $text = $data['v_amount'] . $data['v_moneytype'] . $data['v_oid'] . $data['v_mid'] . $data['v_url'] . $data['key'];
        $data['v_md5info'] = strtoupper(md5($text)); //MD5加密
        $data['remark1'] = '保证金支付'; //备注
        $data['pmode_id'] = 3080; //银行ID

        return $data;
    }
}