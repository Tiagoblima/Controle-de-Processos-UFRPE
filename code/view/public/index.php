<!DOCTYPE html>
<html lang="pt-br">

<?php
include 'fragments/head.html'; 
?>

<body>

<div class="inline">
    <?php include 'fragments/public_nav.html'; ?>
</div>

<div class="container">
    <!-- Content here -->
    <br><br><br>

    <h1 class="header center white-text">

    <div class="row">

        <div class="col s5">
            <br>
            <div class="big_title">

                Acesse o <br>
                Cadastro Interno <br>
                de Processos
            </div>
         </div>

        <div class="col s5">
				<form>
                <div class="form-group">
                    <label for="InputEmail1" class="aliment left">E-mail: </label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted aliment left">Nunca compartilharemos seu e-mail.</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="InputPassword1" class="aliment left">Senha</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary aliment left"><a class="white-text" style="text-decoration: none" href="../session/home_session.php">Acessar</a></button>
            </form>
        
            
        </div>
    </div>
</div>

<?php

include 'fragments/footer.html';
?>

</body>
</html>
