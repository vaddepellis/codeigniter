<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file Upload</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class="bg-dark p-3 d-flex">
        <a class="nav-link text-white" href="<?php echo base_url('index.php/home') ?>">Home</a>
        <a class="nav-link text-white" href="<?php echo base_url('index.php/file-upload') ?>">file-upload</a>
    </header>
    <div class="container mt-5">
        
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-primary mt-2">File Upload</h3>
                <form method="post" action="<?php echo base_url('index.php/save-upload')  ;?>"
                    enctype="multipart/form-data">
                    <div class="from-group mb-1">
                        <select name="category" id="category" class="form-control">
                            <option value="0">--Select Category</option>
                            <option value="1">Sports</option>
                            <option value="2">Education</option>
                            <option value="3">Movies</option>
                        </select>
                        <span class="text-danger" id="errorCategory"></span>
                    </div>
                    <div class="from-group">
                        <input class="form-control" type="file" name="file_upload" id="fileUpload">
                        <span class="text-danger" id="errorfileUpload"></span>
                    </div>
                    <div class="form-group mt-2">
                        <input class="btn btn-primary btn-sm" type="submit" value="submit">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            <h3 class="text-primary mt-2">Images</h3>
                <div class="col-md-12">
                    <div class="d-flex">
                    <?php foreach($getNewsData as $nd) {?>
                        <div class="row m-1">
                        <img style="height:200px;width:200px;" class="rounded img-fluild"
                            src="<?php echo base_url('assets/'.$nd['image_url'].'') ?>"
                            alt="<?php echo $nd['image_url'];  ?>">
                        <h5 class="card-title"><?php echo $nd['category'] ?></h5>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
$(function(){

});
</script>
</html>