<?php require_once("baglan.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masal Kids Butik</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="js/index.js"></script>
</head>

<body>

    <div class="navbar-fixed">
        <?php require_once('navbar.html') ?>
    </div>



    <section class="section">

        <div class="row girisCarousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/m100.jpg" alt="MasalKidsButik">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/m111.jpg" alt="Kız Çocuk">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/m100.jpg" alt="Kız Çocuk">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/m111.jpg" alt="Kız Çocuk">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <h1 class="sectionBaslik mt-5">Son Eklenen Ürünler</h1>

        <div class="row sectionRow">
            <div class="col-7 col-lg-2">
                <div class="sidebar">
                    <h5>Sıralama</h5>
                    <ul>
                        <li><input type="radio" name="siralamalar" id="varsayilan" checked><label for="varsayilan">Varsayılan</label></li>
                        <li><input type="radio" name="siralamalar" id="artanfiyat"><label for="artanfiyat">Artan Fiyat</label></li>
                        <li><input type="radio" name="siralamalar" id="azalanfiyat"><label for="azalanfiyat">Azalan Fiyat</label></li>
                        <li><input type="radio" name="siralamalar" id="eskidenyeniye"><label for="eskidenyeniye">Eskiden Yeniye</label></li>
                        <li><input type="radio" name="siralamalar" id="yenideneskiye"><label for="yenideneskiye">Yeniden Eskiye</label></li>
                    </ul>
                    <h5>Alt Kategori</h5>
                    <ul>
                        <input type="radio" id="bluzlar_gomlekler" name="kategori" value="bluzlar_gomlekler">
                        <label for="bluzlar_gomlekler">Bluzlar / Gömlekler</label><br>

                        <input type="radio" id="elbiseler" name="kategori" value="elbiseler">
                        <label for="elbiseler">Elbiseler</label><br>

                        <input type="radio" id="esofman_takimlari" name="kategori" value="esofman_takimlari">
                        <label for="esofman_takimlari">Eşofman Takımları</label><br>

                        <input type="radio" id="pantolon" name="kategori" value="pantolon">
                        <label for="pantolon">Pantolon</label><br>

                        <input type="radio" id="tayt" name="kategori" value="tayt">
                        <label for="tayt">Tayt</label><br>

                        <input type="radio" id="tshirt" name="kategori" value="tshirt">
                        <label for="tshirt">T-shirt</label><br>
                    </ul>
                    <h5>Yaş Grubu</h5>
                    <ul>
                        <li><input type="radio" name="yasgrubu" id="6-18ay"><label for="6-18ay">6-18 AY</label></li>
                        <li><input type="radio" name="yasgrubu" id="9-24ay"><label for="9-24ay">9-24 AY</label></li>
                    </ul>
                </div>

            </div>

            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/e5.jpeg" class="card-img-top" alt="Resim 1">
                                <i class="far fa-heart like_icon"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kart Başlığı 1</h5>
                                <p class="card-text"> 190.99 TL</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <a href="urun.php">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/e4.jpeg" class="card-img-top" alt="Resim 2">
                                <i class="far fa-heart like_icon" id="likeIcon"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kart Başlığı 2</h5>
                                <p class="card-text"> 190.99 TL</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/e6.jpeg" class="card-img-top" alt="Resim 2">
                                <i class="far fa-heart like_icon"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kart Başlığı 2</h5>
                                <div class="card-text">
                                    <del class="old-price">250.00 TL</del>
                                    <span class="price-container">190.99 TL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/e7.jpeg" class="card-img-top" alt="Resim 2">
                                <i class="far fa-heart like_icon"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kart Başlığı 2</h5>
                                <div class="card-text">
                                    <del class="old-price">250.00 TL</del>
                                    <span class="price-container">190.99 TL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </section>

    <section class="mobil-section">

        <div class="row girisCarousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/m100.jpg" alt="MasalKidsButik">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/m111.jpg" alt="Kız Çocuk">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/m100.jpg" alt="Kız Çocuk">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/m111.jpg" alt="Kız Çocuk">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row mobil-sidebar">
            <div class="dropdown">
                <button onclick="toggleDropdown()" class="dropbtn" style="font-size:large;">Filtrele <i class="fa-solid fa-caret-down"></i></button>
                <div id="kategoriDropdown" class="dropdown-content">
                    <ul>
                        <li>Kategori
                            <ul class="subcategories" style="display: none;">
                                <li> Kız Bebek </li>
                                <li> Erkek Bebek </li>
                                <li> Kız Çocuk </li>
                                <li> Erkek Çocuk </li>
                                <li> Fırsat Ürünleri</li>

                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>Alt Kategori
                            <ul class="subcategories" style="display: none;">
                                <li> Bluzlar / Gömlekler </li>
                                <li> ⁠Elbiseler</li>
                                <li> Eşofman Takımları</li>
                                <li> Pantolon </li>
                                <li> Tayt </li>
                                <li> T-shirt</li>

                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>Yaş Grubu
                            <ul class="subcategories" style="display: none;">
                                <li> 2-3 yaş </li>
                                <li> 4-5 yaş </li>
                                <li> 5-6 yaş </li>
                                <li> 7-8 yaş </li>
                                <li> 9-10 yaş </li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="dropdown">
                <button onclick="filtre_toggleDropdown()" class="dropbtn" style="font-size: large;">Sırala <i class="fa-solid fa-caret-down"></i></button>
                <div id="filtreDropdown" class="dropdown-content">
                    <ul>

                        <li>Varsayılan</li>
                        <li> Artan Fiyat</li>
                        <li> Azalan Fiyat</li>
                        <li> Eskiden Yeniye</li>
                        <li> Yeniden Eskiye</li>
                    </ul>

                </div>
            </div>


            <div class="col-12 mt-2">
                <h3 class="mobilSectionBaslik">Son Eklenen Ürünler</h3>
            </div>

            <div class="col-6 mb-4" style="padding-right: 4px;">
                <div class="card">
                    <div class="card-img">
                        <img src="img/e4.jpeg" class="card-img-top" alt="Resim 2">
                        <i class="far fa-heart like_icon" id="likeIcon"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kart Başlığı 2</h5>
                        <div class="card-text">
                            <del class="old-price">250.00 TL</del>
                            <span class="price-container">190.99 TL</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6" style="padding-left: 4px;">
                <div class="card">
                    <div class="card-img">
                        <img src="img/e4.jpeg" class="card-img-top" alt="Resim 2">
                        <i class="far fa-heart like_icon"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kart Başlığı 2</h5>
                        <div class="card-text">
                            <del class="old-price">250.00 TL</del>
                            <span class="price-container">190.99 TL</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php require_once('footer.php') ?>
</body>

</html>