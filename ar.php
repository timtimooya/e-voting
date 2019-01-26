<?php
/* File: replyFields.inc
* Desc: Contains arrays with the field names and form
* elements for the forum post form.
*/
$page = array( “title” => “Reply to: “ . $_POST[‘subject’],
“top” => “Reply to: “ . $_POST[‘subject’],
“bottom” => “Send questions and commentsto admin@ourplace.com”,);
$elements = array( “top” => “”,
“bottom” => “”,
“submit” => “Post Message”
);
$fields = array( “author” => “Your e-mail address”,
“body” => “Message”,
“fresponse” => “In reply to”,
“freplyto” => “”,
“fsubject” => “”,
);
$types = array( “author” => “input”,
“body” => ‘textarea rows=”5” cols=”60”’,
“fresponse” => ‘textarea readonly rows=”5”
cols=”60”’,
“freplyto” => ‘input type=”hidden”’,
“fsubject” => ‘input type=”hidden”’,
);
$styles = array( “author” => “postAuthor”,
“body” => “postBody”,
“fresponse” => “postResponse”,
“freplyto” => “hidden”,
“fsubject” => “hidden”,
);
?>