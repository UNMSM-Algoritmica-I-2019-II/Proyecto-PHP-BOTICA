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
                    <form action="save_task.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Código del producto" autofocus>
                        </div>
                        <div class="form-group">
                            <input name="description" class="form-control" placeholder="Nombre del producto">
                        </div>
                        <div class="form-group">
                            <input type="text" name="precio" class="form-control" placeholder="Precio del producto (S/)" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Agregar producto">
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Fecha de registro</th>
                                <th>Editar/Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM producto";
                            $result_task = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($result_task)){ ?>

                                <tr>
                                    <td><?php echo $row['codigo'] ?></td>
                                    <td><?php echo $row['nombre'] ?></td>
                                    <td><?php echo $row['precio'] ?></td>
                                    <td><?php echo $row['creado'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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