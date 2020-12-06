<?php

class Token {

    public static $error = []; // Error Holder


    // Function to extraxt the Bearer token from the header of request
    private static function getBearerToken() {

        $headers = NULL;

        if (isset($_SERVER['Authorization'])) {

            $headers = trim($_SERVER["Authorization"]);

        }else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI

            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);

        }elseif (function_exists('apache_request_headers')) {

            $requestHeaders = apache_request_headers();

            // Server-side fix for bug in old Android versions 
            // (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));

            if (isset($requestHeaders['Authorization'])) {

                $headers = trim($requestHeaders['Authorization']);

            }
        }

        // If headers has data
        if ($headers) {
            // Exploding the $header to extract all the info provided
            $bearer_token = explode(" ", trim($headers));

            // Selecting the last item from array as it is the actual token
            return array_pop($bearer_token);
        }

        return NULL;

    }

    public static function create(array $payload) {

        // Token Header
        $json_token_header = json_encode(
            [
                'typ'=>Config::TOKEN_TYPE,
                'alg'=>Config::TOKEN_HASH_ALGORITHM,
                'iat'=>time(),
                'exp'=>time()+Config::TOKEN_EXPIRY_TIME
            ]
        );

        // Token Payload
        $json_token_payload = json_encode(
            $payload
        );

        // Token Signature
        $base64_token_signature = base64_encode(
            hash_hmac(
                Config::TOKEN_HASH_ALGORITHM, 
                $json_token_header.$json_token_payload, 
                Config::TOKEN_SECRET_KEY
            )
        );

        return base64_encode($json_token_header).'.'.base64_encode($json_token_payload).'.'.$base64_token_signature;

    } // Token - create()


    // Need to pass the token if token is not received as bearer token
    // If token is passed through: Header > Aurtherization > Bearer; the function handels the token itself
    public static function verify(string $token = '') {

        if(!$token) $token = self::getBearerToken();
        if(!$token){
            self::$error = 'EMPTY_TOKEN: Token was not submitted or submitted empty.';
            return FALSE;
        }

        // Exploding token into header, payload and signature
        $token = explode(
            '.',
            $token
        );

        // Checking the completeness of token
        if( count( $token ) !== 3 ) {
            self::$error = 'INVALID_TOKEN: Token must contain header, payload and signature only.';
            return FALSE;
        }

        // Base64 decoding of token header
        $received_token_header = base64_decode(
            $token[0]
        );
        
        // Checking the expiry of token
        $header = json_decode($received_token_header, TRUE);
        if($header !== NULL && $header['exp'] < time()) {
            self::$error = 'EXPIRED_TOKEN: Token was expired.';
            return FALSE;
        }

        // Base64 decoding of token payload
        $reveived_token_payload = base64_decode(
            $token[1]
        );

        // Base64 decoding of token signature
        $received_token_signature = base64_decode(
            $token[2]
        );

        // hash_hmac(hashing_algo, hashing_string, secret_key)
        $generated_token_signature = hash_hmac(
            Config::TOKEN_HASH_ALGORITHM, 
            $received_token_header.$reveived_token_payload, 
            Config::TOKEN_SECRET_KEY
        );

        // Checking signature match
        if($received_token_signature !== $generated_token_signature) {
            self::$error = 'TEMPERED_TOKEN: Token signature did not match.';
            return FALSE;
        }

        // Finally returning the payload
        return json_decode($reveived_token_payload, TRUE);

    } // Token - Verify() 

} // Token{}

?>