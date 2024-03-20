<?

include_once 'db.class.php';
include_once 'session.class.php';
include_once 'user.class.php';
include_once 'employee.class.php';

function get_file($name){
    $file=$_SERVER['DOCUMENT_ROOT']."/dairy/_templates/_".$name.".php";
    include_once($file);
}

function load_css(){
    if (basename($_SERVER['PHP_SELF'],".php") == "index" ){
        return "login.css";
    }else
    return basename($_SERVER['PHP_SELF'],".php").".css";
}


?>