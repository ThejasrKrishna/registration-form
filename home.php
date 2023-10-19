<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            width: 400px;
            height: auto;
            margin: auto;
            padding: 20px;
            /* word-spacing: fixed; */
            border: 4px solid #ccc;
            border-radius: 15px;
            margin-top: 40px;
        }
        input {
            margin-bottom: 17px;
            font-size: large;
            padding: auto;

        }
        p{
          text-align: center;
          font-size: large;
          color: rgba(0, 0, 0.8, 0.9);
        }

    </style>
     
</head>
<body>
<p> Register Here!</p> <a href="reset.php"> <h3 style="text-align:right;">password Reset</h3> </a>
 <hr>
<div class="card">

<form action="reg_details.php" method="post" enctype="multipart/form-data" >

   <label> Name &nbsp; <input type="text" name="Name" placeholder="enter Name" required>   </label><br>
   <label> Email &nbsp; &nbsp;  <input type="email" name="E_mail" placeholder="E_mail" required> </label> <br>
   <label> Passsword <input type="password" name="Password"  placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
   </label> <br>
   <label> DOB &nbsp;  <input type="date" name="DOB"  required> </label> <br>
   <label> Number&nbsp;  <input type="number" name="Number" placeholder="mobile no" pattern="[0-9]{10}" required> </label> <br>
   <fieldset> <legend><label> Languages :</legend> <br>
   
      <input type="checkbox" name="Languages[]" value="Kannada" checked> Kannada
     <input type="checkbox" name="Languages[]"  value="English">English
     <input type="checkbox" name="Languages[]" value="Hindi"> Hindi </label> <br>
     </fieldset><br>
     <fieldset>
      <legend> Gender</legend>
   <label>  <input type="radio" name="Gender" value="Male" checked  required> Male   
                   <input type="radio" name="Gender" value="Female"  required> Female </label>  <br>
     </fieldset><br>
 <label> Comments&nbsp; <textarea name="Comments" id="" cols="13" rows="3" required ></textarea> </label> <br> <br>
   
  <label>GovtId &nbsp;  <select  name="GovtId" required>  
   <option value="adhaar"> AdhaarCard </option>
   <option value="pan"> PanCard </option>
   <option value="voter" selected> VoterId </option>
   </select>
   </label> <br> <br>

   <label> Upload <input type="file" name="Upload"  required> </label> <br>
   

    <input type="submit" name="submit" value="submit">
   &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="reset">
</form>
</div>  
</body>
</html>
