<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
        
</head>
<body>
    <h1 class="titolo">Calcolatore BMI</h1>

    <main>
        <form class="card" action="bmi.php" method="POST">
            <div class="rigaForm">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="rigaForm">
                <label for="">Peso (kg)</label>
                <input type="number" name="peso" id="peso" required>
            </div>
            <div class="rigaForm">
                <label for="">Altezza (cm)</label>
                <input type="number" name="altezza" id="altezza" required>
            </div>
            <input type="submit" name="calcola" value="Calcola">
        
        </form>
    </main>
</body>
</html>


<?php
$nome=$_POST['nome'];
$peso=$_POST['peso'];
$altezza=$_POST['altezza'];

$bmi=$peso/pow(($altezza/100),2);
if ($bmi <= 18.5){
    $classe = "sottopeso";
    $categoria = "Sottopeso";
}
if ($bmi > 18.5 && $bmi <= 24.9){
    $classe = "normopeso";
    $categoria = "Normopeso";
}
if ($bmi >= 25 && $bmi <= 29.9){
    $classe = "sovrappeso";
    $categoria = "Sovrappeso";
}
if ($bmi >= 30){
    $classe = "obesita";
    $categoria = "Obesita";
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bmi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="main">
        <h1 class="title">Il tuo BMI</h1>
 
        <div class="card centrata <?php echo $classe; ?>">
            <h2 class="nome"><?php echo $nome; ?></h2>
            <p class="dati">Peso <?php echo $peso; ?> kg · Altezza <?php echo $altezza; ?> cm</p>
            <p class="valore"><?php echo round($bmi, 2); ?></p>
            <p class="categoria"><?php echo $categoria; ?></p>
        </div>
 
        <p class="link"><a href="form.html">Calcola di nuovo</a></p>
    </main>
</body>
</html>
