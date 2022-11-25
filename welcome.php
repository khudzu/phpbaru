<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; 

$servername = "ec2-52-70-45-163.compute-1.amazonaws.com";
$username = "dodoaucrkueiyb";
$password = "d0cabcd343805d6858deac56b55b7aa7fe3aa0d1111d9ba64c6b1e8169e26db6";
$dbname = "dephqj61jf8kuj";
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];

// Create connection
require 'vendor/autoload.php';

use phpbaru\Connection as Connection;

try {
    Connection::get()->connect();
    echo 'A connection to the PostgreSQL database sever has been established successfully.';
} catch (\PDOException $e) {
    echo $e->getMessage();
}
  
// Create connection
require 'vendor/autoload.php';

use phpbaru\Connection as Connection;
$sql = "INSERT INTO myDB.MyGuests (firstname, lastname, email)
VALUES ('$firstname','$lastname', '$email');";

$stmt = $this->pdo->prepare($sql);
        
        // pass values to the statement
        $stmt->bindValue(':firstname', $firstname);
        $stmt->bindValue(':lastname', $lastname);
        $stmt->bindValue(':email', $email);
        // execute the insert statement
        $stmt->execute();
        
// Create connection
require 'vendor/autoload.php';

use phpbaru\Connection as Connection;
$sql = "SELECT id, firstname, lastname FROM myDB.MyGuests";
$result = $this->pdo->prepare($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
<a href="http://localhost/tesss.php"> hapus </a>
<a href="http://localhost/tambahdata.php">tambah</a>
</html>
</body>
</html>
