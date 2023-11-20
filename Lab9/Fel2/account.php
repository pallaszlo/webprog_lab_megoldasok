<?php

require_once 'Database.php';
require_once 'Customer.php';
require_once 'Transaction.php';

session_start();

if (isset($_SESSION["customer_id"])) {
    $customer_id = $_SESSION["customer_id"];

    $db = new Database();
    $customer = new Customer($db);
    $transaction = new Transaction($db);

    $user = $customer->getById($customer_id);

    if (!$user) {
        die("Customer not found.");
    }

    echo "Welcome, " . $user["username"] . "!";
    echo "Your current balance: $" . number_format($user["balance"], 2);

    // Display transaction history
    $transactions = $transaction->getByCustomer($customer_id);

    if (!empty($transactions)) {
        echo "<h2>Transaction History:</h2>";
        echo "<table>";
        echo "<tr><th>Date</th><th>Sender</th><th>Receiver</th><th>Amount</th></tr>";
        foreach ($transactions as $txn) {
            echo "<tr><td>{$txn['transaction_date']}</td><td>{$txn['sender_id']}</td><td>{$txn['receiver_id']}</td><td>{$txn['amount']}</td></tr>";
        }
        echo "</table>";
    }

    // Transaction Form
    echo "<h2>Make a Transaction:</h2>";
    echo "<form method='post' action='transfer.php'>";
    echo "<label for='receiver'>Receiver Username:</label>";
    echo "<input type='text' id='receiver' name='receiver' required>";
    echo "<label for='amount'>Amount:</label>";
    echo "<input type='text' id='amount' name='amount' required>";
    echo "<input type='submit' value='Transfer'>";
    echo "</form>";
} else {
    header("Location: login.php");
}
?>
