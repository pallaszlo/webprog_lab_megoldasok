<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["customer_id"])) {
    require_once 'Database.php';
    require_once 'Customer.php';
    require_once 'Transaction.php';

    $customer_id = $_SESSION["customer_id"];
    $receiver_username = $_POST["receiver"];
    $amount = $_POST["amount"];

    $db = new Database();
    $customer = new Customer($db);
    $transaction = new Transaction($db);

    // Get sender and receiver information
    $sender = $customer->getById($customer_id);
    $receiver = $customer->getByUsername($receiver_username);

    if (!$sender || !$receiver) {
        die("Sender or receiver not found.");
    }

    if ($customer_id === $receiver["id"]) {
        die("You cannot transfer money to yourself.");
    }

    if ($sender["balance"] < $amount) {
        die("Insufficient balance.");
    }

    // Perform the transaction
    try {
        $transaction->create($sender["id"], $receiver["id"], $amount);
        header("Location: account.php");
    } catch (Exception $e) {
        echo "Transaction failed: " . $e->getMessage();
    }
} else {
    header("Location: login.php");
}
?>
