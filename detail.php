<?php include('include/header.php');
      include('admin/db/database.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homestays details</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Link Swiper's CSS -->
        <!-- <link rel="stylesheet" href="swiper-bundle.min.css"> -->

        <link rel="stylesheet" href="css/style1.css"> 

        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    </head>
    <body>
        <!--NAVIGATION-->
        <?php  
            if(isset($_GET["id_homestay"]))
            {
                $id_homestay = $_GET['id_homestay'];
                $sql = "SELECT * FROM `homestay` WHERE `id_homestay` = '$id_homestay';";                
                $homestay_detail = executeResult($sql);

                $query = "SELECT * FROM location INNER JOIN homestay ON location.id_location = homestay.location_id WHERE `id_homestay` = '$id_homestay'";
                $homestay_detail1 = executeResult($query);
            }
            
        ?>

        <section class="container sproduct">
            <div class="row mt-5">
                <?php foreach($homestay_detail as $key => $value): 
                ?>
                <div class="col-lg-7 col-md-12 col-12">                    
                    <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_19123123580086573478.jpg?ca=13&ce=1&s=1024x768" data-lightbox="mygallery"><img class="img-fluid w-100 pb-1" src="images/<?php echo $value['images'];?>" id="MainImg" alt=""></a>
                    <div class="small-img-group">                        
                        <div class="small-img-col">
                            <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" data-lightbox="mygallery"><img src="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>   
                        <div class="small-img-col">
                            <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" data-lightbox="mygallery"><img src="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>   
                        <div class="small-img-col">
                            <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" data-lightbox="mygallery"><img src="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>   
                        <div class="small-img-col">
                            <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" data-lightbox="mygallery"><img src="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>                        
                    </div>
                </div>

                <div id="information" class="col-lg-7 col-md-12 col-12">
                    <?php foreach($homestay_detail1 as $key1 => $value1): 
                    ?>
                    <h6>Package / <?php echo($value1['name']) ?></h6>
                    <?php endforeach?>
                    <h3 class="name-homestay py-3"><?php echo $value['homestay_name'];?></h3>
                    <h6><i class="fas fa-map-marked-alt"></i>  <?php echo $value['address'];?></h6>
                    <hr>
                    <h2 class="prices py-2"><?php echo number_format($value['price'])?><sup>??</sup><i><small>/ng??y</small></i></h2>
                    <div class="numbers">
                        <form action="cart.php?action=add" method="post">
                            <h3 style="font-family: 'Courier New', Courier, monospace; font-size: 25px;">B???n mu???n ??? m???y ng??y : <input type="number" value="1" name="num[]" min=1></h3>
                            <button class="buy-btn">?????t ph??ng ngay!!!</button>
                        </form>
                    </div>
                    <div class="product-brands">
                        <div class="Box-sc-kv6pi1-0 cJiLOx sc-khAkjo iitXjH">
                            <div data-element-name="facility-highlights" class="Box-sc-kv6pi1-0 hRUYUu">
                                <div class="Box-sc-kv6pi1-0 jAzgrQ">
                                    <h4 class="Typographystyled__TypographyStyled-sc-j18mtu-0 eUDGCc kite-js-Typography ">Highlights</h4>
                                </div>
                                <div class="Box-sc-kv6pi1-0 kCNWwO">
                                    <div data-element-name="property-top-feature" data-element-value="-1" data-element-index="0" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/spray.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <div data-element-name="atf-property-highlight" data-element-value="review-scores" data-element-facility-id="-1" tabindex="0" aria-describedby="rc-tooltip-21" class="Box-sc-kv6pi1-0 hRUYUu">
                                            <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="cursor: pointer; text-overflow: ellipsis; overflow: hidden;">
                                                Sparkling clean 
                                                <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 iYeCAW" style="vertical-align: baseline; transform: translate(-1px, 2px);">
                                                    <path fill-rule="evenodd" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 1a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm.5 7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h1zM12 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="318" data-element-index="1" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/location.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="text-overflow: ellipsis; overflow: hidden;">Inside city center</p>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="-1" data-element-index="2" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/medal.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <div data-element-name="atf-property-highlight" data-element-value="review-scores" data-element-facility-id="-1" tabindex="0" aria-describedby="rc-tooltip-22" class="Box-sc-kv6pi1-0 hRUYUu">
                                            <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="cursor: pointer; text-overflow: ellipsis; overflow: hidden;">
                                                Top Value 
                                                <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 iYeCAW" style="vertical-align: baseline; transform: translate(-1px, 2px);">
                                                    <path fill-rule="evenodd" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 1a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm.5 7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h1zM12 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="272" data-element-index="3" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/door.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="text-overflow: ellipsis; overflow: hidden;">
                                            Check-in [24-hour]
                                        </p>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="-1" data-element-index="4" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/bedKing.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <div data-element-name="atf-property-highlight" data-element-value="review-scores" data-element-facility-id="-1" tabindex="0" aria-describedby="rc-tooltip-23" class="Box-sc-kv6pi1-0 hRUYUu">
                                            <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="cursor: pointer; text-overflow: ellipsis; overflow: hidden;">
                                                Excellent room comfort &amp; quality 
                                                <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 iYeCAW" style="vertical-align: baseline; transform: translate(-1px, 2px);">
                                                    <path fill-rule="evenodd" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 1a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm.5 7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h1zM12 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php endforeach?>
            </div>
        </section>

       

        <section class="container information_product my-5 pt-5">
            <div class="product-detail-under">
                <div class="product-detail-under-top">
                    Th??ng tin homestay
                </div>
                <div class="product-detail-under-content-big">
                    <div class="d-flex flex-row">
                        <div class="p-2 chitiet">
                            <p>Chi ti???t</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 vanchuyen">
                            <p>Th??ng tin v???n chuy???n</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 thanhtoan">
                            <p>Ph????ng th???c thanh to??n</p>                    
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 doitra">
                            <p>Ch??nh s??ch ?????i & tr???</p>                         
                        </div>
                    </div>
                    <div class="product-detail-under-content">
                        <div class="product-detail-under-content-chitiet">
                            <div class="row m-0 py-2">    
                                <?php foreach($homestay_detail as $key => $value): 
                                ?>                                                             
                                <div class="col-lg-6 col-md-6">
                                    <?php echo $value['descript']?>
                                </div>
                                <?php endforeach?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="DetailsTable__Container-sc-6kksbc-0 kmjgzn">
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Value for money</span>
                                            <meta itemprop="sku" content="DW01200005">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">9.4</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Distance to city center</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">1km</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Location rating</span>
                                            <meta itemprop="productSupported" content="Apple Watch series 6, 5, 4 and SE">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">9.1</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Nearest airport</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Da Nang International Airport (DAD)</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Distance to airport</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">24.8 Km</span>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="product-detail-under-content-vanchuyen">
                            <div class="row m-0 py-1">                    
                                <div class="Box-sc-kv6pi1-0 fuBtbe">
                                    <div data-element-name="property-info-section" data-element-value="drinkingAndDining" data-element-index="0" class="Box-sc-kv6pi1-0 daWRcw">
                                        <div class="Box-sc-kv6pi1-0 iyqcnt">
                                            <img alt="" src="//cdn6.agoda.net/images/staycation/default/DrinkingAndDining.svg" width="50px" height="50px">
                                        </div>
                                        <div class="Box-sc-kv6pi1-0 dLpjIL">
                                            <h5 class="sc-hKgILt sc-eCssSg iIDYBO clpWsV Box-sc-kv6pi1-0 bpSoIf">Food and Drinks</h5>
                                            <div tabindex="0" role="list" class="Box-sc-kv6pi1-0 cYZaSy">
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Room service [24-hour]</span>
                                                </div>
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Coffee shop</span>
                                                </div>
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Room service</span>
                                                </div>
                                            </div>                
                                        </div>
                                    </div>
                                    <div data-element-name="property-info-section" data-element-value="staycationWellness" data-element-index="1" class="Box-sc-kv6pi1-0 daWRcw">
                                        <div class="Box-sc-kv6pi1-0 iyqcnt">
                                            <img alt="" src="//cdn6.agoda.net/images/staycation/default/wellness.svg" width="50px" height="50px">
                                        </div>
                                        <div class="Box-sc-kv6pi1-0 dLpjIL">
                                            <h5 class="sc-hKgILt sc-eCssSg iIDYBO clpWsV Box-sc-kv6pi1-0 bpSoIf">Wellness</h5>
                                            <div tabindex="0" role="list" class="Box-sc-kv6pi1-0 cYZaSy">
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Fitness center</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-element-name="property-info-section" data-element-value="activities" data-element-index="2" class="Box-sc-kv6pi1-0 daWRcw">
                                        <div class="Box-sc-kv6pi1-0 iyqcnt">
                                            <img alt="" src="//cdn6.agoda.net/images/staycation/default/activities.svg" width="50px" height="50px"></div>
                                            <div class="Box-sc-kv6pi1-0 dLpjIL">
                                                <h5 class="sc-hKgILt sc-eCssSg iIDYBO clpWsV Box-sc-kv6pi1-0 bpSoIf">Activities</h5>
                                                <div tabindex="0" role="list" class="Box-sc-kv6pi1-0 cYZaSy">
                                                    <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                        <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                            <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                                <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Swimming pool [indoor]</span>
                                                    </div>
                                                    <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                        <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                            <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                                <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Swimming Pool</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="product-detail-under-content-thanhtoan">
                            <div class="row m-0 py-1">
                                <div class="col-lg-10 col-md-6">
                                    <p>Simple Watch cung c???p c??c ph????ng th???c thanh to??n an to??n v?? b???n c?? th??? ch???n thanh to??n b???ng Visa, Mastercard, JCB, thanh to??n qua ti???n m???t, internet banking ho???c tr??? g??p 0%.</p>
                                    <div class="logo-chuyen-phat">
                                        <div class="row m-0 py-0">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/visa.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/mastercard.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/jcb.svg">
                                            &ensp;                                                                                                                        
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/thanhtoantienmat.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/internetBanking.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/tragop.png">
                                        </div>
                                    </div>                                                                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="product-detail-under-content-doitra">
                            <div class="row m-0 py-1">
                                <div class="col-lg-10 col-md-6">
                                    <p>
                                        ??? <i>?????i v???i ch??nh s??ch ?????i ph??ng</i>: N???u kh??ch h??ng mu???n ?????i ph??ng qua 1 h???ng ph??ng cao c???p h??n th?? s??? ph??? thu theo 
                                        ch??nh l???ch h???ng ph??ng m?? kh??ch h??ng mu???n ?????i. Trong tr?????ng h???p kh??ch h??ng mu???n ?????i xu???ng h???ng ph??ng th???p h??n h???ng ph??ng m?? qu?? kh??ch ???? ?????t 
                                        ho???c ??ang ??? th?? c?? th??? s??? kh??ng ho??n l???i s??? ti???n ch??nh l???ch cho kh??ch h??ng v?? v???n ????? ???????c ho??n l???i s??? ti???n ch??nh 
                                        l???ch hay kh??ng c??n t??y thu???c v??o ng??y m?? kh??ch h??ng quy???t ?????nh ?????i.
                                        <br><br>
                                        ??? <i>?????i v???i ch??nh s??ch h???y ph??ng</i>: tr?????ng h???p kh??ch h??ng ???? ho??n th??nh vi???c ?????t ph??ng v?? ho??n th??nh vi???c thanh 
                                        to??n cho homestay nh??ng l???i kh??ng th??? ti???n h??nh chuy???n ??i c???a m??nh, c?? th??? li??n h??? v???i homestay qua s??? hotline ho???c qua email ????? ???????c h??? tr??? vi???c h???y ph??ng. ??i???u kho???n, chi ph?? ph??t sinh 
                                        trong qu?? tr??nh h???y ph??ng, d???i ng??y ?????t s??? ???????c t??nh theo quy ?????nh h???y ph??ng ri??ng c???a t???ng kh??ch s???n.
                                        <br><br>
                                        ??? <i>?????i v???i ch??nh s??ch ?????m b???o ho??n ti???n</i>: Trong tr?????ng h???p kh??ch h??ng ???? thanh to??n ti???n c???c, thanh to??n ?????y ????? ti???n 
                                        ?????t ph??ng. Nh??ng do ??i???u ki???n kh??ch quan n??n h???y chuy???n ??i c???a m??nh th?? homestay s??? ho??n l???i s??? ti???n 
                                        cho kh??ch h??ng b???ng ti???n m???t ho???c chuy???n kho???n qua th??ng tin m?? kh??ch h??ng cung c???p cho homestay. Vi???c 
                                        ho??n ti???n s??? d???a v??o quy ?????nh c???a m???i booking ph??ng kh??c nhau. V?? s??? c?? nh???ng booking s??? ho??n ti???n 100%, 70%, 50%, 
                                        30%... Vi???c ho??n ti???n n??y s??? ???????c nh??n vi??n c???a homestay s??? th??ng b??o cho kh??ch h??ng qua ??i???n tho???i ho???c email.                                        
                                    </p>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ph???n ch??? ????nh gi?? c???a kh??ch h??ng -->
        <section>
            <hr class="mx-auto">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral">????nh gi?? c???a kh??ch h??ng</h1>
            <p class="text-center">D?????i ????y l?? m???t s??? ????nh gi?? c???a kh??ch h??ng khi h??? ???? tr???i nghi???m s???n ph???m c???a ch??ng t??i.</p>
        </section>

        <section class="danh-gia-khach-hang">            
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">                        
                        <div class="card swiper-slide">                            
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>                                
                            <div class="card-content">
                                <h2 class="name"></h2>
                                <p class="description"></p>    
                            </div>                            
                        </div>                        
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="comment-box">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral">B??nh lu???n</h1>
            <p class="text-center">N???u b???n c?? nh???ng th???c m???c g??, hay c?? nh???ng ????nh gi?? g?? v??? s???n ph???m c???a ch??ng t??i th?? h??y g???i nh???n x??t ??? ph???n ph??a d?????i nh??!!!</p>
            <div class="row">
                <form action="#" class="frame">
                    <input type="text" name="full-name" placeholder="H??? v?? t??n...">
                    <input type="email" name="email" placeholder="?????a ch??? email...">
                    <textarea name="comment" placeholder="H??y vi???t nh???n x??t c???a b???n ??? ????y..."></textarea>
                    <button type="submit">G???i b??nh lu???n</button>                
                </form>
            </div>
            
        </section>
<!-- 
        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Quick links</h3>
                    <a href="home.php"> <i class="fas fa-angle-right"></i> Trang ch???</a>
                    <a href="about.php"> <i class="fas fa-angle-right"></i> Gi???i thi???u</a>
                    <a href="package.php"> <i class="fas fa-angle-right"></i>S???n ph???m</a>
                    <a href="book.php"> <i class="fas fa-angle-right"></i> Li??n h???</a>
                </div>

                <div class="box">
                    <h3>Extra links</h3>
                    <a href="home.php"> <i class="fas fa-angle-right"></i> ??i???u kho???n s??? d???ng</a>
                    <a href="about.php"> <i class="fas fa-angle-right"></i> Ch??nh s??ch b???o h??nh</a>
                </div>

                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> nwatch@gmail.com </a>
                    <a href="#"> <i class="fas fa-map"></i> ???? N???ng, Vi???t Nam </a>
                </div>

                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>

                <div class="box">
                    <img src="images/Simple.png" alt="">
                    <p class="pt-3">LEARN HOW TO MAKE RESPONSIVE ECOMMERCE WEBSITE USING HTML CSS AND JAVASCRIPT. IN THIS.</p>                   
                </div>
            </div>

        </section> -->
        <?php include('include/footer.php');?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
        <!--Chuy???n ?????i ???nh trong ph???n Product Details-->
        <script>
            var MainImg = document.getElementById('MainImg');
            var smalling = document.getElementsByClassName('small-img');

            smalling[0].onclick = function(){
                MainImg.src = smalling[0].src;
            }
            smalling[1].onclick = function(){
                MainImg.src = smalling[1].src;
            }
            smalling[2].onclick = function(){
                MainImg.src = smalling[2].src;
            }
            smalling[3].onclick = function(){
                MainImg.src = smalling[3].src;
            }
        </script>

        <!--Product-information-->
        <script>
            const doitra = document.querySelector(".doitra");
            const chitiet = document.querySelector(".chitiet");
            const thanhtoan = document.querySelector(".thanhtoan");
            const vanchuyen = document.querySelector(".vanchuyen");

            if(doitra){
                doitra.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "block";
                })
            }
            if(chitiet){
                chitiet.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "block";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                })
            }
            if(thanhtoan){
                thanhtoan.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "block";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                })
            }
            if(vanchuyen){
                vanchuyen.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "block";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                })
            }
        </script>

        <!-- N??t s??? c???a product_detail -->
        <script>
            const butTon = document.querySelector(".product-detail-under-top");
            if(butTon){
                butTon.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-big").classList.toggle("activeB");
                })
            }
        </script>

        <!-- Swiper JS -->
        <!-- <script src="swiper-bundle.min.js"></script> -->

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: true,
                centerSlide:'true',
                fade:'true',
                grabCursor: 'true',
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation:{
                    nextEl:".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints:{
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    950: {
                        slidesPerView: 3,
                    }
                }
            });
        </script>

        <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

    </body>

</html>
