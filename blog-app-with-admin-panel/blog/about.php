<?php
include 'partials/header.php';
?>

<style>
/* ======= ABOUT PAGE CSS - BRIGHTER VERSION ========= */
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
}

/* HERO SECTION */
.about__hero {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('../images/banner.jpg') center/cover no-repeat;
    color: #fff;
    text-align: center;
    padding: 6rem 0;
}

.about__hero .container {
    text-align: center;
}

.about__hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 800;
    color: #f9f9f9;
}

.about__hero p {
    font-size: 1.3rem;
    max-width: 700px;
    margin: 0 auto;
    color: #e0e0e0;
}

/* WHO WE ARE SECTION */
.about__who {
    background-color: #ffffff;
}

.about__who .container {
    text-align: center;
}

.about__who h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #111;
}

.about__who p {
    font-size: 1.15rem;
    max-width: 900px;
    margin: 0 auto;
    line-height: 1.8;
    color: #444;
}

/* OUR TEAM SECTION */
.about__team {
    background-color: #f7f7f7;
}

.about__team .container {
    text-align: center;
}

.about__team h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #111;
}

/* TEAM CARDS */
.team__cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
}

.team__card {
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    max-width: 260px;
    width: 100%;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team__card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.team__card img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 1rem;
    border: 4px solid #ff6b6b;
}

.team__card h4 {
    font-size: 1.3rem;
    color: #111;
    margin-bottom: 0.3rem;
}

.team__card p {
    font-size: 1rem;
    color: #666;
}

</style>


<!-- Hero Section -->
<section class="empty__page about__hero">
  <div class="container">
    <h1>About YouBomma 🎬</h1>
    <p>Your ultimate destination for anime and movie reviews, fan insights, and curated recommendations.</p>
  </div>
</section>

<!-- Who We Are Section -->
<section class="empty__page about__who">
  <div class="container">
    <h2>Who We Are</h2>
    <p>YouBomma was built by passionate anime and movie enthusiasts who wanted to create a platform for fans to discover, discuss, and enjoy films across genres and eras. We aim to combine stunning visuals, detailed reviews, and community interaction in one hub.</p>
  </div>
</section>

<!-- Our Team -->
<section class="empty__page about__team">
  <div class="container">
    <h2>Our Team</h2>
    <div class="team__cards">
      <div class="team__card">
        <img src="./images/sasuke.jpg" alt="Balakrishna" />
        <h4>Balakrishna Dhanavath</h4>
        <p>Founder & Developer</p>
      </div>
      <div class="team__card">
        <img src="./images/TokyoGhoul.jpeg" alt="Team Member" />
        <h4>Sai Akkudasu</h4>
        <p>UI Designer</p>
      </div>
      <div class="team__card">
        <img src="./images/Lazarus.jpeg" alt="Team Member" />
        <h4>Sai Sparkl</h4>
        <p>Content Writer</p>
      </div>
    </div>
  </div>
</section>

<?php
include 'partials/footer.php';
?>
