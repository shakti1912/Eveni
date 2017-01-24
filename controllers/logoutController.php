
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>You will be redirected to login page in 5 seconds.</p>

<script>
function c()
{
	if(confirm("you want to log out") == true)
		{
			
			<?php
						session_abort();
					sleep(2);
			header('Location: http://localhost/Eveni/index.php');

			?>
		}
	
}
c();
</script>
</body>
</html>



