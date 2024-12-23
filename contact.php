<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- Navbar -->
<?php include 'includes/navbar.php'; ?>

<div class="content_hero">
    <!-- Imagen como fondo -->
    <img src="assets/img/gallery/hero_bienestar.JPG" alt="Deportes" class="content_img_hero2">

    <!-- Texto al frente -->
    <div class="content_text_hero">
        <h1 class="hero_title">Contacto</h1>
        <div class="hero_text">
            <p>
            Queremos conocerte, déjanos tus datos para brindarte más información
            </p>
        </div>
    </div>
</div>
<br>
<br>
<section id="contact" class="contact section blue-background">

<!-- Section Title -->
<div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
<br>
  <div class="row g-4 g-lg-5">
    <div class="col-lg-5 content_contact1">
      <div class="info-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <h3>Información</h3>
        <br>
        <div class="info-item aos-init aos-animate center_horizontal" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
          <img src="assets/img/icons/mapa.png" alt="icono" class="icons_list">
          </div>
          <div class="content">
            <h4>Dirección</h4>
            <p>Vía Suba - Cota Km. 7, Vda. Pueblo Viejo, Cota, Cundinamarca</p>
            
          </div>
        </div>

        <div class="info-item aos-init aos-animate center_horizontal" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
          <img src="assets/img/icons/telefono.png" alt="icono" class="icons_list">
          </div>
          <div class="content">
            <h4>PBX</h4>
            <p>+57 (601) 9173619 Ext. 101 Recepción</p>
          </div>
        </div>

        <div class="info-item aos-init aos-animate center_horizontal" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
          <img src="assets/img/icons/email.png" alt="icono" class="icons_list">
          </div>
          <div class="content">
            <h4>Correo electrónico</h4>
            <a href="mailto:contacto@clubpuebloviejo.com">contacto@clubpuebloviejo.com </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="contact-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <h3>¡Escríbenos!</h3>
        <p>¿Tienes preguntas? ¿Quieres reservar una visita?</p>

        <form action="forms/contact.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Tu nombre" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Tu correo" required="">
            </div>

            <div class="col-12">
              <input type="tel" class="form-control" name="numero_telefono" placeholder="Número de teléfono" required="">
            </div>

            <div class="col-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required=""></textarea>
            </div>

              <button type="submit" class="btn btn-primary btn_azul">Enviar mensaje</button>
          </div>

        </form>

      </div>
    </div>

  </div>

</div>
</section>

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


<?php include 'includes/footer.php'; ?>