<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exists Sql Query</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    require_once "dbconfig.php";
    $sq="SELECT SupplierName FROM Suppliers WHERE EXISTS (SELECT Productname FROM products WHERE SupplierId = Suppliers.supplierId AND Price = 9)";
    echo "<table class='table table-sm'>
    <thead>
        <tr>
            <th>Supplier Name</th>
        </tr>
    </thead>";
    $r=mysqli_query($conn,$sq);
    while($row=mysqli_fetch_array($r))
    {
        extract($row);
        echo "<tr><td>$SupplierName</td></tr>";
    }
    echo "</table>";
    ?>    
</body>
</html>

