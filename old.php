<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FORM</title>
</head>
<body>
<!-- style="margin-left: 2.5em;padding: 0 7em 2em 0;border-width: 2px; border-color: black; border-style:solid;" -->
<div style="margin-top: 2.5em;" class="jumbotron  jumbotron-fluid ">
<div class="container border border-success rounded col-6">
<form action="list.php" method="get">
<table class="table table-borderless">
  <thead style="margin-top: 1.5em;" class="thead-dark">
    <tr>
      <th  class="bg-dark text-danger rounded" colspan="2">Login form</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><label for="name">NAME</label></td>
      <td><input  class="col-12" type="text" id="name" name="name" id=""></td>
    </tr>
    <tr>
      <td><label for="mobile">MOBILE</label></td>
      <td><input  class="col-12" type="text" id="mobile" name="mobile" id=""></td>
    </tr>
    <td  class="bg-dark text-danger rounded" ><button type="submit">Submit</button></td>
    </tbody>
</table>
</form></div></div>
</body>
</html>