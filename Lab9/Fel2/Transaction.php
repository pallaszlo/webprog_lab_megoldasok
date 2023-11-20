<?php

class Transaction
{
    private int $id;
    private int $senderId;
    private int $receiverId;
    private float $amount;
    private string $transactionDate;

    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function create(int $senderId, int $receiverId, float $amount): void
    {
        $conn = $this->db->connect();
        $conn->autocommit(false); // Start transaction

        try {
            $this->updateBalance($senderId, -$amount);
            $this->updateBalance($receiverId, $amount);

            $stmt = $conn->prepare("INSERT INTO transactions (sender_id, receiver_id, amount) VALUES (?, ?, ?)");
            $stmt->bind_param("idd", $senderId, $receiverId, $amount);
            $stmt->execute();

            $conn->commit(); // Commit transaction
        } catch (Exception $e) {
            $conn->rollback(); // Rollback in case of an error
            throw $e;
        } finally {
            $conn->autocommit(true); // Reset autocommit to true
            $stmt->close();
            $conn->close();
        }
    }

    private function updateBalance(int $customer_id, float $amount): void
    {
        $conn = $this->db->connect();
        $stmt = $conn->prepare("UPDATE customers SET balance = balance + ? WHERE id = ?");
        $stmt->bind_param("di", $amount, $customer_id);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function getByCustomer(int $customer_id): array
    {
        $conn = $this->db->connect();
        $stmt = $conn->prepare("SELECT id, sender_id, receiver_id, amount, transaction_date FROM transactions WHERE sender_id = ? OR receiver_id = ? ORDER BY transaction_date DESC");
        $stmt->bind_param("ii", $customer_id, $customer_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $transactions = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        $conn->close();

        return $transactions;
    }
}

?>
