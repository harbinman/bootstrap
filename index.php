<?php



include_once('phpDatabase/connection.php');
include_once('phpDatabase/archive.php');




?>



<!doctype html>
<html lang="en">

<head>
            <title>Title</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS v5.0.2 -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <!-- Bootstrap icon -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">


</head>

<body>
    <div class="section p-5">

        <div class="row ">
            <img style="width: 100px;height:100px " src="https://api.lorem.space/image/face?hash=h7rkbvnd" class="rounded-circle" alt="">
            <form class="col-3 ml-auto" action="#" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="name" required>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">gender</label>
                    <input type="text" name="" id="" class="form-control" placeholder="gender" required>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">email</label>
                    <input type="email" name="" id="" class="form-control" placeholder="email" required>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">avatar</label>
                    <input type="file" class="form-control custom-file" name="" id="" placeholder="avatar">
                    <small id="fileHelpId" class="form-text text-muted">avatar</small>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>

            </form>
        </div>

    </div>
       <div class="dropdown open">
           <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" >
                       Dropdown
                   </button>
           <div class="dropdown-menu" aria-labelledby="triggerId">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item disabled" href="#">Disabled action</a>
           </div>
       </div>
    <a href="#" class="badge badge-danger p-2">删除</a>
    <a href="#" class="badge badge-primary p-2">删除</a>
    <a href="#" class="badge badge-secondary p-2">删除</a>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>