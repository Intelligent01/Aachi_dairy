<?
include_once '../load/load.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $conn=database::get_connection();
    $q1="select customer_name from customer where customer_id='$id'";
    $result=$conn->query($q1);
    if($result->num_rows == 1){
        $row=$result->fetch_assoc();
        echo $row['customer_name'];
    }else{
        echo "invalid";
    }
}
if (isset($_GET['shift'])){
    if ($_GET['shift']=='M'){
        $conn=database::get_connection();
        $sql = "SELECT * FROM collection where shift='M' order by date desc,time asc ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data in table format
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Customer ID</th><th>Fat</th><th>SNF</th><th>Price</th><th>Qty</th><th>Amount</th><th>Date</th><th>Time</th><th>Shift</th></tr>";

            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["customer_id"] . "</td>";
                echo "<td>" . $row["fat"] . "</td>";
                echo "<td>" . $row["snf"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["qty"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo "<td>" . $row["shift"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found";
        }
    }
    elseif ($_GET['shift']=='E'){
        $conn=database::get_connection();
        $sql = "SELECT * FROM collection where shift='E'order by date desc,time asc ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data in table format
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Customer ID</th><th>Fat</th><th>SNF</th><th>Price</th><th>Qty</th><th>Amount</th><th>Date</th><th>Time</th><th>Shift</th></tr>";

            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["customer_id"] . "</td>";
                echo "<td>" . $row["fat"] . "</td>";
                echo "<td>" . $row["snf"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["qty"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo "<td>" . $row["shift"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found";
        }
    }
    else{
        $conn=database::get_connection();
        $sql = "SELECT * FROM collection order by date desc,time asc";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data in table format
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Customer ID</th><th>Fat</th><th>SNF</th><th>Price</th><th>Qty</th><th>Amount</th><th>Date</th><th>Time</th><th>Shift</th></tr>";

            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["customer_id"] . "</td>";
                echo "<td>" . $row["fat"] . "</td>";
                echo "<td>" . $row["snf"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["qty"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo "<td>" . $row["shift"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found";
        }
    }
    // Close connection
    $conn->close();

}
?>