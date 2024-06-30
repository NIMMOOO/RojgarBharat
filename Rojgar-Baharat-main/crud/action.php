<?php

//action.php

include('database_connection.php');


if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO job (Title,Day,Salary,State,City,Zip_Code) VALUES ('".$_POST["Title"]."', '".$_POST["Day"]."', '".$_POST["Salary"]."', '".$_POST["State"]."', '".$_POST["City"]."', '".$_POST["Zip"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo $_POST["hidden_id"];

		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM job WHERE Job_id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['Title'] = $row['Title'];
			$output['Day'] = $row['Day'];
			$output['Salary'] = $row['Salary'];
			$output['State'] = $row['State'];
			$output['City'] = $row['City'];
			$output['Zip_Code'] = $row['Zip_Code'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE job 
		SET Job_id = '".$_POST["hidden_id"]."',
		Title = '".$_POST["Title"]."', 
		Salary = '".$_POST["Salary"]."',
		Day = '".$_POST["Day"]."',
		State = '".$_POST["State"]."',
		City = '".$_POST["City"]."',
		Zip_Code= '".$_POST["Zip"]."'

		WHERE Job_id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM job WHERE Job_id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>