<?php
    include_once 'header.php';
?>

<!--========================= JUMBOTRON & BANNER ===============================-->

    <div class="jumbotron paper-bg">
    </div>
    <div id="contact" class="container contact-wrapper">
    <form action="https://formspree.io/jmem716@gmail.com" method="POST"><!--CONTACT FORM-->
      <label><span><p>Tel: (716)882-1548</p></span></br>
      <label><span><p>Email us:</p></span></br>
      <div class="contact-info-group">
        <label><span><p id="name">Your Name:</p></span>
        <input type="text" name="name"></label>

        <label><span><p id="email">Your Email:</p></span>
      <input type="email" name="_replyto"></label>
      </div>

      <label id=textarea><span><p id="text">Message:</p></span>
    <textarea  name="message" ></textarea></label>

      <div class="submit-wrap">
        <input type="submit" value="Send">
      </div>
    </form>
  </div><!--END OF CONTACT FORM-->

<!--========================= FOOTER ===============================-->

      <footer id="foot" class="text-muted">
        <div id="foot-container" class="container-fluid">
          <button id="top-btn" class="btn btn-deault btn-md">
              <a href="#">Back to Top</a>
            </button>
          <p>Visit <a href="#">jaimemaldo.com</a> for development info on this page.</p>
          <p>Coded by Jaime Maldonado 2018</p>
        </div>
      </footer>

  </body>
</html>
