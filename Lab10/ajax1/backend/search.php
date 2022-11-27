<?php

include 'database.php';

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = $conn->query("SELECT * FROM crud WHERE name LIKE '%" . $search . "%' ");
    $rows = $query->num_rows;

    if ($rows > 0) {
        while ($fetch = $query->fetch_array()) {
            echo "
					<tr>
						<td>" . $fetch['name'] . "</td>
						<td>" . $fetch['email'] . "</td>
						<td>" . $fetch['phone'] . "</td>
						<td>" . $fetch['city'] . "</td>
					</tr>
				";
        }
    } else {
        echo "
				<tr>
					<td colspan='5'><center>No Search Found!</center></td>
				</tr>
			";
    }
}
