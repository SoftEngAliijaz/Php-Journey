<?php


include "layout/header.php";

?>


<div class="container bg-light my-bookings ">
        <h2 >Credits</h2>
         <ul>
            <li>Canva Tool (To design logo and favicon)</li>
            <li>Unsplash (All images used in this website is used from unsplash)</li>
            <li>Freepik (Some vector images is used from Freepik)</li>
            <li>FontAwsome Icons (Font Awsome Cdn is used to add icons on website to make website professional and attractive)</li>
         </ul>
     
    
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