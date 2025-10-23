<?php
    require_once("./includes/products-functions.php");
    $products = getAllProductsOfType($_GET['type']);
?>

<?php require_once("./includes/page-top.php") ?>

    <!-- <div id="page-content">
        <div class="container" style="padding: 20px;">
            <div class="row">
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header bg-danger text-light">
                            Hamburguer Especial
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <img src="img/hamburger-h500.png" height="200px">
                                </div>
                                <div class="col card-text">
                                    Delicioso sanduiche com 2 hamburgueres, salada, molho barbecue, bacon e queijo.
                                </div>
                                <hr/>
                                <div class="text-end">
                                    <a href="#" class="btn btn-danger">Comprar</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header bg-danger text-light">
                            Hamburguer Especial
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <img src="img/hamburger-h500.png" height="200px">
                                </div>
                                <div class="col card-text">
                                    Delicioso sanduiche com 2 hamburgueres, salada, molho barbecue, bacon e queijo.
                                </div>
                                <hr/>
                                <div class="text-end">
                                    <a href="#" class="btn btn-danger">Comprar</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

    <div id="page-content">
        <div class="container" style="padding: 20px">
            <div class="row">

                <!-- ABERTURA DO FOREACH -->
                <?php foreach($products as $product) : ?>
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header bg-danger text-light">
                            <!-- NOME PRODUTO -->
                            <?= $product['name'] ?>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <!-- IMAGEM -->
                                        <img src="<?= $product['img'] ?>" height="200px">
                                    </div>
                                    <!-- DESCCRIÇÃO -->
                                    <div class="col card-text"> <?= $product['description'] ?> </div>

                                    <hr/>

                                    <div class="text-end">
                                        <a href="#" class="btn btn-danger">Comprar</a>

                                    </div>
                                </div>

                            </div>

                        </div>
                        
                    </div>
                </div>

                <!-- FECHAMENTO DO FOREACH -->
                <?php endforeach; ?>

                <!-- <div class="col">
                    <div class="card bg-light">
                        <div class="card-header bg-danger text-light">
                            Hamburguer Da Casa
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="./img/hamburger-h500.png" height="200px">
                                    </div>
                                    <div class="col card-text">
                                        Delicioso sanduiche com 2 hamburgueres, salada, molho barbecue, bacon e queijo.

                                    </div>

                                    <hr/>

                                    <div class="text-end">
                                        <a href="#" class="btn btn-danger">Comprar</a>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div> -->

            </div>

        </div>

    </div>

<?php require_once ("./includes/page-bottom.php") ?>