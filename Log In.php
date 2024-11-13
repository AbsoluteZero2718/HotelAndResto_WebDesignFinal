<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<h2>Log In</h2>
<form id="add-form">
    <label>Email:</label>
    <input type="text" name="Email" required>
    <label>Password:</label>
    <input type="text" name="Password" required>
    <button type="submit">Log In</button>
</form>

<h2>Sample Table Data</h2>
<div id="table-container">Loading data...</div>

<script src="script.js"></script>
</body>
</html>