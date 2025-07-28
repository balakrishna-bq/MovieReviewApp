<?php
include 'partials/header.php';
?>

<style>
  .container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
  }
  .empty__page {
    padding: 4rem 0;
    font-family: 'Montserrat', sans-serif;
    color: #222;
    text-align: center;
    background-color: #fff;
  }
  .section__title {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    color: #111;
  }
  .section__subtitle {
    font-size: 1.2rem;
    color: #555;
    max-width: 700px;
    margin: 0 auto 2rem;
  }
  .services__grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
  }
  .service {
    background: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    padding: 2rem;
    max-width: 280px;
    flex: 1 1 280px;
    text-align: center;
    transition: transform 0.3s ease;
  }
  .service:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }
  .service__icon {
    font-size: 3rem;
    margin-bottom: 1rem;
  }
  .service h3 {
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
    color: #222;
  }
  .service p {
    font-size: 1rem;
    color: #444;
  }
</style>

<section class="empty__page services">
  <div class="container">
    <h2 class="section__title">Our Services</h2>
    <p class="section__subtitle">We provide top-notch features for anime fans and movie lovers alike</p>
    <div class="services__grid">
      <div class="service">
        <div class="service__icon">🎥</div>
        <h3>Movie Reviews</h3>
        <p>Get in-depth, spoiler-free reviews for the latest anime and live-action films.</p>
      </div>
      <div class="service">
        <div class="service__icon">🌟</div>
        <h3>Top Rated Picks</h3>
        <p>Explore our curated list of fan-favorite shows and top IMDb-rated movies.</p>
      </div>
      <div class="service">
        <div class="service__icon">🔍</div>
        <h3>Search by Genre</h3>
        <p>Find reviews easily based on genre, release year, or popularity.</p>
      </div>
    </div>
  </div>
</section>

<?php
include 'partials/footer.php';
?>
