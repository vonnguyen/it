<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Zone</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo/logo.png">
    <!-- link Icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- link google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link get bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->
    <!-- link AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="{{asset(client)}}/assets/base.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/cart.css">
    <link rel="stylesheet" href="./assets/reponsive.css">
</head>

<body>
    <div id="main">
        <!-- Header -->
        <div class="header">

            <div class="img-header">
                <a href="index.html"><img src="./assets/img/img-header/shoe-logo-new_300x300.webp" alt=""></a>
            </div>

            <div class="menu-header">
                <ul class="subnav-menu">
                    <li><a href="#">Home</a></li>
                    <li class="collection-show"><a href="collection.html">Collection <i
                                class="fa-solid fa-chevron-down"></i></a>


                        <div class="collection-show-list">
                            <div class="row">
                                <div class="col col-3 collection-item">
                                    <img src="./assets/img/img-header/shoe21.webp" alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">200$</span>
                                    </button>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="./assets/img/img-header/shoe11.webp" alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">532$</span>
                                    </button>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="./assets/img/img-header/shoe22_48464579-a7fe-40ba-ad66-8c6aa7ef2bb1.webp"
                                        alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">300$</span>
                                    </button>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="./assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp"
                                        alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">620$</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li><a href="product.html">Shoes</a></li>
                    <li><a href="boots.html">Boots</a></li>
                    <li><a href="climbing.html">Climbing</a></li>
                    <li class="page-show"><a href="blog.html">Pages <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="page-show-list">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="">Wishlist</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu-btn">
                <i class="fa-solid fa-bars"></i>
                <span class="text-menu"> Menu</span>
            </div>
            <!-- end -->
            <div class="icon-header">
                <span class="icon-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <span class="icon-user">
                    <a href="login.html"><i class="fa-solid fa-user"></i></a>
                </span>
                <span class="icon-cart">
                    <span class="icon-number">
                        0
                    </span>
                    <i class="fa-solid fa-briefcase"></i>
                </span>
            </div>

        </div>
        <!-- Contain -->
        <div class="contain-about">
            <div class="contain">

                <div class="contain-1">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">

                            <div class="carousel-item active slide-1">
                                <img src="./assets/img/img-container/shoe7.webp" class="d-block w-100" alt="...">
                                <div class="contain-1-text">
                                    <h1 class="title">ZEN VIVID 15</h1>
                                    <p>The best sellers from $99.00</p>
                                    <button class="contain-btn">SHOP NOW</button>
                                </div>
                            </div>


                            <div class="carousel-item slide-2">
                                <img src="./assets/img/img-header/2021-10-16.webp" class="d-block w-100" alt="...">
                                <div class="contain-2-text">
                                    <h2 class="title">STARTS FROM </h2>
                                    <p>$745.00</p>
                                    <button class="contain-btn">VIEW COLLECTION</button>
                                </div>
                            </div>
                            <div class="carousel-item slide-3">
                                <img src="./assets/img/img-header/shoe9.webp" class="d-block w-100" alt="...">
                                <div class="contain-3-text">
                                    <p>summer canvas</p>
                                    <h2 class="title">FROM THE SUMMER</h2>
                                    <p>
                                        Ullamcorper eget nulla facilisi etiam dignissim. Quis eleifend quam adipiscing
                                        vitae proin sagittis nisl rhoncus mattis. Scelerisque eu ultrices
                                    </p>
                                    <button class="contain-btn">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>

            </div>
            <div class="container-fluid">
                <div class="contain-2">
                <div class="row">
                    <div class="col-md-6 four-pictuer slide-picture" data-aos-duration="1000" data-aos="fade-right">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product">
                                    <div class="ctn2-img"><img src="./assets/img/img-ctn2/collection3_large.webp"
                                            alt="">
                                    </div>
                                    <p class="picture">GYM SNEACKERS</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product">
                                    <div class="ctn2-img"><img
                                            src="./assets/img/img-ctn2/collection2_6fd1e403-7021-427d-8be1-8bf857c8aacf_large.webp"
                                            alt=""></div>
                                    <p class="picture">WORKING BOOT</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product">
                                    <div class="ctn2-img"><img
                                            src="./assets/img/img-ctn2/collection4_1d1d931a-3265-4eae-ac45-7e8a9cb3702e_large.webp"
                                            alt=""></div>
                                    <p class="picture">CHUKKAS</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product">
                                    <div class="ctn2-img"><img
                                            src="./assets/img/img-ctn2/collection5_47277ffa-efcf-413d-a764-b4b5be9e4e99_large.webp"
                                            alt=""></div>
                                    <p class="picture">HIKING BOOTS</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 slide-picture" data-aos-duration="1000" data-aos="fade-left">
                        <div class="ctn2-js-picture">
                            <div class="picture-2">


                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active slide-1">
                                            <img src="./assets/img/img-ctn2/Shoe_2.webp" class="d-block w-100"
                                                alt="...">
                                            <div class="background-title">
                                                <div class="cnt2-text">
                                                    <h2> SNEEK PEEK</h2>
                                                    <p>SPORT EDITOIN*</p>
                                                    <P>*DISCOUNT AVAILABLE</P>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/img-ctn2/Shoe_3.webp" class="d-block w-100"
                                                alt="...">
                                            <div class="background-title">
                                                <div class="cnt2-text">
                                                    <h2> SIGNS</h2>
                                                    <p>MAKE THIS SEASON YOURS*</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="carousel-item ">
                                            <img src="./assets/img/img-ctn2/shoe_1.jpg" class="d-block w-100" alt="...">
                                            <div class="background-title">
                                                <div class="cnt2-text title-slide">
                                                    <h2>COSMOS STORES</h2>
                                                    <p>MAKE THIS SEASON YOURS*</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="contain-3">
                    <div class="head-cnt3">
                        <div class="title-ctn3" data-aos="fade-up-right">
                            <h1>NEW ARRIVALS </h1>
                            <p>Just in now</p>
                        </div>
                        <div class="icon-ctn3">
                            <span><i class="fa-solid fa-chevron-left"></i></span>
                            <span><i class="fa-solid fa-chevron-right"></i></span>
                        </div>

                    </div>

                    <div class="about-ctn3">

                        <div class="row">
                            <div class="col-md-4 picture-3" data-aos-duration="1000" data-aos="fade-up-right">
                                <div class="item">

                                    <div class="img-ctn3">
                                        <div class="groups-img">
                                            <img src="./assets/img/img-ctn2/shoe23_5444b0e6-72c7-450c-aab6-081a70660dcd_720x.webp"
                                                alt="">
                                            <img src="./assets/img/img-ctn3/shoe12_968efbaa-1956-4621-93d2-1f1f8fdc3d11_600x.webp"
                                                alt="">
                                        </div>
                                        <div class="icon-ctn3">
                                            <a href=""><i class="fa-solid fa-message"></i></a>
                                            <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                    </div>
                                    <div class="name-shoe-ctn3">
                                        <h1> <a href="#">ZAPATOS DG MECARDOLIBRE</a> </h1>
                                        <div class="cost-ctn3">
                                            <h2> <span>$</span> 478.00</h2>
                                        </div>
                                        <div class="icon-ctn3">
                                            <div class="icon-start">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star">
                                                </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="bag-ctn3"><a href=""><i
                                                        class="fa-solid fa-bag-shopping"></i></a></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 picture-3" data-aos-duration="1000" data-aos="fade-up-left">
                                <div class="item">

                                    <div class="img-ctn3">
                                        <div class="groups-img">
                                            <img src="./assets/img/img-ctn3/shoe15_720x.webp" alt="">
                                            <img src="./assets/img/img-ctn2/shoeyelow.webp" alt="">
                                        </div>
                                        <div class="icon-ctn3">
                                            <a href=""><i class="fa-solid fa-message"></i></a>
                                            <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                    </div>
                                    <div class="name-shoe-ctn3">
                                        <h1> <a href="#">BLUCHER SHOE</a> </h1>
                                        <div class="cost-ctn3">
                                            <h2> <span>$</span> 780.00</h2>
                                        </div>
                                        <div class="icon-ctn3">
                                            <div class="icon-start">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star">
                                                </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="bag-ctn3"><a href=""><i
                                                        class="fa-solid fa-bag-shopping"></i></a></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 picture-3" data-aos-duration="1000" data-aos="fade-down-right">
                                <div class="item">

                                    <div class="img-ctn3">
                                        <div class="groups-img">
                                            <img src="./assets/img/img-ctn2/shoe2_720x.webp" alt="">
                                            <img src="./assets/img/img-ctn2/shoe_product.webp" alt="">
                                        </div>
                                        <div class="icon-ctn3">
                                            <a href=""><i class="fa-solid fa-message"></i></a>
                                            <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                    </div>
                                    <div class="name-shoe-ctn3">
                                        <h1> <a href="#">ZAPATOS DG MECARDOLIBRE</a> </h1>
                                        <div class="cost-ctn3">
                                            <h2> <span>$</span> 478.00</h2>
                                        </div>
                                        <div class="icon-ctn3">
                                            <div class="icon-start">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star">
                                                </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="bag-ctn3"><a href=""><i
                                                        class="fa-solid fa-bag-shopping"></i></a></div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="contain-4">
                    <div class="title-cnt4">

                        <p>THE SEASON BEGINGS</p>
                        <h3>PROMOTION <span class="red">SALE OFF 50%</span> </h3>
                        <div class="btn-ctn4">
                            <a href=""><button>SHOP NOW</button></a>
                            <span>HURRY</span>
                            <p>BEFORE OFFER ENDS</p>

                        </div>

                    </div>
                </div>

                <div class="contain-5">
                    <div class="header-ctn5">

                        <div class="tilte-ctn5">
                            <h4>BEST SELLERS</h4>
                            <p>Just in Now</p>
                        </div>
                        <div class="list-ctn5">
                            <ul>
                                <li><a href="">ALL</a></li>
                                <li><a href="">SALE</a></li>
                                <li><a href="">BEST</a></li>
                                <li><a href="">NEW</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="about-ctn3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 picture-3" data-aos-duration="1000" data-aos="fade-right"
                                    data-aos-delay="800" data-aos-anchor-placement="center-bottom">
                                    <div class="item">

                                        <div class="img-ctn3">
                                            <div class="groups-img">
                                                <img src="./assets/img/img-ctn5/shoe18_720x.webp" alt="">
                                                <img src="./assets/img/img-ctn5/shoe27.webp" alt="">
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3">
                                            <h1> <a href="#">DERBY SHOE</a> </h1>
                                            <div class="cost-ctn3">
                                                <h2> <span>$</span> 756.00</h2>
                                            </div>
                                            <div class="icon-ctn3">
                                                <div class="icon-start">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star">
                                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="bag-ctn3"><a href=""><i
                                                            class="fa-solid fa-bag-shopping"></i></a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 picture-3" data-aos-duration="1000" data-aos="fade-right"
                                    data-aos-delay="800" data-aos-anchor-placement="center-bottom">
                                    <div class="item">

                                        <div class="img-ctn3">
                                            <div class="groups-img">
                                                <img src="./assets/img/img-ctn2/shoeyelow.webp" alt="">
                                                <img src="./assets/img/img-ctn5/shoe20_600x.webp" alt="">
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3">
                                            <h1> <a href="#">COURT SHOE</a> </h1>
                                            <div class="cost-ctn3">
                                                <h2> <span>$</span> 478.00</h2>
                                            </div>
                                            <div class="icon-ctn3">
                                                <div class="icon-start">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star">
                                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="bag-ctn3"><a href=""><i
                                                            class="fa-solid fa-bag-shopping"></i></a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 picture-3" data-aos-duration="1000" data-aos="fade-right"
                                    data-aos-delay="800" data-aos-anchor-placement="center-bottom">
                                    <div class="item">

                                        <div class="img-ctn3">
                                            <div class="groups-img">
                                                <img src="./assets/img/img-ctn5/shoe-red.webp" alt="">
                                                <img src="./assets/img/img-ctn2/shoe_product.webp" alt="">
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3">
                                            <h1> <a href="#">BAST SHOE</a> </h1>
                                            <div class="cost-ctn3">
                                                <h2> <span>$</span> 106.00</h2>
                                            </div>
                                            <div class="icon-ctn3">
                                                <div class="icon-start">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star">
                                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="bag-ctn3"><a href=""><i
                                                            class="fa-solid fa-bag-shopping"></i></a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 picture-3" data-aos-duration="1000" data-aos="fade-right"
                                    data-aos-delay="800" data-aos-anchor-placement="center-bottom">
                                    <div class="item">

                                        <div class="img-ctn3">
                                            <div class="groups-img">
                                                <img src="./assets/img/img-ctn3/shoe12_968efbaa-1956-4621-93d2-1f1f8fdc3d11_600x.webp"
                                                    alt="">
                                                <img src="./assets/img/img-ctn2/collection3_large.webp" alt="">
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3">
                                            <h1> <a href="#">CLIMBING SHOE</a> </h1>
                                            <div class="cost-ctn3">
                                                <h2> <span>$</span> 478.00</h2>
                                            </div>
                                            <div class="icon-ctn3">
                                                <div class="icon-start">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star">
                                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="bag-ctn3"><a href=""><i
                                                            class="fa-solid fa-bag-shopping"></i></a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 picture-3" data-aos-duration="1000" data-aos="fade-right"
                                    data-aos-delay="800" data-aos-anchor-placement="center-bottom">
                                    <div class="item">

                                        <div class="img-ctn3">
                                            <div class="groups-img">
                                                <img src="./assets/img/img-ctn5/shoe25_2b59f812-76f2-448b-8835-d7ad151027e4_720x.webp"
                                                    alt="">
                                                <img src="./assets/img/img-ctn3/shoe15_720x.webp" alt="">
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3">
                                            <h1> <a href="#">DIABETIC SHOE</a> </h1>
                                            <div class="cost-ctn3">
                                                <h2> <span>$</span> 365.00</h2>
                                            </div>
                                            <div class="icon-ctn3">
                                                <div class="icon-start">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star">
                                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="bag-ctn3"><a href=""><i
                                                            class="fa-solid fa-bag-shopping"></i></a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="contain-6">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-3 group-icon-ctn6">
                                <i class="fa-solid fa-plane-departure"></i>
                                <p>Free
                                    Delivery</p>
                            </div>
                            <div class="col-md-3 group-icon-ctn6">
                                <i class="fa-solid fa-headphones"></i>
                                <p>Clients
                                    Discounts</p>
                            </div>
                            <div class="col-md-3 group-icon-ctn6">
                                <i class="fa-solid fa-right-left"></i>
                                <p>Return of goods</p>

                            </div>
                            <div class="col-md-3 group-icon-ctn6">
                                <i class="fa-brands fa-bandcamp"></i>
                                <p>Many
                                    Brands</p>
                            </div>
                        </div>
                    </div>

                </div>

                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-about">

                <div class="footer-header">
                    <div class="row">
                        <div class="col-4">
                            <div class="item">

                                <img src="./assets/img/footer/logo.webp" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item">

                                <input type="text" id="search" class="form-control" placeholder="Your email address">
                                <button><i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                        </div>
                        <div class="col-4 footer-icon">
                            <div class="item">

                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-google-plus-g"></i>
                                <i class="fa-brands fa-tumblr"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-contact">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Contact us</div>
                                <ul>
                                    <li><i class="fa-solid fa-house-chimney-user"></i>
                                        <span>No: 58 A, East Madison Street, Baltimore, MD, USA 4508</span>
                                    </li>
                                    <li><i class="fa-solid fa-phone"></i>
                                        <span>+84 969400633</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <span><a href="">info@example.com</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Info</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Search Term</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Advanced Search</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Oders and Returns</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Consutant</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Help & FAQs</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Help</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">About</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Contact</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Privacy Policy</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Best Sellers</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Support</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Support</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Search Term</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Advanced Search</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Oders and Returns</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Consutant</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Help & FAQs</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-footer">
                    <ul>
                        <li><a href="">Search Terms</a></li>
                        <li><a href="">Advanced Search</a></li>
                        <li><a href="">Oders and Returns</a></li>
                        <li><a href="">Consutant</a></li>
                        <li><a href="">Help & FAQs</a></li>
                    </ul>
                </div>

                <div class="site-footer__bottom">
                    <div class="end-footer">
                        <p><i class="fa-regular fa-copyright"></i>2022 Shoes <a href="">Design Von Nguyen</a></p>
                    </div>
                </div>
            </div>

        </div>


        <!----------------------------------------- Start Cart --------------------------------------------------->
        <div class="main-cart">
            <div class="about-cart">
                <div class="heading-cart">
                    <span class="close"><i class="fa-solid fa-xmark"></i></span>
                    <div class="header-cart">
                        <h4>Your Cart</h4>
                    </div>
                </div>

                <div class="container-cart">
                    <!-- Them san pham vao -->
                </div>

                <div class="bottom-cart">
                    <div class="sub-total">
                        <div class="p-title">Total</div>
                        <span class="money"> <span></span> $106.00</span>
                    </div>
                    <div class="p-main">
                        Shipping, taxes, and discounts will be calculated at checkout.
                    </div>
                    <div class="btn-cart">
                        <button>PRODUCT TO CHECK OUT</button>
                    </div>
                    <div class="btn-cart">
                        <button>VIEW CART</button>
                    </div>
                </div>

            </div>

        </div>
        <!------------------------------------ End-Cart------------------------------------------------------------->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script>
            AOS.init();
        </script>
        <script src="./main.js"></script>
        <script src="./cart.js"></script>
        <script src="./responesive.js"></script>


</body>

</html>