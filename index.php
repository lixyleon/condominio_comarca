<?php
include('template/navbar.php')
?>

<div class="container-fluid justify-content-center">
    <div class="row ">
        <div class="col">
            <div class="container">
                <h1 class="text-center mt-3">Sistema de Información Administrativa de Condominio (SIAC)</h1>
                <p class="m-3 text-center fs-4">Diseñado para facilitar el manejo de la información administrativa del condominio. Podrás obtener información actualizada cuando lo necesites</p>
            </div>
            <div class="container">
                <div class="card-group gap-3">
                    <div class="card ">
                        <i class="bi bi-globe text-primary text-center p-1"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472M3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                            </svg>
                        </i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Fácil acceso</h5>
                            <p class="card-text">Los propietarios y administradores podran acceder desde cualquier dispositivo (móvil, tablet, laptop, PC) con acceso a internet. </p>
                            <p class="card-text"><small class="text-body-secondary">Accede desde cualquier lugar</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <i class="bi bi-card-checklist text-primary text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                            </svg>
                        </i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Cartelera Digital</h5>
                            <p class="card-text">Publique noticias y novedades de interés para los propietarios.</p>

                        </div>
                    </div>
                    <div class="card">
                        <i class="bi bi-bar-chart-line-fill text-primary text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z" />
                            </svg>
                        </i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Reportes</h5>
                            <p class="card-text">Podrá obtener información actualizada para mostrar los resultados de la gestión. Podrá verlos en pantalla o descargarlos.</p>
                            <p class="card-text"><small class="text-body-secondary">Ofrecemos el servicio de consultoría.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row ">
        <div class="col">
            <div class="container">
                <div class="card-group gap-3">
                    <div class="card ">
                        <i class="bi bi-chat-dots text-primary text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2" />
                            </svg>
                        </i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Mensajería SMS</h5>
                            <p class="card-text">Envíe mensajes predeterminados o personalizados, con notificaciones de deuda pendiente, reportes, avisos de publicaciones y otros. </p>
                            <p class="card-text"><small class="text-body-secondary">Mensajería a través del Sistema</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <i class="bi bi-diagram-3-fill text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-diagram-3-fill  text-primary" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5z" />
                            </svg>
                        </i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Microservicios</h5>
                            <p class="card-text">Adquiere servicios adicionales: gestión de cobranzas, elaboración de informes y reportes estadísticos, digitalización de documentos y conciliación de pagos.</p>
                        </div>
                    </div>
                    <div class="card">
                        <i class="bi bi-people-fill text-center text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                        </i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Consultas en línea</h5>
                            <p class="card-text">Realiza consulta en línea a los propietarios sobre proyectos y presupuestos. Conoce en tiempo real los resultados de la votación.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid" id="section-demo">
</div>
<!-- efecto hover para card de boostrap section services -->
<style>
    .services:hover{
        transform: scale(1.1);
        background: linear-gradient(#a3b2c6,#7cb4fc);
    }
    .services{
        transition: transform .5s;
    }
</style>

<div class="container-fluid mt-3" id="section-services">
    <div class="container">
        <h2 class="text-center text-primary">Conoce nuestros microservicios</h2>
        <p class="text-center fw-bold fs-4 text-body-secondary"> Servicios adicionales que puede contratar de forma esporádica o continua. </p>

        <p class="text-center fs-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias voluptatibus molestias dignissimos exercitationem voluptates nisi, doloribus accusantium aspernatur, aperiam, quos unde beatae eum iste ab esse minus dicta rerum numquam.</p>

        <div class="row">
            <div class="card mb-3 mt-3 services">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="images/factura-linea-pago-facturas-casa-procesamiento-3d.jpg" class="img-fluid rounded-start" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-3">Gestión de Cobranzas</h5>
                            <p class="card-text fs-4">Realizamos la gestión de cobranzas, con reportes actualizados según sus necesidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="card mb-3 mt-3 services">
                <div class="row g-0 align-items-center">
                    <div class="col-md-8 ">
                        <div class="card-body ">
                            <h5 class="card-title fs-3">Informe de gestión</h5>
                            <p class="card-text fs-4">Elaboraremos el informe de gestión con los datos de los ingresos y gastos cargados en el sistema, para el período y con la frecuencia que requiera. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/primer-plano-manos-boligrafo.jpg" class="img-fluid rounded-start" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mb-3 mt-3 services">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="images/primer-plano-manos-contador-contando-calculadora.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-3">Conciliación de pagos</h5>
                            <p class="card-text fs-4">Realizamos la conciliación de pagos registrados en el sistema por los propietarios, los pagos registrados por los administradores del condominio y el estado de cuenta bancaria del condominio.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section-nosotros">

</div>
<div class="container-fluid" id="section-contáctanos">

</div>

<br><br><br><br>







<!-- <a href="https://www.freepik.es/foto-gratis/factura-linea-pago-facturas-casa-procesamiento-3d_35037982.htm#query=cobranza&position=3&from_view=search&track=sph&uuid=ebc9f485-0620-4fea-9ea2-007112e65461">Imagen de upklyak</a> en Freepik

<a href="https://www.freepik.es/foto-gratis/primer-plano-manos-contador-contando-calculadora_1121888.htm#query=cobranza&position=9&from_view=search&track=sph&uuid=ff0f9673-6e4d-43ea-8245-5846eb8b3c01">Imagen de katemangostar</a> en Freepik

<a href="https://www.freepik.es/foto-gratis/primer-plano-manos-boligrafo_863269.htm#query=reporte&position=18&from_view=search&track=sph&uuid=272ab67e-949f-4cec-8c78-3e3884ec3735">Imagen de pressfoto</a> en Freepik-->





<br><br><br>





<?php
include('template/footer.php')
?>