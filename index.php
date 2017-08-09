<html>
<link rel="stylesheet" href="style.css">
<title>Dare Devil</title>
<head><span class="headBanner"><span class="title">Dare Devil</span></span></head>
<body>

<?php

$conn = mysqli_connect("localhost", "root", "root", "dddb");

$sql = "SELECT * FROM post";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "<br>" . $row["text"];
  }
}

?>

</body>
</html>
