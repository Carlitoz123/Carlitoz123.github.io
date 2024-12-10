<?php session_start();
    if(!isset($_SESSION['user_data'])){
        header("Location: ../login.php");
    }
    $user_data = $_SESSION['user_data'];
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
    
    <?php include "../layouts/aside.php"
    ?>

    <!--END SIDEBAR-->
    <main class="flex-grow-1">
      <!--HEADER-->
      <?php include "../layouts/header.php"?>
      <!--END HEADER-->
      <!--TITLE SECTION-->
      <div class="d-flex justify-content-between" >
        <h1 class="h4  text-white">Inventario</h1>
        
      </div>
      <div class="d-flex justify-content-between">
        
        <div id="btn_user">
          <Button class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#modalAdd" >Agregar</Button>
        </div>
      </div>
      <!--END TITLE SECTION-->

      <section class=" p-4 container " >
       <div class="row container" >
            <div class="col-3 mt-2 p-2">
                <div class="card" >
                    <img src="" height="230px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-dark w-100">Modificar producto</a>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
              <div class="card" >
                  <img src="" height="230px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-dark w-100">Modificar producto</a>
                  </div>
                </div>
          </div>
          <div class="col-3 mt-2 p-2">
            <div class="card" >
                <img src="" height="230px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-dark w-100">Modificar producto</a>
                </div>
              </div>
        </div>
        <div class="col-3 mt-2 p-2">
          <div class="card" >
              <img src="" height="230px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-dark w-100">Modificar producto</a>
              </div>
            </div>
      </div>

       </div>
          
      </section>


    </main>
  </div>
   <!-- Modal -->
   <div class="modal fade modal-lg" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="" class="needs-validation" novalidate id="form">
          <div class="modal-body">

              <div class="row">
                <div class="col-6 mb-2">
                  <label for="">Nombre: </label>
                  <input required type="text" class="form-control" placeholder="Inserta el Nombre del producto">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                
              </div>

              

              <div class="row">

                <div class="col-12 mb-4">
                  <label for="">Descripcion</label>
                  <input required type="email" class="form-control" placeholder="Ingresa una descripcion del producto">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>

                </div>
              </div>

              <div class="row">
                <div class="col-2 mb-2">
                  <label for="Contraseña">Precio</label>
                  <input required type="number" class="form-control" placeholder="Ingrese $">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                <div class="col-2 mb-2">
                  <label for="Contraseña">Stock</label>
                  <input required  type="number" class="form-control" placeholder="Stock">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                <div class="col-8 mb-2">
                  <label for="Contraseña">Proveedor</label>
                  <input required  type="number" class="form-control" placeholder="Ingrese id proveedor">
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
    <script src="./js basededatos/users.js"> </script>
  
</body>

</html>