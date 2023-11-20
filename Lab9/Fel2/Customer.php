<?php

class Customer {
    private int $id;
    private string $username;
    private string $password;
    private float $balance;

    private Database $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getById(int $customer_id): ?array {
        $conn = $this->db->connect();
        $stmt = $conn->prepare("SELECT id, username, password, balance FROM customers WHERE id = ?");
        $stmt->bind_param("i", $customer_id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        $conn->close();

        if ($result) {
            $this->id = $result['id'];
            $this->username = $result['username'];
            $this->password = $result['password'];
            $this->balance = $result['balance'];
        }

        return $result;
    }

    public function getByUsername(string $username): ?array {
        $conn = $this->db->connect();
        $stmt = $conn->prepare("SELECT id, username, password, balance FROM customers WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        $conn->close();

        if ($result) {
            $this->id = $result['id'];
            $this->username = $result['username'];
            $this->password = $result['password'];
            $this->balance = $result['balance'];
        }

        return $result;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function updateBalance(float $amount): void {
        $conn = $this->db->connect();
        $stmt = $conn->prepare("UPDATE customers SET balance = balance + ? WHERE id = ?");
        $stmt->bind_param("di", $amount, $this->id);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function verifyPassword(string $password): bool {
        return password_verify($password, $this->password);
    }
}
?>
