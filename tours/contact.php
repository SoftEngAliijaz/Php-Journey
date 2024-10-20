<?php
$active='contact';
include "layout/header.php";

?>


<div class="contact_info" style="margin-top: 8rem;">
    <div class="container ">
        <div class="row">

            <!-- Contact Item -->
            <div
                class="col contact-info">
                <div class=" icon"><i class="fa-solid fa-mobile-alt"></i></div>
                <div class="">
                    <div class="contact_info_title">Phone</div>
                    <div class="contact_info_text">+96 347 12102901</div>
                </div>
            </div>

            <!-- Contact Item -->
            <div
                class="col contact-info">
                <div class=" icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="">
                    <div class="contact_info_title">Email</div>
                    <div class="contact_info_text">flowered@gmail.com</div>
                </div>
            </div>

            <!-- Contact Item -->
            <div
                class="col contact-info">
                <div class=" icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="">
                    <div class="contact_info_title">Address</div>
                    <div class="contact_info_text">XYZ Plaza , New York ,
                        Ireland</div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container mt-3 bg-light">
    <div class="row">
        <div class="col" >
            <iframe style="margin-top:5rem" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435048.123671261!2d-7.9559668499999985!3d53.415243149999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485e619e5d73698f%3A0xca9b39444d6ac68d!2sIreland!5e0!3m2!1sen!2s!4v1671480091656!5m2!1sen!2s"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
        </div>
        <div class="col">
            <h1 class="mb-5 mt-2">Get in Touch</h1>
            <form action="" id="contactForm" method="post">
            
                        <input type="text" placeholder="Your Name"  name="name" id="name" class="form-input">
                        <input type="text" placeholder="Your email" name="email"  id="email"  class="form-input">
                        <input type="text" placeholder="Your Phone Number" id="phone"  class="form-input">
                        <textarea name="message" id="" cols="50" rows="7" placeholder="Write your message here..." class="form-input"></textarea>
                        <button type="button" onclick="submitForm()" name="submit" class="btn-theme">Send Message <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>
<br> <br>

<script>
    function submitForm() {
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;
    if(name==''){
        alert("Name Field is Required");
    }
    else if(email==''){
        alert("Email Address is Required");
    }
    else if(phone==''){
        alert("Phone no is Required");
    }
    else{
        document.getElementById('contactForm').reset();
        alert("Thank you for contacting us. We'll get back to you soon");

        

    }
}
</script>

<?php
include "layout/footer.php";

?>

</body>

</html>