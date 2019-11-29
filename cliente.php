<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
                </div>
            
            <?php session_unset();} ?>

            <div class="card card-body">
                <form action="save_cliente.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="dni" class="form-control" placeholder="DNI del cliente" autofocus>
                    </div>
                    <div class="form-group">
                        <input name="nombre" class="form-control" placeholder="Nombre del cliente">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono del cliente" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_cliente" value="Registrar cliente">
                </form>
            </div>
        </div>

        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Fecha de registro</th>
                            <th>Accciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM cliente";
                        $result_cliente = mysqli_query($conn,$query);

                        while($row = mysqli_fetch_array($result_cliente)){ ?>

                            <tr>
                                <td><?php echo $row['dni'] ?></td>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['telefono'] ?></td>
                                <td><?php echo $row['registrado'] ?></td>
                                <td>
                                    <a href="editc.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete_taskc.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>

</div>

<? php include("includes/footer.php") ?>