<?
class database{
    public static $conn;
    public static function get_connection(){
        if(database::$conn == null){
            $host="localhost";
            $user="intel";
            $password="1234";
            $conn = new mysqli($host,$user,$password,"customer");

            if($conn->errno){
                die("not connected");
            }else{
                database::$conn=$conn;
                return database::$conn;
            }
        }else{
            return database::$conn;
        }
    }
    
}