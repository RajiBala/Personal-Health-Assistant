<html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<body>
	<br>
<h1 align="center">SIGN IN</h1>
<br><br><br>


<form action="fromregister.php" method="post">
<p>Name:     <input type="text" name="usr"/></p>
<p>Password: <input type="text" name="pwd"/></p>
<input type="submit" value="SIGN IN"/>
</form>

	<button id="myButton" class="float-left submit-button" >REGISTER</button>
	<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "projregister.php";
    };
</script>
</body>
</html>
