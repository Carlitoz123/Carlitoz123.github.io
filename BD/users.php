<?php session_start();
    if(!isset($_SESSION['user_data'])){
        header("Location: ../login.php");
    }
    $user_data = $_SESSION['user_data'];

   $title="Gestion de Usuarios"; 
?>
<?php
  include "../php/conexion.php";
  $sql="select * from users order by id DESC";
  $res=$conexion->query ($sql)or die($conexion->error);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bs.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <title>Dashboard</title>
</head>

<body>
  <div class="d-flex">
    <!--SIDEBAR-->
    <?php include "../layouts/aside.php"
    ?>
    <!--END SIDEBAR-->
    <main class="flex-grow-1">
      <!--HEADER-->
      <?php include "../layouts/header.php"?>
      <!--END HEADER-->
      <!--TITLE SECTION-->
      <div class="d-flex justify-content-between">
        <h1 class="h4 p-4 text-white">Usuarios</h1>
        
      </div>
      <!--END TITLE SECTION-->

      <section class="mt-4 p-4 container-fluid">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">EMAIL</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">NIVEL</th>

              <th scope="col">TELEFONO</th>
              <th scope="col">DIRECCION</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
                    while($fila=mysqli_fetch_array($res)){
                  ?>
            <tr>
            <td> <?php echo $fila['id'] ?> </td>
              <td><?php echo $fila['name'] ?></td>
              <td><?php echo $fila['email'] ?></td>
              <td><?php  ?>********</td>
                            <td><?php 
                      if($fila['level']==1){
                        echo '<span class="badge bg-success">Administrador</span>';
                      }
                      else{echo '<span class="badge bg-dark">Usuario</span>';}
                    ?></td>
              <td><?php echo $fila['telefono'] ?></td>
              <td><?php echo $fila['direccion'] ?></td>
              
              <td class="text-end">
              <button class="btn btn-sm btn-danger btnEliminar"
          data-id="<?php echo $fila['id']; ?>"
          data-bs-toggle="modal" data-bs-target="#deleteUserModal">
      <i class="bi bi-trash"></i> Eliminar
  </button>
                <button class="btn btn-warning btn-sm">
                  <i class="bi bi-pen"></i>
                </button>

                </td>
            </tr>

            <?php
                    }
                  ?>
          </tbody>
        </table>
      </section>


    </main>
  </div>

  <!-- Modal -->
  <div class="modal fade modal-lg" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="" class="needs-validation" novalidate id="form">
          <div class="modal-body">

              <div class="row">
                <div class="col-6 mb-2">
                  <label for="">Nombre: </label>
                  <input required type="text" class="form-control" placeholder="Inserta el Nombre" >
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                <div class="col-6 mb-2">
                  <label for="">Apellido: </label>
                  <input required type="text" class="form-control" placeholder="Inserta el Apellido" >
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
              </div>

              <div class="row">

                <div class="col-4 mb-2">
                  <label for="">Edad</label>
                  <input required type="number" class="form-control" placeholder="Ingrese la Edad" >
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                <div class="col-4 mb-2">
                  <label for="">Peso</label>
                  <input required type="number" class="form-control" placeholder="Ingrese la peso" >
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>


                <div class="col-4 mb-2">
                  <label for="">Estatura (cm)</label>
                  <input required min="1" type="number" class="form-control" placeholder="Ingrese la estatura">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>

                </div>
              </div>

              <div class="row">

                <div class="col-12 mb-2">
                  <label for="">Email</label>
                  <input required type="email" class="form-control" placeholder="Ingresar Email">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>

                </div>
              </div>

              <div class="row">
                <div class="col-6 mb-2">
                  <label for="Contraseña">Contraseña</label>
                  <input required type="password" class="form-control" placeholder="Ingrese Contraseña">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                <div class="col-6 mb-2">
                  <label for="Contraseña">Confirmar Contraseña</label>
                  <input required  type="password" class="form-control" placeholder="Confirmar Contraseña">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>

              </div>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-dark" id="btnSave">Guardar</button>
          </div>
        </form>

    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="./js basededatos/users.js"> 
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function(){
        var idEliminar = -1;
        var fila;
        $(".btnEliminar").click(function(){
          idEliminar=$(this).data('id');
          fila=$(this).parent('td').parent('tr');
        });
        $(".eliminar").click(function(){
          $.ajax({
            url:'../php/eliminar.php',
            method:'POST',
            data:{
              id:idEliminar,
              tabla:'users',
              columna:'id'
            }
          }).done(function(res){
            $(fila).fadeOut(500);
          });
          
        });
      });
    </script>
  
</body>

</html>