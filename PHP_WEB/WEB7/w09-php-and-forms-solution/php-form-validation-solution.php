<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Validation with PHP</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
		<pre>
			<?php print_r($_POST); ?>
		</pre>

  <hr>

  <?php
  // function to filter the user input
  function test_input($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      return $data;
  }


  // variables initialized to empty strings
  $name = $email = $comment = $gender = "";
  $nameErr = $emailErr = $genderErr = "";

  // to check if all validations have passed
  $isValid = true;


  // check if submit button is clicked
  if (isset($_REQUEST['submit'])) {
      // check the name field
      if (empty($_REQUEST['name'])) {
          $nameErr = "Name field is required";
      } else {
          $name = test_input($_REQUEST['name']);
      }


      // check the email field
      if (empty($_REQUEST['email'])) {
          $emailErr = "Email field is required";
      } else {
          $email = test_input($_REQUEST['email']);
      }


      // read the comment value
      $comment = test_input($_REQUEST['comment']);


      // check and read the gender
      if (empty($_REQUEST['gender'])) {
          $genderErr = "Gender field is required";
      } else {
          $gender = $_REQUEST['gender'];
      }


      // check if any validation has failed
      if ($nameErr != "" || $emailErr != "" || $genderErr != "")
          $isValid = false;
  }
  ?>

  <h1>PHP Form Validation Example</h1>
  <p class="error">* required fields</p>

  <form action="" method="post">
      Name: <input type="text" name="name" value="<?php echo $name ?>">
      <span class="error">* <?php echo $nameErr; ?></span><br><br>

      Email: <input type="text" name="email" value="<?php echo $email ?>">
      <span class="error">* <?php echo $emailErr; ?></span><br><br>

      Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment ?></textarea>
      <br><br>

      Gender:
      <input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female
      <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male
      <span class="error">* <?php echo $genderErr; ?></span><br><br>

      <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  // if button is clicked and form is valid
  if (isset($_REQUEST['submit']) && $isValid == true) {
      echo "<h2>Your Input:</h2>";
      echo "<p>Name: $name</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Comment: $comment</p>";
      echo "<p>Gender: $gender</p>";
  }
  ?>
</body>
</html>
