<?php
$student_json = '[
			        {
				        "name" : "Kis Janos",
				        "age"  : "15",
				        "school" : "Marton Aron"
				    },
				    {
				        "name" : "Nagy Peter",
				        "age"  : "16",
				        "school" : "Tamasi"
				    },
				    {
				        "name" : "Egy Anna",
				        "age"  : "16",
				        "school" : "Kos Karoly"
				    }
			    ]';
$students = json_decode($student_json, true);
print_r($students);
foreach ($students as $student) {
    echo $student["name"]. "<br>";
}

// Display data in a table
echo '<table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>School</th>
        </tr>';

foreach ($students as $student) {
    echo '<tr>
            <td>' . $student['name'] . '</td>
            <td>' . $student['age'] . '</td>
            <td>' . $student['school'] . '</td>
          </tr>';
}

echo '</table>';

// Decode JSON string to object
$students = json_decode($student_json);

// Display data in a table
echo '<table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>School</th>
        </tr>';

foreach ($students as $student) {
    echo '<tr>
            <td>' . $student->name . '</td>
            <td>' . $student->age . '</td>
            <td>' . $student->school . '</td>
          </tr>';
}

echo '</table>';
