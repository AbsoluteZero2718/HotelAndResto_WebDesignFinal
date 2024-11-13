<?php
// Database connection details
$host = 'fdb1027.biz.nf';
$dbname = '4532496_snoedb';
$username = '4532496_snoedb';
$password = 'Absolutezer0092718';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if required data is provided
    if (isset($_POST['USERNAME'], $_POST['PASSWORD'])) {
        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO ciitburgertable (USERNAME, PASSWORD) VALUES ("(Username, Password)");
        $stmt->execute([
            'Username' => $_POST['USERNAME'],
            'Password' => $_POST['PASSWORD'],
        ]);
        echo "Data added successfully!";
    } else {
        echo "All fields are required.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
