<?php
$signup=false;
if(!empty($_POST['user_name']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['re_password'])){
  $user_name=$_POST['user_name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $result=user::signup($user_name,$email,$password);
  $signup=true;
}


if ($signup) {
    if ($result) {
        ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Success</h1>
		<p class="lead">Now you can login from 
      <a href="login.php">here</a>.
		</p>

	</div>
</main>
<?php
    } else {
        ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Fail</h1>
		<p class="lead">Something went wrong, <?= $error ?>
		</p>
	</div>
</main>
<?php
    }
} else {
    ?>


<body class="text-center">

  <main class="form-signup">
    <form method="post" action="signup.php">
      <img class="mb-4" src="assets/brand/genetic.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Sign up</h1>

      <div class="form-floating">
        <input name=user_name type="text" class="form-control" id="floatingInput" placeholder="user name">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input name=email type="email" class="form-control" id="floatingInput" placeholder="email@xyz.com">
        <label for="floatingInput">phone</label>
      </div>
      <div class="form-floating">
        <input name=password type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
        <input name=re_password type="password" class="form-control" id="floatingPassword" placeholder="Re-Password">
        <label for="floatingPassword">Re-Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary text-white" type="submit">sign up</button>
    </form>
  </main>

  </body>
</html>
<?}?>