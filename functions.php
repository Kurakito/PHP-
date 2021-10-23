<?php  

function check_admin($con)

{

	if(isset($_SESSION['ID']))
	{

		$id = $_SESSION['ID'];
		$query = "select * from admindb where ID = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$admin_data = mysqli_fetch_assoc($result);
			return $admin_data;
		}
	}

}	

?>