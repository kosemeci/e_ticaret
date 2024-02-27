<?php require_once("baglan.php");  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masal Butik</title>
    <link rel="stylesheet" href="css/urun.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php require_once("navbar.html"); ?>

    <div class=" urun_container">
        <div class="row anim_kargo">
            <p>400 TL ÜZERİ KARGO BEDAVA MASAL BUTİK </p>
        </div>
        <div class="row urun_row">
            <div class="col-2">
                <div class="urun-card">
                    <div class="urun-card-img">
                        <img src="img/e5.jpeg" class="card-img-top" alt="Resim 1">
                        <!-- <i class="far fa-heart like_icon" style="float: right;"></i> -->

                    </div>
                </div>
                <div class="kucuk-fotograflar mt-3">
                    <img src="img/e5.jpeg" width="55px" height="75px" class="kucuk-fotograf" alt="Fotoğraf 1">
                    <img src="img/e6.jpeg" width="55px" height="75px" class="kucuk-fotograf" alt="Fotoğraf 1">
                    <img src="img/e3.jpeg" width="55px" height="75px" class="kucuk-fotograf" alt="Fotoğraf 2">
                    <img src="img/e4.jpeg" width="55px" height="75px" class="kucuk-fotograf" alt="Fotoğraf 3">
                    <img src="img/e6.jpeg" width="55px" height="75px" class="kucuk-fotograf" alt="Fotoğraf 1">

                </div>
            </div>
            <div class="col-2">
                <h3 class="urun_baslik"> Teddy Beyaz Kaban </h3>
                <hr>
                <h4> 150.90 TL</h4>
                <div class="urun_beden">
                    <div class="beden_baslik">
                        <h6>Beden :</h6>
                    </div>
                    <div class="beden_secenekler">
                        <button class="beden_buton">6-18 ay</button>
                        <button class="beden_buton">18-24 ay</button>
                        <button class="beden_buton">24-36 ay</button>
                        <button class="beden_buton">14 yaş</button>
                        <button class="beden_buton">18-24 ay</button>
                        <button class="beden_buton">24-36 ay</button>
                    </div>
                </div>
                <div class="whatsapp-butonu">
                    <a href="https://api.whatsapp.com/send?phone=905555555555&amp;text=Merhaba! Ürün hakkında bilgi almak istiyorum." target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                        Ürün Hakkında Soru Sor
                    </a>
                </div>

                <div class="sepet_row">
                    <button class="like_buton"> <i class="far fa-heart sepet_like"></i></button>
                    <button class="buton_sepet"> Sepete Ekle </button>

                </div>

                <div class="urun_bilgileri mt-5">
                    <ul>
                        <h5 style="font-weight: 600;">Ürün Özellikleri</h5>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, repellendus?</li>
                        <li>Ducimus, tenetur? Sequi voluptatum totam est? Laborum fugiat sequi odit!Tempora eos debitis, ipsum architecto perferendis modi libero ab pariatur!Tempora eos debitis, ipsum architecto perferendis modi libero ab pariatur!</li>
                        <li>Tempora eos debitis, ipsum architecto perferendis modi libero ab pariatur!</li>
                        <li>Assumenda aperiam exercitationem quaerat amet commodi ut nostrum debitis fugit?</li>
                        <li>Quaerat, vel iste! Quae ipsa cum harum nulla tempore ipsum.</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <section id="tranding">
            <div class="container">
                <h3 class="text-center section-subheading">- popular Delivery -</h3>
                <h1 class="text-center section-heading">Tranding food</h1>
            </div>
            <div class="container">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="img/e7.jpeg" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$20</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Special Pizza
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="img/e6.jpeg" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$20</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Meat Ball
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="img/e8.jpeg" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$40</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Burger
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="img/e3.jpeg" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$15</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Frish Curry
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="img/e5.jpeg" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$15</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Pane Cake
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="img/e4.jpeg" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$20</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Vanilla cake
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="img/e3.jpeg" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$8</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Straw Cake
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                    </div>

                    <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </section>


    <?php require_once("footer.php"); ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</body>

</html>



<script>
    var TrandingSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2.5,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    // Tüm küçük fotoğrafları seç
    var kucukFotograflar = document.querySelectorAll('.kucuk-fotograf');

    // Her bir fotoğraf için tıklama olayını ekle
    kucukFotograflar.forEach(function(foto) {
        foto.addEventListener('click', function() {
            // Tıklanan fotoğrafın src özelliğini al
            var src = foto.getAttribute('src');
            // Büyük fotoğrafı seç ve src özelliğini değiştir
            var buyukFoto = document.querySelector('.card-img-top');
            buyukFoto.setAttribute('src', src);
            console.log("hello");
        });
    });
</script>
