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


    public static function add_collection($name, $gender,?float $fat,?float $snf,?float $price,
                                            ?float $qty,?float $amount,$date,$time,$shift ){

    }

}
?>