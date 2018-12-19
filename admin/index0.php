<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=loveroyalassembly", "root", "");
$query = "SELECT * FROM newsletter ORDER BY id";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>
<!DOCTYPE html>
<html style="background-color:#f0f5f5;">
	<head>
		<title>Send Newsletters to Subscribers</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
       
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <style>
            form{ width: 80%; border-radius: 5px; border: 1px solid #000; margin-left: 10%; margin-bottom: 80px; background-image: url(../resources/pics/90.jpg);}
            form textarea{border-radius: 5px; border: 1px solid #000; width: 60%; margin-left: 25%; height: 180px}
            form input{margin-left: 5%; }
        </style>
	</head>
	<body style="background-color:burlywood">
		<br />
		<div class="container" style="background-color:#669999">
			<h3 align="center">Send Newsletters to your sSubscribers </h3>
			<br />
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Select</th>
						<th>Action</th>
					</tr>
				<?php
				$count = 0;
				foreach($result as $row)
				{
					$count = $count + 1;
					echo '
					<tr>
						<td>'.$row["customer_name"].'</td>
						<td>'.$row["customer_email"].'</td>
						<td>
							<input type="checkbox" name="single_select" class="single_select" data-email="'.$row["customer_email"].'" data-name="'.$row["customer_name"].'" />
						</td>
						<td>
						<button type="button" name="email_button" class="btn btn-info btn-xs email_button" id="'.$count.'" data-email="'.$row["customer_email"].'" data-name="'.$row["customer_name"].'" data-action="single">Send Single</button>
						</td>
					</tr>
					';
				}
				?>
					<tr>
						<td colspan="3"></td>
						<td><button type="button" name="bulk_email" class="btn btn-info email_button" id="bulk_email" data-action="bulk">Send Bulk</button></td></td>
					</tr>
				</table>
			</div>
		</div>
        <form method="post" action="#" enctype="multipart/form-data">
            <h3 style="text-align:center; color:cornsilk">Compose Newsletter</h3>
            <textarea name="message" placeholder="Enter Message" style="background-image: url(../resources/pics/90.jpg); color:cornsilk"></textarea>
            <input style=" width:200px; height:45px; margin-left:30%;" type="submit" name="save" value="SAVE" class="btn-primary btn" />
        </form>
        <?php
             mysql_connect("localhost", "root","");
             mysql_select_db("loveroyalassembly");
           
            if(isset($_POST['save']))
            {
                $message = strip_tags($_POST['message']);
                $sql = mysql_query("INSERT INTO messages(message) values('$message')");
                if(!$sql){
                    echo '<script>alert("Error");</script>';
                }
                else{
                     echo '<script>alert("Message save successful");</script>';
                }
                echo $message;
            }
            
        ?>
    <footer>
        <p><span style="margin-left:40%">To Go Back</span><a href="../adminpage.php" class="btn-primary btn" >Click here</a></p>
</footer>
	</body>
</html>

<script>
$(document).ready(function(){
	$('.email_button').click(function(){
		$(this).attr('disabled', 'disabled');
		var id  = $(this).attr("id");
		var action = $(this).data("action");
		var email_data = [];
		if(action == 'single')
		{
			email_data.push({
				email: $(this).data("email"),
				name: $(this).data("name")
			});
		}
		else
		{
			$('.single_select').each(function(){
				if($(this).prop("checked") == true)
				{
					email_data.push({
						email: $(this).data("email"),
						name: $(this).data('name')
					});
				} 
			});
		}

		$.ajax({
			url:"send_mail.php",
			method:"POST",
			data:{email_data:email_data},
			beforeSend:function(){
				$('#'+id).html('Sending...');
				$('#'+id).addClass('btn-danger');
			},
			success:function(data){
				if(data == 'ok')
				{
					$('#'+id).text('Success');
					$('#'+id).removeClass('btn-danger');
					$('#'+id).removeClass('btn-info');
					$('#'+id).addClass('btn-success');
				}
				else
				{
					$('#'+id).text(data);
				}
				$('#'+id).attr('disabled', false);
			}
		})

	});
});
</script>





