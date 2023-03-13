<!DOCTYPE html>

<html>
	<?php
	include ("db_connection.php")
	?>
	<script> 
	var prev_x="0";
	function display_desc(x)
	{
		document.getElementById(x).style.display="block";
		document.getElementById(prev_x).style.display="none";
		if(prev_x == x)
			prev_x='0';
		else
			prev_x = x;
	}
	function popupfunction(x)
	{
		 document.getElementById('popup'+x).style.display='block';
		 document.getElementById('fade'+x).style.display='block';
	}

	function popupclose(x)
	{
		document.getElementById('popup'+x).style.display='none';
		document.getElementById('fade'+x).style.display='none';
	}

	function addToCart(x) {
		alert("Item Successfully Added to Cart...");
		document.getElementById("mycart").innerHTML += "<br>" + x;
	}
	</script>
	<font face ="Arial" color=black>
	<head>
		<link rel="stylesheet" href="mystyles.css">
	</head>
	<div class="header">
	<h1>Library Management System</h1>
	</div>
	<div class="menu_pop" id="menu_desc" style="display:none">
    Menu
	</div>
	<body bgcolor="#ecf9fc">
    <ul>
        <li class="menu-item">
			<b><a href="#" class="drp">Self-help books </a></b>
			<div class="menu-content">
				<a href="javascript:void(0)" onclick="popupfunction('1')" class=linktext>Man's Search for Meaning</a><br>
				<a href="javascript:void(0)" onclick="popupfunction('2')" class=linktext>The Talent Code</a><br>
				<a href="javascript:void(0)" onclick="popupfunction('3')" class=linktext>Trauma and Memory</a></br>
				<a href="javascript:void(0)" onclick="popupfunction('4')" class=linktext>The Half Known Life</a></br>
			</div>
        </li>


		<li class="menu-item">
			<b><a href="#" class="drp">Classics</a></b>
			<div class="menu-content">
				<a href="javascript:void(0)" onclick="popupfunction('5')" class=linktext>El Principito</a><br>
				<a href="javascript:void(0)" onclick="popupfunction('6')" class=linktext>Cien Anos de Soledad</a><br>
			</div>
		</li>
		
		<li class="menu-item">
			<b><a href="#" class="drp">Cultures</a></b>
			<div class="menu-content">
				<a href="javascript:void(0)" onclick="popupfunction('7')" class=linktext>While Time Remains</a><br>
				<a href="javascript:void(0)" onclick="popupfunction('8')" class=linktext>Eat, Pray, Love</a><br>
			</div>
        </li>
		
		<li class="menu-item">
			<b><a href="#" class="drp">Children</a></b>
			<div class="menu-content">
				<a href="javascript:void(0)" onclick="popupfunction('9')" class=linktext>Where's Bluey?</a><br>
			</div>
        </li>
    </ul>
	
	</div><br>
	<table style="width:80%">
	<?php
	$sql2="SELECT * FROM books_tab";
	$result2=$connect->query($sql2);
	$count=1;
	echo "<tr>";
	while($row2=$result2->fetch_assoc())
	{
		echo "<td>";
		echo "<br>";
		echo $row2['book_title']."<br>";
		echo "<br>";
		echo "<img src='img1/".$row2['book_cover']."'/>";
		echo "<br>";
		echo "<b>"."$";
		echo "<b>".$row2['price'];
		echo "<br>";
		echo "<br>";
		echo "</td>";
		$count++;
			if($count==6){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</tr>";
	
	?>
	</table>
</font>
</body>
</html>