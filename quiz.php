<html>

<link rel="stylesheet" href="stylessheet/main.css" type="text/css">
<h1>Trivia Quiz</h1>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<img src ="images/cover_image.jpg" width ="50%" alt = "Sport">
 
<?php




$Questions = [
'</div><div class ="a"><h3>Question 1:</h3><p> Which boxer was known as "The Greatest" and "The peoples Champion ?"</p>' => [
    "Muhammad Ali" =>"ans1",
    "Floyd Mayweather" =>"anw1",
    "Mike Tyson" => "anw1",
    "Sugar Ray Leonard" => "anw1"
],
'Question 2: <p>Which country hosted the soccer world cup in 2010 ?</p> ' => [
    "Spain" =>"anw2",
    "Japan" =>"anw2",
    "England" => "anw2",
    "South Africa" => "ans2"
],
'Question 3: <p>Which french cyclist was known as "The badger" ?</p>' => [
    "Laurent Fignon" =>"anw3",
    "Chris Froome " =>"anw3",
    "Bernard Hinault" => "ans3",
    "Richard Virenque" => "anw3"
],
'Question 4: <p>Which runner is an 11 time world champion and holds the record in 100 and 200m race ?</p>' => [
    "Yohan Blake" =>"anw4",
    "Usain Bolt" => "ans4",
    "Tyson Gay" => "anw4",
    "Asafa Powell" => "anw4"
],
'Question 5: <p>Who is the current holders of the Web Ellis Rugby World Cup ?</p>' => [
    "South Africa" =>"ans5",
    "New Zealand" => "anw5",
    "Australia" => "anw5",
    "China" => "anw5"
],
'</div><img src ="images/tech.jpeg" width ="50%" alt = "Technology"><div class ="b"><br><h3>Question 6:</h3> <p>What year was the very first model of the iPhone released ?</p>' => [
    "2010" => "anw6",
    "2009" =>"anw6",
    "2008" => "anw6",
    "2007" => "ans6"
],
'Question 7: <p>Whats the shortcut for the "copy" function on most computers ?</p>' => [
    "ctrl v" =>"anw7",
    "ctrl z" => "anw7",
    "ctrl x" => "anw7",
    "ctrl c" => "ans7"
],
'Question 8: <p>Is java a type of OS ? </p>' => [
    "Yes" =>"anw8",
    "No" => "ans8",
    "Maybe" => "anw8",
    "I dont know" => "anw8"
],
'Question 9: <p>Google Chrome, Safari and FireFox are different types of...?</p>' => [
    "Computers" =>"anw9",
    "Tvs" =>"anw9",
    "Web Browsers" => "anw9",
    "Phones" => "ans9"
],
'Question 10: <p>What is often seen as the smallest unit of memory ?</p>' => [
    "Kilobyte" =>"ans10",
    "Megabyte" => "anw10",
    "Gigabyte" => "anw10",
    "Terabyte" => "anw10"
],
'</div><img src = "images/science" width ="50%" alt = "science"><div class ="c"><h3>Question 11:</h3> <p>What is meteorology the study of ? </p>' => [
    "Meteors" =>"anw11",
    "People" => "anw11",
    "Stars" =>"anw11",
    "Atmosphere" => "ans11"
],
'Question 12: <p>What part of the atom has no charge ?</p>' => [
    "Neutron" =>"ans2",
    "Proton" => "anw12",
    "Electron" => "anw12"
],
'Question 13: <p>Which natural disaster is measured with a richter scale ?</p>' => [
    "Earthquake" =>"ans13",
    "Tsunami" => "anw13",
    "Tornado" => "anw13"
],
'Question 14: <p>What is the symbol for potassium ? </p>' => [
    "P" =>"anw14",
    "M" => "anw14",
    "K" => "ans14"
],
'Question 15: <p>Which planet has the most gravity ? </p>' => [
    "Pluto" =>"anw15",
    "Jupiter" => "ans15",
    "Earth" => "anw15"
],
'</div><div class ="d"><h2><u>Mixed Questins</u><h3>Question 16:</h3> <p>Where in the human body would you find the medulla oblongata ?</p>' => [
    "The Brian" =>"ans16",
    "The Stomach" => "anw16",
    "The eye" => "anw16"
],
'<p>Question 17:</p> Which gas is formed when a hydrogen bomb is detonated</p>' => [
    "Nitrogen" =>"anw17",
    "Helium" => "ans17",
    "Carbon dioxide" => "anw17"
],
'Question 18: <p>Aconcagua is the highest mountain in Andes, but in which country does it lie ?</p>' => [
    "Brazil" =>"anw18",
    "Argentina" => "ans18",
    "Russia" => "anw18"
],
'Question 19: <p>What colour does a gold leaf appear if you hold it up to the light ?</p>' => [
    "Blue"=>"anw19",
    "Gold" =>"anw19",
    "Red" => "anw19",
    "Green" => "ans19"
],
'Question 20: <p>How many legs does a lobster have ?</p>' => [
    "7" =>"anw20",
    "8" =>"anw20",
    "9" => "anw20",
    "10" => "ans20"
    
]

];




?>
<body>
<form action='process.php?id=1' method='post' id='quizForm' id='1'>


<div class ="container">

<div class = "form-container">
<?php foreach($Questions as $key => $value) : ?>
<h3 class ="label"><?php echo $key ?> </h3>
<?php foreach($value as $data => $attribute) : ?>
<input type ="radio" name ="<?php echo $attribute ?>" value ="<?php echo $data ?>">
<label for =""><?php echo $data ?></label>
<?php endforeach; ?>
<?php endforeach; ?>
<br><br>

<input type ="submit" vlaue="Submit" name ="submit">
</form>
</div>
</div>

</body>




</html>