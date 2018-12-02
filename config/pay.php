<?php
return [
    // 沙箱应用
    // https://openhome.alipay.com/platform/appDaily.htm
    'alipay' => [
        'app_id' => '2016092300576199',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAy/PEog7tDQmnwabKoRKF0DE3IhaJnRKRHMcrYBbz7a2ub9qIdmMkVf8DpAo1XoJ17+3Jz6RB/X9A7xsC7U2pUUOwZVdFtVCU4s5NZq5Y/o338mLipf8KwX7UGy6ep8/HuaGNzv7zpsza2xFVduaMqaS0l/Bhsq//SgTMha6bKRHPZK70s9CfzJdfYE/ymoElCx+4Jrtp35jNEU/QKdVraenNH2KF0xFM1Y4NNldBqaA5HBR1s/54P0RK8IMpfcc5v8SjG/8cvk8Zm+NRb+OHxZ8uz+dJ7vuhxMmKsIkbmc2lcGUxJxe6ngqEewSYnCuweEMXFCmYKtnOodqJ7glCLQIDAQAB',
        'private_key' => 'MIIEowIBAAKCAQEA3ZwWThu8V+hEvu13DUKuY6v9nGHQCrHssSXKFa89RPCJSAo0X0VLUn9hNr0Ud1QRVuQyDNtK5Md2Qh0i7hPf91EYTgyZsYzRNI2iYLhyG29rNXsvsRd2FTBSQAq5pC0ZuGRGFu2fSn9zI9TtJhJfZIFopDO7IkzaRTsJGohyfNt7I5Fr0htcQw46gd6Y2WbhJEA9T4wzLpBYML3VOjApHYlM3KFfqB75AaEjdgqUgxPYBXhP8m5gY+9kXKQegtrzL562/78OrDvGXudIqIVONuqVSX3Na9KO7Cc8plllAHGHEofUMqtAGQAEhBVoxRcIWO944BGY5JDYnhvjz+caowIDAQABAoIBACi54q+AEWDmYpvj8BkTxBC1LupqX11XzXPQyg6qIcxlmBURKwbHKUyD9E2m+ffkDzu0vC34rw7USTtlN2IhbOt6j8joL+adRmUuEkVMIExCcaVmeiFFeoHyW2tBjVRKpYtpgif8i2WZfoN7QgnZHobN8XkbuKxZC1PlwYqKwN+I7sfb0Q3FeJWbskx9yiWQ2sBWaLF3l64LCRdiDjU4swAFG4s0sluC5nveTahlhmfFY3ex8wyjHYyNYxdyEzl7EGPSMOm8o+pbg08Dbnj2KSXiI2y5fsm5dASvNDVK4gYDr1Oa5uduzAEDiUIBDLUPcNxYTSmxXo06DKh6nAZIo8ECgYEA9PNu0n1/DEsTq5KaIpponC/Bv+RwqzfqODOeD/vh840XlDGOMliZfygCuwUwOhHJ/bZvAE9/U/ev9Ml1vEcxTmMv01DpRxPH3Nb/lLZKI2nUQElXKsnvIa5ComGRtLsUFzqu34T2RnmCWGc2/wbXJ6ih7fT50UbCcY6uGwO8kQkCgYEA55sfQ4KNuT618qk1L9yk/W0zOVGYUYPP45JwrV4gdoFkoyaw8Z79Zia3dPd1oNAXiUKX1X2QM/cGkGAkuDMG32bykn0mQo7bhKQ+enaYpWa8hXywICQNIqHlGAFKzm8+i6kJyjQBQF1wXFRsgvMhOqVlO0u1Z5JmjRigck/D9UsCgYAAmwFxH8JKo3ze9bPP1hXgHPYbpVLp+W9oyCfh3juGwJiIUz8IvNNUTyMCl1axLg4TxHmtxISKDpiuwDi8SGjEytX5bb/F3zSlRRrIoVK5l69goU3H20vuB2I+yIL1sWixTgHUp518OxypX0fxhXDOtkoALpTXgZdFdJbVlkLHEQKBgH2MQ0hPTxAqBGuEegZ17yJJvcjGiHE3qMvOKDJyodpbjfg7ExQHgYmMV0qakjMYWonXhYL/S9o/gFlnJMCNOJ6Fqdzq5oCR/EFM32l3PIv8wxkBXGAv6sbpR8zZdnmtKBSBD4OC6WLAxBXo1eGudkbaPaQFCFMas2is/ty4jJs9AoGBAK+vu4lpEr2sDDE6YFaopbjgoozxHFyq2knOmJRoEByzNYsgHCN2Q4OWRt341S9uLDxeOzy49ElWrm1PtBG5Z3lQkCSW6StbE6SwX+IPIwq5L9ACB5sif3aEWLZ2FObglUQ91kqiPQceCmUuNqc9g3p26szrGtFd2tVtTZjTcfGA',
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