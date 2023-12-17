<!-- <?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?> -->


<!-- Script no.2 -->

<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = 'MYSQL_ROOT_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// select query
$sql = 'select * from users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}
?>

<!-- Script No.3 to CRUD operation -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>

<?php
// Initialize variables to store user input
$name = $password = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    // Connect to MySQL database
    $mysqli = new mysqli('mysql', 'myuser', 'mypassword', 'mydatabase');

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    if ($mysqli->query($sql) === TRUE) {
        echo '<p style="color: green;">Record added successfully</p>';
    } else {
        echo '<p style="color: red;">Error: ' . $mysqli->error . '</p>';
    }

    // Close the database connection
    $mysqli->close();
}
?>

<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>

    <input type="submit" value="Submit">
</form>

</body>
</html> -->


<!-- Script No.4 -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>

<?php
echo 'This script is being executed.';

// Connect to MySQL database
$mysqli = new mysqli('mysql', 'root', 'MYSQL_ROOT_PASSWORD', 'MYSQL_DATABASE');

// Check connectionDOC
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    // Insert data into the database
    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    if ($mysqli->query($sql) === TRUE) {
        echo '<p style="color: green;">Record added successfully</p>';
    } else {
        echo '<p style="color: red;">Error: ' . $mysqli->error . '</p>';
    }
}

// Close the database connection
$mysqli->close();
?>

<?php if ($_SERVER['REQUEST_METHOD'] !== 'POST') { ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <input type="submit" value="Submit">
    </form>
<?php } ?>

</body>
</html> -->
