<!DOCTYPE html>

<html>
    <head>
        <title>Retrieve Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>        
            <h1>Current Book DataBase:</h1>
            <table>
                <tr>
                    <th>Book ID</th>
                    <th>Book First Author</th>                   
                    <th>Book Title</th>
                    <th>Book Year</th>
                </tr>               
            <?php
            $conn = mysqli_connect("tund.cefns.nau.edu", "cs212_pgm33", "5439120", "cs212_pgm33");
            if(!$conn) {
                echo "Connection to Database is Unsuccessfull.";
            }
            else{echo "Database Connection Successfull.";}
            
            $sql = "SELECT bookid, booktitle, bookfirstauthor, bookyear FROM cs212_pgm33.book;";
            $result = mysqli_query($conn, $sql);            
            // display table
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

                echo "<td>";
                echo $row["bookid"];
                echo "</td>";

                echo "<td>";
                echo $row["booktitle"];
                echo "</td>";

                echo "<td>";
                echo $row["bookfirstauthor"];
                echo "</td>";

                echo "<td>";
                echo $row["bookyear"];
                echo "</td>";

                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
            </table>
        </div>
    </body>
</html>
