<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'ashleysiu.com' // Put you mail domain here
	,
	'Ashley Siu Portfolio' // Put your site name / form name here
	,
	'ashley.c.siu@gmail.com' // Where will the form notification be sent?
	,
	'no-reply@ashleysiu.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
