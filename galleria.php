<?php 
include("head.php");
include("header.php");


$directory = './assets/img/galleria'; //il percorso della cartella delle foto.
$photoNames = [];

if (is_dir($directory)) {
    if ($handle = opendir($directory)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $photoNames[] = $entry;
            }
        }
        closedir($handle);
    }
}

//trasfornzazione in json se necessario
/* $jsonOutput = json_encode($photoNames);

echo $jsonOutput; */
// Ora hai un array di nomi di foto in $photoNames e una rappresentazione JSON in $jsonOutput.



?>

<div class="boxModale hidden">
    <div class="close">
        <i class="closeIcon uil uil-times-circle"></i>
    </div>
    <img id="imgModale" src="" alt="">
</div>

<div class="galleryCont container">

    <h2>GALLERIA</h2><br>

    <div class="rowGallery">
        <?php 
        foreach($photoNames as $foto) {
            //questo if l'ho aggiunto solo perchPé inseriva una foto con quel nome, che non è nemppure presente nelle foto nella cartella
            if($foto != ".DS_Store") {
                ?>
                <img src="./assets/img/galleria/<?php echo $foto; ?>" class="imgGallery img-fluid rounded" data-imgallery="immagine">
                <?php
            }
        }
        ?>
    </div>
</div>



<script>
    
    let imgs = document.querySelectorAll(".imgGallery");
    let modalImg = document.querySelector("#imgModale");
    let boxModale = document.querySelector(".boxModale");
    let closebut = document.querySelector(".closeIcon");

    imgs.forEach(immagine => {
        immagine.addEventListener("click", function() {
            boxModale.classList.remove("hidden")
            let toOpen = this.src;
            console.log(toOpen)
            modalImg.src = toOpen;
        })
    });

    closebut.addEventListener("click", function() {
        boxModale.classList.add("hidden");
    })
    boxModale.addEventListener("click", function() {
        boxModale.classList.add("hidden");
    })



</script>


<?php 
include("footer.php");
?>