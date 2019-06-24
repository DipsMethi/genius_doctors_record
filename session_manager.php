<?php
    // This class needs refactoring
    class Session
    {
        public $id;
        public $pswd;
        public $firstName;
        public $lastName;
        public $email;
        
        // Session contructor
        function __construct($id, $pswd)
        {
            $this->$id = $id;
            $this->$pswd = $pswd;
        }

        // Session destructor
        function __destruct()
        {
            $this->destroy_session();
        }

        // Begins the session
        function login($id,$pswd)
        {
            try
            {
                $isLoggedIn = false;
                $profile = $this->getProfile($id,$pswd);
                
                if( !isset($_SESSION['id']) )
                {
                    // Store session variables
                    $_SESSION['id'] = $profile[0];
                    $_SESSION['fstName'] = $profile[1];
                    $_SESSION['lstName'] = $profile[2];
                    $_SESSION['email'] = $profile[3];

                    $isLoggedIn = true;
                }
                return $isLoggedIn;
            }
            catch(Exception $e)
            {
                throw $e;
            }
        }

        // Ends the session
        private function destroy_session()
        {
            //session_start();
            $_SESSION = array();
            setcookie(session_name(), '', time() - 2592000, '/');
            session_destroy();
        }

        // Gets user profile from patient_profile table
        // Returns the record where idNum=$id
        private function getProfile($id,$pswd)
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
                echo "<script> alert($e); </script>";
            }
            finally
            {
                mysqli_close($conStr);
            }
        }
    }
?>