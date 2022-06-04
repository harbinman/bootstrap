<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>

<body>
    <h2 class="text-center text-white bg-dark py-3">mutilple form update PHP Jquery bootstrap </h2>
    <div class="container-fluid p-5 d-flex ">
        <form action="#" method="post" class="mx-auto">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>tel</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody id="form-add">

                    <tr>
                        <td><input name="name[]" type="text" placeholder="name" required></td>
                        <td><input name="email[]" type="email" placeholder="email" required></td>
                        <td><input name="tel[]" type="tel" placeholder="phone number" required></td>
                        <td> <button type="button" class="btn btn-primary " id="btn-add" style="width:100px ;"> ADD </button> </td>
                    </tr>


                </tbody>
            </table>


            <button type="submit" class="btn btn-success">ADD ALL</button>


        </form>


    </div>













    <script>
        $('document').ready(function() {

            $('#btn-add').click(function(e) {

                $('#form-add').append('<tr> <td><input  name="name[]" type="text" placeholder="name" required></td><td><input type="email" placeholder="email" required></td><td><input type="tel" placeholder="phone number" required></td><td> <button id="btn-remove" type="button" class="btn-remove btn btn-danger  " style="width:100px ;">REMOVE</button> </td> </tr>');
                //    e.currentTarget.parentElement.parentElement.remove();

            });

            // $('#btn-remove').click(function (e) { 
            //     e.preventDefault();
            //     console.log("remove");
            //     e.currentTarget.parentElement.parentElement.remove();
            // });
            $(document).on('click', '#btn-remove', function(e) {
                // e.preventDefault();
                console.log("remove");
                e.currentTarget.parentElement.parentElement.remove();

            });
            $.ajax({
                type: "post",
                url: "url",
                data: $('.talbe').serialize(),
                
                success: function (response) {
                    
                }
            });
        });
    </script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>