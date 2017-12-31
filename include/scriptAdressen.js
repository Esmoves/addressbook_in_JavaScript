window.onload = function(){

/************************************************************/
/************************************************************/
// TO DO: function addToBook needs pop-ups for user to signal which field need to be filled before sending
// TO DO: Wijzig button (change) laten werken ***************/
// TO DO: Mogelijkheid Send Mail maken **********************/
// TO DO: Tutorial maken ************************************/
// TO DO: about maken ***************************************/
// TO DO: Settings maken ************************************/
/************************************************************/
/************************************************************/

	// Get all the buttons
	var AllContactsBtn = document.getElementById('AllContacts');
	var sendMailBtn = document.getElementById('sendMail');
	var sendMailDiv = document.querySelector('.ShowSendMail');
	var AddSendMailBtn = document.getElementById('AddSendMailBtn');
	var AddSendMailDiv = document.querySelector('AddSendMail');
	var hollidayBtn = document.getElementById('holliday');
	var quickAddBtn = document.getElementById('QuickAdd');

	// form and buttons in Add form
	var cancelBtn = document.getElementById('Cancel');
	var AddBtn = document.getElementById('Add');
	var quickAddFormDiv = document.querySelector('.quickaddForm');
	
	// Side menu
	var AboutBtn = document.getElementById('about');
	var TutorialBtn = document.getElementById('tutorial');
	var SettingsBtn = document.getElementById('settings');
	var pageAboutDiv = document.querySelector('.pageAbout');
	var pageTutorialDiv = document.querySelector('.pageTutorial');
	var pageSettingsDiv = document.querySelector('.pageSettings');

	// Get all the information of the form fields
	var familyname = document.getElementById('familyName');
	var firstname = document.getElementById('firstName');
	var address = document.getElementById('address');
	var zipcode = document.getElementById('zip');
	var city = document.getElementById('city');
	var country = document.getElementById('country');
	var email = document.getElementById('email');


	// Start the adressbook. Display all contacts. Hidden when empty
	// this contains the delete and the edit buttons
	var addBookDiv = document.querySelector('.addbook');

	// Storage Array. Hold al the JSON entries of the adresbook
	var addressBook = [];

	// Eventlistener for the main menu
	AllContactsBtn.addEventListener("click", function(){
		document.getElementById("addbook").style.display = "block";
		document.getElementById("AddSendMail").style.display = "none";
		quickAddFormDiv.style.display = "none";
		pageSettingsDiv.style.display = "none";
		pageAboutDiv.style.display = "none";
		pageTutorialDiv.style.display = "none";
		sendMailDiv.style.display = "none";
	});

	// Eventlistener for send mail button
	sendMailBtn.addEventListener("click", function(){
		sendMailDiv.style.display = "block";
		pageSettingsDiv.style.display = "none";
		pageAboutDiv.style.display = "none";
		pageTutorialDiv.style.display = "none";
		document.getElementById("addbook").style.display = "none";
		document.getElementById("AddSendMail").style.display = "none";
		quickAddFormDiv.style.display = "none";
	});

	// Eventlistener to show the form to Add a New Mail for a Contact
	AddSendMailBtn.addEventListener("click", function(){
		document.getElementById("AddSendMail").style.display = "block";
		sendMailDiv.style.display = "none";
		pageSettingsDiv.style.display = "none";
		pageAboutDiv.style.display = "none";
		pageTutorialDiv.style.display = "none";
		document.getElementById("addbook").style.display = "none";
		quickAddFormDiv.style.display = "none";
	});

	// Event Listener If you click on quickAd, show form and hide pages
	quickAddBtn.addEventListener("click", function(){
		// display the form div
		quickAddFormDiv.style.display = "block";
		pageSettingsDiv.style.display = "none";
		pageAboutDiv.style.display = "none";
		pageTutorialDiv.style.display = "none";
		document.getElementById("addbook").style.display = "none";
		document.getElementById("AddSendMail").style.display = "none";
		sendMailDiv.style.display = "none";
	});
	// eventlistener for cancel botton that is in the form. Click cancel to hide form again.
	cancelBtn.addEventListener("click", function(){
		quickAddFormDiv.style.display = "none";
	});

	// eventlistenen to display the pages and hide the other divs
	AboutBtn.addEventListener("click", function(){
		pageAboutDiv.style.display = "block";
		quickAddFormDiv.style.display = "none";
		pageTutorialDiv.style.display = "none";
		pageSettingsDiv.style.display = "none";
		document.getElementById("addbook").style.display = "none";
		document.getElementById("AddSendMail").style.display = "none";
		sendMailDiv.style.display = "none";
	});
	TutorialBtn.addEventListener("click", function(){
		document.getElementById('pageTutorial').style.display = 'block';
		document.getElementById("AddSendMail").style.display = "none";
		quickAddFormDiv.style.display = "none";
		pageSettingsDiv.style.display = "none";
		pageAboutDiv.style.display = "none";
		document.getElementById("addbook").style.display = "none";
		sendMailDiv.style.display = "none";
	});
	SettingsBtn.addEventListener("click", function(){
		pageSettingsDiv.style.display = "block";
		quickAddFormDiv.style.display = "none";
		pageAboutDiv.style.display = "none";
		pageTutorialDiv.style.display = "none";
		document.getElementById("addbook").style.display = "none";
		document.getElementById("AddSendMail").style.display = "none";
		sendMailDiv.style.display = "none";
	});




	// eventlistener, press 'add' to put content in JSON 
	AddBtn.addEventListener("click", addToBook);

	// Delete an entry
	addBookDiv.addEventListener("click", removeEntry);

	// Delete ALL contacts (button on page 'Settings')
	document.getElementById("DeleteAll").addEventListener("click", function(){ 
		var check = confirm("Are you sure you want to delete ALL contacts?");
        if (check == true) { 
        	// empty the array	
           	localStorage['addbook'] = [];
           	alert("All contacts deleted");
           	pageSettingsDiv.style.display = "none";
       	 }
       	 else {
       	 	showAddressBook();
       	 }
     });

	// change an entry
	// doesnt work, kan maar 1 click op de div die aangeroepen wordt vanuit index.php
	//  addBookDiv.addEventListener("click", changeEntry);


	// Make a JSON array
	//Alternative methode localStorage['addbook'] = '[{"fullname":"A.E. Tijhoff","email":"tijhoff@mai.com","phone":"93828292","address":"something","city":"Chandigarh"}]';
	function jsonStructure(familyname, firstname, address, zipcode, city, country, email){
		this.familyname = familyname;
		this.firstname = firstname;
		this.address = address;
		this.zipcode = zipcode;
		this.city = city;
		this.country = country;
		this.email = email;
	}

	// empty all fields with class formfield 
	function clearForm(){		
		var formFields = document.querySelectorAll('.formFields');
		for(var i in formFields){
			formFields[i].value = '';
			}
		document.getElementById("addbook").style.display = "none";	
		}

/* Confirmation for delete prompt */    		            
	function removeEntry(e){
	// Remove an entry from the addressbook when delete is pushed
		if(e.target.classList.contains('delbutton')){		
			var check = confirm("Are you sure?");
        	if (check == true) { 	
            	var remID = e.target.getAttribute('data-id');
				addressBook.splice(remID,1);
				localStorage['addbook'] = JSON.stringify(addressBook);
				showAddressBook();
       		 }
       		 else {
            	showAddressBook();
       		 }
		}
  	}

	function changeEntry(e){
		// 
		 document.write("Hallo");
	/*	if(e.target.classList.contains('changebutton')){
			var remID = e.target.getAttribute('data-id');
			addressBook.splice(remID,1);
			localStorage['addbook'] = JSON.stringify(addressBook);
			
			function addToBook(){
				// Validate the input. make sure the form is filled. 
				// email and coutrny is not required.
				var isNull = familyname.value!='' && firstname.value!='' && address.value!='' && zipcode.value!= '' && city.value!='';
				// if this gives a return of False, you need to have a pop up stating wich field needs to be filled before saving

				// if isNull is true, add the input of the form to the array and localstorage
				if(isNull){
					// format the input into a valid JSON structure
					// this will be like var obj = {"fullname":"Esmeralda Tijhoff","phone":"123456789":"address":"straat nummer"etc,}
					var obj = new jsonStructure(familyname.value, firstname.value, address.value, zipcode.value, city.value, country.value, email.value);
					addressBook.push(obj);
					// store the string in the memory of the browser (localstorage) make the array into a string with JSON.stringify. 
					localStorage['addbook'] = JSON.stringify(addressBook);
					quickAddFormDiv.style.display = "none";

					// clear the form from last input
					clearForm();
					showAddressBook();
				}
			}

		} */
	}
 

	function addToBook(){
			// Validate the input. make sure the form is filled. 
			// email and coutrny is not required.
			var isNull = familyname.value!='' && firstname.value!='' && address.value!='' && zipcode.value!= '' && city.value!='';
			// if isNull is true, add the input of the form to the array and localstorage
			if(isNull){
				// format the input into a valid JSON structure
				// this will be like var obj = {"fullname":"Esmeralda Tijhoff","phone":"123456789":"address":"straat nummer"etc,}
				var obj = new jsonStructure(familyname.value, firstname.value, address.value, zipcode.value, city.value, country.value, email.value);
				addressBook.push(obj);
				// store the string in the memory of the browser (localstorage) make the array into a string with JSON.stringify. 
				localStorage['addbook'] = JSON.stringify(addressBook);
				quickAddFormDiv.style.display = "none";
				// clear the form from last input
				clearForm();
				showAddressBook();
			}
			else if (familyname.value === ""){
				alert("Please enter a last name");
			}
			else if (firstname.value === ""){
				alert("Please enter a first name");
			}
			else if (address.value === ""){
				alert("Please enter an adress");
			}
			else if (zipcode.value === ""){
				alert("Please enter a zipcode");
			}
			else if (city.value === ""){
				alert("Please enter a city");
			}
		}
  		
		
	// SHOW the turorial and about pages when buttons are pushed
	// This does not work. Why not? Button with onclick = function cannot find the function. why not?
	/*function settings(){
		// Start the content of the Pages 
		var pagesDiv = document.querySelector('.pages');
		pagesDiv.innerHTML = '<p>Settings</p>';
	}
	*/

	function showAddressBook(){
		if(localStorage['addbook'] === undefined){
			// initialize a string in localhost to avoid an error when you are running the code the first time
			localStorage['addbook'] = '[]';
		} else {
			// Json process the string in an array of valid JSON objects
			addressBook = JSON.parse(localStorage['addbook']);
			// Loop over the array addressBook and insert into the page
			addBookDiv.innerHTML = '';
			for(var n in addressBook){
				var str = '<div class="entry">';
					str += '<div class="familyname"><p>' + addressBook[n].familyname + ',</p></div>';
					str += '<div class="firstname"><p> ' + addressBook[n].firstname + '</p></div>';
					str += '<div class="address"><p>' + addressBook[n].address + '</p></div>';
					str += '<div class="zipcode"><p>' + addressBook[n].zipcode + '</p></div>';
					str += '<div class="city"><p>' + addressBook[n].city + '</p></div>';
					str += '<div class="country"><p>' + addressBook[n].country + '</p></div>';
					str += '<div class="email"><p>' + addressBook[n].email + '</p></div>';
					
					// a change button should be implemented here
					str += '<div class="change"><a href="#" class="changebutton" data-id="' + n + '">Edit</a></div>';
					// give all the delete buttons a n to identify which one is pushed for removeEntry
					str += '<div class="del"><a href="#" class="delbutton" data-id="' + n + '">Delete</a></div>';
					str += '</div>';
				addBookDiv.innerHTML += str;
				document.getElementById("addbook").style.display = "block";
			}
		}
	}
	showAddressBook();

}