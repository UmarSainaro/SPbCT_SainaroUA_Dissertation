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
                    <li><a href="users.php">Список зарегистрированных пользователей</a></li>
                    <li><a href="login.php">Выйти</a></li>
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
            <span class="sub-text">Администратор</span>
            <h1>Редактирование заказа</h1>
          </div>
        </div>
      </div>
    </div> 
    <div id="form">
    <div class="site-section site-block-3 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h2 class="font-weight-bold text-black mb-5">Редактировать</h2>
            <form class="bg-light" action="status.php" method="post" style="padding: 10px 10px; border-radius: 10px;">
            <div class="form-group">
                <label for="exampleFormControlInput1">Имя заказчика</label>
                <?php $conn = new mysqli("localhost", "root", "", "remont"); 

                        $sql = "SELECT  repair_id, nameclient, phone FROM repairs";
                        $sql2 = "SELECT  repair_id, phone FROM repairs";
                        $result2 = $conn->query($sql2);
                        $result = $conn->query($sql);

                        echo "<select name='name' class='form-control'><option>Выберите заказчика</option>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option>" . $row['nameclient'] . "</option>";
                        }

                        echo "</select>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleFormControlInput3'>Номер телефона</label>";
                        echo "<select name='phone' class='form-control'><option>Выберите заказчика</option>";
                        while ($row = mysqli_fetch_array($result2)) {
                            echo "<option>" . $row['phone'] . "</option>";
                        }
                        echo "</select>";
                        echo "</div>";
                        ?>
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
                <label for="exampleFormControlSelect1">Статус заказа</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                  <option>Принят</option>
                  <option>Выполняется работа</option>
                  <option>Завершен</option>
                </select>
              </div>
              <input type="submit" value="Сохранить" class="btn btn-success">
            </form>
          </div>
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
                  <li><a href="index.html">Главная</a></li>
                  <li><a href="otzyvy.html">Отзывы</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="about.html">О нас</a></li>
                  <li><a href="">Связаться с нами</a></li>
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
  <script src="js/jquery.js"></script>
  <script src="js/jquery.maskedinput.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</body>
</html>