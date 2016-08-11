  <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
  
  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row"> 
          <!--About-->
          <div class="col-md-3 col-sm-6 about">
            <h4>о сайте</h4>
            <p>Сайт профессионального парикмахера-стилиста Кристины Носенко, г.Комсомольск-на-Амуре. Вся используемая продукция и инструменты сертифицированы. Все предложения и цены на сайте носят ознакомительный характер. Не является публичной офертой.</p>
          </div>
          
          <!--Latest Post-->
          <div class="col-md-3 col-sm-6 post">
            <h4>Последние новости</h4>
            <ul class="list-inline ab">
              <li> <a href="#">Расширен раздел портфолио</a> <span>06 Июль,2016  | 0 Comments</span> </li>
              <li> <a href="#">Теперь можно записаться он-лайн</a> <span>05 Июль,2016  | 0 Comments</span> </li>
            </ul>
          </div>
          
          <!--Contact-->
          <div class="col-md-3 col-sm-6 contact">
            <h4>Контакты</h4>
            <ul class="list-inline">
              <li><span><i class="fa fa-map-marker"></i></span> Комсомольск-на-Амуре, Ленинградская, 56</li>
              <li><span><i class="fa fa-phone"></i></span> 8 924 114 60-22 </li>
              <li><span><i class="fa fa-envelope"></i></span> kristina-hairstylist@mail.ru </li>
            </ul>
          </div>
          
          <!--Newsletter-->
          <div class="col-md-3 col-sm-6 newsletter">
            <h4>Подписка</h4>
            <p>Подпишитесь на рассылку по проводимым акциям.</p>
            <form id="subscribeForm"  method="post">
              <div class="input-group">
                <input placeholder="Email" name="email" type="email" required class="form-control">
                <span class="input-group-btn">
                <button type="submit"  class="btn btn-primary btn-sm">Подписать!</button>
                </span> </div>
              <!-- /input-group -->
            </form>
            
            <!--Footer Social Icon-->
            <div class="footer-social">
              <ul> <?php require ("social.php"); ?> </ul>
            </div>
          </div>
        </div>
        <!--/.row--> 
      </div>
      <!--/.container--> 
    </div>
    <!--/.inner-footer--> 
    
    <!-- Start Sub-footer-->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 copyright small">
            <p>Разработано &copy; 2016 Дмитрий Сластенов <i class="fa fa-phone"></i> 8 962 297 61-46 </p>
          </div>
          
          <!-- Footer Menu-->
          <div class="col-md-6 col-sm-6 footer-menu">
            <ul>
              <li><a href="#header_top">В начало</a></li>
              <li><a href="index.php#about-us">Обо мне</a></li>
              <li><a href="index.php#our-services">Услуги</a></li>
              <li><a href="contact.php">Напишите мне</a></li>
            </ul>
          </div>
          <!-- End Footer Menu--> 
        </div>
        <!--/.row--> 
      </div>
      <!--/.container--> 
    </div>
    <!-- End Sub-footer--> 
  </footer>


  <!-- Modal -->
  <div class="modal fade" id="afterSubscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Спасибо за то что подписались!</h4>
        </div>
        <div class="modal-body">
          Ваша Кристина ))
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
    
  <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= --> 
</div>
<!-- =-=-=-=-=-=-= PAGE SECTION END =-=-=-=-=-=-= --> 
<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.smoothscroll.js"></script> 
<script type="text/javascript"  src="js/easing.js"></script> 
<script src="js/jquery.stellar.min.js"></script> 
<script src="js/jquery.countTo.js"></script> 
<script src="js/jquery.waypoints.js"></script> 
<script src="js/jquery.appear.min.js"></script> 
<script src="js/jquery.shuffle.min.js"></script> 
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script type="text/javascript" src="js/hover.min.js"></script> 
<!-- jQuery REVOLUTION Slider  --> 
<script src="js/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script src="js/revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/custom.js"></script>

<!-- Map Settings For Contact Page Only  --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn1Xgy9UZadmFt3UCALlVN5OnFfOagoqA"></script> 
<script type="text/javascript" src="js/map-settings.js"></script> 
<!-- Map Settings For Contact Page Only  -->
<script src="js/jquery.form.min.js"></script> 

</body>
</html>
