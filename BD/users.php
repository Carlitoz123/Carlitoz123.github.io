<?php session_start();
    if(!isset($_SESSION['user_data'])){
        header("Location: ../login.php");
    }
    $user_data = $_SESSION['user_data'];
?>

$title="Gestion de Usuarios";

?>
<?php
  include "./php/conexion.php";
  $sql="select * from users order by user_id DESC";
  $res=$conexion->query($sql)or die($conexion->error);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bs.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <title>Dashboard</title>
</head>

<body>
  <div class="d-flex">
    <!--SIDEBAR-->
    
    <aside class=" text-white vh-100" style="width: 20%;" id="barra">
      <h2 class="p-4 pb-25 h4" style="font-size: 3rem;" >
      <img width="50px" src="" alt="" class="mx-1" >
      RAVINE
    </h2>
          <ul class="nav flex-column">
            
            <li class="nav-item mx-3"><a href="products.html" class="nav-link text-white" style="font-size: 1.9rem;">
              <i class="bi bi-egg-fried"></i>&nbsp;&nbsp;Inventario</a></li>
            <li class="nav-item mx-3"><a href="./users.html" class="nav-link text-white" style="font-size: 2rem;">
              <i class="bi bi-person"></i>&nbsp;&nbsp;Usuarios</a></li>
              <li class="nav-item mx-3"><a href="./pedidos.html" class="nav-link text-white" style="font-size: 2rem;">
                <i class="bi bi-credit-card-2-back"></i>&nbsp;&nbsp;Pedidos</a></li>
                <li class="nav-item mx-3"><a href="./categoria.html" class="nav-link text-white" style="font-size: 2rem;">
                  <i class="bi bi-bookmarks"></i></i>&nbsp;&nbsp;Categoria</a></li>
                  <li class="nav-item mx-3"><a href="./proveedor.html" class="nav-link text-white" style="font-size: 2rem;">
                    <i class="bi bi-bookmarks"></i></i>&nbsp;&nbsp;Proveedor</a></li>
          </ul>
    </aside>
    <!--END SIDEBAR-->
    <main class="flex-grow-1">
      <!--HEADER-->
      <header>
        <nav class="px-4 py-4 navbar navbar-expand-lg ">
          <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end px-5" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item mx-4">
                  <button type="button" class="btn btn-light position-relative" id="campana">
                    <i class="bi bi-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      5+
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </button>
                </li>
                <li class="nav-item">
                  <img style="width: 30px; height: 30px; border-radius: 50%; border: 1px solid rgb(13, 106, 13);"
                    src="./img/taco.jpg">
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active text-white" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Admin
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Perfil</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/index.html"><i class="bi bi-box-arrow-left"></i>&nbsp;&nbsp;LogOut</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
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
              <th scope="col">APELLIDO</th>
              <th scope="col">EDAD</th>
              <th scope="col">EMAIL</th>
              <th scope="col">CONTRASEÑA</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Carlos</td>
              <td>Ortiz</td>
              <td>41</td>
              <td>carlos@gmail.com</td>
              <td>************</td>
              <td class="text-end">
                <button class="btn btn-danger btn-sm">
                  <i class="bi bi-trash3-fill"></i>
                </button>
                <button class="btn btn-warning btn-sm">
                  <i class="bi bi-pen"></i>
                </button>
                <button class="btn btn-dark btn-sm">
                  <i class="bi bi-eye-fill"></i>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="" class="needs-validation" novalidate id="form">
          <div class="modal-body">

              <div class="row">
                <div class="col-6 mb-2">
                  <label for="">Nombre: </label>
                  <input required type="text" class="form-control" placeholder="Inserta el Nombre">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                <div class="col-6 mb-2">
                  <label for="">Apellido: </label>
                  <input required type="text" class="form-control" placeholder="Inserta el Apellido">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
              </div>

              <div class="row">

                <div class="col-4 mb-2">
                  <label for="">Edad</label>
                  <input required type="number" class="form-control" placeholder="Ingrese la Edad">
                  <div class="valid-feedback">Correcto</div>
                  <div class="invalid-feedback">Datos necesarios</div>
                </div>
                <div class="col-4 mb-2">
                  <label for="">Peso</label>
                  <input required type="number" class="form-control" placeholder="Ingrese la peso">
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
    <script src="./js basededatos/users.js"> </script>
  
</body>

</html>