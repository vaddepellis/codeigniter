
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <a href="<?php echo base_url('index.php/add'); ?>" class="btn btn-primary" style="float:right;">Add</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-stripped">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Age</td>
                        <td>Address</td>
                        <td>Mobile</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $d) {?>
                    <tr>
                        <td><?php echo $d->c_name; ?></td>
                        <td><?php echo $d->c_age; ?></td>
                        <td><?php echo $d->c_address; ?></td>
                        <td><?php echo $d->c_mobile; ?></td>
                        <td>
                            
                            <a href="<?php echo base_url('index.php/edit/'.$d->c_id )?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?php echo base_url('index.php/delete/'.$d->c_id ) ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>