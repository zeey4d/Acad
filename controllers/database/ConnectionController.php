<?php 
class DatabaseManager{
private $conn;
private const $host = 'localhost';
private const $username = 'root';
private const $password = '';
private const $dbsname = 'badir';
private const port = 3306;
public $is_connected;

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbsname, $this->port);
        if($this->conn->connect_error){
            $this->is_connected = false;
            throw new Exception("Error connecting to database Erorr: ".$this->conn->connect_error ." and Erorr number is : ". $this->conn->errno);
        }
        else{
            $this->is_connected = true;
        }
    }
    public function get_type_of($value)
    {
        switch(gettype($value)){
            case 'integer': return 'i';
            case 'double' : return 'd';
            case 'string' : return 's';
            case 'blob'   : return 'b';
            default:        return 's';
        }
    }
    public function insertData($table,$data/*array of coluns as keys, data as valuees*/){
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ',array_fill(0,count($data),'?'));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);
        if(!$stmt) return false;
        $types = '';
        foreach($data as $value){
            $types .= this->get_type_of($value);
        }
        $values = array_values($data);
        $stmt->bind_param($types, ...$values);
        return $stmt->execute();
    }
}



?>