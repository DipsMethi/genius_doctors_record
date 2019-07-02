<?php
    require_once ("PHP/Utilities/JSUtil.php");
  
    class LoginManager
    {
        private static $id;
        private static $pswd;
        
        // Contructor
        function __construct($id, $pswd)
        {
            self::$id = $id;
            self::$pswd = $pswd;
        }

        // Destructor
        function __destruct()
        {
        }

        // Begins the session
        // Throws Exception e
        public static function login()
        {
            $isLoggedIn = false;
            try
            {
                $id = self::$id;
                $pswd = self::$pswd;

                $conStr = mysqli_connect("localhost","root","","doctors_db");
                $result = mysqli_query($conStr,"SELECT idNum,pswd 
                                    FROM patient_profile 
                                    WHERE idNum = $id && pswd = $pswd ");
                
                if($result)
                {
                    // Assign record if it exists
                    if( mysqli_num_rows( $result ) > 0 ) 
                        $profile = mysqli_fetch_assoc( $result );

                    // Set isLoggedIn to true, if the user exists
                    if( !empty( $profile[ 'idNum' ] ) && !empty( $profile[ 'pswd' ] ) )
                        $isLoggedIn = true;
                }
                return $isLoggedIn;
            }
            catch(Exception $exception)
            {
                throw $exception;
            }
        }

        // Logout
        private static function logout()
        {
            //$_SESSION = array(); // Empty session variables
            //session_destroy(); // Destroy current session
        }

        // Gets user profile from patient_profile table
        // Returns the record where idNum=$id
        // Deprecated
        private static function getProfile($id,$pswd)
        {
            try
            {
                $conStr = mysqli_connect("localhost","root","","doctors_db");
                $result = mysqli_query($conStr,"SELECT idNum,fst_name,lst_name,email 
                                    FROM patient_profile 
                                    WHERE idNum='$id' && pswd='$pswd'");
                
                if(mysqli_num_rows($result) > 0)
                    return mysqli_fetch_array($result);
            }
            catch(Exception $e)
            {
                throw $e;
            }
            finally
            {
                mysqli_close($conStr);
            }
        }
    }
?>