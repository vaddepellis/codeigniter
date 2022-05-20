<?php 

// print_r($fetch);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <header class="bg-dark p-3 d-flex">
        <a class="nav-link text-white" href="<?php echo base_url('index.php/home') ?>">Home</a>
        <a class="nav-link text-white" href="<?php echo base_url('index.php/file-upload') ?>">file-upload</a>
    </header>
    <h3 class="text-primary mt-2">Crud Operations</h3>
    <div class="container mt-5">
      
        <div class="row">
            <div class="col-md-6">
               <form method="post" action="<?php echo base_url('index.php/update'); ?>">
                   <div class="form-group">
                       <input type="hidden" name="userId" value="<?php echo $fetch['c_id']; ?>">
                    <label for="name">Name :</label>
                        <input class="form-control" type="text" id="name" name="name" value="<?php echo $fetch['c_name'];?>">
                   </div>
                   <div class="form-group">
                    <label for="age">Age :</label>
                        <input class="form-control" type="text" id="age" name="age" value="<?php echo $fetch['c_age'];?>">
                   </div>
                   <div class="form-group">
                    <label for="address">Address :</label>
                        <input class="form-control" type="text" id="address" name="address" value="<?php echo $fetch['c_address'];?>">
                   </div>
                   <div class="form-group">
                    <label for="mobile">Mobile :</label>
                        <input class="form-control" type="text" id="mobile" name="mobile" value="<?php echo $fetch['c_mobile'];?>">
                   </div>
                   <div class="form-group mt-2">
                        <input type="submit" value="Update" class="btn btn-primary">
                   </div>
               </form>
            </div>
        </div>
    </div>
</body>
</html>