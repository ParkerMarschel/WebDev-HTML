<?php
// attempt to open connection    
$conn = mysqli_connect('tund.cefns.nau.edu', 'cs212_pgm33', '5439120', 'cs212_pgm33');
// check if connection open
if(!$conn){
    die("Connection to Database was Unsuccessful");
} 
else {
    echo "Connection was Successful";
}    
// retrieve data from addBook.html
$bookTitle = $_POST['bookTitle'];
$bookAuthor = $_POST['bookAuthor'];
$bookYear = $_POST['bookYear'];
// create insert statement for SQL
$sql = "INSERT INTO book (BookTitle, BookFirstAuthor, BookYear) VALUES(";
$sql = $sql . "'" . $bookTitle . "', "; 
$sql = $sql . "'" . $bookAuthor . "', "; 
$sql = $sql . "'" . $bookYear . "');";
// execute sql
$result = mysqli_query($conn, $sql);
// display error or success message
if($result) {
    echo mysqli_affected_rows($conn)." - row was added successfully. <br>";
}
else {
    echo "Error Executing INSERT <br>";
    echo "Error message:" . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
