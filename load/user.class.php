<?

class user{
    public $conn;
    public static function verify_login($email,$password){
        $conn=database::get_connection();
        $sql="select email,password from c_detail where email = '$email'";
        $res=$conn->query($sql);
        if($res->num_rows == 1){
            $rows=$res->fetch_assoc();
            if($rows["password"] == $password){
                return true;
            }
        }else return false;
    }

    public static function signup($username,$email,$password){
        $conn=database::get_connection();
        $q1="insert into c_detail (user_name,email,password)
        values ('$username','$email','$password')";
        $res=false;
        try{
            return $conn->query($q1);
        }catch(Exception $e){
            echo "<script>".$e."</script>";
            return $res;
        }
    }
}


?>
