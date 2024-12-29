<?php
// Contoh kelas Database
class Database {
    private $conn;

    public function connect() {
        $this->conn = new mysqli("localhost", "root", "", "zahrarental");
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
        return $this->conn;
    }

    public function getConnection() {
        if (!$this->conn) {
            $this->connect(); 
        }
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>

