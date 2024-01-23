<?php  

class Model {
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "login";
    private $conn;
    
    public function __construct() {
        $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->dbname);
        
        if($this->conn->connect_error) {
            echo "Failed connection to database";
        }else {
            return $this->conn;
        }
    }

    public function inssertrow($post) {
        $user = htmlspecialchars($post['user']);
        $password = htmlspecialchars($post['password']);

        $sql = "INSERT INTO tbl_login(name, password) VALUES('$user', '$password')";

        $result = $this->conn->query($sql);
        
        if($result) {
            header("Location: index.php?msg=inss");
        }
    }
        
    }




