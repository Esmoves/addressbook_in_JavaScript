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

h1.submenu {
  font-family: verdana, sans-serif;
  font-weight: bold;
  font-size: 18px;
  text-align: center;
  font-variant: small-caps;
  position: relative;
  top: -1px;
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
  background-color: #F4ABF7;
  color: #2c3e50;
  border: none;
  border-radius: 30px;
  width: 280px;
  height: 40px;
  position: fixed;
  left: -240px;
  transition: .7s ease;
}

div.button:hover {
  background-color: #F4ABF7;
  position: fixed;
  left: -50px;
  width: 300px;
  border-radius: 0px;
  box-shadow: 0px 5px 0px #6E4970;
}

div.button:active {
  background-color: #2c3e50;
  transition: 0s;
  color: #ecf0f1;
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
    padding:5px 5px 5px 5px;
    border-bottom:1px solid;
}

div.mainmenu ul li{
  float: left;
  background-color: #6E4970;
}

.mainmenuItem{
    padding:2px;
    border:1px dashed;
    text-shadow:0px 0px 1px;
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
    height:440px;
    width: 100%;
    
    background:rgb(240,240,240);
    overflow:hidden;
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
    border:1px dashed;
    width:80%;
    padding:5px;
    margin-left: 20px;
    border-radius:5px;
    box-shadow:inset 0px 0px 10px rgba(0,0,0,0.2);
}

button#Add,#Cancel {
    padding:10px;
    margin:20px;
    position:relative;
    left:300px;
    border:1px dashed;
    border-radius:5px;
    font-weight:bold;
}

.entry {
    background:rgb(230,230,230);
    width:960px;
    height:40px;
    border-bottom:1px solid;
}


.entry .name {
    width:130px;
    float:left;
    padding:11px;
}

.entry .email {
    width:200px;
    float:left;
    padding:11px;
}


.entry .phone {
    width:100px;
    float:left;
    padding:11px;
}

.entry .address {
    width:250px;
    float:left;
    padding:11px;
}

.entry .city {
    width:100px;
    float:left;
    padding:11px;
}

.entry .del {
    width:30px;
    float:left;
    padding:9px;
}

.entry p {
    margin:0px;
    font-family:sans-serif;
    font-size:12px;
    text-shadow:0px 0px 1px rgba(0,0,0,0.4);
}

.entry .del a {
    font-family:sans-serif;
    color:#FFF;
    font-size:12px;
    padding:5px;
    background:rgb(255,100,100);
    border-radius:8px;
    text-decoration:none;
}