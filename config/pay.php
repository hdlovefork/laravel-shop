<?php
return [
    // 沙箱应用
    // https://openhome.alipay.com/platform/appDaily.htm
    'alipay' => [
        'app_id' => '2016092300576199',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAx6VcvCdjccuR9U5Z+oGTGLK5Y69uRy7Z85sqnY1Kg+i1pMWjp8+YytF+IUvEm5Dr9xL++CsKLUPne/gJk50owNoNlr8p0bHws5ydrQGMDSzUWX7PodJbtNVToqZZ+DeaFPO0D0pdozFcxkbJBVEocB/MtK3xlx/YZeRhqpviIwLOZMZSvb3GLhiegT7a9uumhp3meJwRI9N1WJ/NCIgpucF58R9n3lrzBY4w3yUx64Ak8bLdsNhSWOp7g8kxLu/pKVYn8AXvq4vOVU8r+D2Za5tCgPuARUnROJnPWeQGBblAlI3/aLoUKr5yiisGiofr3KKRZnQBhPVvJfOmH3Zn5wIDAQAB',
        'private_key' => 'MIIEpQIBAAKCAQEAx6VcvCdjccuR9U5Z+oGTGLK5Y69uRy7Z85sqnY1Kg+i1pMWjp8+YytF+IUvEm5Dr9xL++CsKLUPne/gJk50owNoNlr8p0bHws5ydrQGMDSzUWX7PodJbtNVToqZZ+DeaFPO0D0pdozFcxkbJBVEocB/MtK3xlx/YZeRhqpviIwLOZMZSvb3GLhiegT7a9uumhp3meJwRI9N1WJ/NCIgpucF58R9n3lrzBY4w3yUx64Ak8bLdsNhSWOp7g8kxLu/pKVYn8AXvq4vOVU8r+D2Za5tCgPuARUnROJnPWeQGBblAlI3/aLoUKr5yiisGiofr3KKRZnQBhPVvJfOmH3Zn5wIDAQABAoIBAHShiBFrOU8rS7Nw+GO9+r78+gzgWZ5AIpeL2FN+TT/OXP9LbpYEUxB5XiP5bXwsJ42JjWZRTnqvJrZnasDPmRVAzZt5Reb4+tMS9ZIySy0POWanDIlOqMB1t4xXfkvhv6Pp0xDzssw5dCdpBtqSVPtbuGz9CRvuQK8VwnC27F7ipea9CVxRUOY2j3ejiCykWrrC3o1CqCg5Orc5JryRnjFjhhCU7onURLp1B/gzu2P6yggDAFcCXu74xFPg0qXE8DQw5WgUdYFqT8ci8IcTGY76mUe4JQ8+fEou6NBbCt8gP0SqtpBUpnidSNngLA1NEW1jUj75zCXgxZwqTkEgp5ECgYEA889Vt6WkMitCUECoUrumIj9gKbilK9OPxCAdJGrHOnGYmd0OoglBj1G+TK2x56rglvlgxw4KGwZKBUm7jcIJakBN/5PwDqi/OCxguiSXW/zl2jQSeQlQyMyzQwXcJdNLzq4aPMRgqjEVG6pLTOQyh7jGIWfGJYPz3zvHJU53FJ0CgYEA0aC/R1tEpQLoWRiz9D6OyrF3QmK/Dcmuq5Zxhy99mKve8+xatG3TxAYEicUTyFXYVh5tSW06eKCv7P0GQMFTvYB8zMm7XBIIQy8UBm2Fod0I/LZVcDCfQ0j9Ky2VkXgDaFGp92RB8F2j0eKioz10aWfwLbPllzcYCEQKi9btzVMCgYEAvEoyQ7sLvKcF9p6IoCRFYIubQ31TKi6gB/JZL0e7hxo1pRZAd8k4NWwG0IcQLv8bpdz/7ZqdGVPZFI5l50ukI8d3tVrV+Sw/SS2Uog0iS6tbBBJU9d7I4dqc0rUS2K9/CyYQIz/x+14elBgHQWG22HRNp3zSXSSz0YIEAX7Ank0CgYEAqsisraTk0w8AXv4qNjX1PZvBzrsGbmQ+wxqpWXrOd2CnHtETwOWtXomMjvWZvWB7BQZ7ARRVS8uWKJynyH/5Cm2wv2MnGsayJpInXWlDMvESjli6WNG0HyxK3i+gKEi/dfD6aUwsEHkpqyhaWmYJ/oooegOTbFP9Z1aPxQgQ63MCgYEApOati5wCQYkRpJJGGkZKDynpCKkzizdHmDMkyiJVG33DrsK3p6M4v5FOX2m5YUM0J0vCWZUH2l6OAmOgILiN/0BjRgC7TDpcb/1lEvo7HF0salkiFdOD4lQcSWnnzcbsZhCbQif4MTiFpaXOXDY7O4pWvJkRiymvW5XlC4LoGNQ=',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];