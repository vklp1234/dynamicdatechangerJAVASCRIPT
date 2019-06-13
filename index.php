<!DOCTYPE html>
<html>
<head>
	<title>Date changer</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
</head>
<body>
	<div class="container" style="width: 50%;">
		<form class="form-group" >
			<p>Date:
    <input id="txtDate" class="form-control" type="text" />
</p>
<p>
	<select id="num" class="form-control" onchange="getdate()">
		<option value="">choose</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
   <!--  <input type="button" class="form-control" onclick="getdate()" value="Fill Follow Date" /> -->
</p>
<p>Follow Date:
    <input id="follow_Date" class="form-control" type="text" />
</p>
			

		</form>
		
	</div>
<script type="text/javascript">
	$(document).ready(function () {
    $('#txtDate').datepicker();
    $('#follow_Date').datepicker();
});

function getdate() {
    var tt = document.getElementById('txtDate').value;
    var num1 = document.getElementById('num').value;
    alert(num1);
  	  var date = new Date(tt);
    var newdate = new Date(date);


    newdate.setDate(newdate.getDate() + parseInt(num1));
    
    var dd = newdate.getDate();
    var mm = newdate.getMonth()+1;
    var y = newdate.getFullYear();

    var someFormattedDate = mm + '/' + dd  + '/' + y;
    document.getElementById('follow_Date').value = someFormattedDate;
}
</script>
</body>

</html>