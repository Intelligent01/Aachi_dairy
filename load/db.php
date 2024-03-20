<?

include_once 'load/db.class.php';
$conn=database::get_connection();
// $conn->query("use customer");
$sql = "SELECT id, user_name,password FROM c_detail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["user_name"]. " - password : " . $row["password"]. "\n";
  }
} else {
  echo "0 results";
}

?>