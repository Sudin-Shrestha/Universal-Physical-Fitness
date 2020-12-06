<?php

    class Api {

        const CHARACTER = '/([a-zA-Z]*)';
        const POSITIVE_WHOLE_NUMBER = '/(0|[1-9]\d*)';
        const POSITIVE_NEGATIVE_WHOLE_NUMBER = '/(^-?(0|[1-9]\d*)';
        const ALPHABET = '/([a-zA-Z]*)';
        const STRING = '/([a-zA-Z0-9]*)';
        const INTEGER = '/([0-9]*)';
        const DECIMAL = '';
        const BOOLEAN = "/(^(0|1)$)";
        const DEFAULT = '/([^"]*)';
        const EMAIL = '/(([a-zA-Z0-9_\.-]+)@([\da-zA-Z\.-]+)\.([a-zA-Z\.]{2,6})*)';
        const EMAILTO = '/(^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$)';
        const ALLSTRING = '/([a-zA-Z0-9@.]*)';


        // Function to execute the api
        private static function run($path, $work) {

            // Check; whether url matches. If matches: extract matched value
            if (preg_match('#^'.Config::API_DIRECTORY.$path.'$#', $_SERVER['REQUEST_URI'], $params)) {

                // Removing 0 (first) index of the array
                $params =  array_slice($params, 1);

                // Calling user function on match with params
                call_user_func_array($work, $params);

                // Exit when function is over
                exit;

            } // If condition

        } // run()


        // Function to add 'get' api gateway
        public static function get($path, $work) {

            if ($_SERVER['REQUEST_METHOD'] === 'GET') self::run($path, $work);

        } // get()


        // Function to add 'post' api gateway
        public static function post($path, $work) {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') self::run($path, $work);

        } // post()


        // Function to send data back
        public static function send($data) {

            // Setting the content type json
            header('Content-Type: application/json');

            // Encoding the data to json format and echoing
            echo json_encode($data);

            // Exit when data is sent
            exit;

        } // send()


    } // Api{}
    
?>