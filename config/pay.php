<?php

return [
    'alipay' => [
        'app_id'         => '2016092700605344',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtdy168/CaTdYGaqbgJPtsxzdrKxq0ctXG+GNbYkc0izhzFNStYuw4yzx35MY94mHEiZzyr6Noc00aL+ojoBnsAII2hTXAS14iGsvPB5ONTeYrcDZWfxPGafiVxx14FIwlZ6F/99O6Uc+W+x3TCEsb1e8dZZIM6RS22zYpGStDuzt9GNRUbXdbQ2jKthcMWcLxcbwgxGjuzjud/HjcR/Er6mazBXPx+ldbaTXWAT8901quZMxOYGPjfj5PacHNNoPxgu96nzzaS9Ynxxtl6ZVEYpEOvxJyYKZTXSvVHdQbP/za5ixgQEcv4BdAVrmCVE+2/wfOgiCAy/GaNkTjsnMQQIDAQAB',

        'private_key'    => 'MIIEowIBAAKCAQEAvpQzy2/6pJVQ4sIneQW09jv52XKWUXC+s3caOP/9WctEz1/sqq4WKosxCgAy54+7e/BvYBogDD0hVZWSep4MK8MsP2UiEKPR/Pdwks9CxDVEiEFUU87+Mzqf+cjsflUDakEttzD9pwYvZmdqKwb6QOY2B89uQ8xnmzs8X9T0SgSsnrvEXgisnWiFKp9g9VavrQp/rPfVm6Y1J+Qj43eGK1DUf/MoYSRsDLF1q0qQj+nHsdX2eufPYtluRVgs11eGs8LruEmhdnhT/J6vQjb8IC/nN4n51CkE4n2bjsO3Uo0W91jOOyV0r3qjh29/xMCtvrbSeQyub+KHv6SnXFxrTwIDAQABAoIBADQSpJBauX6M+fvrlwN/ZrG9M4iRwbbg+opo6bZXY+9MFjIfgLgmNxJK1Axqf348DLtRt+znVohhj6El7E8qriKrAoUT6hnn2TGono7OqOyZrW8ZgqQfs99ljl6e4tel/PfkdUxPy47+pqbxbNXy4yAmhu7dY8CMsmZ86gM5WcJ7Sbodk2Xp6uJI0R1U2QHKMrBQQdKiilJxgrpco/PhMO/I5PTbJVwaf2g/DOhe86uE1cvXGSEtM9CwqvhCRj+l+82LBDlWK1ynxNNzBV8oe1tUMLKZTb9cOlcLXJ2PbUhLK8yetQWqQTZX36zl2tsaGOjlfG0B67NdJ9vGp3miRjECgYEA4znbZZ1nB2fXmFxkCUVqN7t6kQFW9xkD/DHG9ASCPbL+UQek/a8S92Hhec2a54oP6B9LKdcg7aI2osvuoKzWFTjw/X6NzQwE0Aow56gIACCh2K7MBPRzGwiSKnwZSkurNwbs6tfInHFfZGY/6h3oHvGXvDmNRpIxr9M/vXGgbVkCgYEA1rZUykQt8zSvHNacH0ewIdhjOfvWqnywW9/OjdTn6zs1fwcFjcrfugVtxH2/RV9WW/BPzMO1p7no7AcKRWpy3n6C0cHIr61ph6WEoJ1CYHWlpRqBQBrL8rJWjYXy4XVMfl8Q3sPiyVZolpFYau+HJDWxD0O1xyUzrZRSrsFvwOcCgYEAlosSjLRIOmPWNx+fN3VB9kLD5aZZk8SDG2dvRORn1bDtRYonCdwgWL4EwMozwwt5lnSFO+dH7aj3QcyTAOkBvXXIVGqwUBWSarMVy6VMB6mXERReHzpFuLdo/7TQnKSdfwubk8v7IYsLhF0qI1ZFH5s4yH/o1cSuHqt7I2xQuaECgYALB+0NQzl1IETK33+/36f95Scb6INb2PIalkH/aWvM2wrhjtPLOBwMa5D7Ila8UqyWJp+C7p8bkeKUlbwCWvix06AW9LTByc/9JxTMR6gMWp76/4SabYYC3wSxWqtix+r5JxsvxrKVE3pmGeuH+uxfgN6q4RiqtY+VIGSrE8cRCwKBgH1SqFkaM0v21eXAX0Xent+bfZOw8u3zv+GVu/lgQn8hyeDr9dLZEw92sDtRpLH9fa8hfxK2rTen8LGW1VKEcx8CJWYZr3SvKJyOtqLeaB/yllAxYE66s0JQXDH2hR6ZKMXgeI/jfkihdtj1Awkq47LBh2cQTvF8DKIlA/oNednH',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
