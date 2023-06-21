<?php 

$db = new mysqli('localhost','root','','jquery_evidence');

?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>CRUD with jQuery</title>
</head>
<body>
  
  
<span class="result"></span>
<form>
	<input type="text" name="id" id="id" value="" placeholder="id">
	<div> email: <br />
		<input type="text" name="email" id="email" placeholder="Enter email">
	</div>
	<div> password: <br />
		<input type="text" name="pass" id="pass" placeholder="Enter password">
	</div>
	<br />
	<div>
		<input type="button" id="save" value="save">
		<input type="button" id="update" value="update">
		<input type="button" id="delete" value="delete">
		<input type="button" id="reset" value="reset">
	</div>
</form>
<table style="border-collapse:collapse" border="1" cellspacing="5"> 
	<thead> 
		<tr> 
			<th>id</th>
			<th>email</th>
			<th>pass</th>
		</tr>
	</thead>
	<tbody id="data"> 
		<?php 
		$data = $db->query("select * from user");
		while(list($_id,$_pass,$_email)=$data->fetch_row()){
			echo "<tr>
					<td>$_id</td>
					<td>$_email</td>
					<td>$_pass</td>
				</tr>";	
		}
		?>
	</tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
		
	<script type="text/javascript">
		$(function(){
			// save data
			$("#save").click(function(){
				var email = $("#email").val();
				var pass = $("#pass").val();
				$.ajax({
					url: "ajaxdata/crud_data.php",
					type: "post",
					data: ({"saveemail":email,"pass":pass}),
					success: function(data){
						$(".result").html(data);
					}					
				});	
			});
			// save data
			$("#update").click(function(){
				var upid = $("#id").val();
				var email = $("#email").val();
				var pass = $("#pass").val();
				$.ajax({
					url: "ajaxdata/crud_data.php",
					type: "post",
					data: ({"upid":upid,"email":email,"pass":pass}),
					success: function(data){
						$(".result").html(data);
					}					
				});	
			});
			
			// delete data
			$("#delete").click(function(){
				var id = $("#id").val();
				$.ajax({
					url: "ajaxdata/crud_data.php",
					type: "post",
					data: ({"id":id}),
					success: function(data){
						$(".result").html(data);
					}					
				});	
			});
			
			// select data
			$("#data tr").on("click",function(){	
				var id = $(this).find("td:eq(0)").text();
				var email = $(this).find("td:eq(1)").text();
				var pass = $(this).find("td:eq(2)").text();
				$("#id").val(id);
				$("#email").val(email);
				$("#pass").val(pass);
			});
				
			// reset form
			$("#reset").click(function(){
				$("#id").val("");
				$("#email").val("");
				$("#pass").val("");
				$(".result").html("<span style='color:red'>table reset</span>");
			});	
		});
	
	
	</script>
  </body>
</html>