<?php 
include("head.php");
include("header.php");
?>

<div>
    <img id="imgModale" src="" alt="">
</div>

<div class="galleryCont container">

    <h2>GALLERIA</h2><br>

    <div class="rowGallery">
        <img src="https://unsplash.it/600.jpg?image=251" class="imgGallery img-fluid rounded" data-imgallery="immagine">
        <img src="https://unsplash.it/600.jpg?image=252" class="imgGallery img-fluid rounded" data-imgallery="immagine">
        <img src="https://unsplash.it/600.jpg?image=253" class="imgGallery img-fluid rounded" data-imgallery="immagine">
    </div>
    <div class="rowGallery">
        <img src="https://unsplash.it/600.jpg?image=254" class="imgGallery img-fluid rounded" data-imgallery="immagine">
        <img src="https://unsplash.it/600.jpg?image=255" class="imgGallery img-fluid rounded" data-imgallery="immagine">
        <img src="https://unsplash.it/600.jpg?image=256" class="imgGallery img-fluid rounded" data-imgallery="immagine">
    </div>
</div>



<script>
    
    let imgs = document.querySelectorAll(".imgGallery");
    let modalImg = document.querySelector("#imgModale");

    imgs.forEach(immagine => {
        immagine.addEventListener("click", function() {
            let toOpen = this.src;
            console.log(toOpen)
            modalImg.src = toOpen;
        })
    });


</script>


<?php 
include("footer.php");
?>