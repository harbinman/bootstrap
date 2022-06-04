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
  <div class="container my-3">
    <table class="table text-center">
      <thead>
        <tr>
          <th>name</th>
          <th>email</th>
          <th>tel</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td id="t-name">jason</td>
          <td>jason@gamil.com</td>
          <td>34234234</td>
          <td><a type="button" id="update" class="badge badge-danger bg-primary p-2 mx-2">update</a><a type="button" onclick="" class="badge badge-info bg-danger p-2">detail</a></td>

        </tr>
        <tr>

          <td>mark</td>
          <td>mark@gamil.com</td>
          <td>4242414</td>
          <td><a type="button" id="update" class="badge badge-danger bg-primary p-2 mx-2">update</a><a type="button" onclick="" class="badge badge-info bg-danger p-2">detail</a></td>

        </tr>
      </tbody>
    </table>


  </div>








  <!-- Modal -->
  

  <div class="modal  mt-10 " id="modelId"  style="margin-top: 15%;" >
      <div class="modal-dialog  modal-sm "    >
        <div class="modal-content text-center">
          <img class="img-fluid mx-auto" alt="Responsive image" src="image/loader.gif" style="width:227px ;height:87px ;" />
  
        </div>
      </div>
    </div>


<div id='result' class="container">



  </div>

  <!-- jquery includ -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="js/bootstrap.js"></script>

  <script>
    $('document').ready(function() {

      $('.badge').click(function(e) {

         $('#modelId').modal('show')
        // $('.progress').show();
        $.ajax({

          url: "https://jsonplaceholder.typicode.com/posts",
          method: "get",
          dataType: "json"
        }).done(function(data) {
       
          console.log(data);
          $.map(data, function(val, i) {

            $('#result').append(
              '<h3>' + val.title + '</h3>' + '<p>' + val.body + '</p>'


            )

          });
          $('#modelId').modal('hide');
        });





      });




    });
  </script>
</body>

</html>