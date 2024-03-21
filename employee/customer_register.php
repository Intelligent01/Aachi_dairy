<?
include_once '../load/load.php';

get_file("meta");
$add=false;
if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['alt_phone']) && !empty($_POST['aadhar']) && !empty($_POST['village']) && !empty($_POST['bank_name']) && !empty($_POST['bank_branch']) && !empty($_POST['ac_no']) && !empty($_POST['ifsc'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $alt_phone=$_POST['alt_phone'];
    $aadhar=$_POST['aadhar'];
    $village=$_POST['village'];
    $bank=$_POST['bank_name'];
    $branch=$_POST['bank_branch'];
    $ac_no=$_POST['ac_no'];
    $ifsc=$_POST['ifsc'];
    $error=employee::add_customer($name,$gender,$phone,$alt_phone,$aadhar,$village,$bank,$branch,$ac_no,$ifsc);
    $add=true;
}
if($add){
    if ($error) { 
        echo "<script>alert('customer added successfully')</script>";
        ?>
            <main class="container">
                <div class="bg-light p-5 rounded mt-3">
                    <h1><?=$_POST['name']?> added successfully</h1>
                    <p class="lead">add another click 
                    <a href="customer_register.php">here</a>.
                    </p>
                </div>
            </main>
        <?
    }else{
        ?>
        <main class="container">
        <div class="bg-light p-5 rounded mt-3">
            <h1>add customer failed !!!</h1>
            <p class="lead">retry click 
            <a href="customer_register.php">here</a>.
            </p>
        </div>
        </main>
    <?
    }

}else{

?>
<body>
    <div class="container my-5 p-3 border">
        <h1 class="text-center m-5">Customer Registery</h1>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?> " method="POST">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <h3>Personal</h3>
                        <div class="form-floating col">
                            <input type="text" name="name" id="" class="form-control" placeholder="" required>
                            <label for="name" class="mx-3">Name</label>
                        </div>
                        <div class="form-floating col">
                            <input type="tel" name="phone" id="" class="form-control" placeholder="" required>
                            <label for="phone" class="mx-3">Phone</label>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="form-floating col">
                            <input type="text" name="aadhar" id="" class="form-control" placeholder="" required>
                            <label for="aadhar" class="mx-3">Aadhar</label>
                        </div>
                        <div class="form-floating col">
                            <input type="tel" name="alt_phone" id="" class="form-control" placeholder="" required>
                            <label for="alt_phone" class="mx-3">Alternate-Phone</label>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="form-floating col">
                            <input type="text" name="village" id="" class="form-control" placeholder="" required>
                            <label for="village" class="mx-3">Village</label>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h6 class="col">Gender</h6>
                                <div class="col">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="M">male
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="F">female
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <h3>Bank</h3>
                        <div class="form-floating col">
                            <input type="text" name="bank_name" id="" class="form-control" placeholder="" required>
                            <label for="nank_name" class="mx-3">Bank Name</label>
                        </div>
                        <div class="form-floating col">
                            <input type="text" name="bank_branch" id="" class="form-control" placeholder="" required>
                            <label for="branch" class="mx-3">Branch</label>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="form-floating col">
                            <input type="text" name="ac_no" id="" class="form-control" placeholder="" required>
                            <label for="ac_no" class="mx-3">Account No</label>
                        </div>
                        <div class="form-floating col">
                            <input type="text" name="re_ac_no" id="" class="form-control" placeholder="" required>
                            <label for="re_ac_no" class="mx-3">Re-Account No</label>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="form-floating col">
                            <input type="text" name="ifsc" id="" class="form-control" placeholder="" required>
                            <label for="ifsc" class="mx-3">IFSC code</label>
                        </div>
                        <!-- <div class="form-floating col">
                            <input type="tel" name="alt_phone" id="" class="form-control" placeholder="" required>
                            <label for="alt_phone" class="mx-3">Alternate-Phone</label>
                        </div> -->
                    </div>
                </div>
                <div class="col-4">
                    <button  class="btn btn-primary"> Add</button>
                    <button  class="btn btn-primary"> Update</button>
                    <button  class="btn btn-primary"> Delete</button>
                    <button  class="btn btn-primary"> Save</button>
                </div>
                <input type="submit" value="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</body>

<? } ?>