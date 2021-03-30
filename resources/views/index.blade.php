<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Strap</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css"/>
    <script src="/js/swiper-bundle.min.js"></script>


    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&family=Source+Serif+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet">


    <style>
        .swiper-pagination-bullet {
            border: 1px solid #fff;
            background: none;
            width: 12px;
            height: 12px;
            margin-left: 10px;
        }

        .swiper-pagination-bullet-active span {
            border: 1px solid #fff;
            background: none;
            width: 12px;
            height: 12px;
        }
    </style>
</head>

<body>

<div class="wrapper">

    <!-- top menu --->
    <div class="container-fluid top_menu  fixed-top">
        <div class="row">

            <div class="col-lg-12 d-none d-md-block">
                <nav class="navbar navbar-expand-lg pt_nav bg-white">
                    <a class="navbar-brand scroll_menu" href="/"><img src="{{$settings['logo']}}"></a>
                    <p class="header_description pt_text_head">{{$settings['name']}}</p>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto pt_nav">
                            <li class="nav-item active">
                                <a class="nav-link nav_size ml-4 scroll_menu" href="#vid">Виды ремешков</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_size scroll_menu" href="#gray_sec">Преимущества</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_size scroll_menu" href="#products_sec">Товары</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_size scroll_menu" href="#reviews_sec">Отзывы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_size scroll_menu" href="#about_sec">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_size scroll_menu" href="#delivery_sec">Доставка и оплата</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item pt_nav_l">
                                <a class="nav-link header_phone" href="tel:+77760001616">{{$settings['phone']}}</a>
                            </li>
                            <li class="nav-item pt_nav_soc">
                                <a class="nav-link"
                                   href="https://wa.me/77760001616?text=Добрый день! Хотим сделать заказ"
                                   target="_blank"><img src="/img/wp.svg"></a>
                            </li>
                            <li class="nav-item pt_nav_soc">
                                <a class="nav-link" href="https://www.instagram.com/strap.kz/" target="_blank"><img
                                        src="/img/inst.svg"></a>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>

            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg pt_nav fixed-top bg-white d-md-none d-xs-block">
                    <a class="navbar-brand" href="https://api.whatsapp.com/send/?phone=77760001616&text&app_absent=0"
                       target="_blank"><img src="/img/logo.png"></a>


                    <div class="d-flex">
                        <a class=" header_phone "
                           href="https://api.whatsapp.com/send/?phone=77760001616&text&app_absent=0" target="_blank">+7
                            (776) 000-16-16</a>
                    </div>
                    <div class="d-flex">
                        <a href="https://api.whatsapp.com/send/?phone=77760001616&text&app_absent=0"
                           target="_blank"><img src="/img/wp.svg"></a>
                    </div>
                    <div class="d-flex">
                        <a href="https://www.instagram.com/strap.kz/" target="_blank"><img src="/img/inst.svg"></a>
                    </div>


                </nav>

            </div>
        </div>
    </div>
    <!-- top menu --->


    <!-- big slider --->
    <section id="sec_one" class="pt_top">
        <div class="container-fluid">
            <div class="row rel_block">
                <div class="col-lg-12 col-md-12">


                    <div class="swiper-container">

                        <div class="swiper-wrapper">
                            @foreach($topSlider as $slide)
                                <div class="swiper-slide big_slide"
                                     style="background: url('{{$slide['image']}}') no-repeat; background-size: cover">
                                    <div id="result"></div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-2 "></div>
                                        <div class="col-lg-5 col-md-8 col-8 mt-5 ml-2 big_pt_slide">


                                            <div class="title_slide mb-3 white" align="left"
                                                 style="position: relative; z-index: 102">{{$slide['title']}}</div>
                                            <div class="title_slide_mini white" align="left"
                                                 style="position: relative; z-index: 102">{{$slide['description']}}</div>

                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col pt-3">
                                                    <a href="https://wa.me/77760001616?text=Добрый день! Хотим сделать заказ"
                                                       target="_blank" class="btn btn-md btn_white"
                                                       style=" position: relative; z-index: 101;">Заказать</a>
                                                </div>

                                                <div class="col-lg-6 col-md-5 col pt-3">
                                                    <div class="price_slide mt-1"
                                                         style="position: relative; z-index: 999; ">{{$slide['price']}}
                                                        ₸
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="slider_panel_one_slider">
                    <div class="row">
                        <div class="col-lg-5 col-5">
                            <div class="swiper-pagination_one mar_panel_one"></div>
                        </div>
                        <div class="col-lg-2 col-2"><img src="/img/line.svg" class="mar_line"></div>
                        <div class="col-lg-1 col-1 mar_one_slider">
                            <div><a class="swiper_left"><img src="/img/arrow_left.svg"></a></div>
                        </div>
                        <div class="col-lg-1 col-2 mar_one_slider">
                            <div><a class="swiper_right"><img src="/img/arrow_right.svg"></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- big slider --->


    <section id="black_sec">
        <div class="container">
            <div class="row" align="center">

                <div class="col-lg-12 col-12">
                    <p class="text_black_sec">{{$info['info']}}</p>
                </div>

            </div>
        </div>
    </section>


    <div id="vid"></div>
    @foreach($products as $product)
        {{--white full--}}
        <?php $i = 0?>
        @if($i === 0)
            <section id="m_one_sec">
                <div class="container-fluid">
                    <div class="row" align="center">

                        <div class="col-xl-6 col-lg-6 col-md-12">

                            <!-- slider -->
                            <div id="one_blocks" class="carousel slide" data-ride="carousel" data-interval="false">
                                <div class="carousel-inner">
                                    @foreach($product['images'] as $image)

                                        @if ($loop->first)
                                    <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                                @endif

                                        <div class="one_image"
                                             style="background: url('{{$image['image']}}') no-repeat; background-size: 100%;"></div>

                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- slider -->
                        </div>


                        <div class="col-xl-6 col-lg-6 col-md-12 bg_lines">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 pt_one_sec pl_one_sec_min">
                                    <h3 class="text-left title_blocks  mt-3"></h3>
                                    <div align="left" class="text_blocks mt-3"><span
                                            class="text_blocks_bold">Верх ремешка:</span> французская козья кожа Sully
                                        от Alran
                                    </div>

                                    <div align="left" class="text_blocks  mt-3"><span
                                            class="text_blocks_bold">Подклад:</span>
                                        французcкая телячья кожа Zermatt от HASS с водоотталкивающим и гипоаллергенным
                                        свойством.
                                    </div>

                                    <div align="left" class="text_blocks mt-3">Прошито вручную седельным швом вощеными
                                        льняными
                                        нитками.
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-lg-4 col-6"><a
                                                href="https://api.whatsapp.com/send/?phone=77760001616&text&app_absent=0"
                                                target="_blank" class="btn btn-md btn_black">Заказать</a></div>
                                        <div class="col-lg-5 col-6">
                                            <p class="price_slide_blocks mt-1">24 000 ₸ </p>

                                        </div>
                                    </div>

                                    <div class="d-none d-xl-block">
                                        <div class="row">
                                            <div class="col-1">
                                                <div><a class="post_control_left" href="#one_blocks" role="button"
                                                        data-slide="prev"><img src="/img/arr_blocks_l.svg"></a></div>
                                            </div>
                                            <div class="col-1">
                                                <div><a class="post_control_right" href="#one_blocks" role="button"
                                                        data-slide="next"><img src="/img/arr_blocks_r.svg"></a></div>
                                            </div>
                                            <!--
                                                                                    <div class="col-10">
                                                                                        <img src="img/01.png" width="100px" class="d-none d-xl-block">
                                                                                    </div>
                                            -->
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </section>
        @endif
        {{--white full--}}
        {{--    section two blocks--}}
        @if($i % 2 == 0 || $i % 3 == 0)
            <section id="m_two_sec">
                <div class="container-fluid">
                    <div class="row" align="center">
                        {{--block white small--}}
                        @if($i % 2 == 0)
                            <div class="col-xl-3 col-lg-6 col-md-12">

                                <!-- slider -->
                                <div id="two_blocks" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <div class="two_image"
                                                 style="background: url('/img/02_m.jpg') no-repeat; background-size: 100%;"></div>

                                        </div>
                                        <div class="carousel-item">

                                            <div class="two_image"
                                                 style="background: url('/img/02_m.jpg') no-repeat; background-size: 100%;"></div>

                                        </div>
                                    </div>
                                </div>
                                <!-- slider -->


                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 bg_lines_two">
                                <div class="row">
                                    <div class="col-lg-11 col-md-12 pt_one_sec pl_one_sec_min">
                                        <h3 class="text-left title_blocks  mt-3">Ремешки из кожи козы</h3>
                                        <div align="left" class="text_blocks mt-3"><span
                                                class="text_blocks_bold">Верх ремешка:</span> французская козья кожа
                                            Sully
                                            от
                                            Alran
                                        </div>

                                        <div align="left" class="text_blocks  mt-3"><span
                                                class="text_blocks_bold">Подклад:</span>
                                            французcкая телячья кожа Zermatt от HASS с водоотталкивающим и
                                            гипоаллергенным
                                            свойством.
                                        </div>

                                        <div align="left" class="text_blocks mt-3">Прошито вручную седельным швом
                                            вощеными
                                            льняными
                                            нитками.
                                        </div>


                                        <div class="row mt-4">
                                            <div class="col-lg-4 col-6"><a
                                                    href="https://api.whatsapp.com/send/?phone=77760001616&text&app_absent=0"
                                                    target="_blank" class="btn btn-md btn_black">Заказать</a></div>
                                            <div class="col-lg-5 col-6">
                                                <p class="price_slide_blocks mt-1">24 000 ₸ </p>

                                            </div>
                                        </div>

                                        <div class="d-none d-xl-block">
                                            <div class="row">
                                                <div class="col-1">
                                                    <div><a class="post_control_left" href="#two_blocks" role="button"
                                                            data-slide="prev"><img src="/img/arr_blocks_l.svg"></a>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div><a class="post_control_right" href="#two_blocks" role="button"
                                                            data-slide="next"><img src="/img/arr_blocks_r.svg"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {{--block white small--}}
                        @endif
                        @if($i % 3 == 0)
                            {{--block black small--}}
                            <div class="col-xl-3 col-lg-6 ">

                                <!-- slider -->
                                <div id="three_blocks" class="carousel slide" data-ride="carousel"
                                     data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <div class="two_image"
                                                 style="background: url('/img/03_m.jpg') no-repeat; background-size: 100%;"></div>

                                        </div>
                                        <div class="carousel-item">

                                            <div class="two_image"
                                                 style="background: url('/img/03_m.jpg') no-repeat; background-size: 100%;"></div>

                                        </div>
                                    </div>
                                </div>
                                <!-- slider -->

                            </div>
                            <div class="col-xl-3 col-lg-6 bg_lines_b">
                                <div class="row">
                                    <div class="col-lg-11 pt_one_sec pl_one_sec_min">
                                        <h3 class="text-left title_blocks white">Ремешки из кожи акулы</h3>
                                        <div align="left" class="text_blocks white mt-3"><span class="text_blocks_bold">Верх ремешка:</span>
                                            кожа акулы
                                        </div>

                                        <div align="left" class="text_blocks white mt-3"><span
                                                class="text_blocks_bold">Подклад:</span> французcкая телячья кожа
                                            Zermatt от
                                            HASS с
                                            водоотталкивающим и гипоаллергенным свойством.
                                        </div>

                                        <div align="left" class="text_blocks white mt-3">Прошито вручную седельным швом
                                            вощеными
                                            льняными нитками.
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-4 col-6"><a
                                                    href="https://api.whatsapp.com/send/?phone=77760001616&text&app_absent=0"
                                                    target="_blank" class="btn btn-md btn_white">Заказать</a></div>
                                            <div class="col-lg-6 col-6">
                                                <p class="price_slide mt-1">24 000 ₸ </p>

                                            </div>
                                        </div>

                                        <div class="d-none d-xl-block">
                                            <div class="row">
                                                <div class="col-1">
                                                    <div><a class="post_control_left" href="#three_blocks" role="button"
                                                            data-slide="prev"><img src="/img/arr_blocks_lw.svg"></a>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div><a class="post_control_right" href="#three_blocks"
                                                            role="button"
                                                            data-slide="next"><img src="/img/arr_blocks_rw.svg"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--block black small--}}
                        @endif
                    </div>
                </div>
            </section>
        @endif
        {{--    section two blocks--}}

        {{--black block full--}}
        @if($i === 4)
            <section id="m_four_sec">
                <div class="container-fluid">
                    <div class="row" align="center">

                        <div class="col-lg-6 bg_lines_b2">
                            <div class="row">
                                <div class="col-lg-11 pt_one_sec pl_one_sec_min">
                                    <h3 class="text-left title_blocks white">Ремешки из кожи акулы</h3>
                                    <div align="left" class="text_blocks white mt-3"><span class="text_blocks_bold">Верх ремешка:</span>
                                        кожа акулы
                                    </div>

                                    <div align="left" class="text_blocks white mt-3"><span
                                            class="text_blocks_bold">Подклад:</span> французcкая телячья кожа Zermatt от
                                        HASS с
                                        водоотталкивающим и гипоаллергенным свойством.
                                    </div>

                                    <div align="left" class="text_blocks white mt-3">Прошито вручную седельным швом
                                        вощеными
                                        льняными нитками.
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 col-6"><a
                                                href="https://api.whatsapp.com/send/?phone=77760001616&text&app_absent=0"
                                                target="_blank" class="btn btn-md btn_white">Заказать</a></div>
                                        <div class="col-lg-5 col-6">
                                            <p class="price_slide mt-1">24 000 ₸ </p>

                                        </div>
                                    </div>

                                    <div class="d-none d-xl-block">
                                        <div class="row">
                                            <div class="col-1">
                                                <div><a class="post_control_left" href="#four_blocks" role="button"
                                                        data-slide="prev"><img src="/img/arr_blocks_lw.svg"></a></div>
                                            </div>
                                            <div class="col-1">
                                                <div><a class="post_control_right" href="#four_blocks" role="button"
                                                        data-slide="next"><img src="/img/arr_blocks_rw.svg"></a></div>
                                            </div>
                                            <!--
                                                                                    <div class="col-10">
                                                                                        <img src="img/04.png" width="100px">
                                                                                    </div>
                                            -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div id="four_blocks" class="carousel slide" data-ride="carousel" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <div class="one_image"
                                             style="background: url('/img/04_m.jpg') no-repeat; background-size: 100%;"></div>

                                    </div>
                                    <div class="carousel-item">

                                        <div class="one_image"
                                             style="background: url('/img/04_m.jpg') no-repeat; background-size: 100%;"></div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{--black block full--}}
        <?php $i++ ?>
        @if($i === 4)
            <?php $i = 0 ?>
        @endif
    @endforeach

    <section id="gray_sec">

        <div class="container-fluid">
            <div class="row" align="center">

                <div class="col-lg-12">
                    <h1 class="title_pre">Наши преимущества</h1>
                </div>
                <div class="w-100"></div>
                @foreach($ourAdvantages as $item)
                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="{{$item['image']}}">
                        <h5 class="pt-3">{{$item['name']}}</h5>
                        <img src="/img/line_pre.svg">
                        <div class="mt-4">{{$item['description']}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="products_sec">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="products pb-5" align="center">Наши товары</h1>
                    <div id="multi_blocks" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            @foreach($sliderProducts as $sliderProduct)
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="products_image"
                                                 style="background: url('/img/m_1.png') no-repeat; background-size: 100%;"></div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="products_image"
                                                 style="background: url('/img/m_2.png') no-repeat; background-size: 100%;"></div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="products_image"
                                                 style="background: url('/img/m_3.png') no-repeat; background-size: 100%;"></div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="products_image"
                                                 style="background: url('/img/m_4.png') no-repeat; background-size: 100%;"></div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="products_image"
                                             style="background: url('/img/m_1.png') no-repeat; background-size: 100%;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="products_image"
                                             style="background: url('/img/m_2.png') no-repeat; background-size: 100%;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="products_image"
                                             style="background: url('/img/m_3.png') no-repeat; background-size: 100%;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="products_image"
                                             style="background: url('/img/m_4.png') no-repeat; background-size: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="slider_arrow_l d-none d-xl-block">
                        <a class="swiper_left_four" href="#multi_blocks" role="button" data-slide="prev">
                            <img src="/img/left_round.svg"></a>
                    </div>

                    <div class="slider_arrow_r d-none d-xl-block">
                        <a class="swiper_right_four" href="#multi_blocks" role="button" data-slide="next">
                            <img src="/img/right_round.svg"></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="reviews_sec">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h1 class="review_pre white" align="center">Отзывы</h1>
                </div>

                <div class="col-lg-12 col-12">


                    <div id="review_blocks" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">

                            @foreach($reviews as $review)
                                @if ($loop->first)
                                    <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                                @endif
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-12 col-12">
                                                        <h2 class="review_title">{{$review['name']}} <img
                                                                src="/img/inst_review.svg"
                                                                class="ml-2"></h2>
                                                        <img class="mb-4" src="/img/line_review.svg">
                                                        <div class="review_text">{!!$review['description']!!}</div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-12 col-12 ml-5 text-center">
                                                        <img src="{{$review['image']}}" class="mt-2">
                                                    </div>
                                                </div>

                                            </div>
                                            @endforeach

                                    </div>
                        </div>
                        <div class="d-none d-xl-block">
                            <div class="slider_arrow_l_review"><a class="swiper_left_four" href="#review_blocks"
                                                                  role="button" data-slide="prev"><img
                                        src="/img/arr_review_left.svg"></a></div>
                            <div class="slider_arrow_r_review"><a class="swiper_right_four" href="#review_blocks"
                                                                  role="button" data-slide="next"><img
                                        src="/img/arr_review_right.svg"></a></div>
                        </div>

                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="d-lg-none d-md-block">
                            <div class="slider_arrow_l_review"><a class="swiper_left_four" href="#review_blocks"
                                                                  role="button" data-slide="prev"><img
                                        src="/img/arr_review_left.svg"></a></div>
                            <div class="slider_arrow_r_review"><a class="swiper_right_four" href="#review_blocks"
                                                                  role="button" data-slide="next"><img
                                        src="/img/arr_review_right.svg"></a></div>
                        </div>
                    </div>


                </div>
            </div>
    </section>


    <section id="about_sec">

        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="title_pre" align="center">О нас</h1>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-6  col-md-12 col-12">
                    <p class="about_text">{!! $about['text_one'] !!}</p>
                    <img src="{{$about['image_one']}}" class="about_one">
                </div>
                <div class="col-lg-1  col-md-12 col-12"></div>
                <div class="col-lg-5  col-md-12 col-12">
                    <img src="{{$about['image_two']}}">
                    <div class="about_text mt-4">{!!$about['text_two']!!}</div>
                </div>
            </div>
        </div>
    </section>

    <section id="dark_sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="dark_sec_text">{!!$about['text_third']!!}</div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{$about['image_third']}}" class="mk_image">
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{$about['image_four']}}" class="mk_image">
                </div>

            </div>
        </div>
    </section>


    <div id="delivery_sec"></div>
    <section id="about_sec">

        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="title_pre" align="center">Доставка и оплата</h1>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-5 col-12">

                    <img src="{{$delivery['image']}}" class="text-center delivery_image_pos">
                </div>

                <div class="col-lg-7 col-12">
                    <div class="delivery_text">{!! $delivery['text'] !!}</div>
                </div>


            </div>
        </div>
    </section>


    <section id="footer">
        <div class="container">
            <div class="row" align="center">
                <div class="col-lg-4">
                    <p align="left" class="footer_text">{{$settings['address']}}</p>
                </div>

                <div class="col-lg-4">
                    <img src="{{$settings['logo']}}">
                </div>

                <div class="col-lg-4 mt-3">
                    <a href="tel:+77760001616" class="header_phone">{{$settings['phone']}}</a>
                    <a href="https://wa.me/77760001616?text=Добрый день! Хотим сделать заказ" target="_blank"><img
                            src="/img/wp.svg" class="ml-2"></a>
                    <a href="https://www.instagram.com/strap.kz/" target="_blank"><img src="/img/inst.svg" class="ml-2"></a>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/umd/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 50,
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: ".swiper_right",
            prevEl: ".swiper_left"
        },
        pagination: {
            el: ".swiper-pagination_one"
        },
    });

    swiper.on("slideChange", function () {
        console.log("Текущий слайд", this.activeIndex);
        if (
            this.previousIndex < this.activeIndex ||
            this.slides - 1 == this.previousIndex
        ) {
            console.log("Вперед");
            document.querySelector('#result').innerHTML = ``;
        } else {
            console.log("Назад");
            document.querySelector('#result').innerHTML = ``;
        }
    });
</script>


<script type="text/javascript">
    $(function () {
        $('.scroll_menu').click(function () {
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000); //800 - длительность скроллинга в мс
            return false;
        });
    });
</script>


</body>

</html>
