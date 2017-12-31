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
					<div><button id="AllContacts" class="mainmenuItem">Contacts</button></div>
				</li>
				<li class="quickadd">
					<div><button id="QuickAdd" class="mainmenuItem">Add contact</button></div>
				</li>
				<li>
					<div><button id="sendMail" class="mainmenuItem">Send Mail</button></div>
				</li>
				<li>
					<div><button id="AddSendMailBtn" class="mainmenuItem">Add mail</button></div>
				</li>
			</ul>		
		</div>	
		
		<div class="pages">	
			<div class="pageSettings" id="pageSettings">
				<h1>Settings</h1>
				<p>Thank you for using Keep In Touch! </p>
				<p>Delete all contacts by pressing </p>
				<button id="DeleteAll" class="deleteAll">Delete All</button>
				<h1>KeepInTouch!</h1> 
				<hr>
				<div class="footer">
					<p> &copy 2018 A.E. Tijhoff All rights reserved</p>
					<p><em>Please also check <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></em></p>	
				</div>
			</div>

			<div class="pageAbout">
				<h1>About</h1>
				<p>Thank you for using Keep In Touch! </p>
				<p>This app is developed by A.E. Tijhoff as an assignment for CodeGorilla.</p>
				<h1>KeepInTouch!</h1> 
				<hr>
				<div class="footer">
					<p> &copy 2018 A.E. Tijhoff All rights reserved</p>
					<p><em>Please also check <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></em></p>	
				</div>	
				
			</div>

			<div class="pageTutorial" id="pageTutorial">
				<h1>Tutorial</h1>
				<p>Thank you for using Keep In Touch! </p>
				<p>With this app you can keep track of all your contacts. 
				<p><a href="#1" class="buttonLink">How to Add a Contact</a></p>
				<p><a href="#2" class="buttonLink">How to keep track of your Send Mail</a></p>
				<p><a href="#3" class="buttonLink">How to Delete All Contacts</a></p>
				<hr> 	


				<h2 id="1"">Add a Friend</h2>
				<p>	
					Click on the Add button in the main menu to add a contact. 
					Fill in the fields. All fields execpt Country and Email, need to have some input before you can save the contact.
					Click on Save to store the contact.
					The contact will show up at the buttom of your contactlist.
				</p>
				
				<h2 id="2">Send Mail</h2>
				<p>This app allows you to keep track of the mail you have send. Just click 'Add Mail' and fill in the form for each card or letter that you send. You can specify the purpose for sending your mail: Birthday/Christmas/Sickness/Friendship/Life Event/ etcetera.</p>
				<p>Click on 'Send Mail' to see all the mail you have send. You can sort the mail by contact, occasion or by date.</p>

				<h2 id="3">Delete All Contacts</h2>
				<p>If you want to empty your addressbook, simly click on the 'Delete All' button under 'Settings'. You can find the option 'Settings' in the left menu. </p>
				<p>If you click on the 'Delete All' button, you will be asked to confirm your request. Once you have clicked again, the adressbook will be empty and you can start afresh by putting in new contacts!</p>

				<h1>KeepInTouch!</h1> 
				<hr>

				<div class="footer">
					<p> &copy 2018 A.E. Tijhoff All rights reserved</p>
					<p><em>Please also check <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></em></p>	
				</div>
			</div>
		
			<div class="ShowSendMail" style="display:none; padding:20px; color: #520955;
    background:rgb(240,240,240);">		
				<h1>Your send Mail!</h1>
				<p>Add Mail to get a nice overview on the mails you have send.</p>
				<p>Coming soon will be a sort-option to sort per name, occasion or date!</p>

				<table class="tableSend">
					<tr>
						<th>name</th>
						<th>occasion</th>
						<th>dates</th>
					</tr>
					<tr>
						<td>First Contact</td>
						<td>birthday</td>
						<td>12/01/2014</td>
					</tr>
					<tr>
						<td>Second Contact</td>
						<td>Christmas</td>
						<td>12/12/2014</td>
					</tr><tr>
						<td></td>
						<td>Birthday</td>
						<td>03/02/2015</td>
					</tr><tr>
						<td></td>
						<td>Get well card</td>
						<td> 3nknkn</td>
					</tr>
					<tr>
						<td>third contact</td>
						<td>Christmas</td>
						<td>12/12/2014</td>
					</tr><tr>
						<td></td>
						<td>Birthday</td>
						<td>03/02/2015</td>
					</tr><tr>
						<td></td>
						<td>Get well card</td>
						<td> 3nknkn</td>
					</tr>

				</table>
			</div>	
		
			<!-- Page to show who you send a card for holidays. e.g for Christmas -->
			<div class="Showholliday" style="display:none;">	

				
			

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

		<div class="addbook" id="addbook">
				<!-- This is where the contacts will show up in a JS loop -->
		</div>	

		
		<div class="AddSendMail" id="AddSendMail" style="display:none;">
				<!-- This is where the send mails will show up in a JS loop -->
				<h1>Add a record of the mail you have send!</h1>
				<p>Soon you will find a form here to enter your send Mail!</p>
		</div>	



	</div>
</body>
</html>