<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Jilbab Premium</title>
</head>
<style>
    h1{
        padding-top: 2%;
    }
</style>
<body>
    <h1>Welcome in Our Store</h1>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <button onclick="document.location.href='<?php echo base_url('index.php/C_home/formInput')?>' ">Create Data</button>
    
    <table class="table table-light">
    <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Colour</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

<?php
    $count = 0;
    foreach($data_jilbab as $row){
        $count = $count + 1;
?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $count ?></th>
      <td><?php echo $row->code ?></td>
      <td><?php echo $row->name ?></td>
      <td><?php echo $row->colour ?></td>
      <td>
          <a href="<?php echo base_url('index.php/C_home/formEdit/'). $row->code?>">Edit</a>
          <a href="<?php echo base_url('index.php/C_home/AksiDelete/'). $row->code?>">Delete</a>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>
</body>
</html>


