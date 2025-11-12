<?php
// Incluir la conexión
include("db/conexiones.php");

// Validar envío del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre   = $_POST['nombre'];
  $correo   = $_POST['email'];
  $telefono = $_POST['telefono'];
  $asunto   = $_POST['asunto'];
  $mensaje  = $_POST['mensaje'];

  $stmt = $conn->prepare("INSERT INTO formulario (nombre, correo, telefono, asunto, mensaje) VALUES (?,?,?,?,?)");
  $stmt->bind_param("sssss", $nombre, $correo, $telefono, $asunto, $mensaje);

  if ($stmt->execute()) {
    echo "<script>alert('✅ Tu mensaje se envió correctamente.'); window.location='contacto.php';</script>";
  } else {
    echo "<script>alert('❌ Error al enviar el mensaje.');</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto | MotoGuía</title>

  <style>
    /* ======== ESTILOS GENERALES ======== */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0f0f0f;
      color: #f1f1f1;
    }

    /* ======== HEADER ======== */
    header {
      background-color: #1a1a1a;
      color: #facc15;
      padding: 20px 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    header h1 {
      font-size: 24px;
      font-weight: 800;
      letter-spacing: 1px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
      margin: 0;
      padding: 0;
    }

    nav a {
      color: #f1f1f1;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    nav a:hover {
      color: #facc15;
    }

    /* ======== SECCIÓN PRINCIPAL ======== */
    main {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 60px 20px;
    }

    main h2 {
      font-size: 34px;
      color: #facc15;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    main p {
      max-width: 700px;
      color: #ccc;
      margin-bottom: 50px;
      line-height: 1.6;
    }

    /* ======== CONTENEDOR DEL FORMULARIO ======== */
    .contact-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      background-color: #1a1a1a;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      max-width: 900px;
      gap: 30px;
    }

    .form-container {
      flex: 1 1 350px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    label {
      font-weight: 600;
      margin-bottom: 6px;
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #333;
      border-radius: 8px;
      background-color: #111;
      color: #fff;
      font-size: 14px;
      transition: 0.3s;
    }

    input:focus, textarea:focus {
      border-color: #facc15;
      box-shadow: 0 0 5px #facc15;
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      gap: 15px;
    }

    .btn {
      flex: 1;
      padding: 12px 18px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
      font-size: 15px;
    }

    .btn-secondary {
      background-color: #333;
      color: #fff;
    }

    .btn-secondary:hover {
      background-color: #444;
    }

    .btn-primary {
      background-color: #facc15;
      color: #000;
    }

    .btn-primary:hover {
      background-color: #eab308;
    }

    .contact-image {
      flex: 1 1 300px;
      border-radius: 12px;
      overflow: hidden;
    }

    .contact-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 12px;
      filter: grayscale(20%);
    }

    /* ======== FOOTER ======== */
    footer {
      background-color: #1a1a1a;
      color: #ccc;
      text-align: center;
      padding: 20px;
      font-size: 14px;
      margin-top: 60px;
    }

    footer span {
      color: #facc15;
    }

    /* ======== RESPONSIVE ======== */
    @media (max-width: 768px) {
      .contact-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>MOTOGUÍA</h1>
    <nav>
      <ul>
        <li><a href="index.php">INICIO</a></li>
        <li><a href="acerca.php">ACERCA</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h2>Agenda tu cita o pide orientación</h2>
    <p>¿Tienes dudas sobre repuestos, compatibilidad o mantenimiento? Nuestro equipo de <strong>MotoGuía</strong> está listo para asesorarte.</p>

    <div class="contact-container">
      <div class="form-container">
        <form action="contacto.php" method="post">
          <div class="form-group">
            <label for="nombre">Nombre completo</label>
            <input id="nombre" name="nombre" type="text" placeholder="Tu nombre" required>
          </div>

          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" name="email" type="email" placeholder="tucorreo@ejemplo.com" required>
          </div>

          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input id="telefono" name="telefono" type="text" placeholder="+57 300 000 0000">
          </div>

          <div class="form-group">
            <label for="asunto">Asunto</label>
            <input id="asunto" name="asunto" type="text" placeholder="Motivo del mensaje" required>
          </div>

          <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
          </div>

          <div class="actions">
            <button type="reset" class="btn btn-secondary">LIMPIAR</button>
            <button type="submit" class="btn btn-primary">ENVIAR MENSAJE</button>
          </div>
        </form>
      </div>

       <section class="motivacion">
          <p>La verdadera libertad comienza sobre dos ruedas.</p>
       </section>
      </div>
  </main>

  <footer>
    <p>© 2025 <span>MotoGuía</span> | Realizado por Mateo Ledesma</p>
  </footer>

</body>
</html>
