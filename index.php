<html>
<body>

<form action="main.php" method="get">
<div class="first_name">
                    <label for="fname">First name</label>
                    <input type="text" placeholder="name" class="fname" id="fname" name="fname"><br>
                </div>
                <div class="pass_wrap">
                    <label for="password" class="pass_title">Password</label>
                    <input type="password" placeholder="password" class="fpass" id="fpass" name="password"><br>
                </div>
<button type="Submit" value="Submit">Submit</button>
<button type="Reset" value="Reset">Clear</button>
</form>

<script language="javascript">
function check(form)
{
if(form.fname.value == "Chyngyz" && form.password.value == "12")
{
    form.action = "https://qwert687668.herokuapp.com/";
    return true;
}
{
  alert("Error Password or Username")
  return false;
}
}
</script>
</body>
</html>
