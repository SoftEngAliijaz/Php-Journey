<?php 
$active="excursions";
include("layout/header.php");

$sql=mysqli_query($conn, "SELECT * from excursions");
$excursions=mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>


<div class="excursion-banner">
        <h1 class="text-center" style="color: white;">Discover places and tours where <br> you’ll love to go</h1>
    </div>
    <div class="container"  style="padding: 5rem 0px;">
        <h2>Browse Properties listing 
        </h2>
        
        <div class="row" style="flex-wrap: wrap;">
        <?php foreach($excursions as $item){?>
            <div class="col property">
                <img src="assets/images/<?=$item['image']?>" width="100%" alt="">
                <h3><?=$item['excursion_name']?> </h3>
                <span class="price"> <?=$currency.$item['price_per_person']?>/person</span>  <br> 
                <p><i class="fas fa-map-marker-alt"></i> <?=$item['location']?> </p>
                <a href="excursion-details.php?id=<?=$item['excursionID']?>">  <button  class="btn-theme">View Details >></button></a>
            </div>
        <?php }?>
            
        
        </div>

    </div>


<?php 
include("layout/footer.php");
?>
</body>

</html>