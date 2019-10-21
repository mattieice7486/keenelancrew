<?php require('core/init.php'); ?>

<?php

//Get Template & Assign Vars
$template = new Template('templates/profiles.php');

//Assign Vars
// $template->profiles = $profile->getProfile();
// $template->topics = $topic->getAllTopics();
// $template->totalTopics = $topic->getTotalTopics();
// $template->totalCategories = $topic->getTotalCategories();
// $template->totalUsers = $user->getTotalUsers();
//Display template
echo $template;