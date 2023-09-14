

<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "miniproject";

$connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//include("functions.php");

//$user_data = check_login($con);
$query='select * from users'; 
$result=mysqli_query($connection,$query);

/*$_SESSION;*/
?>

<html>
    <head>
        <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
    table {
        margin: 0 auto; /* Center the table horizontally */
        text-align: center; /* Center the contents of table cells */
    }
    table, th, td 
    {
            border: 1px solid black;
            border-collapse: collapse;
            text text-align: cent;
    }
    </style>
    </head>
    <body>
    <table style="width:100%; "> 
	<tr> 
		<th colspan="4"><h2>USERS</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> USER_ID </th> 
			  <th> USER_NAME </th> 
			  <th> MAIL_ID </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['user_id']; ?></td> 
		<td><?php echo $rows['user_name']; ?></td> 
		<td><?php echo $rows['mail_id']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 
    </body>
</html>