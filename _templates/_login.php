<?
$signin=false;
if (!empty($_REQUEST['email']) && !empty($_REQUEST['password'])) {
  $email=$_REQUEST['email'];
  $password=$_REQUEST['password'];
  $error=user::verify_login($email,$password);
  $signin=true;
}
if($signin){
  if(!$error){
     ?>
    <main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signin failed</h1>
		<p class="lead">Now you can login from 
      <a href="login.php">here</a>.
		</p>

	</div>
</main>
    <?
  }else{
    header("Location: http://localhost/dairy/demo.php");
    exit();
  }
}else{
?>
<body class="text-center">  
  <main class="form-signin">
    <form method=get action="login.php">
      <img class="mb-4" src="assets/brand/genetic.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Log in</h1>

      <div class="form-floating">
        <input name=email type="email" class="form-control" id="floatingInput" placeholder="user name">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input name=password type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-40 btn btn-lg btn-primary" type="submit">Login</button>
      <a href="signup.php">signup</a>
    </form>
  </main>
</body>
</html>
<? } ?>