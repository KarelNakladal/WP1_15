<?php
$submit = filter_input(INPUT_POST, 'submit');
$dough = filter_input(INPUT_POST, 'dough');
$ingredients = $_POST['ingredients'];
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    if(isset($submit)) { ?>
 
        <h2>Potvrzení objednávky</h2>
        <p>Děkujeme za vaši objednávku, která vám dorazí co nejdříve.</p>
        <p>Objednal jste si </p>
        <p> <h4> <?= $dough ?> těsto</h4></p>
        <h3>Ingredience</h3>
        
        <ul>
        <?php
        foreach ($ingredients as $item) { ?>
            <li><?= $item; ?></li>
        <?php }
 
        ?>
        </ul>       

        <?php
        }   else { ?>
            
            <form action="index.php" method="post">
        <h2>Typ těsta</h2>
        <input type="radio" name="dough" id="normal" value="Normální">
        <label for="normal">Normální</label></br>
        
        <input type="radio" name="dough" id="glutenfree" value="Bezlepkové">
        <label for="glutenfree">Bezlepkové</label></br>
        
        <input type="radio" name="dough" id="kebab" value="Kebab">
        <label for="kebab">Kebab</label></br>

        <h2>Ingredience</h2>

        <h3>Maso</h3>
                
        <input type="checkbox" name="ingredients[]" id="ham" value="Šunka">
        <label for="ham">Šunka</label></br>

        <input type="checkbox" name="ingredients[]" id="chick" value="Kuře">
        <label for="chick">Kuře</label></br> 

        <input type="checkbox" name="ingredients[]" id="salami" value="Salám">
        <label for="salami">Salám</label></br> 

        <input type="checkbox" name="ingredients[]" id="sea" value="Mořské plody">
        <label for="sea">Mořské plody</label></br>

        <h3>Ovoce/Zelenina</h3>

        <input type="checkbox" name="ingredients[]" id="mushrom" value="Houby">
        <label for="mushrom">Houby</label></br> 

        <input type="checkbox" name="ingredients[]" id="pine" value="Ananas (+ pistol a 1 náboj)">
        <label for="pine">Ananas (+ pistol a 1 náboj)</label></br> 

        <input type="checkbox" name="ingredients[]" id="corn" value="Kukuřice">
        <label for="corn">Kukuřice</label></br>
        
        <input type="checkbox" name="ingredients[]" id="fefe" value="Feferonky">
        <label for="fefe">Feferonky</label></br>   

        <input type="checkbox" name="ingredients[]" id="tomato" value="Rajče">
        <label for="tomato">Rajče</label></br> 

        <h3>Sýry</h3>

        <input type="checkbox" name="ingredients[]" id="Mozzarella" value="Mozzarella">
        <label for="Mozzarella">Mozzarella</label></br>

        <input type="checkbox" name="ingredients[]" id="Eidam" value="Eidam">
        <label for="Eidam">Eidam</label></br>

        <input type="checkbox" name="ingredients[]" id="Niva" value="Niva">
        <label for="Niva">Niva</label></br>

        <input type="checkbox" name="ingredients[]" id="Ermine" value="Hermelín">
        <label for="Ermine">Hermelín</label></br>

        <h3>extra</h3>

        <input type="checkbox" name="ingredients[]" id="chocolate" value="Čokoláda">
        <label for="chocolate">Čokoláda</label></br>     

        <h3>Omáčky</h3>    

        <input type="checkbox" name="ingredients[]" id="+tomato" value="+Rajčatová omáčka">
        <label for="+tomato">+Rajčatová</label></br> 

        <input type="checkbox" name="ingredients[]" id="Herb" value="Bylinková omáčka">
        <label for="Herb">Bylinková</label></br> 

        <input type="checkbox" name="ingredients[]" id="Chilly" value="Chilly omáčka">
        <label for="Chilly">Chilly</label></br> 
        
        <br>
        <input type="submit" name="submit" value="Odeslat" value="">

    </form>
      <?php  } 
    ?>
    

</body>
</html>