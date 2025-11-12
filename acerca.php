<?php include("menu.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MOTO GUÍA | Acerca de Nosotros</title>
  <style>
    /* === Estilos globales === */
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: "Poppins", Arial, sans-serif;
    }
    body {
      background-color: #121212;
      color: #f1f1f1;
      line-height: 1.7;
    }

    /* === Encabezado === */
    header {
      background: #0d0d0d;
      color: #facc15;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 10px rgba(0,0,0,0.6);
    }
    header h1 {
      color: #facc15;
      text-transform: uppercase;
      font-weight: 700;
      font-size: 26px;
      letter-spacing: 1.5px;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
    }
    nav a {
      color: #e0e0e0;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }
    nav a:hover {
      color: #facc15;
    }

    /* === Hero superior === */
    .hero {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.8)),
        url('img/mecanico-taller.jpg') center/cover no-repeat;
      height: 420px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      margin-top: 80px;
      color: white;
    }
    .hero h2 {
      font-size: 42px;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .hero p {
      max-width: 700px;
      color: #ccc;
      font-size: 18px;
    }

    /* === Contenido === */
    main {
      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
    }
    .section {
      background: #1a1a1a;
      border-radius: 10px;
      margin-bottom: 40px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.6);
      overflow: hidden;
    }
    .section-content {
      padding: 40px;
    }
    .section h3 {
      color: #facc15;
      margin-bottom: 15px;
      font-size: 24px;
      letter-spacing: 1px;
    }
    .section p {
      color: #d9d9d9;
      font-size: 17px;
      margin-bottom: 15px;
    }

    /* === Sección con imagen lateral === */
    .section-image {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
    }
    .section-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    @media (max-width: 850px) {
      .section-image {
        grid-template-columns: 1fr;
      }
    }

    /* === CTA === */
    .cta {
      text-align: center;
      margin: 40px 0;
    }
    .cta a {
      background: #facc15;
      color: #111;
      padding: 14px 36px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }
    .cta a:hover {
      background: #eab308;
    }

    /* === Footer === */
    footer {
      background: #0d0d0d;
      color: #888;
      text-align: center;
      padding: 30px 0;
      font-size: 15px;
    }
    footer span {
      color: #facc15;
      font-weight: 600;
    }
  </style>
</head>
<body>

  <header>
    <h1>MOTO GUÍA</h1>
    <?php include("menu.php"); ?>
  </header>

  <!-- HERO -->
  <section class="hero">
    <h2>Sobre Nosotros</h2>
    <p>Tu fuente confiable de información técnica, mantenimiento y compatibilidad de repuestos para motos en Colombia.</p>
  </section>

  <!-- SECCIÓN 1 -->
  <main>
    <div class="section section-image">
      <div class="section-content">
        <h3>¿Qué es Moto Guía?</h3>
        <p><strong>Moto Guía</strong> es una plataforma creada para ayudarte a entender tu moto a fondo. Reunimos catálogos, manuales, fotografías de repuestos y tablas de compatibilidad entre distintas marcas y modelos. Cada dato está verificado para que tomes decisiones seguras sobre el mantenimiento de tu moto.</p>
        <p>Creemos que la información técnica debe ser accesible, clara y actualizada, tanto para aficionados como para profesionales del mundo de las motos.</p>
      </div>
      <img src="https://media.istockphoto.com/id/1363985678/es/foto/un-hombre-en-el-garaje-est%C3%A1-revisando-una-motocicleta.jpg?s=612x612&w=0&k=20&c=PZh1MCncyW1xUgspxfLJ6c9li0EnEgV1lX6eY0tRJl4=" alt="Mecánico revisando moto">
    </div>

    <!-- SECCIÓN 2 -->
    <div class="section section-image">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgPGSPuEH1nQEPpogCcv859V6iIoxC-p8hCg&s" alt="Repuestos de motocicleta">
      <div class="section-content">
        <h3>¿Qué ofrece nuestra plataforma?</h3>
        <p>✔ Catálogos descargables y manuales en PDF.<br>
           ✔ Tablas detalladas con compatibilidad de repuestos.<br>
           ✔ Medidas exactas de aceite y lubricantes.<br>
           ✔ Consejos de mantenimiento y guías paso a paso.<br>
           ✔ Fotos reales de repuestos y su estructura.</p>
      </div>
    </div>

    <!-- SECCIÓN 3 -->
    <div class="section section-image">
      <div class="section-content">
        <h3>Nuestra misión</h3>
        <p>Queremos que cada motociclista tenga el conocimiento necesario para mantener su moto siempre en las mejores condiciones, sin depender únicamente de terceros. Buscamos crear una comunidad técnica confiable donde compartir información útil y precisa.</p>
        <p>Desde Medellín, trabajamos constantemente para expandir la base de datos de modelos, especialmente de motos de bajo, alto cilindraje y 2 tiempos.</p>
      </div>
      <img src="https://bu-cdn.tiendup.com/business/7310/images/4133_631638103fc9d_large.jpg" alt="Mecánico en taller de motos">
    </div>

    <!-- SECCIÓN 4 -->
    <div class="section section-image">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmOszXgffpN5uZ4dL_CshBa3Z5v3ntLQfMpQ&s" alt="Equipo Moto Guía">
      <div class="section-content">
        <h3>¿Quiénes somos?</h3>
        <p>El proyecto <strong>Moto Guía</strong> fue fundado por <strong>Mateo Ledesma</strong>, con el objetivo de reunir todo el conocimiento técnico de las motos en un solo lugar. Contamos con la colaboración de mecánicos, ingenieros y entusiastas que aportan datos, manuales y experiencia real desde los talleres.</p>
      </div>
    </div>

    <!-- SECCIÓN 5 -->
    <div class="section">
      <div class="section-content">
        <h3>¿Cómo puedes contribuir?</h3>
        <p>Si eres mecánico, vendedor de repuestos o simplemente un apasionado por las motos, puedes ayudarnos enviando fotos, manuales o datos técnicos que ayuden a otros motociclistas. Tu aporte será acreditado en nuestra base de datos.</p>
      </div>
    </div>

    <div class="cta">
      <a href="contacto.php">Contactar al equipo</a>
    </div>
  </main>

  <footer>
    <p>© 2025 <span>MOTO GUÍA</span> | Desarrollado por Mateo Ledesma</p>
  </footer>

</body>
</html>


