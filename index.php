<?php
header("Content-Type: text/html; charset=utf-8");

$index_page = true;

require ("header.php");

?>

<!-- =-=-=-=-=-=-= HOME SLIDER =-=-=-=-=-=-= -->
<section class="tt-container">
  <div class="tt-banner">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        <!-- MAIN IMAGE --> 
        <img src="images/slider/4.jpg"   alt="Кристина Ваш личный парикмахер"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                    data-x="50"
                    data-y="100"
                    data-speed="1000"
                    data-start="500"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 1"> Добро пожаловать<br>на сайт Кристины Носенко 
        </div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                    data-x="50"
                    data-y="300"
                    data-speed="1000"
                    data-start="900"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 2"> сайт Вашего личного <br>
          парикмахера-стилиста </div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                    data-x="50"
                    data-y="430"
                    data-speed="1000"
                    data-start="1100"
                    data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">Посмотреть мои работы</a> </div>
      </li>
      
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        
        <!-- MAIN IMAGE --> 
        <img src="images/slider/1.jpg"   alt="Женские стрижки"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                            data-x="50"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"> Женская модная<br>
          стрижка </div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                            data-x="50"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2">женские стрижки <br>
          2016 года </div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="50"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">Посмотреть мои работы</a> </div>
      </li>
      
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        
        <!-- MAIN IMAGE --> 
        <img src="images/slider/2.jpg"   alt="Мужская стрижка"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                            data-x="50"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"> Мужская модная<br>
          стрижка </div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                            data-x="50"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2">все самые современные мужские стрижки <br>
          выполненные профессионально </div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="50"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">Посмотреть мои работы</a> </div>
      </li>
      <!-- SLIDE  -->
      <li 
                        data-transition="fade"
                        data-slotamount="7"
                        data-masterspeed="500"
                        data-saveperformance="on"
                        > 
        
        <!-- MAIN IMAGE --> 
        <img src="images/slider/3.jpg"   alt="Прически к торжеству"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                            data-x="50"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"> ПРИЧЕСКИ К ТОРЖЕСТВУ <br>
           </div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                            data-x="50"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2">СВАДЕБНЫЕ, К ВЫПУСКНЫМ, ЮБИЛЕЯМ <br>
           </div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="50"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">Посмотреть мои работы</a> </div>
      </li>
    </ul>
  </div>
</section>
<!-- =-=-=-=-=-=-= HOME SLIDER END =-=-=-=-=-=-= --> 

<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
  <!-- =-=-=-=-=-=-= ABOUT US =-=-=-=-=-=-= -->
  <section id="about-us" class="padding-top-120">
    <div class="container">
      <div class="section-title"><strong>Кристина Носенко</strong>
        <h1 class="heading bold">Парикмахер стилист в Комсомольск-на-Амуре</h1>
        <hr>
        <p> Привет! Я - Кристина Носенко.</p>
        <p> Парикмахер стилист. Профессионал своего дела, творческий человек, мастер с большим стажем.
          Создаю новые образы для людей, опираясь на их желания и на свои опыт и знания.
          Мастер, изменивший настроение, мироощущение и даже жизнь многих людей.
          Человек, впитавший опыт известных личностей из сферы парикмахерского искусства. </p>
      </div>
      <!-- End title-section -->
      
      <div class="row padding-top-30">
        <div class="col-md-6 col-md-push-5 col-md-offset-1"> 
          <!-- Accordion -->
          <dl class="accordion">
            <dt> <a class="active" href="#">Женская стрижка</a> </dt>
            <dd>
              <p>Все виды женских стрижек от классики до авангарда, с возможностью видоизменять укладку под определенную ситуацию. Удобные и красивые стрижки для любой длины и типа волос. При выборе я обязательно учитываю тип лица, индивидуальные особенности и выбранный образ.</p>
              <p>Немаловажным является соответствие привычному Вам имиджу.</p>
            </dd>
            <dt> <a class="" href="#">Хэйр стайлинг</a> </dt>
            <dd>
              <p>Для придания объема и красоты вашей шевелюре используйте мусс и/или гель для увеличения объема, а также спрей. Для придания текстуры стильным стрижкам использую крем, воск, пасту и помаду для стайлинга. Чтобы разгладить и слегка распрямить кудрявые от природы волосы использую бальзам для распрямления локонов. Для контроля над увлажненностью, кудрявостью и фиксацией использую помады и бальзамы, воски и фиксирующие спреи. Для придания блеска и сияния волосам использую блески для волос и специальные сыворотки. Для фиксации различной степени использую лаки для волос, специальные клеи и тому подобные средства.</p>
            <dt> <a class="" href="#">Уход за волосами</a> </dt>
            <dd>
              <p>Прогрессивные методы ухода за волосами. Ламинирование, био-ламинирование, глазирование, экранирование и кератиновый уход. Результат - здоровый блеск, сияние и гладкость.</p>
              <p>Лечение волос в салоне красоты позволяет приобрести волосам утраченную красоту и прелесть. Так же я буду рада предложить Вам домашний уход для сохранения красоты и здоровья Ваших волос.</p>
            </dd>
            <dt> <a class="" href="#">Мужская стрижка</a> </dt>
            <dd>
              <p>Истинному мужчине присущи ум, сила, благородство. Все эти прекрасные качества обязаны находить отражение и во внешнем его облике. Поэтому так важно подобрать прическу, которая бы соответствовала внутреннему миру, стилю в одежде и роду занятий.</p>
            </dd>
            <dt> <a class="" href="#">окрашивание волос</a> </dt>
            <dd>
              <p>Современные виды окрашивания: омбре, шатуш, балаяж, мажимеш, брондирование, однотонное окрашивание, традиционное, калифорнийское, контрастное мелирование.</p>
            </dd>
            <dt> <a class="" href="#">Приятные услуги </a> </dt>
            <dd>
              <p>Кроме прочего, могу предложить Вам профессиональный массаж головы, который помогает дополнительно стимулировать кровообращение, и тем самым воздействовать на ускорение роста волос</p>
            </dd>
          </dl>
          <!-- End Accordion --> 
          
        </div>
        <!-- end col-md-6 -->
        
        <div class="col-md-5 col-md-pull-7"> <img src="images/about.png"  alt="Кристина Носенко парикмахер"> </div>
        <!-- end col-md-5 --> 
        
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= ABOUT US END =-=-=-=-=-=-= --> 
  
  
  <!-- =-=-=-=-=-=-= FUN FACTS =-=-=-=-=-=-= -->
  <section class="section-padding-100 text-center">
  <h2 class="heading bold">мои достижения в текущем году</h2>
  <hr>

  <?php  
      $datetime2 = date_create('now');
      $datetime1 = date_create($datetime2->format('Y').'-01-01');
      $interval = date_diff($datetime1, $datetime2)->format('%a');
  ?>
  
    <div class="container">
      <div class="row"> 
        
        <!-- countTo -->
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div data-perc="<?php echo $interval*.4; ?>" class="statistic-percent">
            <div class="facts-icons black"> <span class="flaticon-hairdresser-covering-client-head-with-foam"></span> </div>
            <div class="fact"> <span class="percentfactor black"><?php echo $interval*.4 ; ?></span>
              <p class="black">Счастливых клиентов</p>
            </div>
            <!-- end fact --> 
          </div>
          <!-- end statistic-percent --> 
        </div>
        <!-- end col-xs-6 col-sm-3 col-md-3 --> 
        
        <!-- countTo -->
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div data-perc="<?php echo $interval*0.5; ?>" class="statistic-percent">
            <div class="facts-icons black"> <span class="flaticon-woman-sitting-waiting-on-a-hair-salon-chair-observing-the-wall-clock"></span> </div>
            <div class="fact"> <span class="percentfactor black"><?php echo $interval*0.5; ?></span>
              <p class="black">Благодарностей получено</p>
            </div>
            <!-- end fact --> 
          </div>
          <!-- end statistic-percent --> 
        </div>
        <!-- end col-xs-6 col-sm-3 col-md-3 --> 
        
        <!-- countTo -->
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div data-perc="<?php echo $interval*2.5; ?>" class="statistic-percent">
            <div class="facts-icons black"> <span class="flaticon-opened-scissors-variant"></span> </div>
            <div class="fact"> <span class="percentfactor black"><?php echo $interval*2.5; ?></span>
              <p class="black">Стрижек сделано</p>
            </div>
            <!-- end fact --> 
          </div>
          <!-- end statistic-percent --> 
        </div>
        <!-- end col-xs-6 col-sm-3 col-md-3 --> 
        
        <!-- countTo -->
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div data-perc="<?php echo $interval*3; ?>" class="statistic-percent">
            <div class="facts-icons black"> <span class="flaticon-one-comb"></span> </div>
            <div class="fact"> <span class="percentfactor black"><?php echo $interval*3; ?></span>
              <p class="black">Причесок</p>
            </div>
            <!-- end fact --> 
          </div>
          <!-- end statistic-percent --> 
        </div>
        <!-- end col-xs-6 col-sm-3 col-md-3 --> 
        
      </div>
      <!-- End row --> 
    </div>
    <!-- End container --> 
  </section>
  <!-- =-=-=-=-=-=-= FUN FACTS END =-=-=-=-=-=-= --> 
  
  <?php   require_once ("testimonils.php"); ?>

  <!-- =-=-=-=-=-=-= OUR SERVICES =-=-=-=-=-=-= -->
  <section id="our-services" class="padding-top-120">
    <div class="container">
      <div class="section-title"> <strong>МОИ УСЛУГИ</strong>
        <h1 class="heading bold">ОБЛАСТИ В КОТОРЫХ Я ЭКСПЕРТ</h1>
        <hr>
        <p>     </p>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="row">
            <div class="services-area padding-top-30">
              <div class="col-md-4 col-sm-6 col-xs-12 without-padding">
                <div class="services-left">
                  <ul class="services-list">
                    <!-- feature -->
                    <li>
                      <div class="left-box">
                      <a class="iconbox" href="#">
                      	<i class="flaticon-scissor-and-comb"></i>
                      </a>
                        <div class="services-content">
                          <h4>СТРИЖКИ</h4>
                          <p>    </p>
                        </div>
                        <!-- end services-content --> 
                      </div>
                      <!-- end left-box --> 
                    </li>
                    
                    <!-- feature -->
                    <li>
                      <div class="left-box">
                       <a class="iconbox" href="#">
                       	<i class="flaticon-razors"></i>
                       </a>
                        <div class="services-content">
                          <h4>УХОД ЗА КОЖЕЙ</h4>
                          <p>    </p>
                        </div>
                        <!-- end services-content --> 
                      </div>
                      <!-- end left-box --> 
                    </li>
                    
                    <!-- feature -->
                    <li>
                      <div  class="left-box">
                       <a class="iconbox" href="#">
                           <i class="flaticon-hairdresser-washing-the-hair-of-a-client-with-bubbles-shampoo"></i>
                       </a>
                        <div class="services-content">
                          <h4>УСЛУГИ </h4>
                          <p>    </p>
                        </div>
                        <!-- end services-content --> 
                      </div>
                      <!-- end left-box --> 
                    </li>                
                  </ul>
                  <!-- end services-list --> 
                </div>
                <!-- end left-features-service --> 
              </div>
              <!--  end col-md-3 --> 
              
              <!-- feature image -->
              <div class="col-md-4 col-sm-4 col-xs-12 hidden-sm">
                <div class="main-img">
                 <img alt="Крисина парикмахер-стилист" src="images/services.png">
                </div>
                <!-- end features-services-img --> 
              </div>
              <!-- end col-md-4 -->
              
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="right-services without-padding">
                  <ul class="services-list">
                    
                    <!-- feature -->
                    <li>
                      <div class="right-box"> <a class="iconbox" href="#"><i class="flaticon-hairdresser-drying-the-hair-of-a-client-sitting-on-a-chair-in-front-of-him"></i></a>
                        <div class="services-content">
                          <h4>Сушка волос</h4>
                          <p>    </p>
                        </div>
                      </div>
                    </li>
                    
                    <!-- feature -->
                    <li>
                      <div class="right-box"> <a class="iconbox" href="#"><i class="flaticon-hair-straightener-on-long-female-hair"></i></a>
                        <div class="services-content">
                          <h4>Выпрямление волос</h4>
                          <p>    </p>
                        </div>
                      </div>
                    </li>
                    
                    <!-- feature -->
                    <li>
                      <div class="right-box"> <a class="iconbox" href="#"><i class="flaticon-hairstylist-with-scissors-and-spray-bottle-in-hands"></i></a>
                        <div class="services-content">
                          <h4>МУЖСКАЯ СТРИЖКА</h4>
                          <p>    </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!-- end services-list --> 
                  
                </div>
                <!-- end right-features-service --> 
              </div>
              <!-- end col-md-3 --> 
            </div>
            <!-- end row --> 
          </div>
          <!-- end features-service --> 
        </div>
        <!-- end col-md-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
    
  </section>
  <!-- =-=-=-=-=-=-= SERVICES END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= PARALLEX =-=-=-=-=-=-= -->
  <section data-stellar-background-ratio="0" class="parallex quote-bg section-padding text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> <em>Вам понравилось?</em>
          <h2>Запишись на стрижку заранее!</h2>
          <a class="section-scroll btn btn-lg btn-clean" href="appointment.php">запись он-лайн</a> </div>

        <!-- end col-md-8 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= PARALLEX END =-=-=-=-=-=-= -->
  
  
  <!-- =-=-=-=-=-=-= PRICING =-=-=-=-=-=-= -->
  <section class="section-padding" id="rates">
    <div class="container">
    <div class="section-title"> <strong>ВИДЫ РАБОТ & ЦЕНЫ</strong>
        <h1 class="heading bold">РАБОТАЮ, ПОКА ВЫ НЕ ОСТАНЕТЕСЬ ДОВОЛЬНЫ</h1>
        <hr>
        <p>  </p>
      </div>
      <div class="row">
      <div class="rates-pricing padding-top-30">
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
       	<div class="styles">
          <div class="col-md-4 col-sm-4">
          <div class="popular-styles">
            <a class="tt-lightbox" href="images/styles/1.jpg"><img alt="" class="img-responsive" src="images/styles/1.jpg">  </a>  
          </div>  
           </div>
           <div class="col-md-4  col-sm-4">
          <div class="popular-styles">
            <a class="tt-lightbox" href="images/styles/2.jpg"><img alt="" class="img-responsive" src="images/styles/2.jpg">  </a>  
          </div>  
           </div>
           <div class="col-md-4 col-sm-4">
          <div class="popular-styles">
            <a class="tt-lightbox" href="images/styles/3.jpg"><img alt="" class="img-responsive" src="images/styles/3.jpg">  </a>  
          </div>  
           </div>
           <div class="col-md-4 col-sm-4">
          <div class="popular-styles">
            <a class="tt-lightbox" href="images/styles/4.jpg"><img alt="" class="img-responsive" src="images/styles/4.jpg">  </a>  
          </div>  
           </div>
           <div class="col-md-4 col-sm-4">
          <div class="popular-styles">
            <a class="tt-lightbox" href="images/styles/5.jpg"><img alt="" class="img-responsive" src="images/styles/5.jpg">  </a>  
          </div>  
           </div>
           <div class="col-md-4 col-sm-4">
          <div class="popular-styles">
            <a class="tt-lightbox" href="images/styles/6.jpg"><img alt="" class="img-responsive" src="images/styles/6.jpg">  </a>  
          </div>  
           </div>
           
           </div>
           
         
         </div>           
          
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
         <ul class="price_ul">
                            <li class="price_list">
                                <div class="price_title">
                                    Женская стрижка
                                </div>
                                <div class="price_right">
                                    от 800 р. - 1200 р.
                                </div>
                            </li>
                            <li class="price_list">
                                <div class="price_title">
                                    Современная мужская стрижка
                                </div>
                                <div class="price_right">
                                    от 500 р. - 800 р.
                                </div>
                            </li>
                            <li class="price_list">
                                <div class="price_title">
                                    Комплекс ухода и массаж головы
                                </div>
                                <div class="price_right">
                                    от 1000р.
                                </div>
                            </li>
                            <li class="price_list">
                                <div class="price_title">
                                    Окрашивание и стрижка
                                </div>
                                <div class="price_right">
                                    от 3000 р. - 5000 р.
                                </div>
                            </li>
                            
                            <li class="price_list">
                                <div class="price_title">
                                    Свадебная стрижка и укладка
                                </div>
                                <div class="price_right">
                                   от 3000 р. - 6000 р.
                                </div>
                            </li>
                        </ul>
        </div>
       </div> 
      </div>
    </div>
  </section>
  <!-- =-=-=-=-=-=-= PRICING END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= OPENING HOURS SECTION =-=-=-=-=-=-= -->
  <section class="section-padding parallex" id="working-hours">
    <div class="container">
      <div class="section-title-left white"> <strong>ЧАСЫ РАБОТЫ</strong>
        <h1 class="heading bold white">работаю, пока вы не останетесь довольны</h1>
        <hr class="white">
        <p class="white"> Пожалуйста, запишитесь заранее.
          Чтобы вам не пришлось ожидать в очереди на стрижку ) </p>
          <a class="section-scroll btn btn-lg btn-clean" href="appointment.php">запись он-лайн</a>

      </div>

      <div class="row">
        <div class="working-area  padding-top-30">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="opening-hour-grid">
                  <h4>ПН</h4>
                  <span>11:00-19:00</span> </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="opening-hour-grid">
                  <h4>ВТ</h4>
                  <span>11.00-19.00</span> </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="opening-hour-grid">
                  <h4>СР</h4>
                  <span>11:00-19:00</span> </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="opening-hour-grid">
                  <h4>ЧТ</h4>
                  <span>11:00-19:00</span> </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="opening-hour-grid">
                  <h4>ПТ</h4>
                  <span>11:00-19:00</span> </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="opening-hour-grid">
                  <h4>СБ+ВС</h4>
                  <span>11:00-19:00</span> </div>
              </div>
            </div>
          </div>
          <!-- End col-md-6 -->
          <div  class="col-md-4"> </div>
            
          <!-- End col-md-6 --> 
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= OPENING HOURS SECTION  END =-=-=-=-=-=-= --> 
  
  
  <!-- =-=-=-=-=-=-= PORTFOLIO =-=-=-=-=-=-= -->
  <section  class="padding-top-120" id="portfolio">
    <div class="container">
      <div class="section-title"><strong>МОЕ ПОРТФОЛИО</strong>
        <h1 class="heading bold">НЕКОТОРЫЕ ИЗ МОИХ РАБОТ</h1>
        <hr>
      </div>
      <!-- End title-section --> 
    </div>
    <!-- end container -->
    
    <div class="portfolio-container text-center">
      <ul id="filter" class="list-inline filter-square">
        <li class="active" data-group="all">Все</li>
        <li data-group="woman">Женская стрижка</li>
        <li data-group="man">Мужская стрижка</li>
        <li data-group="color">Окрашивание</li>
        <li data-group="wedding">Свадебные</li>
      </ul>
      <ul id="portfolio-grid" class="four-column hover-four">
        <li class="portfolio-item" data-groups='["all", "woman"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/9.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, укладка</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/9.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "man"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/12.jpg" alt="Мужская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Мужская стрижка</h3>
              <a href="#" class="links">Модельная стрижка</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/12.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

        <li class="portfolio-item" data-groups='["all", "woman","color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/10.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/10.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

        <li class="portfolio-item" data-groups='["all", "woman"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/11.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, укладка</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/11.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>  


        <li class="portfolio-item" data-groups='["all", "woman", "color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/13.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/13.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>


        <li class="portfolio-item" data-groups='["all", "woman", "color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/14.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/14.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

        <li class="portfolio-item" data-groups='["all", "man"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/15.jpg" alt="Детская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Детская стрижка</h3>
              <a href="#" class="links">Детская стрижка</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/15.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

        <li class="portfolio-item" data-groups='["all", "woman", "color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/16.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/14.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

        <li class="portfolio-item" data-groups='["all", "woman", "color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/17.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/14.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

        <li class="portfolio-item" data-groups='["all", "woman", "color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/18.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/14.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

        <li class="portfolio-item" data-groups='["all", "woman", "color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/19.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/14.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>


        <li class="portfolio-item" data-groups='["all", "woman", "color"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="images/portfolio/20.jpg" alt="Женская стрижка">
            <div class="portfolio-info">
              <h3 class="project-title">Женская стрижка</h3>
              <a href="#" class="links">стрижка, окрашивание</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="images/portfolio/14.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>

       </ul>
    </div>
    <!-- portfolio-container --> <!-- end portfolio-content --> 
    <!-- end portfolio-section --> 
  </section>
  <!-- =-=-=-=-=-=-= PORTFOLIO END =-=-=-=-=-=-= -->
    

  
  <!--MAP-->
  <section  class="padding-top-120" id="find_on_map">
    <div class="container">
      <div class="section-title"><strong>РАСПОЛОЖЕНИЕ</strong>
        <h1 class="heading bold">Комсомольск-на-Амуре, Ленинградская, 56, студия Мандарин</h1>
        <hr>
      </div>
      <!-- End title-section --> 
    </div>
    <!-- end container -->
    <section id="map"></section>
  </section>
  <!--/MAP--> 



<?php require ("footer.php"); ?>