<?
include_once '../load/load.php';


get_file("meta");
?>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Collection</h1>
        <form action="">
            <div class="row my-5">
                <div class="form-floating col">
                    <input type="text" name="customer_no" id="" class="form-control" placeholder="customer_no" required>
                    <label for="customer_no" class="form-label mx-3">Customer_no</label>
                </div>
                <div class="form-floating col">
                    <input type="text" name="name" id="" class="form-control" placeholder="name" readonly>
                    <label for="name" class="form-label mx-3">Name</label>
                </div>
                <div class="form-floating col">
                    <input type="date" name="date" id="" class="form-control" placeholder="date" required>
                    <label for="date" class="form-label mx-3">Date</label>
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
                    <input type="number" name="fat" id="" class="form-control" placeholder="fat" require>
                    <label for="fat" class="form-label mx-3">Fat</label>
                </div>
                <div class="form-floating col">
                    <input type="number" name="snf" id="" class="form-control" placeholder="snf" required>
                    <label for="snf" class="form-label mx-3">Snf</label>
                </div>
                <div class="form-floating col">
                    <input type="number" name="price" id="" class="form-control" placeholder="price" required >
                    <label for="price" class="form-label mx-3">Price</label>
                </div>
                <div class="form-floating col">
                    <input type="number" name="qty" id="" class="form-control" placeholder="qty" required>
                    <label for="qty" class="form-label mx-3">Qty</label>
                </div>
                <div class="form-floating col">
                    <input type="number" name="amount" id="" class="form-control" placeholder="total price" required>
                    <label for="amount" class="form-label mx-3">Total price</label>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
    </div>  
</body>