<?php 
$active="excursions";
include("layout/header.php");

$sql=mysqli_query($conn, "SELECT * from excursions WHERE excursionID=$_GET[id]");
$item=mysqli_fetch_assoc($sql);

?>


<div class="container"  style="padding: 5rem 0px;">
        <br>
       <h2>Property Details</h2>
       <hr>
        <div class="row" >
            <div class="col " style="width: 35%;">
                    <img src="assets/images/<?=$item['image']?>" class="detail-img">
            </div>
            <div class="col " style="width: 55%;">
             
                <h3><?=$item['excursion_name']?> </h3>
                
                <span class="price"><?=$currency.$item['price_per_person']?> /person</span><br>
                <p><i class="fas fa-map-marker-alt"></i> <?=$item['location']?></p>
                <p><?=$item['description']?></p>
                <p>
                    <a id="book-button" href="book.php?id=<?=$_GET['id']?>"  class="btn-theme">Book Now</a>
                </p>
            </div>
        </div>

    </div>

<?php 
include("layout/footer.php");
?>
</body>

</html>