<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script></script>
    <style>
        div{
            align-items: baseline;
            font: 1em sans-serif;
            
        }
        input{
            
        }
        .card {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 4px solid #ccc;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    </style>
</head>
<body>
    <div class="card">
    <form action="http://localhost/registration%20form/reset_pass.php" method="post">
          
            <label > <input type="email" name="E_mail" placeholder="enter email" required> </label> <br>

    <label>  <input type="password" name="old_Password" placeholder="enter old password" required>   </label><br>

          <label> <input type="password" name="new_Password" placeholder="new_Password"  placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> </label> <br>

          <label>  <input type="password" name="confirm_Password"  placeholder="confirm_Password" required>  </label><br>

          <input type="submit" name="submit" value="submit">
          <input type="reset">
      </form>
</body>

</html>