<?php
include 'partials/header.php';
?>

<section class="empty__page contact">
  <div class="container contact__container">
    <h1 class="section__title">Contact Us</h1>
    <p class="section__subtitle">We’d love to hear from you! Send us a message.</p>

    <form action="#" method="POST" class="contact__form">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name" required />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your email" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>

      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>
</section>

<?php
include 'partials/footer.php';
?>
