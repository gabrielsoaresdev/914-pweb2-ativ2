<!DOCTYPE html>

<html>
    <head>
        <title>Formulário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form>
            <div>
                <label for="nome">Nome: </label>
                <input name="nome" type="text" value="<?php echo $_GET['nome'] ?>" disabled/>
            </div>
            <div>
                <label for="email">Email: </label>
                <input name="email" type="email" value="<?php echo $_GET['email'] ?>" disabled/>
            </div>
            
            <div>
                <label for="msg">Mensagem: </label>
                <textarea name="mensagem"></textarea>
            </div>
            <input type="submit" value="enviar"/>
        </form>
    </body>
</html>
