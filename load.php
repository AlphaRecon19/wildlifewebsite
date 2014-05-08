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

error_reporting(0); // Turn off all error reporting
if (!isset($_GET['page'])) // Check if the ?page= isset the
    {
    $page = "home"; // Assign home to the variable $page
} else {
    $page = $_GET['page']; // Assign ?page= to the variable $page
}

$get = file_get_contents("http://" . $_SERVER['HTTP_HOST'] . "/pages/" . $page . ".php", FILE_USE_INCLUDE_PATH); // Get the requested page data from the /pages/ directory

if (!$get) // If there was a erro in retreiving the file then
    {
    $data['data'] = file_get_contents("http://" . $_SERVER['HTTP_HOST'] . "/pages/404.php", FILE_USE_INCLUDE_PATH);
    // Get the 404 page data from the /pages/ directory and put it into the variable data for the json response
} else {
    $data['data'] = $get;
    // Assign the retrived page to the variable data for the json response
}

header('Content-Type:text/json'); //Sets the header of the document to json so that it can be read via the javacript
echo json_encode($data); // echo the data

?>