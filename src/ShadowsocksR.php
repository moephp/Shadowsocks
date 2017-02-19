<?php


namespace Shadowsocks;


class ShadowsocksR
{
    const Protocol = [
        // origin,verify_sha1,auth_sha1_v2,auth_sha1_v4,auth_aes128_md5,auth_aes128_sha1
        "origin",
        "verify_sha1",
        "auth_sha1_v2",
        "auth_sha1_v4",
        "auth_aes128_md5",
        "auth_aes128_sha1"
    ];

    const Obfs = [
        //  plain,http_simple,http_post,tls1.2_ticket_auth
        "plain",
        "http_simple_compatible",
        "http_post_compatible",
        "tls1.2_ticket_auth_compatible"
    ];
}