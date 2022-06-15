<div class="container">
    <div class="row my-5">
        <div class="col-sm-6 offset-sm-3">

        <h3 class="text-center">Registo do novo Cliente</h3>

        <form action="?a=criar_cliente" method="post">

            <div class="my-3">
                <label>Nome Completo</label>
                <input type="text" name="text_nome_completo" placeholder="Nome Completo" class="form-control" required></input>
            </div>
            
            <div class="my-3">
                <label>Email</label>
                <input type="email" name="text_email" placeholder="Email" class="form-control" required></input>
            </div>

            <div class="my-3">
                <label>Morada</label>
                <input type="text" name="text_morada" placeholder="Morada" class="form-control" required></input>
            </div>

            <div class="my-3">
                <label>Cidade</label>
                <input type="text" name="text_cidade" placeholder="Cidade" class="form-control" required></input>
            </div>

            <div class="my-3">
                <label>Telemóvel</label>
                <input type="text" name="text_telemovel" placeholder="Telemóvel" class="form-control"></input>
            </div>
            
            <div class="my-3">
                <label>Senha</label>
                <input type="password" name="text_senha_1" placeholder="Senha" class="form-control" required></input>
            </div>

            <div class="my-3">
                <label>Repetir a Senha</label>
                <input type="password" name="text_senha_2" placeholder="Repetir Senha" class="form-control" required></input>
            </div>

            <div class="my-4">
                <input type="submit" value="Criar Conta" class="btn btn-primary">
            </div>

            <?php if(isset($_SESSION['erro'])):?>
                <div class="alert alert-danger text-center p-2">
                    <?= $_SESSION['erro'] ?>
                    <?php unset($_SESSION['erro']) ?>
                </div>
            <?php endif; ?>
        </form>
        </div>
    </div>
</div>

<!--

CLIENTES:
--------
email 
senha1
senha1
nome_completo 
morada 
cidade 
telefone 
-->