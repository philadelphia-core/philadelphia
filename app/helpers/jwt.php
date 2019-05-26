<?php
  
  use Firebase\JWT\JWT as JWToken;
  use PhiladelPhia\App\Settings;

  $settings = new Settings('./settings.ini');

  class JWT {
    
    public static function create_tokenId() : string {
      $byte = openssl_random_pseudo_bytes(32);
      return base64_encode($byte);
    }

    public static function create(string $token, array $data) {
      global $settings;
      $issuedAt = time();
      $tokenId = $token; 
      $notBefore = $issuedAt + 10;
      $expire = $notBefore + 60;
      
      $data_token = [
        'iat' => $issuedAt,
        'jti' => $tokenId,
        'iss' => $settings->get('jwt.host'),
        'nbf' => $notBefore,
        'exp' => $expire,
        'data' => [
          'userId' => $data['id'],
          'userName' => $data['username']
        ]
      ];

      $jwt = JWToken::encode(
                    $data_token, 
                    $settings->get('jwt.privateKey'), 
                    $settings->get('jwt.algorithm'));

      return ['token' => $jwt, 'refresh_token' => self::create_tokenId()];
    }

    public static function decode(string $jwt) {
      $decode = JWToken::decode(
                      $jwt, 
                      $settings->get('jwt.privateKey'),
                      array($settings->get('jwt.algorithm')));

      return $decode;
    }
  }