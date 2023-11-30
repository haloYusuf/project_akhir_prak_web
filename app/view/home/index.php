<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="<?=BASE_URL;?>/css/home.css">
</head>

<body>

    <nav class="navbar">
        <a href="<?=BASE_URL;?>/" class="navbar-logo">Logo</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="<?=BASE_URL;?>/menu">Menu</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="mask-container">
            <main class="content">
                <h1>Hii, Welcome <span>All!</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, enim.</p>
                <a href="<?=BASE_URL;?>/menu" class="cta">Buy Now</a>
            </main>
        </div>
    </section>

    <section id="about" class="about">
        <h2><span>About</span> Us</h2>

        <div class="row">
            <div class="about-img">
                <img src="<?=BASE_URL;?>/img/aboutUs.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ducimus voluptatum dolor. Et,
                    voluptatum
                    accusantium!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt iure amet facilis eos a quo
                    cum
                    voluptates molestias nihil.</p>
            </div>
        </div>
    </section>  

    <section id="contact" class="contact">
        <h2><span>Contact</span> Us</h2>
        <p>Subscribe to our newsletter!</p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.07239513768!2d110.41205037368465!3d-7.782149077213701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599155555555%3A0x536eb168b1dca148!2sUniversitas%20Pembangunan%20Nasional%20%22Veteran%22%20Yogyakarta%20-%20Kampus%202%20Babarsari!5e0!3m2!1sid!2sid!4v1701181214755!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>

        </div>
    </section>

    <footer>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="<?=BASE_URL;?>/menu">Menu</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="credit">
            <p>Created by 123220019 & 123220031 | &copy; 2023.</p>
        </div>
    </footer>

    <div class="modal" id="item-detail-modal">
        <div class="modal-container">
            <a href="#" class="close-icon"><i data-feather="x"></i></a>
            <div class="modal-content">
                <img src="img/brooke-lark-otyxnXPBtOQ-unsplash.jpg" alt="Product 1">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis
                        obcaecati
                        ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus
                        voluptatibus!</p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K</div>
                    <a href="login.html"><span>add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>