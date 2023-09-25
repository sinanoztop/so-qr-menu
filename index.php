<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Menu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/e121c1b687.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
<div class="detail-popup">
    <div class="img">
        <div class="back">
            <div class="c">
                <span class = "detail-p"><em class = "fas fa-arrow-left"></em></span>
            </div>
        </div>
        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
    </div>
    <div class="desc">
        <p class = "text-1">GARDEN KAHVALTI TABAĞI</p>
        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Bal, Nutellla, Kaymak, Domates, Salatalık, Roka, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Kayısı, Ceviz, Haşlanmış Yumurta, 2 Bardak Çay ile</p>
        <p class = "text-3">260,00₺</p>
    </div>
</div>
<div class="menu-popup">
    <div class="c">
        <div class="t">
            <span>Sosyal Ağ</span>
            <span>
                <em class = "fas fa-times"></em>
            </span>
        </div>
    </div>
</div>
  <div class="app-bar">
    <span>Sosyal Ağ</span>
  </div>
  <div class="app-content">
    <div class="header">
        <span class = "left-arrow">
            <em class = "fas fa-arrow-left"></em>
        </span>
        <span class = "logo">
            <span>Example Logo</span>
            <img src="https://panel.tabpadmenu.com/ipad/7420/set/506a5a0c-07a2-478c-be72-67cb21d4b181.png" alt="">
        </span>
        <span></span>
    </div>
    <div class="sliders">
        <div class="menu-tab">
            <span class = "active">KAHVALTI</span>
            <span>YİYECEKLER</span>
        </div>
        <div class="slider-contents">
            <div class = "sliders-i slider-1">
                <div class="swiper-container tabs-buttons">
                    <div class="swiper-wrapper">
                        <?php for( $i = 1; $i <= 10; $i++ ): ?>
                        <div class="swiper-slide">
                            <div class="swiper-i-c">
                                <div class="image">
                                    <img src="https://panel.tabpadmenu.com/ipad/7420/images/113f62ee-a1f2-4554-bf5c-a60e2244a8a9.jpeg" alt="">
                                </div>
                                <div class="name">
                                    KAHVALTILAR  - <?php echo $i; ?>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="swiper-container tabs-contents">
                    <div class="swiper-wrapper">
                        <?php for( $i = 1; $i <= 10; $i++ ): ?>
                        <div class="swiper-slide">
                            <div class="category-content">
                                <div class="category-title">
                                    <span>KAHVALTILAR - <?php echo $i; ?></span>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class = "sliders-i slider-2">
                <div class="swiper-container tabs-buttons-2">
                    <div class="swiper-wrapper">
                        <?php for( $i = 1; $i <= 10; $i++ ): ?>
                        <div class="swiper-slide">
                            <div class="swiper-i-c">
                                <div class="image">
                                    <img src="https://panel.tabpadmenu.com/ipad/7420/images/113f62ee-a1f2-4554-bf5c-a60e2244a8a9.jpeg" alt="">
                                </div>
                                <div class="name">
                                    YİYECEKLER  - <?php echo $i; ?>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="swiper-container tabs-contents-2">
                    <div class="swiper-wrapper">
                        <?php for( $i = 1; $i <= 10; $i++ ): ?>
                        <div class="swiper-slide">
                            <div class="category-content">
                                <div class="category-title">
                                    <span>YİYECEKLER - <?php echo $i; ?></span>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="left">
                                        <p class = "text-1"> GARDEN YÖRESEL SERPME KAHVALTI 2 KİŞİLİK</p>
                                        <p class = "text-2">Yeşil Zeytin, Siyah Zeytin, Çilek Reçeli, Dana Jambon, Bal, Kaymak,Sucuk, Domates, Salatalık, Roka, Tahin, Meyve, Pekmez, Beyaz Peynir, Eski Kaşar, Örgü Peyniri, Van Otlu Peynir, Hellim Peynir, Acuka, Patates Tava, Sigara Böreği, Nutella, Kayısı, Ceviz İçi, Sahanda Yumurta,Menemen,Yumurtalı Ekmek ve Pot Çay ile.</p>
                                        <p class = "text-3">550.00 TL</p>
                                    </div>
                                    <div class="right">
                                        <img src="https://panel.tabpadmenu.com/ipad/7420/images/f528ad40-29de-4135-8ed7-fd43750d5479.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script type = "text/javascript">
    var tabButtons = new Swiper('.tabs-buttons', {
        slidesPerView: 8,
        spaceBetween: 10,
        mousewheelControl: true,
        breakpoints: {
        300: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10
        },
        1170: {
            slidesPerView: 8,
            spaceBetween: 10
        }
    }
    });

    var tabContents = new Swiper('.tabs-contents', {
        mousewheelControl: true
    });
    
    tabButtons.on( "slideChange", function(){

        let _index_button = tabButtons.activeIndex;
        tabContents.slideTo( _index_button );
        $( ".tabs-buttons .swiper-slide" ).removeClass( "swiper-slide-active" );
        $( ".tabs-buttons .swiper-slide" ).eq( _index_button ).addClass( "swiper-slide-active" );

    });

    tabContents.on( "slideChange", function(){

        let _index_content = tabContents.activeIndex;
        tabButtons.slideTo( _index_content );
        $( ".tabs-buttons .swiper-slide" ).removeClass( "swiper-slide-active" );
        $( ".tabs-buttons .swiper-slide" ).eq( _index_content ).addClass( "swiper-slide-active" );

    });

    $( "body" ).on( "click", ".tabs-buttons .swiper-i-c", function(){
        $( ".tabs-buttons .swiper-slide" ).removeClass( "swiper-slide-active" );
        $( this ).parent().addClass( "swiper-slide-active" );
        let _index =  $( this ).parent().index();
        tabContents.slideTo( _index );
    });

    var tabButtons_2 = new Swiper('.tabs-buttons-2', {
        slidesPerView: 8,
        spaceBetween: 10,
        mousewheelControl: true,
        breakpoints: {
        300: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10
        },
        1170: {
            slidesPerView: 8,
            spaceBetween: 10
        }
    }
    });

    var tabContents_2 = new Swiper('.tabs-contents-2', {
        mousewheelControl: true
    });
    
    tabButtons_2.on( "slideChange", function(){

        let _index_button = tabButtons_2.activeIndex;
        tabContents_2.slideTo( _index_button );
        $( ".tabs-buttons-2 .swiper-slide" ).removeClass( "swiper-slide-active" );
        $( ".tabs-buttons-2 .swiper-slide" ).eq( _index_button ).addClass( "swiper-slide-active" );

    });

    tabContents_2.on( "slideChange", function(){

        let _index_content = tabContents_2.activeIndex;
        tabButtons_2.slideTo( _index_content );
        $( ".tabs-buttons-2 .swiper-slide" ).removeClass( "swiper-slide-active" );
        $( ".tabs-buttons-2 .swiper-slide" ).eq( _index_content ).addClass( "swiper-slide-active" );

    });

    $( "body" ).on( "click", ".tabs-buttons-2 .swiper-i-c", function(){
        $( ".tabs-buttons-2 .swiper-slide" ).removeClass( "swiper-slide-active" );
        $( this ).parent().addClass( "swiper-slide-active" );
        let _index =  $( this ).parent().index();
        tabContents_2.slideTo( _index );
    });

    $( ".menu-tab span" ).on( "click", function(){

        var _index = $( this ).index();

        $( ".menu-tab span" ).removeClass( "active" );
        $( this ).addClass( "active" );

        $( ".sliders-i" ).hide();
        $( ".sliders-i" ).eq( _index ).show();

        setTimeout(() => {
            tabContents.slideTo(0);
            tabContents_2.slideTo(0);
            tabButtons.slideTo(0);
            tabButtons_2.slideTo(0);
            console.log( "ok" );
        }, 300);

    });

    $( "body" ).on( "click", ".category-item, .detail-p", function(){

        $( ".detail-popup" ).toggleClass( "active" );

    });

  </script>  
</body>
</html>