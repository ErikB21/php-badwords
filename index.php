<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $parola = $_POST['word'];
        $text = 'Ciao a tutti, mi chiamo Erik, ho 25 anni e vivo in provincia di Torino. Sono nato a Carmagnola il 21 gennaio 1997, e tra vari traslochi non ho mai davvero vissuto da qualche parte, non ho mai sentito una città o un posto davvero mio. Tutto è un po\' cambiato da quando vivo da solo...Che bello! Però rimpiango tutti gli anni passati tra una scatola e un altra, perchè non mi è stato permesso di vivere la mia vita al meglio, non mi è stato possibile avere un\'adolescenza, passando dall\'età da bambino ad adulto in un attimo. Insomma, ho perso gli anni migliori della mia vita, e questi non torneranno più indietro';
        $text = str_ireplace($parola, '***', $text);
        
    ?>

    <h1><?php echo $text ?></h1>

    
</body>
</html>