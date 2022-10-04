  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Google fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- Memanggil css eksternal style untuk header -->
    <link rel="stylesheet" href="../css/style-header.css" />
  </head>

  <body>
    <div class="grid-container">
      <header>
        
      </header>
      <!-- nav -->
      <nav>
        <div class="container">
          <a href="#" class="logo">Sandi Shop</a>
          <div class="nav__links">
            <a href="index.php">Home</a>
            <a href="login.php">list of items</a>
            <a href="about.php">About</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </nav>

      <!-- slider -->
      <section class="slider">
        <div class="container">
          <!-- Slide Wrapper -->
          <div class="wrapper">
            <div class="slides slide1">
              <img src="../img/slide1.jpg" alt="Slide1" />
            </div>
            <div class="slides slide2">
              <img src="../img/slide2.png" alt="Slide2" />
            </div>
            <div class="slides slide3">
              <img src="../img/slide3.jpg" alt="Slide3" />
            </div>
          </div>

          <!-- Slide Button -->
          <div id="slider-button">
            <!-- Previous Button -->
            <button type="button" class="button previous">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                  d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z" />
              </svg>
            </button>
            <!-- Next button -->
            <button type="button" class="button next">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                  d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
              </svg>
            </button>
          </div>
        </div>
      </section>

      
    </div>

    <script src="../js/script.js"></script>
  </body>