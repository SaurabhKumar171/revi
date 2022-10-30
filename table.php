<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">Nationality</th>
      <th scope="col">File</th>
    </tr>
  </thead>
  <tbody>
    <tr>    
        <th scope="row"><?php echo $_SESSION['name']; ?></th>
        <th><?php echo $_SESSION['email']; ?></th>
        <th><?php echo $_SESSION['Phone']; ?></th>
        <th><?php echo $_SESSION['Gender']; ?></th>
        <th><?php echo $_SESSION['Password']; ?></th>
        <th><?php echo $_SESSION['Nationality']; ?></th>
        <th><?php echo $_SESSION['files']; ?></th>
    </tr>
  
  </tbody>
</table>

   
    
</body>
</html>