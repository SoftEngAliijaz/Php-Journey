<?php

$active="excursions";
include "layout/header.php";

$sql=mysqli_query($conn, "SELECT * from excursions WHERE excursionID=$_GET[id]");
$item=mysqli_fetch_assoc($sql);
if(!isset($_SESSION['user'])){
    echo '<script>alert("You need to login first!"); window.location.href="login.php"</script>';

}
?>


<div class="container bg-light login-form">
    <div class="row">
    <div class="col" style="width:70%">
            <h1 >Book Excursion</h1>
            <form action="functions.php?book=1" method="post">
                        <input type="hidden" name="excursionID" value="<?=$item['excursionID']?>">
                        <label for="">No. of Guests</label>
                        <input type="number" onkeyup="getTotal(this.value)" value="1" placeholder="No. of Tickets" min="1"  required name="tickets" id="name" class="form-input">
                        <label for="">Excursion Date</label>
                        <input type="date" placeholder="Date"  required name="date" id="date" class="form-input">
                        <label for="">Note:</label>
                        <input type="text" placeholder="Booking Note"  name="note" id="note" class="form-input">
                        
                        <input type="hidden" name="total_cost" id="total_cost">

                        <button type="submit"  class="btn-theme">Confirm Booking</button>
                    
            </form>
        </div>
        <div class="col" style="width:30%">
            <img src="assets/images/<?=$item['image']?>" class="detail-img" style="height:200px" alt="" srcset="">
            <h3> <?=$item['excursion_name']?></h3>
             <h4><?=$currency.$item['price_per_person']?>/person</h4>
            <h3>Total Price: <?=$currency?><span id="total"><?=$item['price_per_person']?></span></h3>

        </div>
        
    </div>
    
</div>
<br> <br>


<?php
include "layout/footer.php";

?>
<script>
function getTotal(tickets) {
    price=<?=$item['price_per_person']?>;
    total=price*tickets;
    document.getElementById('total').innerText=total;
    document.getElementById('total_cost').value=total;
    
}

</script>
</body>

</html>