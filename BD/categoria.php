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
            <tr>
              <td>1</td>
              <td>Accesories</td>
              <td>............................</td>
              
              <td class="text-end">
                <button class="btn btn-danger btn-sm">
                  <i class="bi bi-trash3-fill"></i>
                </button>
                <button class="btn btn-warning btn-sm">
                  <i class="bi bi-pen"></i>
                </button>
                

              </td>


              </button>
              </td>
              </button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Clothes</td>
              <td>............................</td>
              
              <td class="text-end">
                <button class="btn btn-danger btn-sm">
                  <i class="bi bi-trash3-fill"></i>
                </button>
                <button class="btn btn-warning btn-sm">
                  <i class="bi bi-pen"></i>
                </button>
                

              </td>


              </button>
              </td>
              </button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>tennis</td>
              <td>............................</td>
              
              <td class="text-end">
                <button class="btn btn-danger btn-sm">
                  <i class="bi bi-trash3-fill"></i>
                </button>
                <button class="btn btn-warning btn-sm">
                  <i class="bi bi-pen"></i>
                </button>
                

              </td>


              </button>
              </td>
              </button>
              </td>
            </tr>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="" class="needs-validation" novalidate id="form">
          <div class="modal-body">

              <div class="row">
                <div class="col-6 mb-2">
                  <label for="">Nombre: </label>
                  <input required type="text" class="form-control" placeholder="Inserta Nombre de Categoria">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                
              </div>

              <div class="row">

                <div class="col-20 ">
                  <label for="">Descripcion</label>
                  <input required type="text" class="form-control" placeholder="Ingrese la descripcion de la categoria">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                </div>

              

              



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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