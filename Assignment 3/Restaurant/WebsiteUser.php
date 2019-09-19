<?php

class WebsiteUser{
    /* Host address for the database */
    protected static $DB_HOST = "localhost";
    /* Database username */
    protected static $DB_USERNAME = "minhcybc_eatery";
    /* Database password */
    protected static $DB_PASSWORD = "cst8238";
    /* Name of database */
    protected static $DB_DATABASE = "minhcybc_eatery";

    private $username;
    private $password;
    private $mysqli;
    private $dbError;
    private $authenticated = false;

    function __construct() {
        $this->mysqli = new mysqli(self::$DB_HOST, self::$DB_USERNAME,
                self::$DB_PASSWORD, self::$DB_DATABASE);
        if($this->mysqli->errno){
            $this->dbError = true;
        }else{
            $this->dbError = false;
        }
    }
    public function authenticate($username, $password){
        $loginQuery = "SELECT * FROM adminusers WHERE Username = ? AND Password = ?";
        $stmt = $this->mysqli->prepare($loginQuery);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        if($stmt->fetch()){
            $this->username = $username;
            $this->password = $password;
            $this->authenticated = true;
        }
        $stmt->free_result();
    }

    public function updateLoginTime($username) {
        $sqlQuery = "UPDATE adminusers SET Lastlogin = NOW() WHERE Username = '$username'";
        mysqli_query($this->mysqli, $sqlQuery);
    }

    public function isAuthenticated(){
        return $this->authenticated;
    }
    public function hasDbError(){
        return $this->dbError;
    }
    public function getUsername(){
        return $this->username;
    }
}
?>
