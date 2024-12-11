<?php session_start();
    if(!isset($_SESSION['user_data'])){
        header("Location: ../login.php");
    }
    $user_data = $_SESSION['user_data'];
?>
<?php
  include "../php/conexion.php";
  $sql="select * from categoria order by id_categoria DESC";
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
        <h1 class="h4 p-4 text-white">Categorias</h1>
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
              <th scope="col">Categoria</th>
              <th scope="col">Descripcion</th>

              
              <th></th>
            </tr>
          </thead>
          <tbody>
           
          <?php
                    while($fila=mysqli_fetch_array($res)){
                  ?>
            <tr>
              <td> <?php echo $fila['id_categoria'] ?> </td>
              <td><?php echo $fila['nombre'] ?></td>
              <td><?php echo $fila['descripcion'] ?></td>
             
              
              <td class="text-end">
              <button class="btn btn-sm btn-danger btnEliminar"
          data-id="<?php echo $fila['id_categoria']; ?>"
          data-bs-toggle="modal" data-bs-target="#deleteUserModal">
      <i class="bi bi-trash"></i> Eliminar
  </button>
                <button class="btn btn-warning btn-sm btnedit" data-id=<?php echo $fila['id_categoria'];?>
                  data-nombre=<?php echo $fila['nombre'];?>
                  data-desc=<?php echo $fila['descripcion'];?>
                  data-bs-toggle="modal" data-bs-target="#EditModal"

                  >
                  
                  <i class="bi bi-pen">Editar</i>
                </button>
                
              </td>
            </tr>
            <?php
                    }
                  ?>
            
          </tbody>
        </table>
      </section>

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

    </main>
  </div>
  

  <!-- Modal  Agregar-->
  <div class="modal fade modal-lg" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="../php/agregarcategoria.php" method="post" class="needs-validation" novalidate id="form">
    <div class="modal-body">
        <div class="row">
            <div class="col-6 mb-2">
                <label for="name">Nombre: </label>
                <input required type="text" class="form-control" placeholder="Inserta Nombre de Categoria" name="name" id="name">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos necesarios</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="descripcion">Descripción:</label>
                <input required type="text" class="form-control" placeholder="Ingrese la descripción de la categoría" name="descripcion" id="descripcion">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos necesarios</div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-dark" id="btnSave">Guardar</button>
    </div>
</form>

    </div>
  </div>
  </div>


  <!-- Modal  Editar-->
  <div class="modal fade modal-lg" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="EditModalLabel">Agregar Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="../php/agregarcategoria.php" method="post" class="needs-validation" novalidate id="form">
    <div class="modal-body">
        <div class="row">
            <div class="col-6 mb-2">
                <!-- Campo oculto para el ID del usuario -->
                <input type="hidden" class="form-control" name="editid" id="userid">
                <label for="editname">Nombre:</label>
                <input required type="text" class="form-control" placeholder="Inserta Nombre de Categoria" name="name" id="editname">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos necesarios</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="editdesc">Descripción:</label>
                <input required type="text" class="form-control" placeholder="Ingrese la descripción de la categoría" name="descripcion" id="editdesc">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos necesarios</div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-dark" id="btnSave">Guardar</button>
    </div>
</form>


    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="./js basededatos/users.js"> </script>
    <script src="../BD/js basededatos/categoria.js"></script>
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
              tabla:'categoria',
              columna:'id_categoria'
            }
          }).done(function(res){
            console.log(res)
            $(fila).fadeOut(200);
          });
          
        });
      });
      </script>
      <script>
    <?php
   if ($stmt->execute()) {
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'Categoría agregada con éxito',
        }).then(() => {
            window.location.href = '../BD/categoria.php';
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
</script>
</body>

</html>