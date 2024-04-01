


<!DOCTYPE html><html lang="ru-RU">
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" href="https://i.ibb.co/6H97nDr/favicon-tezkor.png" type="image/png">
    <title>Профессиональная чистка ковров</title>
    <meta name="description" content="Химчистка ковров в Душанбе c вывозом. Стандарт качества по доступной цене. Бесплатная доставка!">
  <!-- Open Grap -->
  <meta property="og:locale" content="ru_RU">    
  <meta property="og:type" content="website">
  <meta property="og:title" content="≡ Профессиональная чистка ковров">
  <meta property="og:description" content="Заказать чистку ковров в Душанбе можно в компании «Safina Cleaning». Наши квалифицированные сотрудники произведут качественную очистку ковров и ковролинов от любого вида пятен и загрязнений.">
  <meta property="og:url" content="https://safina.tj">
  <meta property="og:image" content="https://i.ibb.co/tJJdQfL/Asset-1-3x.png">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="≡ Профессиональная чистка ковров">
  <meta name="twitter:description" content="Заказать чистку ковров в Душанбе можно в компании «Safina Cleaning». Наши квалифицированные сотрудники произведут качественную очистку ковров и ковролинов от любого вида пятен и загрязнений.">
  <meta name="twitter:url" content="https://safina.tj">
  <meta name="twitter:image" content="https://i.ibb.co/tJJdQfL/Asset-1-3x.png">
  <!-- End Twitter Card -->
    <link href="{{ asset('safina/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('safina/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('safina/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('safina/css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('safina/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('safina/css/callnow.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>
    
    

<!-- Модальное окно -->
<div class="modal fade" id="calkrModal" tabindex="-1" role="dialog" aria-labelledby="calkrModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calkrModalLabel">Калькулятор стоимости стирки ковра</h5>
                <button type="button" class="btn-close btn-close border-0 bg-white" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form id="carpetForm">
                    <div class="mb-3">
                        <label for="length" class="form-label">Длина ковра (в метрах):</label>
                        <input type="number" class="form-control" id="length" name="length" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="width" class="form-label">Ширина ковра (в метрах):</label>
                        <input type="number" class="form-control" id="width" name="width" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="tarif" class="form-label w-100">Выберите тариф:</label>
                        <select class="form-select form-control" id="tarif" name="tarif" required>
                            <option value="10">Стандарт (10 сомони)</option>
                            <option value="12">Премиум (12 сомони)</option>
                            <option value="15">Люкс (15 сомони)</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calculate()">Рассчитать</button>
                    <div id="carpetResult" class="mt-3"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Подключение Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    
    
    
    <div class="fix_tel2">
        <div class="ring-alo-phone2 ring-alo-green2 ring-alo-show2" id="ring-alo-phoneIcon2" style="right: 25px; bottom: -12px;">
            <div class="ring-alo-ph-circle2"></div>
            <div class="ring-alo-ph-circle-fill2"></div>
            <div class="ring-alo-ph-img-circle2">
    
                <a href="tel:+992304304304">
                    <img class="lazy2" src="{{ asset('safina/images/phone-ring.png') }}" alt="">
                </a>
            </div>
        
        </div>
    </div>
<!-- Кнопка для открытия модального окна -->




    <div class="wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header d-flex pb-4">
                <div style="width: 100%;background-image: url({{ asset('safina/images/tezkor_logo.png') }});background-repeat: no-repeat;background-size: contain;">
                </div>
                <div class="site-mobile-menu-close ml-auto">
                    <span aria-hidden="true" class="js-menu-toggle">×</span>
                </div>
            </div>
            <div class="site-mobile-menu-body">
               
            </div>
        </div>


        <header class="site-navbar site-navbar-target sticky-top shadow" style="background: #FFF;" role="banner">
            <nav id="w8" class="site-navigation position-relative text-right navbar-expand-lg navbar-light navbar" role="navigation">
                <div class="container">
                    <a class="navbar-brand" href="https://safina-cleaning.tj/">
                        <div class="evadaily_logo"></div>
                    </a>
                    <div class="text-right mx-2 small_header d-block d-lg-none">
                        ежедневно с 8:00 до 21:00<br>
                        <a href="tel:+992304304304" style="color: #212121">
                            <span class="h5">+(992) 304 304 304</span>
                        </a>
                        <br>
                    </div>
                    <button type="button" class="d-inline-block d-lg-none ml-md-0 pr-0 site-menu-toggle js-menu-toggle float-right navbar-toggler" data-toggle="collapse" data-target="#w8-collapse" aria-controls="w8-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="w8-collapse" class="flex-column collapse navbar-collapse">
                        <div class="ml-auto flex-row d-none d-lg-block">
                            ежедневно с 8:00 до 21:00
                            <span class="h5 ml-3">+(99) 304 304 304
                            </span>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#orderModal" style="text-transform: uppercase;" class="btn btn-sm btn-primary ml-3">Заказать чистку</a>
                        </div>
                        <ul id="w9" class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block nav">
                            <li class="mb-4 d-md-block d-lg-none">
                                <a href="tel:+992304304304" style="color: #212121; padding-left:0;"><span>+(992) 304 304 304</span></a>
                                <div>ежедневно с 8:00 до 21:00</div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#uslugi">Услуги</a></li>
                            <li class="nav-item"><a class="nav-link" href="#prise">Цены</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pocemu">Почему мы</a></li>
                            <li class="nav-item"><a class="nav-link" href="#servisi">Сервисы</a></li>
                            <li class="nav-item"><a class="nav-link" href="#kompani">О компании</a></li>
                            <li class="nav-item"><a class="nav-link" href="#linktofaq">Вопросы и ответы</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <div class="bg-top p-2 komp">
            <div class="container mt-text-d">
                <div class="row">
                    <div class="col-6">
                        <div class="color-2 font-size-1" >Safina Cleaning <br><span class="color-1" style="font-weight: 700;"> Чистые ковры в каждом доме!</span></div>
                        <div class="description mt-5">
                            <ul class="color-2 font-size-2 w-75">
                                <li>Турецкое качество.   </li>
                                <li>Бесплатная доставка.</li>
                                <li>Быстрые сроки.</li>
                                <li>Eжедневно с 8:00 до 21:00</li>
                            </ul>
                            <div class="btnss mt-5">
<a class="btn-1 px-4 mt-2 py-2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#calkrModal">Калкулятор</a>
<a class="btn-1 px-4 mt-2 py-2 text-decoration-none" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#orderModal" style="text-transform: uppercase;">Заказать</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>

            </div>

        </div>




        <div class="bg-fone p-2 fone">

          <div class="container ">
            <div class="row">
              <div class="col-12">
                <div class="color-2 font-size-10 text-center">Safina Cleaning <br><span class="color-1"
                    style="font-weight: 700;"> Чистые ковры в каждом доме!</span></div>
                <div class="description mt-4">
                  <ul class="color-2 font-size-2">
                    <li>Турецкое качество. </li>
                    <li>Бесплатная доставка.</li>
                    <li>Быстрые сроки.</li>
                    <li>Eжедневно с 8:00 до 21:00</li>

                  </ul>
                  <div class="btnss mt-3 w-100 justify-content-center text-center">
<a class="btn-1 px-4 mt-2 py-2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#calkrModal">Калкулятор</a>
<a class="btn-1 px-4 mt-2 py-2 text-decoration-none" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#orderModal" style="text-transform: uppercase;">Заказать</a>
                  </div>
                </div>
              </div>
              <div class="col-6"></div>
            </div>

          </div>

        </div>
        <section>
        <div id="uslugi" style="position: absolute;top: -100px; left: 0;"></div>
        </section>
        <div class="container">
            <div class="title color-3 font-size-3 text-center mt-3 mb-3">
                Ознакомьтесь с нашими услугами
            </div>
            <div class="row g-2">
                <div class=" col-lg-3 col-sm-6 col-xl-3 p-2">
                    <img src="{{ asset('safina/images/01.png') }}" alt="" class="w-100">
                </div>
                <div class=" col-lg-3 col-sm-6 col-xl-3 p-2">
                    <img src="{{ asset('safina/images/02.png') }}" alt="" class="w-100">
                </div>
                <div class=" col-lg-3 col-sm-6 col-xl-3 p-2">
                    <img src="{{ asset('safina/images/03.png') }}" alt="" class="w-100">
                </div>
                <div class=" col-lg-3 col-sm-6 col-xl-3 p-2">
                    <img src="{{ asset('safina/images/04.png') }}" alt="" class="w-100">
                </div>
            </div>

        </div>



        <section class="bg-color-3" id="servisis">
        <div id="servisi" style="position: absolute;top: -100px; left: 0;"></div>
            <div class="container py-1 my-3 pb-4">
                <div class="title color-1 font-size-3 text-center mt-3 mb-3">
                    Узнайте о сервисах, которые мы предлагаем нашим клиентам
                </div>
                <div class="row g-2">
                    <div class="col-lg-3 col-sm-6 col-xl-3 text-center p-2">
                            <img src="{{ asset('safina/images/Ellipse-1.png') }}" alt="" class="w-100 mb-2">
                            <div class="title-2 font-size-2 color-1 text-center">1. Забираем ковёр</div>
                            <p class="text-center m-0 pintu color-2 mt-2">Вы оставляете заявку. В оговоренное время курьер приезжает к вам, забирает ковёр. Не нужно даже выбивать!</p>
                            
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xl-3 text-center p-2">
                            <img src="{{ asset('safina/images/Ellipse-2.png') }}" alt="" class="w-100 mb-2">
                            <div class="title-2 font-size-2 color-1 text-center">2. Чистим</div>
                            <p class="text-center m-0 pintu color-2 mt-2">Чистим ковёр с помощью специализированных ковромоечных машин индивидуально подобранными шампунями, после чего полностью выполаскиваем.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xl-3 text-center p-2">
                            <img src="{{ asset('safina/images/Ellipse-3.png') }}" alt="" class="w-100 mb-2">
                            <div class="title-2 font-size-2 color-1 text-center">3. Сушим</div>
                            <p class="text-center m-0 pintu color-2 mt-2">Сушим ковёр в специальной камере при оптимальной температуре 30-40 градусов с применением промышленных осушителей воздуха.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xl-3 text-center p-2">
                            <img src="{{ asset('safina/images/Ellipse-4.png') }}" alt="" class="w-100 mb-2">
                            <div class="title-2 font-size-2 color-1 text-center">4. Привозим ковёр</div>
                            <p class="text-center m-0 pintu color-2 mt-2">Курьер привозит ковёр, и вы оплачиваете его при получении. Мы ценим ваш комфорт и уверены в качестве наших услуг.</p>
                    </div>


                    
                    

                    

                </div>
            </div>
        </section>

        <section>
            <div class="container mb-4">
                <div class="title color-3 font-size-3 text-center mt-3 mb-3">
                    Как мы чистим? Познакомьтесь с нашими этапами работы!
                </div>
                <div class="row g-2">
                    <div class="col-6 col-md-4 col-sm-6 col-xl-2 p-2">
                        <img src="{{ asset('safina/images/Layer 2.png') }}" alt="" class="w-100 mb-2 p-3">
                        <p class="text-center m-0 pintu">Пылесосить обивку для удаления сухой грязи: пыли, песка, волос и шерсти.</p>
                    </div>
                    <div class="col-6 col-md-4 col-sm-6 col-xl-2 p-2">
                        <img src="{{ asset('safina/images/Layer 3.png') }}" alt="" class="w-100 mb-2 p-3">
                        <p class="text-center m-0 pintu">Далее на поверхность обивки наносим раствор моющего средства</p>
                    </div>
                    <div class="col-6 col-md-4 col-sm-6 col-xl-2 p-2">
                        <img src="{{ asset('safina/images/Layer 4.png') }}" alt="" class="w-100 mb-2 p-3">
                        <p class="text-center m-0 pintu">Механическое воздействие помогает отделить стойкую грязь</p>
                    </div>
                    <div class="col-6 col-md-4 col-sm-6 col-xl-2 p-2">
                        <img src="{{ asset('safina/images/Layer 5.png') }}" alt="" class="w-100 mb-2 p-3">
                        <p class="text-center m-0 pintu">Далее мы используем пятновыводители</p>
                    </div>
                    <div class="col-6 col-md-4 col-sm-6 col-xl-2 p-2">
                        <img src="{{ asset('safina/images/Layer 6.png') }}" alt="" class="w-100 mb-2 p-3">
                        <p class="text-center m-0 pintu">Промывка ткани экстрактором и водой для удаления моющих средств и пятен.</p>
                    </div>
                    <div class="col-6 col-md-4 col-sm-6 col-xl-2 p-2">
                        <img src="{{ asset('safina/images/Layer 1.png') }}" alt="" class="w-100 mb-2 p-3">
                        <p class="text-center m-0 pintu">Быстрая сушка специализированным феном. Цель - убрать остатки влаги</p>
                    </div>
     
    
                </div>
        </section>


        <section>
            <div id="pocemu" style="position: absolute;top:-100px; left: 0;"></div>
            <div class="container-fluid py-2" style="background-color: #14b7b2;">
                <div class="container py-1">
                    <div class="row pb-1">
                        <div class="col-12 text-center color-1 ">
                            <h2 class="w-600">Почему выбирают нас</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 py-4 py-sm-3 px-sm-4 text-center main-block-icon">
                            <div id="greycircle" class="d-inline-flex mx-3 mx-sm-auto justify-content-center align-items-center arl">
                                <img src="{{ asset('safina/images/outline.svg') }}" loading="lazy" style="height: 5rem; width: auto">
                            </div>
                            <div class="py-2 py-lg-4 color-2">
                                <h4 class="color-1">Стандарт качества стирка ковров</h4>Турецкие технологии и надежность чистки
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 py-4 py-sm-3 px-sm-4 text-center main-block-icon">
                            <div id="greycircle" class="d-inline-flex mx-3 mx-sm-auto justify-content-center align-items-center arl">
                                <img src="{{ asset('safina/images/carpet.svg') }}" loading="lazy" style="height: 5rem; width: auto">
                            </div>
                            <div class="py-2 py-lg-4 color-2">
                                <h4 class="color-1">Только современное оборудование</h4>Лицензированное оборудование и гарантия качества
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 py-4 py-sm-3 px-sm-4 text-center main-block-icon">
                            <div id="greycircle" class="d-inline-flex mx-3 mx-sm-auto justify-content-center align-items-center arl">
                                <img src="{{ asset('safina/images/union.svg') }}" loading="lazy" style="height: 5rem; width: auto">
                            </div>
                            <div class="py-2 py-lg-4 color-2">
                                <h4 class="color-1">Профессиональные специалисты</h4>Только опытные специалисты, прошедшие специальное
                                обучение
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 py-4 py-sm-3 px-sm-4 text-center main-block-icon">
                            <div id="greycircle" class="d-inline-flex mx-3 mx-sm-auto justify-content-center align-items-center arl">
                                <img src="{{ asset('safina/images/virus.svg') }}" loading="lazy" style="height: 5rem; width: auto">
                            </div>
                            <div class="py-2 py-lg-4 color-2">
                                <h4 class="color-1">Антибактериальная чистка</h4>Уничтожение бактерий, плесени, пылевых клещей
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<section class="bg-color-white">
        <div id="kompani" style="position: absolute;top: -100px; left: 0;"></div>
        <div class="container pb-3">
            <div class="title color-3 font-size-3 text-center mt-3 mb-3">
                Узнайте больше о нашей компании и наших ценностях.
            </div>
            <div class="row g-2">
                <div class=" col-lg-6 col-sm-6 col-xl-6 font-size-22 text-justify">
                    Заказать чистку ковров в Душанбе можно в компании «Safina Cleaning». 
                    Наши квалифицированные сотрудники произведут качественную очистку ковров и ковролинов от любого вида пятен и загрязнений.
                    Стоит доверить нам заботу о чистоте в вашем доме по ряду причин:
                    <ul class="mlll text-start">
                        <li>Турецкие оборудование</li>
                        <li>Гарантия качества;</li>
                        <li>Автоматическая линия процесса.​</li>
                        <li>Опыт работы более 5 лет;</li>
                        <li>Самые быстрые по городу сроки 2-4 дня;</li>
                        <li>Бесплатная доставка.</li>
                    </ul>
                        
                        
                        
                        
                        
                </div>
                <div class=" col-lg-6 col-sm-6 col-xl-6">
                    <img src="{{ asset('safina/images/311-3118497_indoor-flooring-carpet-png.png') }}" alt="" class="w-100">
                </div>
            </div>

        </div>
        </section>


        <section class="bg-color-6 my-3">
        <div id="prise" style="position: absolute;top: -100px; left: 0;"></div>
            <div class="container pb-0">
                <div class="title color-1 font-size-3 text-center pt-3 mb-3">
                    Ознакомьтесь с нашими тарифами
                </div>
                <div class="row g-2">
                    <div class="col-12 col-sm-4 mb-3 ">
                        <div class="pack-container bg-color-01">
                            <div class="header">
                              <p class="title-1">
                                Стандарт
                              </p>
                              <div class="price-container">
                                10
                                <span>с</span>
                              </div>
                            </div>
                            <div>
                              <ul class="lists">
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Срок: 3-5 дней
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    От 15 кв.м и выше
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Дисконтная 
                                    карта в подарок
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Доставка бесплатно
                                  </p>
                                </li>
                              </ul>
                            </div>
                            <div class="button-container">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#orderModal">
                                Заказать чистку
                              </button>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-4 mb-3 ">
                        <div class="pack-container bg-color-02 color-black">
                            <div class="header">
                              <p class="title-1 color-black">
                                Премиум
                              </p>
                              <div class="price-container">
                                12
                                <span>с</span>
                              </div>
                            </div>
                            <div>
                              <ul class="lists">
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Срок: 3-5 дней
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    От 15 кв.м и выше
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Дисконтная 
                                    карта в подарок
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Доставка бесплатно
                                  </p>
                                </li>
                              </ul>
                            </div>
                            <div class="button-container">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#orderModal">
                                Заказать чистку
                              </button>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-4 mb-3 ">
                        <div class="pack-container bg-color-01">
                            <div class="header">
                              <p class="title-1">
                                Люкс
                              </p>
                              <div class="price-container">
                                15
                                <span>с</span>
                              </div>
                            </div>
                            <div>
                              <ul class="lists">
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Срок: 3-5 дней
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    От 15 кв.м и выше
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Дисконтная 
                                    карта в подарок
                                  </p>
                                </li>
                                <li class="list">
                                  <span>
                                    <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                  </span>
                                  <p class="m-0 p-0">
                                    Доставка бесплатно
                                  </p>
                                </li>
                              </ul>
                            </div>
                            <div class="button-container">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#orderModal">
                                Заказать чистку
                              </button>
                            </div>
                          </div>
                    </div>


                </div>
        
            </div>
        </section>

        <section>
            <div id="linktofaq" style="position: absolute;top: -100px; left: 0;"></div>
            <div class="container py-5">
                <div class="row pb-3">
                    <div class="col-12 text-center">
                        <h2>Вопросы и ответы</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="w3" class="accordion">
                            <div class="card">
                                <div id="w3-collapse0-heading" class="card-header">
                                    <h5 class="mb-0"><button type="button" id="w4" class="btn-link btn collapsed" data-toggle="collapse" data-target="#w3-collapse0" aria-expanded="false" aria-controls="w3-collapse0">Как заказать химчистку ковра? <div class="angle-down">
                                                <img src="{{ asset('safina/images/down.svg') }}" class="img_down">
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="w3-collapse0" class="collapse" aria-labelledby="w3-collapse0-heading" data-parent="#w3" style="">
                                    <div class="card-body">Достаточно просто позвонить по телефону, или оставить заявку
                                        на обратный звонок. После согласования доставки все последующие этапы
                                        предоставьте нам! Наши курьеры приедут и заберут загрязненный ковер, наши
                                        эксперты проведут профессиональную чистку, и свежий и чистый ковер будет
                                        доставлен Вам!</div>

                                </div>
                            </div>
                            <div class="card">
                                <div id="w3-collapse1-heading" class="card-header">
                                    <h5 class="mb-0"><button type="button" id="w5" class="btn-link btn collapsed" data-toggle="collapse" data-target="#w3-collapse1" aria-expanded="false" aria-controls="w3-collapse1">У вас есть минимальный заказ?<div class="angle-down">
                                                <img src="{{ asset('safina/images/down.svg') }}" class="img_down"></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="w3-collapse1" class="collapse" aria-labelledby="w3-collapse1-heading" data-parent="#w3">
                                    <div class="card-body">Минимальный заказ чистки ковра 15 м2. </div>

                                </div>
                            </div>
                            <div class="card">
                                <div id="w3-collapse2-heading" class="card-header">
                                    <h5 class="mb-0"><button type="button" id="w6" class="btn-link btn collapsed" data-toggle="collapse" data-target="#w3-collapse2" aria-expanded="false" aria-controls="w3-collapse2">Вы специализируетесь только на чистке ковров?
                                            <div class="angle-down">
                                                <img src="{{ asset('safina/images/down.svg') }}" class="img_down"></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="w3-collapse2" class="collapse" aria-labelledby="w3-collapse2-heading" data-parent="#w3" style="">
                                    <div class="card-body">Помимо профессиональной химчистки ковров на собственной
                                        фабрике, мы также предоставляем услуги химчистки матрасов, штор,
                                        и др. Будем рады проконсультировать Вас о наших услугах!
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div id="w3-collapse3-heading" class="card-header">
                                    <h5 class="mb-0"><button type="button" id="w7" class="btn-link btn collapsed" data-toggle="collapse" data-target="#w3-collapse3" aria-expanded="false" aria-controls="w3-collapse3">От чего зависит цена? <div class="angle-down">
                                                <img src="{{ asset('safina/images/down.svg') }}" class="img_down">
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="w3-collapse3" class="collapse" aria-labelledby="w3-collapse3-heading" data-parent="#w3" style="">
                                    <div class="card-body">Окончательную стоимость сообщит эксперт фабрики при осмотре,
                                        так как в работу берется перечень сведений об изделии:
                                        <ul>
                                            <li>уровень загрязнения ковра;</li>
                                            <li>особенность материала (шерстяной ковер, синтетика, и др.);</li>
                                            <li>площадь очищаемой поверхности;</li>
                                            <li>необходимость в дополнительных материалах, в случае возможности ремонта;
                                            </li>
                                            <li>применяемые технологии.</li>
                                        </ul>
                                        Наши эксперты по чистке ковров оперативно проконсультируют Вас по всем вопросам.
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-color-6 my-3">
            <div class="container pb-0">
                <div class="row g-2">
                    <div class="col-12 col-sm-6 mb-3 align-self-center">
                        <img src="images/Layer 10.png" alt="" class="w-100">
                    </div>
                    <div class="col-12 col-sm-6 p-0 m-0 align-self-end">
                        <img src="images/Layer 20.png" alt="" class="w-100">
                    </div>
                </div>
        
            </div>
        </section>

    </div>


    <footer class="footer">
        <div class="container">
            <div class="row site-navbar align-items-center">
                <div class="col-sm-4 text-center pb-3 pb-sm-1 text-sm-left">
                    Мы принимаем к оплате:<br>
                    <img src="{{ asset('safina/images/0003.png') }}" style="display: inline-block; height: 20px; width: auto; margin-right: 8px;">
                    <img src="{{ asset('safina/images/0004.png') }}" style="display: inline-block; height: 20px; width: auto; margin-right: 8px;">
                    <img src="{{ asset('safina/images/0001.png') }}" style="display: inline-block; height: 20px; width: auto; margin-right: 8px;">
                    <img src="{{ asset('safina/images/0002.png') }}" style="display: inline-block; height: 20px; width: auto; margin-right: 8px;">
                </div>
                <div class="col-sm-4">
                    <div class="mx-auto" style="width: 100%; height: 55px; background-image: url(images/tezkor_logo.png);background-repeat: no-repeat;background-size: contain; background-position: center">
                    </div>
                </div>
                <div class="col-sm-4 site-navigation text-center pt-3 pt-sm-1 text-sm-right">
                    <ul class="site-menu p-0">
                        <li class="social">
                            <a href="https://t.me/+992304304304">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
  <path d="M16 0.5c-8.563 0-15.5 6.938-15.5 15.5s6.938 15.5 15.5 15.5c8.563 0 15.5-6.938 15.5-15.5s-6.938-15.5-15.5-15.5zM23.613 11.119l-2.544 11.988c-0.188 0.85-0.694 1.056-1.4 0.656l-3.875-2.856-1.869 1.8c-0.206 0.206-0.381 0.381-0.781 0.381l0.275-3.944 7.181-6.488c0.313-0.275-0.069-0.431-0.482-0.156l-8.875 5.587-3.825-1.194c-0.831-0.262-0.85-0.831 0.175-1.231l14.944-5.763c0.694-0.25 1.3 0.169 1.075 1.219z"/>
</svg>
                            </a>
                        </li>
                        <li class="social">
                            <a href="https://instagram.com/safina_cleaning" >
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 32px; width: 32px">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24ZM24.0012 11.2C20.5249 11.2 20.0886 11.2152 18.7233 11.2773C17.3606 11.3397 16.4305 11.5555 15.6166 11.872C14.7747 12.1989 14.0606 12.6363 13.3491 13.348C12.6371 14.0595 12.1997 14.7736 11.8717 15.6152C11.5544 16.4294 11.3384 17.3598 11.2771 18.7219C11.216 20.0873 11.2 20.5238 11.2 24.0001C11.2 27.4764 11.2155 27.9114 11.2773 29.2767C11.34 30.6394 11.5557 31.5695 11.872 32.3834C12.1992 33.2253 12.6365 33.9394 13.3483 34.6509C14.0595 35.3629 14.7736 35.8013 15.615 36.1283C16.4294 36.4448 17.3598 36.6605 18.7222 36.7229C20.0876 36.7851 20.5236 36.8003 23.9996 36.8003C27.4762 36.8003 27.9111 36.7851 29.2765 36.7229C30.6391 36.6605 31.5703 36.4448 32.3848 36.1283C33.2264 35.8013 33.9394 35.3629 34.6506 34.6509C35.3626 33.9394 35.8 33.2253 36.128 32.3837C36.4427 31.5695 36.6587 30.6391 36.7227 29.277C36.784 27.9116 36.8 27.4764 36.8 24.0001C36.8 20.5238 36.784 20.0876 36.7227 18.7222C36.6587 17.3595 36.4427 16.4294 36.128 15.6155C35.8 14.7736 35.3626 14.0595 34.6506 13.348C33.9386 12.636 33.2266 12.1987 32.384 11.872C31.5679 11.5555 30.6373 11.3397 29.2746 11.2773C27.9092 11.2152 27.4746 11.2 23.9972 11.2H24.0012Z" fill="black"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8529 13.5067C23.1937 13.5062 23.574 13.5067 24.0012 13.5067C27.4188 13.5067 27.8239 13.519 29.1735 13.5803C30.4215 13.6374 31.0989 13.8459 31.5501 14.0211C32.1474 14.2531 32.5733 14.5304 33.021 14.9784C33.469 15.4264 33.7464 15.8531 33.9789 16.4505C34.1541 16.9011 34.3629 17.5785 34.4197 18.8265C34.481 20.1758 34.4944 20.5812 34.4944 23.9972C34.4944 27.4132 34.481 27.8186 34.4197 29.1679C34.3626 30.4159 34.1541 31.0933 33.9789 31.5439C33.7469 32.1413 33.469 32.5666 33.021 33.0144C32.573 33.4624 32.1477 33.7397 31.5501 33.9717C31.0994 34.1477 30.4215 34.3557 29.1735 34.4128C27.8242 34.4741 27.4188 34.4874 24.0012 34.4874C20.5833 34.4874 20.1782 34.4741 18.8289 34.4128C17.5809 34.3552 16.9035 34.1466 16.4521 33.9714C15.8547 33.7394 15.428 33.4621 14.98 33.0141C14.532 32.5661 14.2547 32.1405 14.0222 31.5429C13.847 31.0922 13.6382 30.4149 13.5814 29.1669C13.52 27.8175 13.5078 27.4122 13.5078 23.994C13.5078 20.5758 13.52 20.1726 13.5814 18.8233C13.6384 17.5753 13.847 16.8979 14.0222 16.4467C14.2542 15.8494 14.532 15.4227 14.98 14.9747C15.428 14.5267 15.8547 14.2494 16.4521 14.0168C16.9033 13.8408 17.5809 13.6328 18.8289 13.5755C20.0097 13.5222 20.4673 13.5062 22.8529 13.5035V13.5067ZM30.8338 15.632C29.9858 15.632 29.2978 16.3193 29.2978 17.1675C29.2978 18.0155 29.9858 18.7035 30.8338 18.7035C31.6818 18.7035 32.3698 18.0155 32.3698 17.1675C32.3698 16.3195 31.6818 15.632 30.8338 15.632ZM24.0012 17.4267C20.371 17.4267 17.4278 20.37 17.4278 24.0001C17.4278 27.6303 20.371 30.5722 24.0012 30.5722C27.6314 30.5722 30.5735 27.6303 30.5735 24.0001C30.5735 20.37 27.6314 17.4267 24.0012 17.4267Z" fill="black"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.0012 19.7334C26.3575 19.7334 28.2679 21.6436 28.2679 24.0001C28.2679 26.3564 26.3575 28.2668 24.0012 28.2668C21.6446 28.2668 19.7345 26.3564 19.7345 24.0001C19.7345 21.6436 21.6446 19.7334 24.0012 19.7334Z" fill="black"/>
</svg>
                            </a>
                        </li>
                        <li class="social">
                            <a href="https://wa.me/+992304304304">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 32px; width: 32px">
<path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48ZM24.7911 37.3525C32.6595 37.3493 39.059 30.9483 39.0621 23.0815C39.0637 19.2683 37.5806 15.6828 34.8862 12.9854C32.1918 10.2879 28.6086 8.80165 24.7909 8.8C16.9248 8.8 10.5228 15.2017 10.5196 23.0702C10.5186 25.5855 11.1757 28.0405 12.4246 30.2048L10.4 37.6L17.9653 35.6155C20.0498 36.7524 22.3967 37.3517 24.7852 37.3525H24.7911Z" fill="black"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.3159 33.0319L13.8265 34.2096L15.0248 29.8324L14.7428 29.3836C13.5554 27.4951 12.9283 25.3124 12.9292 23.0711C12.9318 16.5311 18.2529 11.2104 24.7958 11.2104C27.964 11.2115 30.9422 12.4469 33.1817 14.689C35.4212 16.9311 36.6538 19.9112 36.6526 23.0807C36.6499 29.6212 31.3289 34.9424 24.7911 34.9424H24.7863C22.6578 34.9415 20.5702 34.3697 18.749 33.289L18.3159 33.0319ZM31.9808 26.4751C31.8917 26.3264 31.654 26.2372 31.2974 26.0586C30.9408 25.8801 29.1877 25.0176 28.8608 24.8985C28.534 24.7795 28.2961 24.7201 28.0585 25.0769C27.8208 25.4339 27.1374 26.2372 26.9294 26.4751C26.7214 26.7131 26.5133 26.7429 26.1569 26.5644C25.8003 26.3859 24.6513 26.0094 23.2893 24.7945C22.2292 23.8489 21.5135 22.6813 21.3055 22.3243C21.0975 21.9673 21.2834 21.7743 21.4619 21.5965C21.6223 21.4367 21.8185 21.1799 21.9968 20.9718C22.1751 20.7636 22.2345 20.6148 22.3533 20.377C22.4722 20.1389 22.4128 19.9307 22.3236 19.7522C22.2345 19.5737 21.5213 17.8185 21.2242 17.1045C20.9347 16.4092 20.6408 16.5034 20.4219 16.4924C20.2141 16.482 19.9762 16.4798 19.7385 16.4798C19.5008 16.4798 19.1144 16.569 18.7876 16.926C18.4607 17.283 17.5395 18.1457 17.5395 19.9008C17.5395 21.656 18.8173 23.3516 18.9956 23.5896C19.1739 23.8276 21.51 27.4293 25.0871 28.9739C25.9379 29.3413 26.602 29.5607 27.12 29.725C27.9742 29.9965 28.7516 29.9582 29.3659 29.8663C30.0511 29.764 31.4756 29.0038 31.7729 28.1709C32.0699 27.3378 32.0699 26.6238 31.9808 26.4751Z" fill="black"/>
</svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </footer>
<div class="modal" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content" style="border-radius: 6px">
            <div class="modal-body text-center" style="padding: 30px;">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="block_head_row">
                    <h3 class="ar_b" id="orderModalLabel">ЗАКАЗАТЬ ЧИСТКУ</h3>
                </div>

                <p>
                    Бесплатная консультация специалиста
                </p>
                <div id="order_block">

                    <form id="orderForm" action="{{ route('orders.home') }}" method="POST" class="mt-5">
                        @csrf
                        <div class="grid gap-y-4">
                          <!-- Form Group -->
                          <div >
                            <div class="relative mb-2">
                              <input placeholder="Имя" type="text" id="client_name" name="client_name" class="px-3 py-2 w-100 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="name-error">
                          </div>
                          <!-- End Form Group -->
          
                          <!-- Form Group -->
                          <div >
                            <div class="relative mb-2">
                              <input placeholder="Номер телефон" type="number" id="client_phone" name="client_phone" class="px-3 py-2 w-100 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="email-error">
                          </div>
                          <!-- End Form Group -->
    
          
                          <!-- Form Group -->
                          <div >
                            <div class="relative mb-2">
                              <input placeholder="Адрес" type="text" id="client_address" name="client_address" class="px-3 py-2 w-100 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="password-error">
                          </div>
                          <!-- End Form Group -->
          

                          <div class="relative mb-2">
                            <select id="carpet_quantity" name="carpet_quantity" class="px-3 py-2 w-100 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="rolle-error">
                                <option value="" disabled selected>Вибирите количество</option>
                                <option value="1">1 ковер</option>
                                <option value="2">2 ковер</option>
                                <option value="3">3 ковер</option>
                                <option value="4">Более 4 ковер</option>
                            </select>
                        </div>
                          <!-- End Form Group -->
    
                          <div >
                            <div class="relative">
                                <select id="carpet_tariff" name="carpet_tariff" class="px-3 py-2 w-100 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="rolle-error">
                                    <option value="" disabled selected>Вибирите тариф</option>
                                    <option value="10">Стандарт (10 с)</option>
                                    <option value="12">Премиум (12 с)</option>
                                    <option value="15">Люкс (15 с)</option>
                                </select>
                            </div>
                        </div>
    
          
          
                          <button class=" w-100 mt-2 py-2 rounded-lg btn-primary border-0 ">Добавить</button>
                        </div>
                      </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>



{{-- Привет --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>




  <script>
function openModal(modalId) {
    var modal = new bootstrap.Modal(document.getElementById(modalId));
    modal.show();
}


    function calculate() {
      var length = parseFloat(document.getElementById('length').value);
      var width = parseFloat(document.getElementById('width').value);
      var tarif = parseFloat(document.getElementById('tarif').value);
      
      var square = length * width;
      var cost = square * tarif;
      
      document.getElementById('carpetResult').innerHTML = '<p>Площадь ковра: ' + square.toFixed(2) + ' кв. м</p>' + 
                                                           '<p>Стоимость стирки: ' + cost.toFixed(2) + ' сомони</p>';
    }
  </script>
    <script src="{{ asset('safina/js/all.js') }}"></script>
    <script src="{{ asset('safina/js/jquery.min.js') }}"></script>
    <script src="{{ asset('safina/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('safina/js/jquery.min.js') }}"></script>
    <script src="{{ asset('safina/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('safina/js/main_nav.js') }}"></script>




</body></html>