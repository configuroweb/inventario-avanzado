<h1 class="">Bienvenid@ <?php echo $_settings->info('name') ?></h1>
<hr>
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Órdenes de Compra</span>
                <span class="info-box-number text-right">
                    <?php
                    echo $conn->query("SELECT * FROM `purchase_order_list`")->num_rows;
                    ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-boxes"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Compras Recibidas</span>
                <span class="info-box-number text-right">
                    <?php
                    echo $conn->query("SELECT * FROM `receiving_list`")->num_rows;
                    ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-exchange-alt"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Devoluciones</span>
                <span class="info-box-number text-right">
                    <?php
                    echo $conn->query("SELECT * FROM `back_order_list`")->num_rows;
                    ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-undo"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Devoluciones</span>
                <span class="info-box-number text-right">
                    <?php
                    echo $conn->query("SELECT * FROM `return_list`")->num_rows;
                    ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-file-invoice-dollar"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Ventas</span>
                <span class="info-box-number text-right">
                    <?php
                    echo $conn->query("SELECT * FROM `sales_list`")->num_rows;
                    ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-truck-loading"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Proveedores</span>
                <span class="info-box-number text-right">
                    <?php
                    echo $conn->query("SELECT * FROM `supplier_list` where `status` = 1")->num_rows;
                    ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Productos</span>
                <span class="info-box-number text-right">
                    <?php
                    echo $conn->query("SELECT * FROM `item_list` where `status` = 1")->num_rows;
                    ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <?php if ($_settings->userdata('type') == 1) : ?>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box bg-light shadow">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Usuarios</span>
                    <span class="info-box-number text-right">
                        <?php
                        echo $conn->query("SELECT * FROM `users` where id != 1 ")->num_rows;
                        ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    <?php endif; ?>
</div>