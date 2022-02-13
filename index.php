<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
</head>
<body>
    <?php

    $var = 1;
    $var1 =12;
    $soma = $var + $var1;
    $name = "Rogério ";
    print "<h3>Bom dia {$name}</h3>";
    print "<p>{$var} + {$var1} = {$soma}</p>";

    echo "<h1>Váriaveis de saída</h1>";
    echo "<h2>echo</h2>";
    echo 'Isto é um teste'; // Estilo de comentário de uma linha em  C++
    /* Este é um comentário de múltiplas linhas
       ainda outra linha de comentário */
    echo '<p>Isto é ainda outro teste</p>';
    echo '<p>Um teste final</p>'; # Este é um comentário de uma linha no estilo shell

    echo "<p>Olá Mundo! <span class='tag'>#Bora Programar!</span></p>";

    $hello = "Olá Mundo!";
    $code = "<span class='tag'>#Bora Programar!</span>";

    echo "<p>$hello</p>";
    echo '<p>$hello</p>';

    $day = "dia";

    echo "<p>Falta 1 {$day} para o evento</p>";
    echo "<p>Faltam 5 {$day}s para o evento</p>";  
    echo "<h3>{$hello}</h3>";
    echo "<h4>{$hello} {$code}</h4>";

    print "<h2>print</h2>";
    print "<h3>{$hello} {$code}</h3>";
    print "<h2>print_r</h2>";
    $array = [
        '$company' => "Inovadora",
        '$office' => "Analista de Suporte",
        '$user' => "Rogério",
    ];

    echo "<pre>",print_r($array, TRUE),"</pre>";

    print "<h2>printf</h2>";

    $article = "<article>
    <h1>%s</h1>
    <p>%s</p>
    </article>";

    $title = "{$hello} {$code}";
    $subtitle = "O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.";

    printf($article, $title ,$subtitle);

    print "<h2>vprintf</h2>";

    $company = "<article>
    <h1>Empresa %s</h1>
    <p><b>Setor</b> %s
    </p><b>usuário</b> %s</p>
    </article>";

    vprintf($company, $array);
    echo vsprintf($company, $array);

    print "<h2>var_dump</h2>";

    var_dump(
       $array,
       $hello,
       $company
);
    ?>
</body>
</html