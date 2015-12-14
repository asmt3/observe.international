<?php 


$text_fields = array(
	'name' => 'Name',
	'email' => 'Email Address',
	'phone' => 'Telephone',
	// 'employment' => 'Employment',
	// 'studies' => 'Studies',
	// 'languages' => 'Languages',
	// 'experience_trial' => 'Experience (trial)',
	// 'experience_training' => 'Experience (training)',
	// 'other' => 'Other',
	'online_profile' => 'Online Profile',
	'cv' => 'CV',
);


$message = <<<ENDMAIL

Hello,

An application for membership has been made on the observe.international website.


========
BE VERY CAREFUL ABOUT CLICKING ANY LINKS SUBMITTED IN THIS MAIL
========

Here are the details:


ENDMAIL;

foreach ($text_fields as $field_name => $field_name_nice) {

$message .= "\n\n" . $field_name_nice . ":\n";


if (isset($_POST[$field_name]) && trim($_POST[$field_name])) {
	$message .= htmlspecialchars($_POST[$field_name]);
} else {
	$message .= 'None submitted';
}

$message .= "\n\n";

}

$message .= "Thanks!";


// Send
mail('as.thomson@gmail.com', 'Observe Membership Request', $message);
mail('rosa@observe.international', 'Observe Membership Request', $message);
mail('catherine@observe.international', 'Observe Membership Request', $message);


