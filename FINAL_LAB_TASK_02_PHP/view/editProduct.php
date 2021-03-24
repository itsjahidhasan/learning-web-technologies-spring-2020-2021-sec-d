<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
</head>
<body>
  
  <form action="" method="post">
    <fieldset>
    <legend>Edit Product</legend>
    <table>
      
      <tr>
        <td>
          Name <br>
          <input type="text" name="name" id="">
        </td>
      </tr>
      <tr>
        <td>
          Buying Price <br>
          
          <input type="number" name="bprice" id="">
        </td>
      </tr>
      <tr>
        <td>
          Selling Price <br>
          
          <input type="number" name="sprice" id="">
        </td>
      </tr>
    </table>
    <hr>
    <input type="checkbox" name="display" id="" value="Yes">
    <label for="display"></label>
    <hr>
    <input type="submit" value="Save" name="submit">
  </fieldset>
  </form>
</body>
</html>