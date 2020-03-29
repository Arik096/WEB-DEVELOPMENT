<!DOCTYPE html>
<html>
  <head>
    <title>form Validation</title>
  </head>
  <body>

    <?php
    $name = "";
    $email = "";
    $website = "";
    $comment = "";
    $gender = "";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $websie = test_input($_POST["website"]);
      $comment = test_input($_POST["comment"]);
      $gender = test_input($_POST["gender"]);
    }

    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      return $data;
    }

     ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <h1>PHP From Validation</h1>
      <br>
      <p style="color:red"><sup>*</sup>required field</p>
      <br>
      <fieldset style="line-height:30px;">
        <label>Name:</label>
        <input type="text" name="name"><sup style="color:red">*</sup>
        <br>
        <label>Email:</label>
        <input type="email" name="email"><sup style="color:red">*</sup>
        <br>
        <label>Website:</label>
        <input type="text" name="website">
        <br>
        <label>Comments:</label>
        <textarea name="comment" rows="8" cols="30"></textarea>
        <br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other
        ">Other<sup style="color:red">*</sup>
        <br>
        <input type="submit">
      </fieldset>
    </form>
  </body>
</html>
