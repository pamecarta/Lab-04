<!DOCTYPE html>
<html>
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
	<form name="lending-form" method="POST" action="lending_book_process.php">
	<center>
	<label>BookID:</label>
	<input type="number" name="book_id"/><br><br></td>
	<label>UserID:</label>
	<input type="text" name="user_id" /><br><br>
	<label>LendingID:</label>
	<input type="text" name="lending_id" /><br><br>
	<label>Date of lending:</label>
	<input type="date" name="date_of_lending" /><br><br>
	<label>Date of return:</label>
	<input type="date" name="date_of_return" /><br><br>
	<label>Status:</label>
	<input type="text" name="status" /><br><br>
	<label>Remarks:</label>
	<input type="text" name="remarks" /><br><br>
	<input type="submit" id="but" style="background-color:#1abc9c;color:white;" value="Submit"/></td></center></form>
	</body>
	</html>
	