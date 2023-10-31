<?php 
    
    /*$maVariable = $_GET["monNomDeVariable"];*/
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
         <link href="style.css" rel="stylesheet">
        <title>
            Le héros c'est toi!
        </title>
    </head>
    <body>
        <main>
            <form action="page3.phtml" method="GET">
               <section>
                    <fieldset>
                        <legend>
                            <?php echo "Choisie ton personnage {$username}" ?>:
                        </legend>
                        <label for="personnage1">
                            PERSONNAGE 1 <img src="https://previews.123rf.com/images/vectorlab/vectorlab1604/vectorlab160400068/55133466-super-woman-hero-femme-superhero-fille-dans-le-costume-de-super-h%C3%A9ros-pin-up-fille-style.jpg" alt="Héros1"/>
                            </label>
                        <input type="radio" id="personnage1" name="personnage"/>
                        
                        <label for="personnage2">
                            PERSONNAGE 2 <img src="https://img.pixers.pics/pho_wat(s3:700/FO/63/78/58/39/700_FO63785839_04fbd80f08cf6e4e764820ef95d87ad2.jpg,700,700,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,650,jpg)/posters-super-heros-vector-illustration-sur-un-fond.jpg.jpg" alt="Héros2"/>
                        </label>
                        <input type="radio" id="personnage2" name="personnage"/>
                        
                        <label for="personnage3">
                            PERSONNAGE 3 <img src="https://ih1.redbubble.net/image.4418667655.2659/fcp,small,wall_texture,product,750x1000.jpg" alt="Héros3"/>
                        </label>
                        <input type="radio" id="personnage3" name="personnage"/>
                    </fieldset>
                    
                    <fieldset>
                        <button type="submit">
                            CONTINUER
                        </button>
                    </fieldset>
                </section> 
            </form>
                <section>
                    <img src=""></img>
                    <h1>
                        Le site dont vous etes le héros
                    </h1>
                </section>
        </main>
    </body>

</html>