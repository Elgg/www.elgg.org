<?php

	$msg = "";

	if (!empty($_POST['email'])) {
		
		@mysql_connect('localhost','newelgg','gb1r4p0s');
		@mysql_select_db('newelgg');
		
		$email = mysql_real_escape_string($_POST['email']);
		
		@mysql_query("insert into newelgg set email = '{$email}'");
		
		$msg = <<< END
		
		<script>
			alert("Thank you. Your email address has been registered, and we'll let you know when Elgg 1.0 has been released.");
		</script>
		
END;
		
	}

?>