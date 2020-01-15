<?php
// attempt to open connection    
$conn = mysqli_connect("tund.cefns.nau.edu", "cs212_pgm33", "5439120", "cs212_pgm33");
// check if connection open
if(!$conn){
    echo "Connection to Database was Unsuccessful";
}  
else {
    echo "Connection was Successful";
}
// create and execute delete statement
$deletebook = $_POST["bookTitles"];
$sql = "DELETE FROM cs212_pgm33.book WHERE bookid = '";
$sql = $sql . $deletebook . "' ;";
$result = mysqli_query($conn, $sql);
// display error or success message
if ($result) {
    echo "book".$deletebook." was deleted <br>";
} else {
    echo "Error deleting book. <br>";
    echo "Error message:" . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);

