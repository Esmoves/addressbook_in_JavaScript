<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>AddressBook</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="./include/stylesheetAdressenboek.cs">
	<script src="./include/scriptAdressen.js"></script>
</head>
<body>
	<div class="container">
		<div class="sidemenu">
			<a id="about">
			  <div id="btn3" class="button">
			    <h1>about</h1>
			  </div>
			</a>
			<a id="settings">
			  <div id="btn1" class="button">
			    <h1>settings</h1>
			  </div>
			</a>
			<a id="tutorial">
			  <div id="btn2" class="button">
			    <h1>tutorial</h1>
			  </div>
			</a>
		</div>
	
		<div class="title">
			<img src="./images/happymail.jpg" alt="Happy mail" />
			<h1>Keep in Touch!</h1>
			<p class="subtitle"><em>Bring smiles with mail.<br />
			Keep track of your contacts <br />using the KeepInTouch-App by Tijhoff.inc</em></p>
		</div>

		<div class="mainmenu">
			<ul>				
				<li>
					<div><button id="sendMail" class="mainmenuItem">Send Mail</button></div>
				</li>
				<li>	
					<div><button id="AllContacts" class="mainmenuItem">Holliday checklists</button></div>
				</li>
				<li class="quickadd">
					<div><button id="QuickAdd" class="mainmenuItem">+ Add</button></div>
				</li>
			</ul>		
		</div>	
		
		<div class="pages">	
			<div class="pageSettings" id="pageSettings">
				<h1>Settings</h1>
				<p>Thank you for using Keep In Touch! </p>
				<p>Delete all contacts by pressing </p>
				<button id="DeleteAll" class="deleteAll">Delete All</button>
				<p> &copy 2018 A.E. Tijhoff All rights reserved</p>
				<p><em>Please also check <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></em></p>	
			</div>

			<div class="pageAbout">
				<h1>About</h1>
				<p>Thank you for using Keep In Touch! </p>
				<p>This app is developed by A.E. Tijhoff as an assignment for CodeGorilla.</p>
				<p> &copy 2018 A.E. Tijhoff All rights reserved</p>
				<p>Please also check <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></p>	
				
			</div>

			<div class="pageTutorial" id="pageTutorial">
				<h1>Tutorial</h1>
				<p>Thank you for using Keep In Touch! </p>
				<p>With this app you can keep track of all your contacts. 
					Click on the Add button in the main menu to add a contact. 
					Fill in the fields. All fields execpt Country and Email, need to have some input before you can save the contact.
					Click on Save to store the contact.
					The contact will show up at the buttom of your contactlist.
				</p>
				<p> &copy 2018 A.E. Tijhoff All rights reserved</p>
				<p>Please also check <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></p>	
			</div>
		</div>
		
		
		

		<!-- hidden div, only show when klick quick add button -->
		<div class="quickaddForm">
			<label for="familyName">Family name</label><input type="text" id="familyName" class="formFields">
			<label for="firstName">First name</label><input type="text" id="firstName" class="formFields">
			<label for="address">Adress + housenumber</label><textarea name="address" id="address" cols="30" rows="2" class="formFields"></textarea>
			<label for="zip">Zip code</label><input type="text" id="zip" class="formFields">
			<label for="city">City</label><input type="text" id="city" class="formFields">
			<label for="country">Country</label><input type="text" id="country" class="formFields">
			<label for="email">E-Mail</label><input type="text" id="email" class="formFields">
			<br><br>
			<button id="Add">Add Now</button><button id="Cancel">Cancel</button>
		</div>

		<div class="addbook">
			<!-- This is where the contacts will show up in a JS loop -->
		</div>	

		<div class="sendmail">
			<!-- this is where the contacts wil show by name and when you send mail to them -->
			<!-- does not function yet -->
		</div>	

	</div>
</body>
</html>