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
                    <?php
                      $user=$_SESSION['user_data'];
                      echo $user['nombre'];
                      ?>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Perfil</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../login/login.php"><i class="bi bi-box-arrow-left"></i>&nbsp;&nbsp;LogOut</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>