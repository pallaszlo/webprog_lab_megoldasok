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
