<?php


namespace Shadowsocks;


trait UtilTrait
{
    /**
     * @param $server
     * @param $port
     * @param $pwd
     * @param $method
     * @return string
     */
    public static function genQrStr($server, $port, $pwd, $method)
    {
        // method:password@hostname:port
        $txt = sprintf('%s:%s@%s:%u', $method, $pwd, $server, $port);
        // ss://base64(str)
        return sprintf('ss://%s', base64_encode($txt));
    }

    /**
     * @param $server
     * @param $port
     * @param $pwd
     * @param $method
     * @param $protocol
     * @param $obfs
     * @param $obfsParam
     * @param $protoParam
     * @param string $remark
     * @param string $group
     * @param int $udp
     * @param int $uot
     * @return string
     */
    public static function genSsrQrStr($server, $port, $pwd, $method, $protocol, $obfs, $obfsParam, $protoParam, $remark = '', $group = 'Default', $udp = 0, $uot = 0)
    {
        $trimStr = '_compatible';
        $protocol = rtrim($protocol, $trimStr);
        $obfs = rtrim($obfs, $trimStr);

        // &udpport=%s&uot=%s
        // ssr://base64(host:port:protocol:method:obfs:base64pass/?obfsparam=base64param&protoparam=base64param&remarks=base64remarks&group=base64group&udpport=0&uot=0)
        $format = "%s:%s:%s:%s:%s:%s/?obfsparam=%s&protoparam=%s&remarks=%s&group=%s&udpport=%s&uot=%s";
        $str = sprintf($format, $server, $port, $protocol, $method, $obfs, self::urlEncode($pwd), self::urlEncode($obfsParam), self::urlEncode($protoParam), self::urlEncode($remark), self::urlEncode($group), $udp, $uot);
        return sprintf("ssr://%s", self::urlEncode($str));
    }


    /**
     * @param $input
     * @return mixed
     */
    public static function urlEncode($input)
    {
        $encoded = strtr(base64_encode($input), '+/', '-_');
        return rtrim($encoded, '=');
    }
}