<?php 
$active="home";
include("layout/header.php");

$sql=mysqli_query($conn, "SELECT * from excursions LIMIT 3");
$excursions=mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>


    <!-- Slideshow Slider -->
    <div class="slideshow-container">
        <div class="mySlides fade" style="display: block;">
            <img src="assets/images/excursion (1).jfif" style="width:100%">
            <div class="caption">DREAM PlACES FOR YOU!</div>
        </div>

        <div class="mySlides fade">
            <img src="assets/images/excursion (2).jfif" style="width:100%">
            <div class="caption">ATTRACTIVE PLACES IS WAITING FOR YOU</div>
        </div>

        <div class="mySlides fade">
            <img src="assets/images/excursion (3).jfif" style="width:100%">
            <div class="caption">PERFECT EXCURSION FOR A FAMILY</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>
    <div class="bg-light" style="padding: 5rem 0px;">
        <h1 class="text-center">Easy Flow to Book your tour</h1>
        <div class="row container">
            <div class="col text-center">
                <img src="assets/images/steps1.png" width="80px" alt="" srcset="">
                <h2>Browse Tours</h2>
                <p>We have broad range of place avaialable for you to visit.</p>
            </div>
            <div class="col text-center">
                <img src="assets/images/steps2.png" width="65px" alt="" srcset="">
                <h2>Book your Favoutite</h2>
                <p>Pick your favourite one which you like to visit and booked it to go</p>
            </div>
            <div class="col text-center">
                <img src="assets/images/steps3.png" width="110px" alt="" srcset="">
                <h2>Enjoy your time</h2>
                <p>Enjoy your great Time with your family and friends.  </p>
            </div>
        </div>
        
    </div>
    <div class="home-banner text-center">
        <h1  style="color: white;">Discover and book a place where <br> you would love to go</h1>
        <button class="btn-theme">Discover Now</button>

    </div>
    <div class="container"  style="padding: 5rem 0px;">
        <h2>Top Excursions to visit 
        <a href="properties.html" class="more-link" ><span >View more >></span></a> 

        </h2>
        
        <div class="row" style="flex-wrap: wrap;">
        <?php foreach($excursions as $item){?>
            <div class="col property">
                <img src="assets/images/<?=$item['image']?>" width="100%" alt="">
                <h3><?=$item['excursion_name']?> </h3>
                
                <span class="price"><?=$currency.$item['price_per_person']?>/person</span>  <br> <br>
                <p><i class="fas fa-map-marker-alt"></i> <?=$item['location']?></p>
                <a href="excursion-details.php?id=<?=$item['excursionID']?>"> <button  class="btn-theme">View Details >></button></a>
            </div>
        <?php }?>
    
        </div>

    </div>

<?php 
include("layout/footer.php");
?>
<script src="assets/js/slider.js"></script>
</body>

</html>