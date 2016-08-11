<?php
header("Content-Type: text/html; charset=utf-8");
require ("header.php");
?>


<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
<!-- =-=-=-=-=-=-= PAGE HEADING SECTION =-=-=-=-=-=-= -->
  <section class="page-heading breadcrumb-image" id="welcome">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading_content text-center">
            <h1><span>ЗАПИСЬ ОН-ЛАЙН</span></h1>
            <div class="bredcrumbs"> <a href="index.php">Главная</a> <span>/</span> <a href="#">ЗАПИСЬ ОН-ЛАЙН</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION END =-=-=-=-=-=-= -->

  <!-- =-=-=-=-=-=-= SECTION THANKS =-=-=-=-=-=-= -->
  <section id="thanks" data-stellar-background-ratio="0" class="parallex quote-bg section-padding text-center" style="display: none">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> <em>Спасибо за то что записались!</em>
          <h2>Я свяжусь с Вами в ближайшее время!</h2>
          <a class="section-scroll btn btn-lg btn-clean" href="index.php">на главную</a> </div>

        <!-- end col-md-8 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= SECTION THANKS END =-=-=-=-=-=-= -->
  
  <!-- =-=-=-=-=-=-= SECTION ERROR SENDING A MESSAGE =-=-=-=-=-=-= -->
  <section id="error_sending" data-stellar-background-ratio="0" class="parallex quote-bg section-padding text-center" style="display: none">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">  <h2>Ой... Ошибка отправки...</h2>
        <p>Не удалось отправить сообщение. Вероятно, какая то временная ошибка на сервере... Попробуйте позже или свяжитесь со мной по телефону. Он находится вверху странички!</p>
          <a class="section-scroll btn btn-lg btn-clean" href="index.php">на главную</a> </div>

        <!-- end col-md-8 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= SECTION ERROR SENDING A MESSAGE END =-=-=-=-=-=-= -->
  
  <!-- =-=-=-=-=-=-= APPOINMENT SECTION =-=-=-=-=-=-= -->
  <section class="padding-top-120" id="appointment">
    <div class="container">
      
      <div class="row ">
        <div class="appointment-area">
          <div class="col-md-7">
            <form id="appointmentForm" class="appointment-form" method="post">
              <ul class="row">
                <li class="col-sm-12">
                  <label>Ваше имя</label>
                  <input type="text" placeholder="Введите Ваше имя" class="form-control" name="contactname" required>
                </li>
                <li class="col-sm-12">
                  <label>Номер телефона</label>
                  <input type="text" placeholder="Номер чтобы связаться с Вами" class="form-control" name="phone" required>
                </li>
                <li class="col-sm-12">
                  <label>Предпочитаемая дата</label>
                  <input type="text" placeholder="Укажите дату и время" class="form-control datepicker" value="" name="date" data-date-format="dd.mm.yy">
                </li>
                <li class="col-sm-12">
                  <label>Сообщение</label>
                  <textarea placeholder="Оставьте Ваше сообщение" class="form-control" cols="7" rows="9" name="contactmessage"></textarea>
                </li>
              </ul>
              <div class="appintment-form-btm">
                <input type="submit" class="btn btn-primary" value="Записаться">
              </div>
            </form>
          </div>
          <!-- End col-md-6 -->
          
          <div  class="col-md-5 img-history">
            <figure> <img alt="" src="images/appionment.png"> </figure>
          </div>
          <!-- End col-md-6 --> 
        </div>
      </div>
      <!-- End row --> 
    </div>
    <?php   require_once ("testimonils.php"); ?>

    <!--MAP-->
    <section  class="padding-top-0" id="find_on_map">
      <section id="map"></section>
    </section>
    <!--/MAP--> 
  </section>
  <!-- =-=-=-=-=-=-= APPOINMENT SECTION  END =-=-=-=-=-=-= --> 



<?php

require ("footer.php");

?>