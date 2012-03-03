<?php
require('includes/loader.php');
$load = new Loader();
$load->load(array('facebook'));

$fb = new Facebook();

echo '<p class="functionName">User Profile Picture</p>';
echo '<img src="' . $fb->userProfilePicture('zuck', 'large') . '" />';

echo '<p class="functionName">Basic Info</p>';
echo '<pre>';
print_r($fb->basicInfo('zuck'));
echo '</pre>';

?>