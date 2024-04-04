<?php
class employee{

    public static function add_customer($name,$gender,$phone,$alt_phone,$aadhar,$village,$bank,$branch,$acc_no,$ifsc){
        $conn=database::get_connection();
        $query="INSERT INTO `customer` (`customer_name`, `gender`, `phone`, `alt_phone`, `aadhar`, `village`, `bank`, `bank_branch`, `acc_no`, `ifsc`, `date_time`) values ('$name','$gender','$phone','$alt_phone','$aadhar','$village','$bank','$branch','$acc_no','$ifsc',now())";
        $res=false;
        try{
            return $conn->query($query);
        }catch(Exception $e){
            echo "<script>".$e."</script>";
            return $res;
        }
    }


    public static function add_collection(?int $id,?float $fat,?float $snf,?float $price,?float $qty,?float $amount,$shift ){
        $conn=database::get_connection();
        $query="INSERT INTO `collection` (`customer_id`, `fat`, `snf`, `price`, `qty`, `amount`, `date`, `time`, `shift`) values ('$id','$fat','$snf','$price','$qty','$amount',now(),now(),'$shift')";
        $res=false;
        try{
            return $conn->query($query);
        }catch(Exception $e){
            echo "<script>".$e."</script>";
            return $res;
        }
    }

}
?>