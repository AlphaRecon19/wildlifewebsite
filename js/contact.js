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
$(document).ready(function() {
	//Wait till the page has loaded
  $('#form-contact').submit(function(e) {//Wait till the form with the id of form-contact is submited
	  $('#error_code').html(""); //Resets any errors from before
	e.preventDefault(); //Prevent the default event happaning
    e.stopPropagation(); //Prevent the default event happaning
	
    $.ajax({
		//Call ajax
       type: "POST",
	   //Set the requset type
	   url: '/checkcontact.php',
	   //Set the url including the $page variable is set at the top of this page
       data: $(this).serialize(),
	   //Set the data to post from the form
       success: function(data)
       {//Now go do something and sets the returned data to the 
		   
          if (data.data == 'success') {//If there is anything returned from this request then put it into the variable retuned
			window.location = '/?page=success';//redirect the user to the success page
          }
          else {//If it was not a gr8 success
			  $('#error_code').html(data.data);//Place all the data into the page in the span with the id=error_code
          }
       }
   });
 });
});