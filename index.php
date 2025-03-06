<?php include_once 'header.php'; ?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./images/image.jpg" class="d-block w-100" alt="First slide" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Special Offers</h5>
                <p>Check out our latest deals and promotions</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./images/j2zi31lqofw1abqfrjux.jpg" class="d-block w-100" alt="Second slide" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>New Arrivals</h5>
                <p>Discover our newest products</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./images/Product_of_the_Year_USA_2017_Winners.jpg" class="d-block w-100" alt="Third slide" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Free Shipping</h5>
                <p>On orders over $50</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php include_once 'footer.php'; ?>
