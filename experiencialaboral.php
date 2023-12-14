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
            <h3>Freelance</h4>
                <p>He participado en diversos proyectos web y he desarrollado algunos de manera independiente con el objetivo de continuar mi proceso de aprendizaje. 
                    Durante estas experiencias, he tenido la oportunidad de crear webs como NJ Alquileres del Tuyú y Neocode. Además, he practicado mis habilidades desarrollando "Tu blog de Estilo de Vida".</p></a> 
        </div>

        <!-- Tarjeta 2 -->
        <div class="experience-card" onclick="toggleDetails('job2Details')">
            <a href="https://www.youtube.com/@curiosidades.channel" target="_blank"><h2>Edicion de videos</h2>
            <h3>Curiosidades channel</h4>
                <p>He contribuido en la edición de videos y audio, así como en la creación de guiones y contenido para redes sociales. 
                    Esta experiencia la adquirí trabajando en "Curiosidades Channel", donde tuve la oportunidad de aplicar mis habilidades en la producción multimedia 
                    y contribuir al desarrollo de contenido atractivo y educativo que caracteriza al canal.</p></a>
        </div>

        <div class="experience-card" onclick="toggleDetails('job2Details')">
            <h2>Area Administrativa</h2>
            <h3>Cooperativa de trabajo Alimar</h4>
            <p>Fui contratada por la Cooperativa de Trabajo Alimar debido a mis conocimientos especializados en sistemas, marketing, edición y otras áreas relacionadas. Durante mi 
                tiempo en la empresa, apliqué mis habilidades para contribuir al desarrollo y crecimiento, brindando soluciones efectivas en diversas facetas.</p>
        </div>
        <!-- Agregar más tarjetas según sea necesario -->
    </div>
    </section>
</header>

<script src="script.js"></script>
</body>
</html>
