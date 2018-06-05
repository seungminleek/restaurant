<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ming_restaurant</title>
  <style>
	body{ margin:0; font-family:"Times New Roman";}
	body, html {height: 100%;color: #777;}
	a{color:inherit;text-decoration:none;padding:8px 16px;vertical-align:middle}
	.main{background-attachment:fixed;background-repeat: no-repeat;background-position:center;background-size:cover;background-image: url('img/seafood.jpg');min-height:100%;}
	.box{box-shadow:0 2px 5px 0;
	position:fixed;width:100%;z-index:1;color:#000!important;background-color:#fff!important}
	.padding{padding:8px 16px!important}
	.bar{text-align:right!important; float:right!important;}
	.image{ax-width:100%;height:auto!important;opacity:0.7;border-radius:4px;width:49%}
	.padding2{padding-top:64px!important;padding-bottom:64px!important;padding:64px 24px!important}
	.content{max-width:980px;margin:auto}
	.col{float:right;width:100%;text-align:center!important;width:49.99999%}
	.row{float:left;width:100%;text-align:center!important;width:49.99999%;text-decoration:none}
	.grey{color:#757575!important}
	.input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
	.button{border:none;display:inline-block;vertical-align:middle;padding-top:10px;margin-top:16px!important;margin-bottom:16px;width:150px}
	.mbutton:hover{width:150px;background-color:#795548!important;}
	#menu{margin-bottom:100px;}
	#contact{margin-top:100px;}
   </style>
	<script>
	var myTimer = setInterval(myClock, 1000);
	var ex=[,,,, ,];
	var i=0;

	function myClock() {
    document.getElementById("time").innerHTML =
    new Date().toLocaleTimeString();}
	function btneft1() {document.getElementById("1").innerHTML="Assortment of fresh baked fruit breads and muffins 5.50";}
	function btneft2() {document.getElementById("1").innerHTML="Natural cereal of honey toasted oats, raisins, almonds and dates 7.00";}
	function btneft3() {document.getElementById("1").innerHTML="Vanilla flavored batter with malted flour 7.50";}
	function btneft4() {document.getElementById("1").innerHTML="Scrambled eggs, roasted red pepper and garlic with green onions 7.50";}
	function btneft5() {document.getElementById("1").innerHTML="With syrup, butter and lots of berries 8.50";}
	function submit() {document.getElementById("res").innerHTML="completed reservation!";}
	</script>

 </head>
 <body>
 <div class="box padding">
 	<h4><a href="#home">ming's restaurant</a>
	  <a href="#contact" class="bar">Contact</a>
	  <a href="#menu" class="bar">Menu</a>
	  <a href="#about" class="bar">About</a></h4>
 </div>
	<div class="main" id="home"></div>
  <div id="about" class="padding2 content">
  	<img src="img/cafe.jpg" class="image" width="600" height="750" >
	<div class="col">
		<h1 style="color:brown;">About Catering</h1><br>
		<h4>since 1889<br>
		open 11:00 ~ 22:00 <br></h4>
		<h2>What time is it?</h2>
		<h4><p id="time" style="color:brown;"></p></h4>
	</div>
  </div>
  <hr>

  <div id="menu" class="padding2 content">
	<div class="row">
  	  <h1 style="color:brown;">Our Menu</h1><br>
	  <h4><button class="mbutton button" onclick="btneft1()">Bread Basket</button>
      <button class="mbutton button" onclick="btneft2()">Honey Almond</button>
      <button class="mbutton button" onclick="btneft3()">Belgian Waffle</button>
      <button class="mbutton button" onclick="btneft4()">Scrambled eggs</button>
      <button class="mbutton button" onclick="btneft5()">Blueberry Pancakes</button></h4><br><br>
	  <h3>Introduction and Price</h3>
      <p id="1" class="grey"></p>
    </div>
	<div class="col">
	   <img src="img/1.jpg" style="padding-top:50px;width:70%;opacity:0.7;border-radius:4px;" height="600">
	</div>
	<hr />
   </div>
  </div>

	<div id="contact" class="padding2 content">
		<h1 style="color:brown;">Contact</h1>
		<!--<p><a href="form.php" target="_blank"><button class="button mbutton"><h3>Reservation<br>in php form</h3></button></a></p>-->
		<p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.<br>Fill out your inqurement.</p>
		<form>
			<p><input class="input" id="name" type="text" placeholder="Name"></p>
			<p><input class="input" id="phone" type="number" placeholder="Your phone number"></p>
			<p><input class="input" id="req" type="text" style="padding-top:16px!important;padding-bottom:16px!important" placeholder="Message \ Special requirements"></p>
			<p><button class="button mbutton" onclick="alert('문의해주셔서 감사합니다.')" style="float:right;">submit</button></p>
		</form>
		<h4><a href="https://goo.gl/maps/JkYKWBVXqe72" style="color:brown;"><u>The map of our restaurant<u></a></h4>
	</div>
	<hr>
  <div id="reserve" class="padding2 content">
  <?php
  // define variables and set to empty values
  $nameErr = $dateErr = $genderErr = $peopleErr = "";
  $name = $date = $gender = $comment = $people = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["date"])) {
      $dateErr = "Date is required";
    } else {
      $date = test_input($_POST["date"]);
    }

    if (empty($_POST["people"])) {
      $peopleErr = "how many people?";
    } else {
      $people = test_input($_POST["people"]);
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
<div class="padding2 content">
  <h1> Reservation</h1><br />
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Date: <input type="datetime-local" name="date" value="<?php echo $date;?>">
    <span class="error">* <?php echo $dateErr;?></span>
    <br><br>
    How many people: <input type="number" name="people" value="<?php echo $people;?>">
    <span class="error"><?php echo $peopleErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="children") echo "checked";?> value="children">children
    <span class="error"> <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  echo "<h2>Your Reservation:</h2>";
  echo $name;
  echo "<br>";
  echo $date;
  echo "<br>";
  echo $people;
  echo "<br>";
  echo "<h3>>>> Complated reservation, thank you.</h3>";
  ?></div></div>
 </body>
</html>
