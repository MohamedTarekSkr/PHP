<?php
define('BASE_PATH', '../');
require_once(BASE_PATH . 'logic/products.php');
require_once(BASE_PATH . 'layouts\header.php');
$products = getProducts();
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th> ID </th>
                            <th> Product Name </th>
                            <th> Description </th>
                            <th> image </th>
                            <th> price </th>
                            <th> Discount </th>
                            <th colspan="2"> buttons</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) {
                            ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td> <img src="<?= BASE_PATH . $product['image_url'] ?>" width="150px" height="150px"></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['discount']*100 ?>%</td>
                            <td><button type="button" class="btn btn-primary">Add</button></td>
                            <td><button type="button" class="btn btn-danger">delete</button></td>
                            <td><button type="button" class="btn btn-success">edit</button></td>

                        </tr>
                        <?php }
                            ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<?php
require_once(BASE_PATH . 'layouts\footer.php');