<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <!-- bootstrap icons -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
</head>

<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #051520">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse px-4" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <img src="https://api.lorem.space/image/face?hash=akyu19c9" class="rounded-circle mr-auto" style="width: 50px; height: 50px" />
    </div>
  </nav>

  <!-- main -->
  <div class="container">
    <div class="row justify-content-start mt-5">
      <div class="col-3">
        <form action="mysql.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="" class="form-label">name</label>
            <input type="text" name="name" class="form-control" placeholder="name" />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="email" />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">phone number</label>
            <input type="tel" name="tel" class="form-control" placeholder="photo number" />
          </div>

          <div class="mb-3">
            <label for="" class="form-label">photo</label>
            <label class="custom-file">
              <input type="file" name="photo" id="" placeholder="photo" class="custom-file-input" />
              <span class="custom-file-control"></span>
            </label>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" name="btn-submit" id="" class="btn btn-primary">提交</button>
          </div>
        </form>
      </div>
      <div class="ml-3 col-9 text-center">

        <?php
        include_once('mysql.php');



        ?>
        <table class="table">
          <thead>
            <tr>
              <th><input type="checkbox" class="form-check-input checkall" name="checkall" id="checkall"></th>
              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>photo</th>
              <th>phone</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $item) { ?>
              <tr>
                <td>
                  <input type="checkbox" class="form-check-input" name="" id="" value="<?php $item['id'] ?>">

                </td>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td><img src="<?php echo $item['photo'] ?>" class="img-rounded-circle" style="width:50px ;height:50px;border-radius: 50%;"></td>
                <td><?php echo $item['tel'] ?></td>
                <td>

                  <a href="mysql.php?delete=<?php echo $item['id'] ?>" name="delete" class="badge bg-danger p-2 text-decoration-none" onclick="return confirm('are you sure to delete this record?');">delete</a>
                  <a href="mysql.php?detail=<?php echo $item['id'] ?>" name="detail" class="badge bg-primary p-2 text-decoration-none">detail</a>
                  <a href="mysql.php?update=<?php echo $item['id'] ?>" name="update" class="badge bg-secondary p-2 text-decoration-none">update</a>
                </td>




              </tr>

            <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>

  <script>
    $('document').ready(function() {
      $('.checkall').change(function() {
        if ($('.checkall').prop("checked")) {
          console.log("checkall checked");
          $('.form-check-input').prop("checked", true);


        } else {
          $('.form-check-input').prop("checked", false);
        }

      });


    });
  </script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="js/bootstrap.js"></script>
</body>

</html>