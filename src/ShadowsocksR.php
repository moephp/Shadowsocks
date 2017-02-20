<?php


namespace Shadowsocks;


class ShadowsocksR
{
    const Protocol = [
        "origin",
        "verify_deflate",
        "auth_sha1_v4",
        "auth_sha1_v4_compatible",
        "auth_aes128_md5",
        "auth_aes128_sha1"
    ];

    const Obfs = [
        "plain",
        "http_simple",
        "http_simple_compatible",
        "http_post",
        "http_post_compatible",
        "tls1.2_ticket_auth",
        "tls1.2_ticket_auth_compatible"
    ];
}