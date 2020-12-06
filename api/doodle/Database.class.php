<?php

class Database {

    // Database error holder
    private static $error = [];

    // Database connection holder
    private static $dbconn = NULL;

    // Query function to query database
    public static function query($sql, ...$data){

        // Connecting database
        if (self::$dbconn == NULL){

            try {

                self::$dbconn = new mysqli(
                    Config::DATABASE_HOST,
                    Config::DATABASE_USER,
                    Config::DATABASE_PASS,
                    Config::DATABASE_NAME
                );

                self::$dbconn->set_charset(Config::DATABASE_CHAR);

            } catch (mysqli_sql_exception $e) {

                self::$error['CREATION'] = 'Connection establishment error, check the database credientials';

                return FALSE;

            } // Try catch

        } // If condition

        // Extracting the sql type eg: SELECT, INSERT, DELETE or UPDATE
        $sql_type = strtolower(substr(trim($sql), 0, 6));

        $result_array = [];

        try {

            $statement = self::$dbconn->prepare($sql);
            
            if(isset($data)) @$statement->bind_param(str_repeat("s",count($data)), ...$data);
          
            $statement->execute();

            $result = $statement->get_result();

            if($result !== NULL){

                switch ($sql_type) {

                    case 'select':

                        while($each = mysqli_fetch_assoc($result)) { $result_array[] = $each; }

                        break;

                    case 'insert':

                        $result_array['inserted_id']  = $statement->insert_id;

                        break;
                    
                    case 'update':
                    case 'delete':

                        $result_array['affected_rows'] = $statement->affected_rows;

                        break;

                    default:

                        break;

                } // Switch case

            } // If condition

            $statement->close();

            return $result_array;

        }catch (mysqli_sql_exception $e) {

            error_log("ERROR ".$e->getCode()." : ".$e->getMessage());

            die($this->printError($e->getCode(),$e->getMessage()));

        } // TRY CATCH

    } // QUERY FUNCTION

} // DB CLASS

?>