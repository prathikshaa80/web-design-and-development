•	<?php
•	session_start();
•	
•	$validUser = "admin";
•	$validPass = "1234";
•	
•	if(isset($_POST['login'])){
•	    if($_POST['user']===$validUser && $_POST['pass']===$validPass){
•	        $_SESSION['admin'] = true;
•	        header("Location: ".$_SERVER['PHP_SELF']); exit;
•	    } else { $msg = "Invalid credentials."; }
•	}
•	if(isset($_POST['logout'])){
•	    session_unset();
•	    session_destroy();
•	    $msg = "Logged out.";
•	}
•	?>
•	<?php if(!empty($msg)) echo "<p>$msg</p>"; ?>
•	<?php if(!empty($_SESSION['admin'])): ?>
•	  <p>Welcome, Admin!</p>
•	  <form method="post"><button name="logout">Logout</button></form>
•	<?php else: ?>
•	  <form method="post">
•	    <input name="user" placeholder="Username">
•	    <input name="pass" type="password" placeholder="Password">
•	    <button name="login">Login</button>
•	  </form>
•	<?php endif; ?>
