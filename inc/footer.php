<footer class="footer mt-auto py-1">

    <div class="container">
        <h5 class="text-center mt-2">
            <a href="politica-privacidade.php">Política de privacidade</a> | <a href="termos-condicoes.php">Termos e Condições</a> | <a href="#">Quem somos</a>
        </h5>
        <p class="text-center">2020 © Copyright Mobilidade Urbana. Todos os direitos reservados.</p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginlLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLoginlLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu Email">
                        <!--<small id="emailHelp" class="form-text text-muted">Suas informações estão seguras conosco.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua Senha">
                    </div>
                    <!--<div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Li e concordo com os <a href="termos-condicoes.php" class="text-info">Termos de Serviço.</a></label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </form>
                <small class="d-block w-100 text-muted">Ainda não possui uma conta? <a href="registro.php" class="text-info">Crie agora!</a>.</small>
            </div>
        </div>
    </div>
</div>

</html>