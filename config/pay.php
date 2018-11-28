<?php

return [
    'alipay' => [
        'app_id'         => '2016091900549965',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4ps53k5otvPQ2lZBAd+nLet4j/Y37nzw8KFbbAaNERRU9T0OsJPM6benK4HS//XNM1/fKFofHBVcy+aA3+zL0V+VJWX4ulcG1GcSnDQjhVgB5uNvLhi9Q0ZmHMjxrPboF+0CPiW32a3kwevF490jT6JrruvW1z0ZcU09JAIj13XtQkYCgJqIzsi40wYBefzt/yrF4jxKYfnGuZXRRX/aESyT4YkeQlbj6hD+BpB2AcEQwPHYz1rttjm4EJ4L8gb8o3VZrp3FbSjOI/wOR6BRX172eNVhpvNS02E5VMRVSNxT4lptrYPOY0Pwm08V6MaAggh1BCKRZirfK+JCkn+EtQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAqB7Mh9+782e1HS5Bw5QoT62wacK7T9ZrgFq5hrZQ8GzmxTFETpb7oVJSbBiXUUwRCQ/HAJsMpOm2eE1uGVZPjEJSbkRb1KsIyIdDx4StXAqxEhMxztOCv+ePS6jJnTMx9C0b2BNO5uFtI0w5ELjR3dwyDLmlMInbkZhenrwe9kbfB+LwrmSVWwA9xaus469Pht3frIhVck8Mi/eNmYFfNO931/IFdMR0/Jh34XxbE2dHY56ViNUANk1GEzB2EFLlsFoItiz38oV9Mh/NkVPatnNT4vYH6JhEVaKXpfv7jU5aIPxQFZadDJQxG+deO/uoAvEtW2H5BsgSAplRDWXwyQIDAQABAoIBAAuUY34QWP/A6uahowH3mHc0fWwrb39mQ21J0nGG6ThGJ/b5F71aBObtpqOvZezBkoLPRWOzSkGpn1nV63lvSndcshTKPJD/XtGBD5gUeWRXkC6wh8O5Kc5SArqxW4GqXwx0dvCBE/QvHrdJrryKHlprqj7aIpifRjJXDl1ck71es7MWIljhas1UkzYVtY7Z6A+2E3vRzfC+2s3IsLmrCD+ylKnrYFSADxumDRd/tAVfJT5MFEArpQv/+wJcMfFyp/4x4ZQnuR5iD4D6RT5FARocyIfiUNaOf1/OVBOYW6q0owKGJ48IVaXZ4RxTA3jSLU5ErKSzQv4JvW0wQ7/yxgkCgYEA1TYzGu7U0oKnZ90nP+++IMv4CWZOidzAve2Rn9EXYcpgxm8UwMT9jDWHlQLLrPr3RwMNVB5r4g1OmH2DbLqhPA42JKBSACdfezP1D8sqjIK7T5MmYMAGC5gImFYwTIImI7fKZM7+6sCGvj7sEuZBwjGln3txCiR7QTQLeeCVDlsCgYEAydwEmHD4sngysbA00lKuqe5iiWDOvFqkrWfelYSZhQfxsUSQ61CXaA6SQxRoka2jdiTUtlezkaWXLWUs2WBSatxynuTlN6VPpCGuh0yrU3g75L3mEfSL/Li9u5nzbKEzdS63Ez9W5GuciU9Oj0kn6aYU1OoKlaiGd0MPF3mTLqsCgYAKbhpV6PUUTzvtQs5WvF2qsQ+zNgQFjn0HTYXgMZRZPlM5odl8DKbyovO9AGQCVEygdq/CO7K/XjNIFmvFd+PHUlKnvAgG5eYv2rzURvYP5Z1QKTypYvtouclB2oWGWJ+RA76s68tgpIZy7BUUX5s76r3VbW58NoipCei9z5S7HQKBgE2xKPOjR5UpPhm1wB7TQ/aTkcleQTOtj4ROXhUeHBhfnl6kDUMEmcGrGhBHYpfvROLL+jLUPoDoQu9t6X0g3ZfTkSom3zIzpht9+zaIA8j0ldjMXii6/sYeNKhn8JD22l9Xw47c6gywfmc65vmvJnV/PrVT/w7q9hYg8UYPvN5RAoGAGNg6m90Sg0/UTi+OSqH34PzxQMkEF/vta8thsspaHmL9jkAas+JOpdbWHlxgHXoaf0pddVygVLX79Ocay6q7U3os76NT3UX4tE5XpX2PNIQuCiRkveMcT0wFNMFlOR4ixxTF2QSIsHetgJVcSMGx+GpTUprDXkiiWmc+JtX1tZo=',
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
