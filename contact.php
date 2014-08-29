<!DOCTYPE html>
<html>
  <head>
  <title>Form submission</title>
  <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <form action="mail_handler.php" method="post">
      <section class="body">
        <input type="text" name="title" class="hidden">

        <label>First Name</label>
         <input type="text" name="first_name" placeholder="Type Here"><br>

        <label>Last Name</label>
         <input type="text" name="last_name" placeholder="Type Here"><br>
       
        <label>Email</label>
        <input type="text" name="email" type="email" placeholder="Type Here"><br>
       
        <label>Message</label>
        <br><textarea name="message" placeholder="Type Here"></textarea><br>
       
        <input id="submit" type="submit" name="submit" value="Submit">
      </section>
    </form>


  </body>
</html>