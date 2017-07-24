<?php

use Shadowsocks\Util;

class UtilTest extends TestCase
{
    public function testSsrQrStr()
    {
        $server = '127.0.0.1';
        $port = 1234;
        $pwd = 'aaabbb';
        $method = 'aes-128-cfb';
        $protocol = 'auth_aes128_md5';
        $protocolParam = '';
        $obfs = 'tls1.2_ticket_auth';
        $obfsParam = 'breakwa11.moe';
        $comment = '测试中文';
        $group = 'group';

        $str = Util::genSsrQrStr($server,$port,$pwd,$method,$protocol,$protocolParam,$obfs,$obfsParam,$comment,$group,0,0);

        var_dump($str);
    }
}