<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Game of Poker</title>
    <LINK REL=StyleSheet HREF="page_layout.css" TYPE="text/css" MEDIA=all>

</head>
<body>
<h2>Shall we play?</h2>
<div><h3>Player 1</h3></div>
<div class="center">
    <select name="player1Cards1">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
        while(($line = fgets($file)) !== false) {
		echo "<option name =\"$line\" value=\"$line\" >$line</option>";
        }
        fclose($file);
        }
        ?>
    </select>
    <select name="player1Cards2">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
    <select name="player1Cards3">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
    <select name="player1Cards4">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
    <select name="player1Cards5">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
</div>

<h3>Player 2</h3>
<div class="center">
    <select name="player2Cards1">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
    <select name="player2Cards2">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
    <select name="player2Cards3">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
    <select name="player2Cards4">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
    <select name="player2Cards5">
        <?php
        if ($file = @fopen('DeckofCards.txt', 'r')) {
            while(($line = fgets($file)) !== false) {
                echo "<option name =\"$line\" value=\"$line\" >$line</option>";
            }
            fclose($file);
        }
        ?>
    </select>
</div>
<div class="center">
    <div><input  class="myButton" type="button" name="evaluate" id="evaluateButton" value="Evaluate"></div>
</div>
<div name="outpput" id="output"></div>
</body>
</html>