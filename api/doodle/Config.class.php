<?php

    class Config {

        // System datas
        const SYS_DIRECTORY = '/opt/lampp/htdocs/fitness'; # Path upto site's root directory

        // Api class
        const API_DIRECTORY = '/fitness/api'; # Path from 'htdoc' dir to 'api' dir

        // Database class
        const DATABASE_HOST = 'localhost';
        const DATABASE_USER = 'root';
        const DATABASE_PASS = '';
        const DATABASE_NAME = 'test';
        const DATABASE_CHAR = 'utf8mb4'; # recommended value : utf8mb4


        // Token class
        const TOKEN_SECRET_KEY = 'G-JaNdRgUkXp2s5v8y/B?E(H+MbQeShVmYq3t6w9z$C&F)J@NcRfUjWnZr4u7x!A'; # recommended length : 512
        const TOKEN_HASH_ALGORITHM = 'SHA256'; # recommended value : 'SHA256'
        const TOKEN_TYPE = 'JWT'; # recommended value : 'JWT'
        const TOKEN_EXPIRY_TIME = 24*60*60; # seconds


        // File class
        const FILE_NAME_PREFIX = ''; // prefix + filename + extension
        const FILE_NAME_SUFFIX = ''; // filename + suffix + extension
        //const FILE_STORAGE_DIR = self::SYS_DIRECTORY.'api/storage';
        const FILE_STORAGE_DIR = self::SYS_DIRECTORY.'/api/storage'; # recommended value : self::SYS_DIRECTORY.'/api/storage'


    }

?>