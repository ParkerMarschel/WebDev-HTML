<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post" action="deleteBook.php">

        <label for="bookT">Book Title:</label>
        <select name="bookTitles" id="bookT">
            <?php
            // connect to database
            $conn = mysqli_connect("tund.cefns.nau.edu", "cs212_pgm33", "5439120", "cs212_pgm33");
            if(!$conn) {
                echo "Connection to Database is Unsuccessfull";
            }
            else {
                echo "connection to database not sucesllfu";
            }
            $sql = "SELECT bookid, booktitle FROM cs212_pgm33.book;";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo "query exectued";
            }
            // create drop down list of book titles
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row["bookid"] . '">' . $row["booktitle"] . '</option>';
            }
            mysqli_close($conn);
            ?>

        </select>
        <br>
        <input type="submit" value="Delete">

    </form>

    </body>
</html>
