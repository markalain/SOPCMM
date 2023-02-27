
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>yuceeyu</title>
  <meta name="viewport" content="width=device-width, initial-scale=.9">
  <link rel="stylesheet" href="../ast/vg25rf4bvr65h7tr81y.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

</head>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<body>
<style>
body {
  background-color: indianred;
}
</style>
	<center>
		<br>
		<br>

<div class="container bg-white p-2 my-5 border">
	<h1>UCU ACCOUNT BALANCE CHECKER</h1>
	
	<img src="giphy.gif" width="130" height="180" frameBorder="0" class="giphy-embed">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script>
		function submit_soap() {
			
			var sn = $('#sdd').val();

			$.get("form_get.php",{sid:sn},
				function(data) {
					$("#js_response").html(data) ;
				});
		}
	</script>
</head>
<body>
	<center>
		<h3> What is your Balance?</h3>
		<form>
			<p><b>ID NUMBER:</b></p> <input name="sdd" id="sdd" type="text" /> 
			<input type="button" class="btn btn-danger" value="submit" onclick="submit_soap()"/>
			 <br>
		</form>
<br>
		<p><b><div id="js_response"></div></b></p>
	</center>

</body>
</html>
