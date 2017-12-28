body {
    width: device-width;
    margin:0px;
    background-color: #FAFAFA;
}

/********************************************************************/
/*****************COLOR PALET ***************************************/
/*************** purple B050B3 greypurple 6E4970  *******************/
/*************  dark:520955  pinkpurple F4ABF7  *********************/
/*************   light:F6DCF7  licht grijs #FAFAFA ******************/
/********************************************************************/
/********************************************************************/

.container {
    background-color: #F6DCF7;
    position:relative;
    width:100%;
    max-width: 400px;
    margin:auto;
}

/**********************************************************************/
/**********************************************************************/
/************************* SLIDE MENU *********************************/
/**********************************************************************/
/**********************************************************************/

div.submenu{
  background-color: #F4ABF7;
}

a {
  text-decoration: none;
}


div#btn1 {
  top: 250px;
}

div#btn2 {
  top: 300px;
}

div#btn3 {
  top: 350px;
}

div.button {
  border: 2px solid black;
  background-color: #F4ABF7;
  border-radius: 30px;
  width: 150px;
  height: 40px;
  padding-left: 50px;
  position: fixed;
  left: -150px;
  transition: .7s ease;
}

div.button:hover {
  background-color: #F4ABF7;
  position: fixed;
  left: -50px;
  width: 200px;
  border-radius: 0px;
  box-shadow: 0px 5px 0px #6E4970;
}

div.button:active {
  background-color: #2c3e50;
  transition: 0s;
  color: #ecf0f1;
}

button.submenuTutorial, .submenuAbout, .submenuSettings{
  background-color: #F4ABF7;
  color: #2c3e50;
  border: none;
  font-family: verdana, sans-serif;
  font-weight: bold;
  font-size: 18px;
  float: right;
  margin-right: 50px;
  font-variant: small-caps;
  position: relative;
  top:7px;
}

/*******************************************************************/
/*******************************************************************/
/**************** HEADER *******************************************/
/*******************************************************************/
/*******************************************************************/


div.title {
    padding:10px 10px 2px 10px;
    border-bottom:2px solid;
}

div.title img{
  float: right; 
  width: 130px;
}

.title h1 {
    margin:0px;
    font-family:sans-serif;
    font-weight:normal;
    font-size: 2em;
    text-align: center;
    color: #6E4970;
    text-shadow:0px 0px 1px rgba(0,0,0,0.4);
}

p.subtitle{
    font-family:sans-serif;
    font-size: 1em;
    text-align: center;
    color: #6E4970;
    margin: 0;
}

/*******************************************************************/
/*******************************************************************/
/*********************MAIN MENU ON TOP *****************************/
/*******************************************************************/
/*******************************************************************/

.mainmenu{
  background-color: #F4ABF7;
}

div.mainmenu ul{
    list-style: none;
    padding:5px 0px 5px 0px;
    border-bottom:1px solid;
}

div.mainmenu ul li{
  float: left;
  background-color: #6E4970;
}

.mainmenuItem{
    background-color: #B050B3;
    padding:7px;
    border:1px dashed;
    font-variant: small-caps;
    color: white;
    box-shadow: 3px 3px 10px #6E4970;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.mainmenuItem:hover {
    background-color: #6E4970;
    color: greypurple;
}

.mainmenuItem:active {
    background-color: #6E4970; 
    color: greypurple;
    box-shadow: none;
}

.mainmenu ul > li:last-child
{
    float:right;
}


/*******************************************************************/
/*******************************************************************/
/********************* New Contact Form ****************************/
/*******************************************************************/
/*******************************************************************/


div.quickaddForm {
   // height:540px;
    width: 100%;
    padding-top: 20px;
    color: #520955;
    background:rgb(240,240,240);
   // overflow:hidden;
    display:none;
}

.quickaddForm label {
    position:relative;
    display:block;
    width:80%;
    height:10px;
    float:left;
    font-family:sans-serif;
    font-size:12px;
    padding:5px;
    margin-left: 10px;
    font-weight:bold;
}

.quickaddForm input,textarea {
    border:1px dashed #520955;
    width:80%;
    padding:5px;
    margin-left: 20px;
    border-radius:5px;
    box-shadow:inset 0px 0px 10px rgba(0,0,0,0.2);
}

button#Add,#Cancel {
  color: #520955;
    padding:10px;
    margin:0px 20px 20px 20px;
    position:relative;
    left:75px;
    border:1px dashed #520955;
    border-radius:5px;
    font-weight:bold;
}

// *********************************************************//
// ********  Contacts to show in the JS loop  **************//
// *********************************************************//
// *********************************************************//

div.addbook{
  border: 2px solid black;
}

.entry {
    background-color: #F6DCF7;
    width:45%;
   // height:40px;
    border:1px solid;
    margin: 5px;
    float: left;
}

.entry .familyname {
    float:left;
    padding:4px;
}

.entry .firstname {
    float:left;
    padding:4px;
}

.entry .address {
    clear: left;
    float:left;
    padding:4px;
}

.entry .zipcode {
    clear: left;
    float:left;
    padding:4px;
}

.entry .city {
    float:left;
    padding:4px;
}

.entry .country {
    clear: left;
    float:left;
    padding:4px;
}

.entry .email {
    clear: left;
    float:left;
    padding:4px;
}

.entry p {
    margin:0px;
    font-family:sans-serif;
    font-size:12px;
    text-shadow:0px 0px 1px rgba(0,0,0,0.4);
}

.entry .change {
    margin-left: 5px;
    padding:9px;
    clear: left;
    float: left;
}

.entry .del {
    padding:9px 0 0 0;
    float: left;
}

a.changebutton {
    font-family:sans-serif;
    font-variant: small-caps;
    color:#FFF;
    font-size:12px;
    padding: 5px 10px 5px 10px;
    background:#B050B3;
    border-radius:8px;
    text-decoration:none;
    border:1px dashed;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

a.delbutton {
    font-family:sans-serif;
    font-variant: small-caps;
    color:#FFF;
    font-size:12px;
    padding: 5px 10px 5px 10px;
    background:#B050B3;
    border-radius:8px;
    text-decoration:none;
    border:1px dashed;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.changebutton:hover, .delbutton:hover {
    background-color: #6E4970; 
    color: greypurple;
}



// *********************************************************//
// *********************************************************//
// ** Show all the contacts by name with dates mail send ***//
// *********************************************************//
// *********************************************************//

.mailsend{
    background:rgb(230,230,230);
    width:960px;
    height:40px;
    border-bottom:1px solid;
}


// *********************************************************//
// *********************************************************//
// ** Design of the tutorial and about pages  **************//
// *********************************************************//
// *********************************************************//

div.pages{
    height: 400px;
    width: 100%;
    padding-top: 140px;
    color: #520955;
    background:rgb(240,240,240);
    display:none;
  }