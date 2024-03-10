if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['departure'];
    $email = $_POST['arrival'];
    $train = $_POST['train'];
    $date = $_POST['date'];
    $passengers = $_POST['passengers'];
    $class = $_POST['class'];

    // Process this data, e.g., store it in a database or perform booking actions.
    // You might use SQL queries to insert this data into a database.

    // Example:
    // $sql = "INSERT INTO reservations (name, email, train, date, passengers, class) VALUES ('$name', '$email', '$train', '$date', $passengers, '$class')";
    // Execute the SQL query and handle success/error messages.
}