<!DOCTYPE html>
<html>
<head>
	<title>Registered Students</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Registered Students</h1>
	<table>
		<tr>
			<th>Student Name</th>
			<th>Father's Name</th>
			<th>Mobile Number</th>
            <th>Date Of Birth</th>
			<th>Email</th>
			<th>Branch</th>
			<th>Address</th>
		</tr>
		<?php
		$db = new SQLite3('registration.db');
		$query = "SELECT * FROM registrations";
		$result = $db->query($query);
		
		while ($row = $result->fetchArray()) {
			echo "<tr>";
			echo "<td>" . $row['student_name'] . "</td>";
			echo "<td>" . $row['father_name'] . "</td>";
			echo "<td>" . $row['mobile_number'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['branch'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			echo "</tr>";
		}

		$db->close();
		?>
	</table>
</body>
</html>
