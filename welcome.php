<?php
  include register.php
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz 2</title>

	<link rel="stylesheet" href="quiz2.css">
</head>
<body>
	<div id = "wrap">
    <h2 class="blood">MONSTER SITE!</h2>
    <br><br>
    <form action="" name="welcome" method="post">
    First Name:<input type="text" name="firstname"><br>
    Last Name: <input type="text" name="lastname" ><br>
    Email Address:<input type="text" name="emailaddress" ><br>
    What kind of monster are you?:<input type="text" name="monstertype" ><br>
    <input type="submit" name="submit" value="Submit your info!" />
    </form>
    <?php
      // Verifies data is present
      if(isset($_POST['firstname']))
      {
        if(empty($_POST['firstname']))
        {
          echo "First name is required";
        }
        elseif(empty($_POST['lastname']))
        {
          echo "Last name is required";
        }
        elseif(empty($_POST['emailaddress']))
        {
          echo "Email address is required";
        }
        elseif(empty($_POST['monstertype']))
        {
          echo "C'mon I know you're a monster at heart!";
        }
        else
        {
          echo "Hi ", $_POST['firstname'], ", ", " you recently signed up with the email address ", $_POST['emailaddress'], " thank you!";
          echo nl2br ("\n");
          echo "I see you are a ", $_POST['monstertype'], " welcome to the bash!";
        }
      }
      ?>
	</div>
</body>
</html>
