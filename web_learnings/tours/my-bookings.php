<?php

$active="bookings";
include "layout/header.php";
$userId=$_SESSION['user']['customerID'];
$sql=mysqli_query($conn, "SELECT * from booking 
    INNER JOIN excursions on booking.excursionID=excursions.excursionID WHERE customerID=$userId");
$bookings=mysqli_fetch_all($sql,MYSQLI_ASSOC);
if(!isset($_SESSION['user'])){
    echo '<script>alert("You need to login first!"); window.location.href="login.php"</script>';

}
?>


<div class="container bg-light my-bookings ">
        <h2 >My Bookings</h2>
          <table>
                <tr>
                    <th>Excursion</th>
                    <th>No. of Guests</th>
                    <th>Total Cost</th>
                    <th>Excursion Date</th>
                    <th>Booking Notes</th>
                </tr>
                <?php foreach ($bookings as $item) {?>
                <tr>
                    <td><?=$item['excursion_name']?></td>
                    <td><?=$item['num_guests']?></td>
                    <td><?=$currency.$item['total_booking_cost']?></td>
                    <td><?=date('d M ,Y',strtotime($item['excursion_date']))?></td>
                    <td><?=$item['booking_notes']?:"N/A"?></td>
                </tr>
               <?php }?>
          </table>
     
    
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