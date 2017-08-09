<html>
<head>Dare Devil</head>
<body>


<?php

$conn = mysqli_connect("localhost", "root", "root", "dddb");

$sql = "SELECT * FROM post";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo $row["text"];
  }
}

?>

</body>
</html>
