<?php
// index.php
?>
<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- Navbar -->
<?php include 'includes/navbar.php'; ?>
<body>      
    <!-- Hero Section -->
    <section id="hero" class="carousel slide text-center py-5" data-bs-ride="carousel">
        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carrusel -->
        <div class="carousel-inner">
            
            <div class="carousel-item active" style="background-image: url('assets/img/gallery/GOLFINICIO-scaled.jpg'); background-size: cover; background-position: center; height: 100vh;">
                <div class="container text-white d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="display-4">Explora la Naturaleza</h1>
                    <p class="lead">Vive experiencias únicas en un entorno natural.</p>
                    <a href="#servicios" class="btn btn-primary btn_azul btn-lg">Conoce Más</a>
                </div>
            </div>

            <div class="carousel-item " style="background-image: url('assets/img/gallery/HIPICAINICIO-scaled.jpg'); background-size: cover; background-position: center; height: 100vh;">
                <div class="container text-white d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="display-4">Bienvenido a Pueblo Viejo</h1>
                    <p class="lead">Descubre un paraíso natural para toda la familia.</p>
                    <a href="#about" class="btn btn-warning btn-lg ">Conoce Más</a>
                </div>
            </div>
        </div>

        <!-- Controles de navegación -->
        <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </section>

    <!-- nosotros -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Columna del texto -->
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <h2 class="text-left mb-4">Quiénes Somos</h2>
                    <p>
                        Pueblo Viejo se levanta como una reserva natural en la entrada del Municipio de Cota, 
                        bajo el cerro tutelar de El Majuy. En Pueblo Viejo Country Club se combinan escenarios 
                        naturales y de arte arquitectónico, que se funden en perfecta armonía para impulsar una 
                        sensación de placer en sus áreas sociales y deportivas con espacios pensados por socios 
                        para socios. Un Club en permanente dinámica de cambio y crecimiento.
                    </p>
                </div>
                <!-- Columna de la imagen -->
                <div class="col-md-6 text-center animate__animated animate__fadeInRight">
                    <img src="assets/img/gallery/nosotros.png" alt="Nosotros" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="servicios section blue-background">
            <br>
      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Nuestros Servicios</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="d-flex justify-content-center">

          <ul class="nav nav-tabs aos-init aos-animate selects_pvcc" data-aos="fade-up" data-aos-delay="100" role="tablist">

            <li class="nav-item" role="presentation">
              <a class="nav-link show active" data-bs-toggle="tab" data-bs-target="#servicios-tab-1" aria-selected="true" role="tab">
                <h4>Gastronomia</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#servicios-tab-2" aria-selected="false" role="tab" tabindex="-1">
                <h4>Deportes</h4>
              </a><!-- End tab nav item -->

            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#servicios-tab-3" aria-selected="false" role="tab" tabindex="-1">
                <h4>Bienestar</h4>
              </a>
            </li><!-- End tab nav item -->

          </ul>

        </div>

        <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="servicios-tab-1" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Gatronomia</h3>
                <p class="fst-italic">
                    Disfruta de una exquisita comida mientras contemplas las hermosas vistas del club.
                    Nuestros restaurantes, ubicados en puntos estratégicos, son el lugar perfecto para relajarte y socializar.
                </p>
                <ul>
                  <li><img src="assets/img/icons/bandeja.png" alt="icono" class="icons_list" class="icons_list"> <span>Comedor principal.</span></li><br>
                  <li><img src="assets/img/icons/parrilla-de-barbacoa.png" alt="icono" class="icons_list"> <span>Terraza parrilla.</span></li><br>
                  <li><img src="assets/img/icons/pub.png" alt="icono" class="icons_list"> <span>Pub hoyo 19.</span></li><br>
                  <li><img src="assets/img/icons/deck.png" alt="icono" class="icons_list"> <span>Deck.</span></li><br>
                </ul>
                <a href="restaurants.php"><button type="submit" class="btn btn-primary btn_azul">Ver más...</button></a>
              </div>    
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/gallery/gastronomia.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="servicios-tab-2" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Deportes</h3>
                <p class="fst-italic">
                Forma parte de nuestros equipos deportivos, participa en torneos y eventos especiales, o simplemente disfruta de una partida amistosa con tus amigos. 
                ¡En nuestro club siempre encontrarás alguien con quien compartir tu pasión por el deporte!
                </p>
                <ul>
                  <li><img src="assets/img/icons/golf.png" alt="icono" class="icons_list"> <span>Golf.</span></li><br>
                  <li><img src="assets/img/icons/tenis.png" alt="icono" class="icons_list"> <span>Tenis.</span></li><br>
                  <li><img src="assets/img/icons/futbol.png" alt="icono" class="icons_list"> <span>Futbol.</span></li><br>
                  <li><img src="assets/img/icons/hipica.png" alt="icono" class="icons_list"> <span>Hipica.</span></li><br>
                </ul>
                <a href="sports.php"><button type="submit" class="btn btn-primary btn_azul">Ver más...</button></a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/gallery/deportes.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="servicios-tab-3" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Bienestar</h3>
                <p class="fst-italic">Descubra nuestras zonas de bienestar están diseñadas para ofrecerle una experiencia de relajación y 
                    rejuvenecimiento inigualable. Disfrute de tratamientos personalizados, saunas, piscinas terapéuticas y mucho más</p>
                <ul>
                  <li><img src="assets/img/icons/spa.png" alt="icono" class="icons_list"> <span>SPA.</span></li><br>
                  <li><img src="assets/img/icons/coworking.png" alt="icono" class="icons_list"> <span>COWORK.</span></li><br>
                  <li><img src="assets/img/icons/peluqueria.png" alt="icono" class="icons_list"> <span>Peluqueria.</span></li><br>
                  <li><img src="assets/img/icons/vestier.png" alt="icono" class="icons_list"> <span>Vestieres.</span></li><br>
                </ul>
                <a href="bienestar.php"><button type="submit" class="btn btn-primary btn_azul">Ver más...</button></a>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/gallery/bienestar.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>

    </section>

    <!-- Eventos Section -->
    <section id="blog" class="py-5 ">
        <div class="container">
        <!-- Título de la Sección -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Nuestros Eventos Principales</h2>
                <p>Conecta, celebra y disfruta en Pueblo Viejo Country Club.</p>
            </div>

        <!-- Tarjetas -->
        <div class="row g-4">
            <!-- Tarjeta 1 -->
            <div class="col-md-4 aos-init aos-animate" data-aos="fade-up">
                <div class="card h-100 shadow">
                    <img src="assets/img/gallery/e_independencia.png" class="card-img-top" alt="Evento Independencia">
                    <div class="card-body">
                        <h5 class="card-title">Día de la Independencia</h5>
                        <p class="card-text">Celebra este día con nosotros en un evento lleno de tradición y diversión.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow">
                    <img src="assets/img/gallery/e_piscina_corta.png" class="card-img-top" alt="Evento Piscina">
                    <div class="card-body">
                        <h5 class="card-title">Pool Party</h5>
                        <p class="card-text">Disfruta de una fiesta en la piscina con actividades para toda la familia.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow">
                    <img src="assets/img/gallery/Picnic.png" class="card-img-top" alt="Evento Picnic">
                    <div class="card-body">
                        <h5 class="card-title">Picnic al Aire Libre</h5>
                        <p class="card-text">Relájate en un ambiente natural y disfruta de un picnic exclusivo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Maps Section -->
    <section id="location" class="py-5 bg-light">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mb-4">Nuestra Ubicación</h2>
                <p class="mb-4">
                    Encuéntranos en el corazón de Cota, Cundinamarca. ¡Estamos listos para recibirte!
                </p>
            </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-10">
                  <!-- Google Maps Embed -->
                  <div class="map-container">
                      <iframe 
                          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31806.611651904455!2d-74.094945!3d4.79983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f869a87745ef1%3A0x26502fe2a812ed3a!2sPueblo%20Viejo%20Country%20Club!5e0!3m2!1ses-419!2sco!4v1734103079514!5m2!1ses-419!2sco"
                          width="100%" 
                          height="400" 
                          style="border:0;" 
                          allowfullscreen="" 
                          loading="lazy" 
                          referrerpolicy="no-referrer-when-downgrade">
                      </iframe>
                  </div>
              </div>
          </div>
      </div>
    </section>
<br>
<br>
    <!-- Contact Section -->
    <div class="container col-xxl-8 px-4 py-5 blue2-background">
      <div class="row align-items-center g-5 py-5">
          <!-- Texto a la izquierda -->
          <div class="col-lg-8 text-section">
              <h4 class="display-5 fw-bold lh-1 mb-3">¿Tienes alguna otra duda? No esperes más</h4>
          </div>
          <!-- Botón a la derecha -->
          <div class="col-lg-4 text-end">
              <a href="contact.php"><button type="button" class="btn btn-primary btn-lg px-4 btn_amarillo">Contáctanos</button></a>
          </div>
      </div>
    </div>

    
<br>
<br>

    <div class="espaciador"></div>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
