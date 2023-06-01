<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Caren's Pizza</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>
<div class="container">
    <h1 class="page-header text-center"> Coffee Blog Management</h1>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Blog</a>
        <a href="pizza-data.php" class="btn btn-light" target="_blank"> View Website</a>   


            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Pizza</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                </thead>
                <tbody>
                        <tr>
                            <td>Classic Tuna</td>
                            <td>Pizza cheese, Mozarella, tuna, white onion and black olives</td>
                            <td>₱260.00</td>
                            <td>
                                <a href="#edit_" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="#delete_" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        </tr>
                        

                </tbody>
                <tfoot>
                    <th scope="col">Pizza</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
            </table>
        

    </div>
    </div>
</div>


<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>