<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $dateErr = $genderErr = $peopleErr = "";
$name = $date = $gender = $comment = $people = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "이름은 필수입니다.";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["date"])) {
    $dateErr = "시간을 입력하세요.";
  } else {
    $date = test_input($_POST["date"]);
  }
    
  if (empty($_POST["people"])) {
    $peopleErr = "숫자로 입력하세요.";
  } else {
    $people = test_input($_POST["people"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "";
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

<h2>고객용 예약 페이지</h2>
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
  <input type="submit" name="submit" value="Submit" onclick="alert('예약이 완료되었습니다. 감사합니다.');">

<?php
echo "<h2>Your Reservation:</h2>";
echo $name;
echo "<br>";
echo $date;
echo "<br>";
echo $people;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo "<hr>";
?>

</body>
</html>
