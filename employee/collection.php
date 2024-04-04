<?
include_once '../load/load.php';


get_file("meta");
$collection=false;
if(!empty($_POST['customer_no']) && !empty($_POST['shift']) && !empty($_POST['fat']) && !empty($_POST['snf']) && !empty($_POST['price']) && !empty($_POST['qty']) && !empty($_POST['amount'])){
    $id=$_POST['customer_no'];
    $shift=$_POST['shift'];
    $fat=$_POST['fat'];
    $snf=$_POST['snf'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $amount=$_POST['amount'];
    $error=employee::add_collection($id,$fat,$snf,$price,$qty,$amount,$shift);
    $collection=true;
}
if ($collection) {
    if ($error) {
        header("Location: http://localhost/dairy/employee/collection.php");
    }else echo "error";
}else{
?>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Collection</h1>
        <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <div class="row my-5">
                <div class="form-floating col">
                    <input type="text" name="customer_no" id="" class="form-control" placeholder="customer_no"  onkeyup="show_name(this.value)" required>
                    <label for="customer_no" class="form-label mx-3">Customer_no</label>
                </div>
                <div class="form-floating col">
                    <!-- <input type="text" name="name" id="" class="form-control" placeholder="name" > -->
                    <label for="name" class="form-label text-center mx-3" id="c_name">Name</label>
                </div>
                <div class="form-floating col"> 
                    <label for="date" class="form-label mx-3 border w-80 rounded-2" id="date"></label>
                </div>
                <div class="col">
                    <select name="shift" id="" class="form-select" required>
                        <option value="">select...</option>
                        <option value="M">Morning</option>
                        <option value="E">Evening</option>
                    </select>
                </div>
            </div>
            <div class="row my-5">
                <div class="form-floating col">
                    <input type="float" name="fat" id="" class="form-control" placeholder="fat" require>
                    <label for="fat" class="form-label mx-3">Fat</label>
                </div>
                <div class="form-floating col">
                    <input type="float" name="snf" id="" class="form-control" placeholder="snf" required>
                    <label for="snf" class="form-label mx-3">Snf</label>
                </div>
                <div class="form-floating col">
                    <input type="float" name="price" id="" class="form-control" placeholder="price" required >
                    <label for="price" class="form-label mx-3">Price</label>
                </div>
                <div class="form-floating col">
                    <input type="float" name="qty" id="" class="form-control" placeholder="qty" required>
                    <label for="qty" class="form-label mx-3">Qty</label>
                </div>
                <div class="form-floating col">
                    <input type="float" name="amount" id="" class="form-control" placeholder="total price" required>
                    <label for="amount" class="form-label mx-3">Total price</label>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
    </div>  
    
</body>
<script>
    document.getElementById("date").innerHTML=current_date()
    function show_name(str){
        if(str.length == 0){
            document.getElementById("c_name").innerHTML="";
            return;
        }else{
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById("c_name").innerHTML=this.responseText;
                }
            };
            xmlhttp.open("get","search.php?id="+str,true);
            xmlhttp.send();
        }
    }
    function current_date(){
        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based, so add 1
        var day = currentDate.getDate().toString().padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;
        return formattedDate;

    }
</script>

<? }?>