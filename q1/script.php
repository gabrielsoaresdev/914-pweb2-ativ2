<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <?php
            
                $data = new DateTime($_GET["data"]);
                $hoje = new DateTime(date('Y-m-d'));
                $idade = $data->diff($hoje);
                echo $idade->format('Você tem %y anos e %a dias de vida!');
            ?>
        </p>
        
        <a href="contato.html"> Calcular novamente </a>
    </body>
</html>
