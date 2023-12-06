<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mi Experiencia Laboral</title>
</head>
<body>
<div class="menu">

<ul>
    <li><a href="index.php"><img src="images/casa.png" alt="Bienvenida Logo"></a></li>
    <a href="paginas.php">
        <li><img src="images/web.png" alt="Proyectos Logo">
    </a></li>
    <a href="https://github.com/cireexe?tab=repositories" target="_blank">
        <li><img src="images/codigo.png" alt="codigos Logo">
    </a></li>
    <a href="experiencialaboral.php">
        <li><img src="images/maletin (1).png" alt="Experiencia Logo">
    </a></li>
    <a href="educacion.php">
        <li><img src="images/birrete.png" alt="Educación Logo">
    </a></li>
</ul>


<div class="social-icons">
    <a href="https://www.instagram.com/cire._.exe/" target="_blank"><img src="images/instagram.png" alt="Twitter Logo"></a>
    <a href="https://www.linkedin.com/in/celina-cifarelli-b86698249/" target="_blank"><img src="images/linkedin.png" alt="LinkedIn Logo"></a>
    <a href="https://github.com/cireexe" target="_blank"><img src="images/github.png" alt="GitHub Logo"></a>
</div>
</div>
<header class="hero">
    <section>
    <h1>Experiencia Laboral</h1>
    <div class="experience-cards" id="experienceCards">
        <!-- Tarjeta 1 -->
        <div class="experience-card" onclick="toggleDetails('job1Details')">
           <a href="paginas.php"><h2>Desarrollador Web</h2>
            <h4>Freelance</h4>
                <p>Trabaje en varios proyectos webs, tambien cree propios para seguir aprendiendo</p></a> 
        </div>

        <!-- Tarjeta 2 -->
        <div class="experience-card" onclick="toggleDetails('job2Details')">
            <a href="https://www.youtube.com/@curiosidades.channel" target="_blank"><h2>Edicion de videos</h2>
            <h4>Curiosidades channel</h4>
                <p>Participe en edicion de videos, audio, creacion de guiones y condenido para redes</p></a>
        </div>

        <div class="experience-card" onclick="toggleDetails('job2Details')">
            <h2>Area Administrativa</h2>
            <h4>Cooperativa de trabajo Alimar</h4>
                <p>Me contrataron por mis conocimientos en sistemas, marketing, edicion, etc.</p>
        </div>
        <!-- Agregar más tarjetas según sea necesario -->
    </div>
    </section>
</header>

<script src="script.js"></script>
</body>
</html>
