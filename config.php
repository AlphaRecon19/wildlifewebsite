<?php
//======================================================================
//   Copyright 2014 @AlphaRecon19
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.
//
//======================================================================


//======================================================================
// WILDLIFE WEBSITE CONFIGURATIOB FILE
//======================================================================

//-----------------------------------------------------
// Main Configiration
//-----------------------------------------------------

$site_title          = "Wildlife Park"; #Change this to your zoos name - CHANGE THIS
$header_title        = "Wildlife Park"; #Change this to what you would like to appear on the top of every page - CHANGE THIS
$header_description  = "The Wildlife Park for the 21st century."; #Change this to what you would like to appear below the header - CHANGE THIS
$header_topcolour    = "#000"; #This is the top colour of the header - CHANGE THIS
$header_bottomcolour = "#FF9900"; #This is the bottom colour of the header - CHANGE THIS
$config_showfooter   = TRUE; #To disable the footer at the bottom with my tag, set to FALSE 


//-----------------------------------------------------
// Page Configiration
//-----------------------------------------------------

/* /pages/404.php - This is the page that will be displayed if there webserver can't find the page the user requested. */
//-----------------------------------------------------------------------------------------------------------------------

$page_404_title = "404"; #This is the title of the page
$page_404_text  = "<h3>That page could not be displayed. Instead, here is a picture of Humphery.</h3><br /><center><img src='http://i.imgur.com/LWrzj0s.jpg' class='pargraphimagecenter'/></center>
		"; #This is the main html of the page



/* /pages/home.php - This is the homepage requested by default if the is no value in the ?page= vairible. */
//----------------------------------------------------------------------------------------------------------

$page_home_title = "Welcome"; #This is the title of the page
$page_home_text  = "
		<p class='lead'><img src='http://i.imgur.com/BkSYj21.jpg' class='pargraphimageleft'/>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		
		<p class='lead'><img src='http://i.imgur.com/87uphWD.jpg' class='pargraphimageright'/>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		"; #This is the main html of the page



/* /pages/adopt.php - This is the page that is rendered if requested by ?page=adopt */
//----------------------------------------------------------------------------------------------------------

$page_adopt_title = "Adopt a Lion Toady"; #This is the title of the page
$page_adopt_text  = "
		<p class='lead'><img src='http://i.imgur.com/BkSYj21.jpg' class='pargraphimageleft'/>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		
		<p class='lead'><img src='http://i.imgur.com/87uphWD.jpg' class='pargraphimageright'/>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		"; #This is the main html of the page



/* /pages/contact.php - This is the page that is rendered if requested by ?page=contact */
//----------------------------------------------------------------------------------------------------------

$page_contact_title       = "Contact Us"; #This is the title of the page
$page_contact_contactform = "
		<h2>Send an email directly to us</h2>
		<div class='contacterror' id='error_code'></div>
		<br />
		<form id='form-contact' action='/checkcontact.php' method='post' style='width:440px;' >
  		<label for='first_name'>First Name <span style='color:red;'>*</span></label>
		<input type='text' name='first_name' maxlength='50' size='40' style='float:right;margin-top: -1px;'><br />
		
  		<label for='last_name'>Last Name <span style='color:red;'>*</span></label>
		<input type='text' name='last_name' maxlength='50' size='40' style='float:right;margin-top: -1px;'><br />
		
  		<label for='email'>Email Address <span style='color:red;'>*</span></label> 
		<input type='text' name='email' maxlength='80' size='40' style='float:right;margin-top: -1px;'><br />
		
  		<label for='telephone'>Telephone Number</label>
		<input type='text' name='telephone' maxlength='30' size='40' style='float:right;margin-top: -1px;'><br />
		
  		<textarea  name='comments' maxlength='1000' cols='69' rows='13' placeholder='Your Message' style='margin-top: 3px;'></textarea><br /><br />
		
  		<center><input type='submit' class='btn btn-primary' value='Send'></center>
		</form>
		"; #This is the form on the contact page
$page_contact_text        = "
		<h2>You can also...</h2>
		<h3>Contact Us by Phone</h3>
		
		<p class='lead'>We're open 9am-5pm Monday to Friday<br />
		<b>t:</b> -inset number here-   - Main Switchboard<br />
		<b>t:</b> -inset number here-   - Supporter Care helpline</p>

		<p class='lead'>If you'd like to start a new adoption, membership or give a donation please contact our dedicated team on <inset number here></p>

		<p style='color:red;'>*Please note that for training and quality purposes, your call may be recorded.</p>

		<h3>Or write to us at</h3>
		-Maybe change this? but you don't have to-
		<p class='lead'>" . $site_title . "<br />
		The Living Planet Centre<br />
		Muffin House<br />
		Coop Road<br />
		Working <br />
		Luton, LU7 3BE</p>
		"; #This is the main html of the page where the other contact infomation should go



/* /pages/success.php - This is the homepage requested by default if the is no value in the ?page= vairible. */
//----------------------------------------------------------------------------------------------------------

$page_success_title = "Thank You"; #This is the title of the page
$page_success_text  = "
		<p class='lead'>Your message has been sent as requested. <a href='/?page=home'>Retun Home</a></p>
		"; #This is the main html of the page where the other contact infomation should go