<!DOCTYPE html>
<html lang="en">
  <head>
    <title>МДС</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link type="image/x-icon" href="images/apple-touch-icon.png" rel="shortcut icon">
    <link type="Image/x-icon" href="images/apple-touch-icon.png" rel="icon">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="https://api.whatsapp.com/send/?phone=79312636763&text&type=phone_number&app_absent=0" class="p-2 pl-0"><span class="icon-whatsapp"></span></a>
              <a href="https://www.instagram.com/mdsmetall/?utm_medium=copy_link" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">89312636763@mail.ru</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+7 (931) 263-67-63</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="mb-0 site-logo"><a href="index.php"><img src="images/remont.png" width="50" height="50"></a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="catalogue.php">Каталог</a></li>
                    <li><a href="otzyvy.php">Отзывы</a></li>
                    <li><a href="login.php">Личный кабинет</a></li>
                    <li><a style="color: white;" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Заказать ремонт</a></li>
                    <style>
                      html {
                        scroll-behavior: smooth;
                      }
                      p {
                        white-space: pre-line;
                      }
                      </style>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay inner-page" style="background-image: url(images/fon.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="sub-text">Прайс-лист</span>
            <h1>Наши услуги</h1>
          </div>
        </div>
      </div>
    </div>  
    
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true"> 
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Заказать ремонт</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
          <form class="bg-light" action="email.php" method="post" style="padding: 10px 10px; border-radius: 10px;">
            <div class="form-group">
                <label for="exampleFormControlInput1">Ваше имя</label>
                <input type="text" id="exampleFormControlInput1" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput2">Адрес электронной почты</label>
                <input type="text" id="exampleFormControlInput1" placeholder="name@example.com" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput3">Номер телефона</label>
                <input id="phone" name="phone" type='text' onkeypress='validate(event)' class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Модель телефона</label>
                <select class="form-control" id="exampleFormControlSelect1" name="smartphone">
                  <option>iPhone 8</option>
                  <option>iPhone 8 Plus</option>
                  <option>iPhone X</option>
                  <option>iPhone XS</option>
                  <option>iPhone XS Max</option>
                  <option>iPhone 11</option>
                  <option>iPhone 11 Pro</option>
                  <option>iPhone 11 Pro Max</option>
                  <option>iPhone SE (2020)</option>
                  <option>iPhone 12</option>
                  <option>iPhone 12 Mini</option>
                  <option>iPhone 12 Pro</option>
                  <option>iPhone 12 Pro Max</option>
                  <option>iPhone 13</option>
                  <option>iPhone 13 Mini</option>
                  <option>iPhone 13 Pro</option>
                  <option>iPhone 13 Pro Max</option>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Вид ремонта</label>

                  <?php $conn = new mysqli("localhost", "root", "", "remont"); 

                        $sql = "SELECT  remont_id, nameremont, price FROM types";
                        $result = $conn->query($sql);

                        echo "<select name='remont' class='form-control'><option>Что нужно?</option>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option>" . $row['nameremont'] . " - " . $row['price'] . " руб." . "</option>";
                        }

                        echo "</select>";
                        ?>
                </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">День</label>
                <select class="form-control" id="exampleFormControlSelect1" name="callday">
                  <option>Понедельник</option>
                  <option>Вторник</option>
                  <option>Среда</option>
                  <option>Четверг</option>
                  <option>Пятница</option>
                </select>
                </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Время звонка</label>
                <input id="time" name="timecall" type='text' class="form-control" placeholder="Например: 13:30">
              </div>
              <input type="submit" value="Отправить" class="btn btn-success">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
        <?php $conn = new mysqli("localhost", "root", "", "remont");

            if($conn->connect_error){
                die("Ошибка: " . $conn->connect_error);
            }
            $sql = "SELECT  remont_id, nameremont, price FROM types";
            if($result = $conn->query($sql)){
                echo "<table class='table table-hover'><tr><th>Ремонт</th><th>Стоимость</th></tr>";
            foreach($result as $row){
                echo "<tr>";
                    echo "<td>" . $row["nameremont"] . "</td>";
                    echo "<td>" . $row["price"] . " руб." . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else{
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
        ?>
        </div>

      </div>
    </div>
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Оформить заказ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <form class="bg-light" action="ordersend.php" method="post" style="padding: 10px 10px; border-radius: 10px;">
            
              <div class="form-group">
                <label for="exampleFormControlInput4">Ваше имя</label>
                <input type="text" id="exampleFormControlInput4" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput5">Адрес электронной почты</label>
                <input type="text" id="exampleFormControlInput5" placeholder="name@example.com" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput6">Номер телефона</label>
                <input id="phone" class="tel" name="phone" type='text' class="form-control">
                <script>
                  window.addEventListener("DOMContentLoaded", function() {
                      [].forEach.call( document.querySelectorAll('.tel'), function(input) {
                      var keyCode;
                      function mask(event) {
                          event.keyCode && (keyCode = event.keyCode);
                          var pos = this.selectionStart;
                          if (pos < 3) event.preventDefault();
                          var matrix = "+7 (___) ___ ____",
                              i = 0,
                              def = matrix.replace(/\D/g, ""),
                              val = this.value.replace(/\D/g, ""),
                              new_value = matrix.replace(/[_\d]/g, function(a) {
                                  return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                              });
                          i = new_value.indexOf("_");
                          if (i != -1) {
                              i < 5 && (i = 3);
                              new_value = new_value.slice(0, i)
                          }
                          var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                              function(a) {
                                  return "\\d{1," + a.length + "}"
                              }).replace(/[+()]/g, "\\$&");
                          reg = new RegExp("^" + reg + "$");
                          if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                          if (event.type == "blur" && this.value.length < 5)  this.value = ""
                      }

                      input.addEventListener("input", mask, false);
                      input.addEventListener("focus", mask, false);
                      input.addEventListener("blur", mask, false);
                      input.addEventListener("keydown", mask, false)

                    });

                  });
                </script>
              </div>
            
              <div class="form-group">
                <label for="exampleFormControlInput4">Товар</label>
                <select id="tov" name="tovar" class="form-control">
                  <option >Откатные ворота</option>
                  <option >Распашные ворота</option>
                  <option >Калитка</option>
                  <option >Навес</option>
                  <option >Перила</option>
                  <option >Мебель</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput5">Адрес доставки</label>
                <input type="text" id="exampleFormControlInput5" name="address" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlSelect1">Выберите цвет</label>
                <select class="form-control" id="exampleFormControlSelect1" name="color">
                  <option>Серый</option>
                  <option>Черный</option>
                  <option>Золотой</option>
                  <option>Белый</option>
                </select>
              </div>
              <input type="submit" value="Отправить" class="btn btn-success">
            </form>
          </div>
        </div>
      </div>
    </div>                   
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Навигация</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Главная</a></li>
                  <li><a href="otzyvy.php">Отзывы</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="about.php">О нас</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Связаться с нами</a></li>
                </ul>
              </div>
            </div>

            
          </div>
          <div class="col-lg-4">
           

      
            
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0">

            

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Связаться с нами</h3>

                <div>
                  <a href="https://api.whatsapp.com/send/?phone=79312636763&text&type=phone_number&app_absent=0" class="pl-3 pr-3"><span class="icon-whatsapp"></span></a>
                  <a href="https://www.instagram.com/mdsmetall/?utm_medium=copy_link" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </div>
              </div>
            </div>


          </div>
          
        </div>

          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.maskedinput.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>