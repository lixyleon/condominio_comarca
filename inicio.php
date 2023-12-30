<?php
include('template/navbar.php')
?>

<div class="row">
<div class="container col-md-4 justify-content-center">
            <div class="text-center fs-3 pb-2"> Ingresa al Sistema de Información Administrativa de Condominio</div>
            <div class="d-flex align-items-center py-4 bg-body-tertiary text-center">

                <div class="form-signin w-100 m-auto ">
                    <form action="inicio.php">
                        <i class="bi bi-person-square">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-square text-secondary" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg>
                        </i>
                        <h1 class="h3 mb-3 fw-normal">Ingrese sus datos</h1>
                        <div class="form-floating">
                                <select class="form-select" id="inputGroupSelect02">
                                    <option selected>Seleccione Condominio</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                        
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>


                        <button class="btn btn-dark text-white w-100 py-2" type="submit">Ingresar</button>

                    </form>
                    <div class="container pt-3">
                        <p><i>Si olvidó su contraseña deberá contactar al administrador de sistema en el condominio</i></p>
                    </div>
                </div>
            </div>
        </div>
</div>





<?php
include('template/footer.php')
?>