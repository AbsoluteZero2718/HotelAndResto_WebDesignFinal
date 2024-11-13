<?php
// Database connection details
$host = 'fdb1027.biz.nf';
$dbname = '4532496_snoedb';
$username = '4532496_snoedb';
$password = 'Absolutezer0092718';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data from the table
    $stmt = $pdo->query("SELECT ID, USERNAME, PASSWORD FROM ciitburgertable");

    // Start outputting the table HTML
    echo '<table border="1" cellpadding="8" cellspacing="0">';
    echo '<tr><th>ID</th><th>Username</th><th>Password</th><<th>Action</th></tr>';

    // Loop through the results and create table rows
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['Username']) . '</td>';
        echo '<td>' . htmlspecialchars($row['Password']) . '</td>';
        echo '<td><button onclick="deleteRow(' . $row['id'] . ')">Delete</button></td>';
        echo '</tr>';
    }

    echo '</table>';

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
