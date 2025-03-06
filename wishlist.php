<?php include 'header.php'; ?>

<style>
/* Add hover effect for cards */
.card:hover {
  transform: scale(1.05);
  transition: transform 0.3s ease-in-out;
  box-shadow: 0 10px 16px rgba(0, 0, 0, 0.2);
}

/* Set image height to 200px */
.card-img-top {
  height: 200px;
  object-fit: fill;
}

/* Container to position the wishlist icon */
.card-img-container {
  position: relative;
}

/* Wishlist icon styling at the top right corner of the image */
.wishlist-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  z-index: 1;
  background: rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  padding: 5px;
  cursor: pointer;
}
</style>

<div class="container my-5">
  <h1 class="text-center mb-4">My Wishlist</h1>
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card">
        <div class="card-img-container">
          <img src="./images/p1.webp" class="card-img-top" alt="Wishlist Item 1">
          <i class="bi bi-heart wishlist-icon"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Wireless Headphones with Noise Cancellation</h5>
          <p class="card-text">Enjoy crisp, immersive sound with our Wireless Headphones featuring advanced noise cancellation. Designed for music lovers seeking both quality and comfort, these headphones are perfect for a dynamic lifestyle.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card">
        <div class="card-img-container">
          <img src="./images/p2.jpg" class="card-img-top" alt="Wishlist Item 2">
          <i class="bi bi-heart wishlist-icon"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Smart Watch with Heart Rate Monitor</h5>
          <p class="card-text">Stay connected and keep track of your health with our Smart Watch featuring a reliable heart rate monitor. Its sleek design and multifunctionality make it an ideal companion for everyday activities.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card">
        <div class="card-img-container">
          <img src="./images/p3.jpg" class="card-img-top" alt="Wishlist Item 3">
          <i class="bi bi-heart wishlist-icon"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">4K Ultra HD Smart TV 55-inch</h5>
          <p class="card-text">Experience a cinematic viewing experience at home with our 4K Ultra HD Smart TV. Its 55-inch display offers vibrant colors and exceptional clarity, perfect for streaming your favorite shows and movies.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
