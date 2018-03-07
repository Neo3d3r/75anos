<?php
require_once './menu.php';
?>
<div class="card">
    <div class="card-header bg-warning">
        <h3>Cadastro para participação no evento</h3>
    </div>
    <div class="card-body">
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Primeiro Nome</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Ex: José" required>
                    <div class="invalid-feedback">
                        Informe seu nome.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Sobrenome</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Ex:Ferreira da Silva" required>
                    <div class="invalid-feedback">
                        Informe seu sobrenome.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Endereço de E-mail</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Informe um e-mail válido.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Cidade</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade de residência" required>
                    <div class="invalid-feedback">
                        Por favor informe sua cidade de residência atual.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Estado</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
                    <div class="invalid-feedback">
                        Por favor informe seu estado.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Telefone Celular</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="(DDD)XXXXX-XXXX" required>
                    <div class="invalid-feedback">
                        Por favor informe o seu telefone.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nos relate como foi sua experiência junto ao IFMT:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" placeholder="Descreva aqui..."></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Aceitar os termos e condições de participação.
                    </label>
                    <div class="invalid-feedback">
                        Você deve aceitar os termos.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Confirmar Cadastro</button>
        </form>
    </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>


<?php
require_once './footer.php';
