<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Memorials</title>
    <link rel="stylesheet" href="styles.css">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MEMORIALS</a>
            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Locations</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <h1>Celebrating Lives</h1>
            <p>With Dignity</p>
            <button class="btn">Get Started</button>
        </div>
    </header>

    <section class="container my-5">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">IN LOVING MEMORY</h5>
                        <p class="card-text">A dedicated space to honor those we have lost and cherish their memories forever.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">A LOVING TRIBUTE</h5>
                        <p class="card-text">Create heartfelt tributes that celebrate the life and legacy of your loved ones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">REMEMBERING OUR BELOVED</h5>
                        <p class="card-text">Preserve and share the memories of cherished lives that live on in our hearts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">FOREVER IN OUR HEARTS</h5>
                        <p class="card-text">Pay respects and keep loved ones’ memories alive with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="section-title">OUR GALLERY</div>
        <div class="row">
            <div class="col-md-2">
                <img src="pic1.jpg" alt="Image description" class="gallery-img img-fluid"/>
            </div>
            <div class="col-md-2">
                <img src="pic2.jpg" alt="Image description" class="gallery-img img-fluid"/>
            </div>
            <div class="col-md-2">
                <img src="pic3.jpg" alt="Image description" class="gallery-img img-fluid"/>
            </div>
            <div class="col-md-2">
                <img src="pic4.jpg" alt="Image description" class="gallery-img img-fluid"/>
            </div>
            <div class="col-md-2">
                <img src="pic5.jpg" alt="Image description" class="gallery-img img-fluid"/>
            </div>
            <div class="col-md-2">
                <img src="pic6.jpg" alt="Image description" class="gallery-img img-fluid"/>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>ABOUT MEMORIALS</h5>
                    <p>These are permanent installations at a gravesite, crypt, or niche. They can be made of stone, granite, or bronze, and are often inscribed with the deceased's name, date of birth, and date of death. </p>
                </div>
                <div class="col-md-3">
                    <h5>USEFUL LINKS</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Find a Grave Slot</a></li>
                        <li><a href="#">Reserve a Memorial Space</a></li>
                        <li><a href="#">Explore Our Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>TWITTER FEEDS</h5>
                    <p>@twitterfeed: Discover how our system simplifies accessing cemetery information.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
