<?php 
$numero = 0;
$i = $numero ;

function disminuir() {
    global $i;
    $i--;
    return $i;
}

function aumentar() {
    global $i;
    $i++;
    return $i;
}

if (isset($_POST['restar'])) {
    disminuir();
}
if (isset($_POST['sumar'])) {
    aumentar();
}
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Servicios - Unity</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"/>
    </head>
<style>
    div,section{
        outline: 2px solid red;
    }
</style>
<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"/>

    <header >
        <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand " href="#"><div class="bg-primary logo  col-auto"> UNITY STYLE</div></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav text-end">
                        <a class="nav-link active col" aria-current="page" href="#inicio">INICIO</a>
                        <a class="nav-link col"  href="#servicios">SERVICIOS</a>
                        <a class="nav-link col"  href="#nosotros">NOSOTROS</a>
                        <a class="nav-link col"  href="#contacto">CONTACTO</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-3 pt-5 ">
        <form method="post">
            <button type="submit" name="sumar">+</button>
            <button type="submit" name="restar">-</button>
        </form>
        <?= $i ?>
        <? echo $numero . "hola esto es una imagen" ?>
        <section class="card-header hero container-fluid" id="inicio"></section>
        <section class="servicios-contenedor" id="servicios">
            <!-- Tarjeta 1: Peluquería -->
            <div class="servicio-tarjeta" id="tarjeta-peluqueria">
                <div class="contenido-overlay">
                    <h2>Peluquería</h2>
                    <p>Cortes, peinados y coloración con estilo.</p>
                    <a href="#" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" class="btn-servicios">Ver más</a>
                </div>
            </div>
            <!-- Tarjeta 2: Barbería -->
            <div class="servicio-tarjeta" id="tarjeta-barberia">
                <div class="contenido-overlay">
                    <h2>Barbería</h2>
                    <p>Afeitado clásico y cortes de precisión.</p>
                    <a href="#" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" class="btn-servicios">Ver más</a>
                </div>
            </div>
            <!-- Tarjeta 3: Manicura -->
            <div class="servicio-tarjeta" id="tarjeta-manicura">
                <div class="contenido-overlay">
                    <h2>Manicura</h2>
                    <p>Cuidado integral de manos y uñas.</p>
                    <a href="#" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="btn-servicios">Ver más</a>
                </div>
            </div>
            <!-- Tarjeta 4: Otros -->
            <div class="servicio-tarjeta" id="tarjeta-otros">
                <div class="contenido-overlay">
                    <h2>Otros Servicios</h2>
                    <p>Tratamientos faciales, masajes y más.</p>
                    <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" class="btn-servicios">Ver más</a>
                </div>
            </div>
        </section>

        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>
        <!-- modal 1-->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Show a second modal and hide this one with the button below.
                    

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Open tercer modal</button>
                    </div>
        </div></div></div>
        <!-- modal 2-->            
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"  aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                                                            
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                    </div>
        </div></div></div>
        <!-- modal 3-->
        <div class="modal fade" id="exampleModalToggle3" aria-hidden="true"  aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Modal 3</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.                                  
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                    </div>
        </div></div></div>
        <!-- modal 4-->
        <div class="modal fade" id="exampleModalToggle4" aria-hidden="true"  aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel4">Modal 4</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                    </div>
        </div></div></div>



        <div class="col">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="bg-info ">
        <hr class="border-5 border-warning">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto omnis non facere, iste culpa incidunt error consequatur odit officia esse magnam aspernatur quis molestiae saepe tempore natus, placeat rerum modi!</p>
        <ul>
            <li>CONTACTO:</li>
            <li>numero</li>
            <li>correo</li>
            <li class=" bi bi-wasa">facebook</li>
            <i class="bi bi-alarm">ff</i>
            
        </ul>
        <span class="d-flex justify-content-center bg-danger text-uppercase ">todo los derechos reservados.2026.creado por D4C</span>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>


</body>


</html>
