<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
				
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="xyi" class="form-control input_user" value="" placeholder="username" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="iux" value="" placeholder="password" required>
						</div>
						</div>
							<tr class="d-flex justify-content-center mt-3 login_container">
				 	 <td><input type="submit" onclick="return check(this.form)" value="SUBMIT"></td>
					 <td><input type="reset"  value="CLEAR"></td>
				   </tr>
					</form>
				</div>
				  <script language="javascript">
function check(form)
{
if(form.xui.value == "Chyngyz" && form.iux.value == "12")
{
    form.action = "https://qwertyuio35356.herokuapp.com/";
    return true;
}
{
  alert("Error Password or Username")
  return false;
}
}
</script>
		
		
			</div>
		</div>
	</div>
</body>
</html>
