<?php /* Template Name: Kontakt Template */
wp_head()
?>


<div class="container">  
  <form id="contact" action="" method="post">
    <h2>Contact Us</h2>
    <h3>Become our member & say something nice ! </h3>
    <fieldset>
      <input placeholder="Your name" id="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" id="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" id="phone_num" type="tel" tabindex="3" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" id="website" type="url" tabindex="4" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." id="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button type="submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>


<?php get_footer() ?>
