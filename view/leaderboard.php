<?php
include 'secure/config.php';
include 'model/model.php';

$leaderboards = participant();


?>

<!DOCTYPE html>
<html lang="en">

<div class="leaderboard">
<h1>Participants:</h1>
<br>
<?php 

foreach ($leaderboards as $leaderboard) {
?>
    <span class="idparticipant"><?= htmlentities($leaderboard['idparticipant']) ?>.</span>
    <div class="leaderboardnames">
    <?= htmlentities($leaderboard['firstname']) ?>
    <?= htmlentities($leaderboard['lastname']) ?>
    </div>
 <br>
 <br>
<?php } ?>
</div>
