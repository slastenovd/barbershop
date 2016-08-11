<?php
header("Content-Type: text/html; charset=utf-8");
require ("header.php");
?>

<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION =-=-=-=-=-=-= -->
  <section id = "welcome" class="page-heading breadcrumb-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading_content text-center">
            <h1><span>НАПИШИТЕ МНЕ</span></h1>
            <div class="bredcrumbs"> <a href="index.php">Главная</a> <span>/</span> <a href="#">Написать</a> </div>
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
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> <em>Спасибо!</em>
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
  
  <!-- =-=-=-=-=-=-= Contact Us =-=-=-=-=-=-= -->
  <section id="contact" class="padding-top-120">
    <div class="container"> 
      
      <!-- row -->
      <div class="row"> 
        
        <!-- col-md-8 -->
        <div class="col-md-8 col-sm-8"> 
          
          <!-- row -->
          <div class="row"> 
            
            <!-- form -->
            <form id="contactMessageForm" method="post">
              
              <!-- col-md-6 -->
              <div class="col-md-6"> 
                
                <!-- contact-name -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ваше имя" name="contactname" id="contact-name" required>
                </div>
                <!-- /contact-name --> 
                
              </div>
              <!-- /col-md-6 --> 
              
              <!-- col-md-6 -->
              <div class="col-md-6"> 
                
                <!-- contact-email -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ваша электронная почта или телефон" name="contactemail" id="contact-email" required>
                </div>
                <!-- /contact-email --> 
                
              </div>
              <!-- /col-md-6 --> 
              
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                
                <!-- contact-subject -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Тема сообщения" name="contactsubject" id="contact-subject">
                </div>
                <!-- /contact-subject --> 
                
              </div>
              <!-- /col-md-12 --> 
              
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                
                <!-- contact-message -->
                <div class="form-group">
                  <textarea rows="10" class="form-control" placeholder="Ваше сообщение" name="contactmessage" id="contact-message" required></textarea>
                </div>
                <!-- /Contact Message --> 
                
              </div>
              <!-- /col-md-12 --> 
              
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                
                <!-- Submit Button -->
                <div class="form-group">
                  <button type="submit"  class="btn btn-primary"> Отправить сообщение </button>
                </div>
                <br><br>
                <!-- /Submit Button --> 
                
              </div>
              <!-- /col-md-12 -->
              
            </form>
            <!-- /form --> 
            
          </div>
          <!-- /row --> 
        </div>
        <!-- /col-md-8 --> 
        
        <!-- col-md-4 -->
        <div class="col-md-4 col-sm-4"> 
          
          <!-- contact-info -->
          <div class="contact-info">
            <ul>
              <li> <strong>Почтовый адрес :</strong>
                <p> 56, Ленинградская <br />
                  Комсомольск-на-Амуре, 681000 </p>
              </li>
              <li> <strong>Телефон :</strong>
                <p> <a href="tel:0011234567890" title="Call Us">8 924 114 60-22</a> <br />
              </li>
              <li> <strong>E-mail :</strong>
                <p>  <a href="mailto:kristina-hairstylist@mail.ru">kristina-hairstylist@mail.ru</a> <br />
              </li>
            </ul>
          </div>
          <!-- /contact-info --> 
          
        </div>
        <!-- /col-md-4 --> 
        
      </div>
      <!-- /row --> 
      
    </div>
    <!-- /.container --> 
    <!--MAP-->
    <section  class="padding-top-0" id="find_on_map">
      <section id="map"></section>
    </section>
    <!--/MAP-->     
  </section>
  <!-- =-=-=-=-=-=-= Contact Us  END =-=-=-=-=-=-= --> 

<?php

require ("footer.php");

?>