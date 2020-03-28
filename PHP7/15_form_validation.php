<!DOCTYPE html>
<html>
  <head>
    <title>form Validation</title>
  </head>
  <body>
    <form class="" action="extra/15_output_page.php" method="post">
      <h1>PHP From Validation</h1>
      <br>
      <p style="color:red">*required field</p>
      <br>
      <fieldset style="line-height:30px;">
        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <label>Email:</label>
        <input type="email" name="email">
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
        ">Other
        <br>
        <input type="submit">
      </fieldset>
    </form>
  </body>
</html>
