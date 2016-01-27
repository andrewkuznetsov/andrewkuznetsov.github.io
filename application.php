<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>BAMPFASC Application</title>
	</head>
	<body>
		<?php
			$fullname = $_POST['fullname'];
			$year = $_POST['year'];
			$major = $_POST['major'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$q1 = $_POST['q1'];
			$q2 = $_POST['q2'];
			$q3 = $_POST['q3'];
			$q4 = $_POST['q4'];
			$q5 = $_POST['q5'];
			$q6 = $_POST['q6'];

			$from = 'From: $fullname';
			$to = 'andrewkuznetsov@berkeley.edu';
			$subject = '$fullname Application';

			$body = 'Full name: $fullname\n Year: $year\n Major: $major\n Email: $email\n Phone: $phone \n\n Why are you interested in joining the BAMPFA Student Committee?: $q1\n What can you personally contribute to the Student Committee?: $q2\n What would you like to see the Student Committee do for UCB students?: $q3\n What specific skills can you bring to the Student Committee (expertise in journalism, multimedia, web design, videography, event planning, etc.)?: $q4\n With what other campus organizations have you been/will you be involved this coming semester?: $q5\n Anything else we should know about you?: $q6\n';
		
		if ($_POST['submit']){
			if (mail ($to, $subject, $body, $from)){
				echo '<p>Your application has been submitted!</p>';
			} else {
				echo '<p>Something went wrong. Please manually email your application in to bampfasc@gmail.com</p>';
			}
		}

		?>
	</body>
</html>