<?php

// Write a function to clean-up data entered by users
// ==================================================

// Might be better for general text input
$special_chars_1 = "/[^a-z0-9\-]/i";

function clean($data, $special_chars) {

  $data = strip_tags($data);

  $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');

  $data = preg_replace($special_chars, " ", $data);

  return $data;
}
function h($data){
    return htmlspecialchars($data);
}
?>

<?php
    /*****  GC modified:  
     *      Added if statement, if variables: user_name, user_bio & user_hero are not empty, 
     *      declare three variables and appy clean function to those three variables, 
     *      the clean function sanitizes and harverst the data. 
     *      Commented out variables $user_name & $user_bio on the elseif statements as they are 
     *      not to be applied there. 
     *      Component 1 & 6
    */
    if(!empty($_POST['user_name']) && !empty($_POST['user_bio']) && !empty($_POST['user_hero'])){
        $user_name = clean($_POST['user_name'], $special_chars_1);
        $user_bio = clean($_POST['user_bio'], $special_chars_1);
        $user_hero = clean($_POST['user_hero'], $special_chars_1);

    }
   else if (empty($_POST['user_name'])) {
       header("Location: step_one.php?error=user_name_missing");
        //    $user_name=clean($_POST['user_name'], $special_chars_1);
        exit;
    }

    else if (empty($_POST['user_bio'])) {
         header("Location: step_one.php?error=user_bio_missing");
        //  $user_bio=clean($_POST['user_bio'], $special_chars_1);
        exit;
    }

?>

<?php require_once ("common/header.php"); ?>

<?php


if ($_POST['user_hero']=='brainio') {
    $image="brainio.png";
    $hero_bio="The English super-genius was hired to develop the Fortress of Justice - a large building
    capable of housing the team, and making it the de-facto source for world justice.";
}
if ($_POST['user_hero']=='clamp'){
    $image="clamp.png";
    $hero_bio="A brace, band, or clasp used for strengthening or holding things together.";
}
if ($_POST['user_hero']=='dr_goliath'){
    $image="dr-goliath.png";
    $hero_bio="Although he had been a part time hero for more than 25 years, it was only during the early
    2000s that Dr. Goliath began to seriously consider going full-time.";
}
if ($_POST['user_hero']=='power_maiden'){
    $image="power-maiden.png";
    $hero_bio="Powerful and Beautiful";
}
if ($_POST['user_hero']=='ironjaw'){
    $image="ironjaw.png";
    $hero_bio="A smart locking system you attach to injection molds that immediately boosts the clamping force capabilities of your plastic injection machines.";
}
if ($_POST['user_hero']=='shroud'){
    $image="shroud.png";
    $hero_bio="A thing that envelops or obscures something.";
}

//Picking out a nemesis randomly
$rand_name = ["Cookie Monster","Tom from accounting","Unikitty"];
$rand_image = ["cookie-monster.png","tom-from-accounting.png","unikitty.png"];
$rand_bio = ["SCARY!!!","STINGY!!!","ZIPPY!!!"];

$random = rand(0,2); 
$rand_name = $rand_name[$random];
$rand_image = $rand_image[$random];
$rand_bio = $rand_bio[$random];

?>

<body>
	<main>
        <!-- GC modified: Added link to start again. Component 3
        -->
        <div>
             <h1><a href="step_one.php">Go back to step one</a></h1>
        </div>
		<div class="container-fixed">
            <!-- GC modified: echoed variable $user_name, which was already declared up top.  -->
        <p>Howdy <?php echo $name = ucwords(strtolower($user_name)); ?>,</p>
        <p>Thank you for volunteering as a sidekick for The League of Heroes - we're excited to have you
            on our team. Our very fancy Superhero Sidekick Selection System has processed the
            information you provided, and we're pleased to announce that you have been paired with your
            <!-- GC modified: echoed variable $user_hero, which was already declared up top.  -->
            <?php echo $hero = ucwords($user_hero); ?>.
            Take a look below to see which nemesis you will be working to defeat.</p>
        <p>May the forks be with you!</p> 
        <p><i>The League of Heroes</i></p>    
        </div>

<!--Card Components-->
       
       <div class="card">
            <p class="card-title">Sidekick</p> 
            <?php echo $name ?>  
            <p><img src="images/character-headshots/spare.png" alt=""></p> 
            <!-- GC modified: echoed variable $user_bio, which was already declared up top.  -->
            <?php echo $user_bio; ?>
        </div>
        <div class="card">
            <p class="card-title">Superhero</p> 
            <?php echo $hero ?>  
            <p><img src="images/character-headshots/<?php echo $image ?>" alt=""></p> 
            <?php echo $hero_bio ?>
        </div>
        <div class="card">
            <p class="card-title">Nemesis</p> 
            <?php echo $rand_name ?>  
            <p><img src="images/character-headshots/<?php echo $rand_image ?>" alt=""></p> 
            <?php echo $rand_bio ?>
        </div>

<?php require_once("common/footer.php"); ?>	        