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
        $host="localhost";
        $user="root";
        $password="";
        $dbname="stu_reg";
        $conn=mysqli_connect($host,$user,$password,$dbname);
        if(!$conn){
            echo "not connected";
        }
		$ab="select * from students_data";
       
		$row=mysqli_fetch_assoc($a);
			echo "<tr>";
			echo "<td>" . $row['student_name'] . "</td>";
			echo "<td>" . $row['father_name'] . "</td>";
			echo "<td>" . $row['mobile_number'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
			echo "<td>" . $row['email_address'] . "</td>";
			echo "<td>" . $row['branch'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			echo "</tr>";
	

	
    
		?>
	</table>
</body>
</html>
