<html>
<head>
<title>
SQL QUERY SEARCH
</title>
</head>
<body>
<center>
<h1 style="margin-top:15%;">Enter Your Query Here</h1>
<form action="query_execute.php" target="myframe">
<input id="box"  style="width: 804px;" type="text" name="querytracker" oninput="call()">
<input type="submit" name="submit">
</center>
</form>
<center>
<iframe name="myframe" width="70%" height="40%></iframe>
</center>
<script>
function call(){
    var x=document.getElementById("box").value;
    var y=x.substring(0,6);
    if((y.localeCompare("DELETE"))==0){
    location.reload();
    alert("CANNOT DELETE SORRY");
    }
}
</script>
</body>
</html>




