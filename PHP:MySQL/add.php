<?php 
	//Connecting to the database
	$db = @mysql_connect("localhost","database", "password");
	$poll = $_POST['poll'];
	if (isset($poll)) 
	{
		$SQL = "";
		if ($poll == "1") //YES
		{
			$SQL = "UPDATE poll SET yes = yes + 1 WHERE id =1";
		}
		elseif ($poll == "0")//No 
		{
			$SQL = "UPDATE poll SET no = no + 1 WHERE id =1";
		}
		$query = mysqli_query($db, $SQL);
		if ($query) 
		{
			//Retrieving the number of votes
			$retSQL = mysqli_query($db, "SELECT * FROM poll");
			$resarr = mysqli_fetch_array($retSQL);
			$yes = 100 * round($resarr['yes']/($resarr['no']+$resarr['yes']),2);
			$no = 100 * round($resarr['no']/($resarr['yes']+$resarr['no']),2);
			echo 'YES: '.$yes.'%<br/>';
			echo 'NO: '.$no.'%';
		} 
		else 
		{
			echo 'Bad';
		}
	}
?>

