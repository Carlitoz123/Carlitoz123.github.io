<?php session_start();
    if(!isset($_SESSION['user_data'])){
        header("Location: ../login.php");
    }
    $user_data = $_SESSION['user_data'];
   
?>
<?php
  include "../php/conexion.php";
  $sql="select * from proveedor order by id_proveedor DESC";
  $res=$conexion->query($sql)or die($conexion->error);
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
        <h1 class="h4 p-4 text-white">Proveedor</h1>
      </div>
      <div class="d-flex justify-content-between">
        
        <div id="btn_user">
          <Button class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#modalAdd" >Agregar</Button>
        </div>
      </div>
      
      <!--END TITLE SECTION-->

      <section class="mt-4 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Proveedor</th>
              <th scope="col">Direccion   </th>
              <th scope="col">Email</th>
              <th scope="col">Telefono</th>

              
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
                    while($fila=mysqli_fetch_array($res)){
                  ?>
            <tr>
              <td> <?php echo $fila['id_proveedor'] ?> </td>
              <td><?php echo $fila['nombre'] ?></td>
              <td><?php echo $fila['email'] ?></td>
              <td><?php echo $fila['direccion'] ?></td>
              <td><?php echo $fila['telefono'] ?></td>
              
              <td class="text-end">
              <button class="btn btn-sm btn-danger btnEliminar"
          data-id="<?php echo $fila['id_proveedor']; ?>"
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
  <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteUserModalLabel">Confirmar Eliminación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              ¿Estás seguro de que deseas eliminar a este registro? Esta acción no se puede deshacer.
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger eliminar" data-bs-dismiss="modal">Eliminar</button>
          </div>
      </div>
  </div>
</div>
  <!-- Modal -->
  <div class="modal fade modal-lg" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Proveedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="../php/agregar.php"  method="post" class="needs-validation" novalidate id="form">
          <div class="modal-body">

              <div class="row">
                <div class="col-12 mb-2">
                  <label for="">Nombre: </label>
                  <input required type="text" class="form-control" placeholder="Inserta Nombre de Proveedor" name="prov" maxlength="50">

                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                
              </div>

              <div class="row">

                <div class="col-12 ">
                  <label for="">Correo electronico</label>
                  <input required type="email" class="form-control" placeholder="Ingrese correo electrónico" name="email">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                </div>
                <div class="row">

                  <div class="col-12 ">
                    <label for="">Direccion</label>
                    <input required type="text" class="form-control" placeholder="Ingrese Direccion" name="dire">
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Datos necesarios</div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mb-2">
                      <label for="">Telefono: </label>
                      <input required type="tel" class="form-control" placeholder="Inserta teléfono" name="telefono" pattern="\d{10}">
                      <div class="valid-feedback">Correcto</div>
                      <div class="invalid-feedback">Datos necesarios</div>
                    </div>


              

              



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
          </div>
        </form>

    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="./js basededatos/users.js"> </script>
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
          console.log(idEliminar);
          
          $.ajax({
            url:'../php/eliminar.php',
            method:'POST',
            data:{
              id:idEliminar,
              tabla:'proveedor',
              columna:'id_proveedor'
            }
          }).done(function(res){
            console.log(res)
            $(fila).fadeOut(500);
          });
          
        });
      });
    </script>
    <?php
    if ($stmt->execute()) {
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: 'Proveedor agregado con éxito',
        }).then(() => {
            window.location.href = '../ruta_donde_volver.php';
        });
    </script>";
} else {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '" . $stmt->error . "',
        });
    </script>";
}
?>
</body>

</html>