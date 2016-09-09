<!-- 
- form 
	√ - username
	√ - password
	√ - submits to the same page (login.php)
	√ - php code that checks the POST username and password	
		√ - if username == guest and password == guest > redirect to authorized.php 
		√ - else show login failed message in login page
√ - new file (authorized.php)
	√ - html that says authorized
 -->

<?php 
	function pageController() {
		$nope = [];

		// this is here due to calling the variable in the HTML when input is incorrect
		$nope['no'] = '';

		// || is used to ensure that both username and password are filled
		if (!empty($_POST['username']) || !empty($_POST['password'])) {
			// checking username and password are correct
			if ($_POST['username'] == 'g' && $_POST['password'] == 'g') {
				// sends user to this page
				header("Location: /php/authorized.php");
				// kills the login page and turns everything white
				// kills everything else from loading 
				die;
			} else {
				// runs when info is wrong
				$nope['no'] = "OH HELL NO!";	
				// echo = "OH HELL NO!";
			}
		}
		return $nope;
	}
	extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
		
		<style>
			h2 {
				font-size: 6em;
				text-align: center;
				color: hotpink;
			}
		</style>
    </head>

    <body>
    	<div class="container">
			<h1>Login Form</h1>
			<form method="POST">
				<p>
					<h2><?php echo $no; ?></h2>	
					<em>Test with g for username and password.</em>
				</p>
				<p>
					<label for="username">Username</label>
					<input id="username" name="username" type="text" placeholder="Username">
				</p>
				<p>
					<label for="password">Password:</label>
					<input id="password" name="password" type="password" placeholder="Password">
				</p>
				<p>
					<button type="submit">Submit</button>
				</p>
			</form>
	   </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- AJAX and JS
    ================================================== -->
    <!-- bootstarp JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>