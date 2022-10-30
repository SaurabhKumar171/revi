<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revision Form</title>

    <style>
    form {
        text-align: center;
      
    }</style>
    
    

</head>
<body>
    <form action="Backend.php" method="post" enctype="multipart/form-data">
    <h2> Registration Form</h2>

    
    Name : <input type="text" name="name"><br><br>

    Email : <input type="text" name="email"><br><br>

    Phone Number : <input type="text" name="phone"><br><br>

    Gender : <input type="radio" id="male" name="Gender" value="male">
    <label for="male">Male</label>

    <input type="radio" id="female" name="Gender" value="female">
    <label for="female">Female</label>

    <input type="radio" id="others" name="Gender" value="others">
    <label for="others">Others</label>  <br><br>

    Password : <input type="password" name="password"><br><br>

    Nationality : <select name="Nationality" id="Nationality">
          <option value="india">India</option>
          <option value="america">America</option>
          <option value="austrailia">Austrailia</option>
          <option value="dubai">Dubai</option>
          
          </select>  <br><br>
     
    <input type="file" name="files" accept="document"> <br><br>
    
    <input type="submit" name="submit" value="submit">
           <br>
       
          <br>
</form>
</body>
</html>