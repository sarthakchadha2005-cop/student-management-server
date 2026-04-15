<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Entry System</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        input, button { padding: 8px; margin: 5px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 10px; }
    </style>
</head>
<body>

<h2>Add Student</h2>

<form action="insert.php" method="POST">
    <input type="text" name="name" placeholder="Enter Name" required><br>
    <input type="email" name="email" placeholder="Enter Email" required><br>
    <input type="text" name="course" placeholder="Enter Course" required><br>
    <button type="submit">Add Student</button>
</form>

<h2>Student List</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['course']."</td>
            <td><a href='delete.php?id=".$row['id']."'>Delete</a></td>
        </tr>";
    }
}
?>

</table>

</body>
</html>