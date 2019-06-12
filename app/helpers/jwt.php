<?php
  
  use Firebase\JWT\JWT as JsonWebToken;

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
        'iss' => JWT['iss'],
        'nbf' => $notBefore,
        'exp' => $expire,
        'data' => [
          'userId' => $data['id'],
          'userName' => $data['username']
        ]
      ];

      $jwt = JsonWebToken::encode(
                    $data_token, 
                    JWT['privateKey'], 
                    JWT['algorithm']);

      return ['token' => $jwt, 'refresh_token' => self::create_tokenId()];
    }

    public static function decode(string $jwt) {
      $decode = JsonWebToken::decode(
                      $jwt, 
                      JWT['privateKey'],
                      array(JWT['algorithm']));

      return $decode;
    }
  }