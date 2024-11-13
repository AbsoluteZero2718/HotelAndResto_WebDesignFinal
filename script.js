// Function to load table data
function loadTable() {
    fetch('fetch_table.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('table-container').innerHTML = data;
        })
        .catch(error => console.error('Error loading table:', error));
}

// Call loadTable initially to display the table on page load
loadTable();

// Add form submit event listener
document.getElementById('add-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form from submitting normally

    // Collect form data
    const formData = new FormData(this);

    // Send data to add_data.php via AJAX
    fetch('add_data.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Display success or error message
        loadTable(); // Reload table data to show the new entry
        this.reset(); // Reset the form
    })
    .catch(error => console.error('Error adding data:', error));
});
// Function to delete a row by ID
function deleteRow(id) {
    if (confirm("Are you sure you want to delete this record?")) {
        fetch('delete_data.php?id=' + id, {
            method: 'GET'
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            loadTable(); // Reload table data to reflect deletion
        })
        .catch(error => console.error('Error deleting data:', error));
    }
}