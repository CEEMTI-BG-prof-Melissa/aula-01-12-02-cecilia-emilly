<html>
    <head>
        <title>Aula> 03 - PHP </title>
    </head>

    <body>
        <?php
        $nome1="Emilly";
        $nome2="Cecilia";
        $nome3="Duda Soares";

        $n1=10;
        $n2=2;

        $soma=$n1+$n2;

        echo "Meu nome é" .$nome1 ." meu trio é" .$nome2 ."e" .$nome3;
        echo "<br>Meu nome é $nome1 e minha dupla é $nome2";

        echo "<br><br>A soma de $n1 com $n2 é igual a $soma.";

        echo "<br><br> A subtração dos números $n1 e $n2 é igual a: " .($n1-$n2).".";

        echo "<br><br> A multiplicçaõ  dos números $n1 e $n2 é igual a:".($n1*$n2). ".";

        echo "<br><br> A divisão dos números $n1 e $n2 e´igual a: " .($n1/$n2). ".";

        echo "<br><br> O módolo(resto da divisão e´igual a: " .($n1%$n2). ".";
         ?>
    </body>
</html>
