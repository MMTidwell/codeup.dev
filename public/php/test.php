<?php 
	function clearSession() {
		// clear $_SESSION array
		session_unset();

		//delete session data on the server and send the client a new cookie
		session_regenerate_id(true);
	}

	// starts the session or resumes an existing one
	// this must be called before trying to get or set any session data
	session_start();

	if (isset($_POST['reset'])) {
		if ($_POST['reset'] == 'counter') {
			unset($_SESSION['view_count']);
		} elseif ($_POST['reset'] == 'session') {
			// this will destroy all session data for not just his page but every page on your site
			// clearSession();
		}
	}

	// get the current session ID
	$sessionId = session_id();

	// initialize a view count variable
	$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

	// increment the counter
	$viewCount++;

	//finally store the new value in the session
	$_SESSION['view_count'] = $viewCount;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Example</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>

    <body>
		<ul>
			<li>Session ID: <?=$sessionId; ?></li>
			<li>View Count: <?= $viewCount; ?></li>
		</ul>

		<form method="POST">
			<button type="submit" name="reset" value="counter">Reset Counter</button>
			<button type="submit" name="reset" value="session">Reset Session</button>
		</form>
   


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