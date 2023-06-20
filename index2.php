﻿
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viet Tour</title>
    <link rel="icon" href="./assets/img/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/boostrap/bootstrap-4.5.2.css">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/responsive.css">
    <script src="./assets/js/main.js"></script>

</head>

<body>
  
    <!-- Main -->
    <!-- Done responsive -->
    <div class="app">
        <header class="header">
            <nav class="navbar navbar-expand-md ">

                <a class="navbar-brand" href="#">
                    <img src="./assets/img/Logo.png" class="logo" alt="logo" width="80" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon">
                    <i class="fas fa-bars bar-icon"></i>
                  </span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav navbar-main-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#trend-places">Địa điểm</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#list-category-tours">Thể loại</a>
                        <ul class="subnav">
                          <li><a href="./list-tour.php" class="subnav-link"><i class="fas fa-chevron-right"></i>Văn hóa lịch sử</a></li>
                          <li><a href="./list-tour.php" class="subnav-link"><i class="fas fa-chevron-right"></i>Sinh thái khám phá</a></li>
                          <li><a href="./list-tour.php" class="subnav-link"><i class="fas fa-chevron-right"></i>Nghỉ dưỡng</a></li>
                        </ul>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#list-endow">Giá ưu đãi</a>
                      </li>    
                    </ul>

                    <!-- Đăng xuất -->
                    <ul class="navbar-nav user-control">
                      <li class="nav-item logout-text">
                        <a href="./log-out.php" class="nav-link logout-link" >Đăng xuất</a>
                      </li>
                      
                      <!-- User -->
                      <li class="nav-item user">
                        <i class="far fa-user"></i>
                        <div class="user-options">
                          <div class="user__setting"><i class="fas fa-user-cog"></i>Sửa thông tin</div>
                          <!-- <div class="user__logout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</div> -->
                        </div>
                      </li>
                    </ul>

                  </div>  
                  <button class="show-nav-btn">
                    <span class="navbar-toggler-icon">
                      <i class="fas fa-bars bar-icon"></i>
                    </span>
                  </button>
                  

            </nav>
        </header>

        <!-- Search input -->
        <div class="heading-content">
          <form class="form-inline form-search content-section" action="/action_page.php">
            <input class="form-control mr-sm-2 " id="search-input" type="text" placeholder="Nơi bạn muốn đến ...">
            <label class="fas fa-search search-icon" for="search-input"></label>

            <!-- Suggest form -->
            <div class="suggest-form content-section">
                <a href="./list-tour.php" class="suggest__item">
                  <img src="./assets/img/cu-lao-cham-da-nang.jpg" alt="" class="suggest__img">
                  <div class="suggest__text">
                      <h3 class="suggest__city">Đà Nẵng</h3>
                      <p class="suggest__tour">Cù Lao Chàm</p>
                  </div>
                </a>

                <a href="./list-tour.php" class="suggest__item">
                  <img src="./assets/img/bai-dinh-ninh-binh.jpg" alt="" class="suggest__img">
                  <div class="suggest__text">
                      <h3 class="suggest__city">Ninh Bình</h3>
                      <p class="suggest__tour">Chùa Bái Đính</p>
                  </div>
                </a>

                  <a href="./list-tour.php" class="suggest__item">
                  <img src="./assets/img/ban-gioc-cao-bang.jpg" alt="" class="suggest__img">
                  <div class="suggest__text">
                      <h3 class="suggest__city">Cao Bằng</h3>
                      <p class="suggest__tour">Thác Bản Giốc</p>
                  </div>
                </a>
            </div>
          </form> 

          <!-- Giới thiệu -->
          <div class="intro-text">
              <h1>Chào mừng bạn đến với Viet Tour</h1>      
              <!--<p>Đăng ký ngay để trải nghiệm những tour du lịch hấp dẫn nhất</p>
              <a href="./app/register.html" class="btn register-btn">Đăng ký ngay</a>-->
          </div>
        </div>

        <!-- Main content -->
        <div class="container content-section main-content">
          <div class="content-section">
            <h1 class="msg-text text-center">Cuộc đời là những chuyến đi 
              <br/>
              <i class="sub-msg-text">Biết được biển rộng bao nhiêu nếu thuyền cứ mãi bám bờ ?</i>
              <br/>
              <!--<a href="./app/log-in.html" class="login-link login-link--active">Đăng nhập</a>
              <span>hoặc</span>
              <a href="./app/register.html" class="register-link register-link--active">Đăng ký </a>
              <span> ngay khám phá cùng Viet Tour</span>-->
            </h1>
            <!-- Slider -->
            <div class="slider">  
              <div id="slider" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#slider" data-slide-to="0" class="active"></li>
                  <li data-target="#slider" data-slide-to="1"></li>
                  <li data-target="#slider" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./assets/img/ho-guom.jpg" alt="Hà Nội" width="1100" height="500" class="slider__img">
                    <div class="carousel-caption">
                      <h3>Hà Nội</h3>
                      <p>Trái tim thủ đô</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/slider-1.jpg" alt="Nha Trang" width="1100" height="500" class="slider__img">
                    <div class="carousel-caption">
                      <h3>Nha Trang</h3>
                      <p>Bờ cát trắng tựa nắng vàng</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/tay-nguyen.jpg" alt="Tây Nguyên" width="1100" height="500" class="slider__img">
                    <div class="carousel-caption">
                      <h3>Tây Nguyên</h3>
                      <p>Vùng đất đỏ tiếng cồng chiêng</p>
                    </div>   
                  </div>
                </div>
                <a class="carousel-control-prev" href="#slider" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slider" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div> 
          </div> 

          <!-- Địa điểm nổi bật -->
          <div class="content-section" id="trend-places">
            <h1 class="msg-text text-center">Tour du lịch nổi bật
              <br/>
              <i class="sub-msg-text">Cùng Viet Tour bắt đầu hành trình chinh phục Việt Nam</i>
            </h1>

            <div id="list-trend-places-1" class="row list-trend-places">
                <!-- Control buttons -->
                <!-- Nhấn các nút sẽ hiện ra các địa điểm nổi bật khác theo thanh cuộn -->
                <button class="control-btn control-btn-left">
                  <i class="fas fa-chevron-left"></i>
                </button>
                <button class="control-btn control-btn-right">
                  <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Place-item -->
                <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                  <div class="tour__img">
                    <img class="card-img-top" src="./assets/img/ho-guom.jpg" alt="Card image" style="width:100%">
                    <h4 class="card-title tour__title">Hồ Gươm</h4>
                    <p class="quantity-customers">1005
                        <span>người dùng đã chọn</span>
                    </p>
                  </div>  
                    <div class="card-body">
                      <h4 class="trend-place__city">Hà Nội</h4>
                      <p class="card-text tour__desc">Trái tim của thủ đô</p>
                      <p class="tour-price">Giá: 300.000 VNĐ</p>
                      <p class="row quantity-bookers">
                          <button class="btn reduce-btn">-</button>
                          <span class="quantity-booker">1</span>
                          <button class="btn increase-btn">+</button>
                      </p>
                      
                      <button class="btn buy-btn">Đặt ngay</button>
                      <!-- Nút thành công -->
                      <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                  <div class="tour__img">
                    <img class="card-img-top" src="./assets/img/trang-an.jpg" alt="Card image" style="width:100%">
                    <h4 class="card-title tour__title">Tràng An</h4>
                    <p class="quantity-customers">2000
                        <span>người dùng đã chọn</span>
                    </p>
                  </div>  
                    <div class="card-body">
                      <h4 class="trend-place__city">Ninh Bình</h4>
                      <p class="card-text tour__desc">Cố đô Hoa Lư hùng vỹ</p>
                      <p class="tour-price">Giá: 2.000.000 VNĐ</p>
                        <p class="row quantity-bookers">
                          <button class="btn reduce-btn">-</button>
                          <span class="quantity-booker">1</span>
                          <button class="btn increase-btn">+</button>
                      </p>
                      <button class="btn buy-btn">Đặt ngay</button>
                      <!-- Nút thành công -->
                      <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                    </div>  
                    
                </div>

              <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                <div class="tour__img">
                  <img class="card-img-top" src="./assets/img/slider-1.jpg" alt="Card image" style="width:100%">
                  <h4 class="card-title tour__title">Nha Trang</h4>
                  <p class="quantity-customers">3080
                      <span>người dùng đã chọn</span>
                  </p>
                </div>  
                  <div class="card-body">
                    <h4 class="trend-place__city">Khánh Hòa</h4>
                    <p class="card-text tour__desc">Bãi cát trắng biển xanh</p>
                    <p class="tour-price">Giá: 2.000.000 VNĐ</p>
                      <p class="row quantity-bookers">
                          <button class="btn reduce-btn">-</button>
                          <span class="quantity-booker">1</span>
                          <button class="btn increase-btn">+</button>
                      </p>
                    <button class="btn buy-btn">Đặt ngay</button>
                    <!-- Nút thành công -->
                      <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                  </div>  
                  
              </div>

              <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                <div class="tour__img">
                  <img class="card-img-top" src="./assets/img/phong-nha-ke-bang.jpg" alt="Card image" style="width:100%">
                  <h4 class="card-title tour__title" >Phong Nha Kẻ Bàng</h4>
                  <p class="quantity-customers">3100
                      <span>người dùng đã chọn</span>
                  </p>
                </div>  
                  <div class="card-body">
                    <h4 class="trend-place__city">Quảng Bình</h4>
                    <p class="card-text tour__desc">Kỳ quan đệ nhất động </p>
                    <p class="tour-price">Giá: 3.000.000 VNĐ</p>
                      <p class="row quantity-bookers">
                          <button class="btn reduce-btn">-</button>
                          <span class="quantity-booker">1</span>
                          <button class="btn increase-btn">+</button>
                      </p>
                    <button class="btn buy-btn">Đặt ngay</button>
                    <!-- Nút thành công -->
                      <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                  </div>  
                  
              </div>
            </div>
        
            <div id="list-trend-places-2" class="row list-trend-places" style="display: none">
              <!-- Control buttons -->
              <!-- Nhấn các nút sẽ hiện ra các địa điểm nổi bật khác theo thanh cuộn -->
              <button class="control-btn control-btn-left">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button class="control-btn control-btn-right">
                <i class="fas fa-chevron-right"></i>
              </button>

              <!-- Place-item -->
              <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                <div class="tour__img">
                  <img class="card-img-top" src="./assets/img/bai-dinh-ninh-binh.jpg" alt="Card image" style="width:100%">
                  <h4 class="card-title tour__title">Chùa Bái Đính</h4>
                  <p class="quantity-customers">100
                      <span>người dùng đã chọn</span>
                  </p>
                </div>  
                  <div class="card-body">
                    <h4 class="trend-place__city">Ninh Bình</h4>
                    <p class="card-text tour__desc">Ngôi chùa đất Tràng</p>
                    <p class="tour-price">Giá: 500.000 VNĐ</p>
                     <p class="row quantity-bookers">
                        <button class="btn reduce-btn">-</button>
                        <span class="quantity-booker">1</span>
                        <button class="btn increase-btn">+</button>
                     </p>
                    
                     <button class="btn buy-btn">Đặt ngay</button>
                     <!-- Nút thành công -->
                    <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                  </div>
              </div>

              <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                <div class="tour__img">
                  <img class="card-img-top" src="./assets/img/co-do-hue.jpg" alt="Card image" style="width:100%">
                  <h4 class="card-title tour__title">Cố đô Huế</h4>
                  <p class="quantity-customers">200
                      <span>người dùng đã chọn</span>
                  </p>
                </div>  
                  <div class="card-body">
                    <h4 class="trend-place__city">Huế</h4>
                    <p class="card-text tour__desc">Kinh đô Tây Sơn</p>
                    <p class="tour-price">Giá: 2.000.000 VNĐ</p>
                      <p class="row quantity-bookers">
                        <button class="btn reduce-btn">-</button>
                        <span class="quantity-booker">1</span>
                        <button class="btn increase-btn">+</button>
                     </p>
                    <button class="btn buy-btn">Đặt ngay</button>
                    <!-- Nút thành công -->
                    <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                  </div>  
                  
              </div>

              <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                <div class="tour__img">
                  <img class="card-img-top" src="./assets/img/phu-quoc.jpg" alt="Card image" style="width:100%">
                  <h4 class="card-title tour__title">Đảo Phú Quốc</h4>
                  <p class="quantity-customers">120
                      <span>người dùng đã chọn</span>
                  </p>
                </div>  
                  <div class="card-body">
                    <h4 class="trend-place__city">Phú Quốc</h4>
                    <p class="card-text tour__desc">Đảo ngọc đất Việt</p>
                    <p class="tour-price">Giá: 5.000.000 VNĐ</p>
                      <p class="row quantity-bookers">
                          <button class="btn reduce-btn">-</button>
                          <span class="quantity-booker">1</span>
                          <button class="btn increase-btn">+</button>
                      </p>
                    <button class="btn buy-btn">Đặt ngay</button>
                    <!-- Nút thành công -->
                      <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                  </div>  
                
              </div>

              <div class="col-sm-12 col-md-6 col-xl-3 card trend-place" style="width:400px">
                <div class="tour__img">
                  <img class="card-img-top" src="./assets/img/ban-gioc-cao-bang.jpg" alt="Card image" style="width:100%">
                  <h4 class="card-title tour__title" >Thác Bản Giốc</h4>
                  <p class="quantity-customers">300
                      <span>người dùng đã chọn</span>
                  </p>
                </div>  
                  <div class="card-body">
                    <h4 class="trend-place__city">Cao Bằng</h4>
                    <p class="card-text tour__desc">Thác nước vùng cao</p>
                    <p class="tour-price">Giá: 1.000.000 VNĐ</p>
                      <p class="row quantity-bookers">
                          <button class="btn reduce-btn">-</button>
                          <span class="quantity-booker">1</span>
                          <button class="btn increase-btn">+</button>
                      </p>
                    <button class="btn buy-btn">Đặt ngay</button>
                    <!-- Nút thành công -->
                      <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                  </div>  
              </div>
            
            </div>

            <h1 class="msg-text text-center">
              <!-- Click vào tour-places mở ra trang chứa danh sách các tour -->
                <a href="./list-tour.php" class="tour-places-link">Tìm hiểu thêm</a>
            </h1>
          </div>

          <!-- Thể loại -->
          <div id="list-category-tours" class="content-section ">
            <h1 class="msg-text text-center">Thể loại tour du lịch
              <br/>
              <i class="sub-msg-text">Việt Nam nằm trong những quốc gia có hệ sinh thái du lịch phong phú và đa dạng nhất trên thế giới</i>
            </h1>

            <div class="category-tour ">
                <h2 class="category-tour__title">Tham quan lịch sử</h2>
                <p class="category-tour__desc">Nếu bạn là người yêu những giá trị văn hóa của nhiều vùng đất trong và ngoài nước, muốn được tham quan các di tích lịch sử nổi tiếng thì đây chính là hình thức du lịch tuyệt vời. </p>
                <div class="category-tour__img" style=" background: url('./assets/img/co-do-hue.jpg') center / cover no-repeat;">
                    <a href="./list-tour.php" class="category-tour__link">Xem thêm</a>
                </div>
            </div>

            <div class="category-tour ">
              <h2 class="category-tour__title">Sinh thái khám phá</h2>
              <p class="category-tour__desc">Khi cuộc sống hiện đại trở nên quá áp lực, ngột ngạt thì du lịch sinh thái giờ đây nổi lên như một trào lưu mới. Phù hợp cho những du khách thích trải nghiệm, hòa mình vào thiên nhiên và sẵn sàng cho những thử thách không ngờ tới.  </p>
              <div class="category-tour__img" style=" background: url('./assets/img/phong-nha-ke-bang.jpg') bottom center / cover no-repeat;">
                  <a href="./list-tour.php" class="category-tour__link">Xem thêm</a>
              </div>
          </div>

          <div class="category-tour ">
            <h2 class="category-tour__title">Nghỉ dưỡng</h2>
            <p class="category-tour__desc">Giúp du khách lấy lại tinh thần, sức khỏe thông qua các hình thức trị liệu, dịch vụ chăm sóc cao cấp tại resort,.... </p>
            <div class="category-tour__img" style=" background: url('./assets/img/phu-quoc.jpg') bottom center / cover no-repeat;">
                <a href="./list-tour.php" class="category-tour__link">Xem thêm</a>
            </div>
        </div>
          </div>

            <!-- Gợi ý -->
            <div class="content-section list-suggest-places">
            <h1 class="msg-text text-center">Địa điểm du lịch gợi ý
              <br>
              <i class="sub-msg-text">Những địa điểm thịnh hành đang thu hút khách du lịch </i>
            </h1>

            <div class="row list-suggest-places">
                <a href="" class="col-sm-12 col-md-6 col-xl-3 suggest-place">
                    <div class="suggest-place__img">
                      <img class="card-img-top" src="./assets/img/cau-vang-da-nang.jpg" alt="Đà Nẵng" style="width:100%">
                      <div class="suggest-place__text">
                        <h4 class="card-title suggest__title">Đà Nẵng</h4>
                        <p class="quantity-tours">20 tours</p>
                      </div>
                    </div>  
                </a>

                <a href="" class="col-sm-12 col-md-6 col-xl-3 suggest-place">
                      <div class="suggest-place__img">
                      <img class="card-img-top" src="./assets/img/hoi-an.jpg" alt="Hội An" style="width:100%">
                      <div class="suggest-place__text">
                        <h4 class="card-title suggest__title">Hội An</h4>
                        <p class="quantity-tours">15 tours</p>
                      </div>
                    </div>  
                </a>

                <a href="" class="col-sm-12 col-md-6 col-xl-3 suggest-place">
                      <div class="suggest-place__img">
                      <img class="card-img-top" src="./assets/img/phu-quoc.jpg" alt="Phú Quốc" style="width:100%">
                      <div class="suggest-place__text">
                        <h4 class="card-title suggest__title">Phú Quốc</h4>
                        <p class="quantity-tours">19 tours</p>
                      </div>
                    </div>  
                </a>

                <a href="" class="col-sm-12 col-md-6 col-xl-3 suggest-place">
                      <div class="suggest-place__img">
                      <img class="card-img-top" src="./assets/img/ha-long.jpg" alt="Quảng Ninh" style="width:100%">
                      <div class="suggest-place__text">
                        <h4 class="card-title suggest__title">Quảng Ninh</h4>
                        <p class="quantity-tours">10 tours</p>
                      </div>
                    </div>  
                </a>
            </div>
          </div>

          <!-- Ưu đãi -->
          <div class="content-section" id="list-endow">
            <h1 class="msg-text text-left">Ưu đãi từ <span class="label-app">Viet Tour</span>
              <br/>
              <p>Nhanh tay
                
                để nhận ngay ưu đãi độc quyền ngay hôm nay  
              </p>
            </h1>

            <div class="row">
              <div class="col-sm-12 col-md-12 col-xl-4 endow-item">
                  <div class="endow-item__img" style=" background: url('./assets/img/bai-dinh-ninh-binh.jpg') center / cover no-repeat;">
                      <div class="endow-item__content">
                          <span class="endow-item__link">Giảm ngay 10%
                            <p>các tour khi đặt lần đầu</p></span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-12 col-xl-4 endow-item">
                <div class="endow-item__img" style=" background: url('./assets/img/cu-lao-cham-da-nang.jpg') center / cover no-repeat;">
                  <d class="endow-item__content">
                      <span class="endow-item__link">Nhận hộp quà
                        <i class="fas fa-gift" style="color: var(--primary-color); font-size: 22px;" ></i>
                        <p>đặc biệt từ Viet Tour</p>
                      </span>
                  </d>
                </div>
              </div>

              <div class="col-sm-12 col-md-12 col-xl-4 endow-item">
                <div class="endow-item__img" style=" background: url('./assets/img/adv-3.jpg') center / cover no-repeat;">
                  <div class="endow-item__content">
                      <span class="endow-item__link">Sự kiện của tháng
                        <p>Event Viet Tour</p></>
                  </div>
                </div>
              </div>
              

              
            </div>
          </div>

          <!-- Quảng cáo -->
          <div class="content-section adv-section">
            <h1 class="msg-text text-left">Đi cùng <span class="label-app"> Viet Tour</span>
              <br/>
            </h1>

            <div class="row adv-content">
              <div class="col-sm-12 col-md-12 col-xl-4 adv-msg">
                  <h2 class="adv-msg__title">
                    Ứng dụng web du lịch số 1 Việt Nam
                  </h2>
                  <p class="adv-msg__text">Viet Tour hiện là nền tảng đặt tour du lịch thịnh hành nhất tại Việt Nam. Đồng hành cùng chúng tôi, bạn có những chuyến đi mang đầy kỉ niệm tuyệt vời. Sứ mệnh của Viet Tour là đem lại trải nghiệm hài lòng cho người dùng về tour du lịch, nghỉ dưỡng, khám phá đất nước Việt Nam.</p>
                  <div class="download-section">
                    <img src="./assets/img/qr-code.png" alt="" class="qr-img">
                    <div class="download__apps">
                      <a href=""><img src="./assets/img/apple-store.svg" alt="" class="download__app"></a>
                      <a href=""><img src="./assets/img/google-play.svg" alt="" class="download__app"></a>
                    </div>
                  </div>

              </div>

              <div class="col-sm-12 col-md-12 col-xl-8 adv-video">  
                  <video id="video-travel" controls="controls" src="./assets/video/video-travel.mp4">
                  </video>
              </div>
            </div>
          </div>


        </div>

          <!-- Footer -->
        <footer class="footer">
            <div class="row list-contacts">
              <div class="col-sm-12 col-md-6 col-xl-3 footer__content">
                  <h3 class="footer__title">Viet Tour</h3>
                  <p class="tel">
                    <i class="fas fa-phone-alt"></i>
                  Số điện thoại: 09366688888</p>
                  <p class="gmail">
                    <i class="fas fa-envelope"></i>
                  Gmail: viettour@gmail.com</p>
                  <p class="place-contact">
                    <i class="fas fa-map-marker-alt"></i>
                  Địa chỉ: 75 Tây Sơn, Đống Đa, Hà Nội</p>
              </div>

              <div class="col-sm-12 col-md-6 col-xl-3 footer__content">
                <h3 class="footer__title">Cộng đồng</h3>
                <p class="facebook">
                  <i class="fab fa-facebook"></i>
                Facebook: <a href=""> facebook.com/viettourofficial</a>
                </p>

                <p class="instagram">
                  <i class="fab fa-instagram"></i>
                  Instatagram: <a href="">instagram.com/viettourofficial</a>
                </p>

                <p class="twitter">
                  <i class="fab fa-twitter" ></i>
                  Twitter: <a href="">twitter.com/viettourofficial</a>
                </p>

              </div>

              <div class="col-sm-12 col-md-6 col-xl-3 footer__content">
              <h3 class="footer__title">Đối tác truyền thông</h3>
              <p> Tuổi trẻ online:
                <a href="https://dulich.tuoitre.vn"> https://dulich.tuoitre.vn</a>
              </p>
              <p> Vietnam Express:
                <a href="https://vnexpress.net">https://vnexpress.tuoitre.vn</a>
              </p>
              <p> Báo thanh niên:
                <a href="https://thanhnien.vn">https://thanhnien.vn</a>
              
              </p>
              </div>

              <div class="col-sm-12 col-md-6 col-xl-3 footer__content">
                  <h3 class="footer__title">Ứng dụng di động</h3>
                  <a href=""><img src="./assets/img/apple-store.svg" alt=""></a>
                  <a href=""><img src="./assets/img/google-play.svg" alt=""></a>
              </div>
            </div>
        
           
        </footer>
    </div>

    <!-- Notify event -->
    <div id="notify-event" > 
          <div id="modal-notify-event">
              <div class="btn-close-notify-event">
                <i class="fas fa-times"></i>
              </div>
              <h3 class="text-center">Sự kiện đã kết thúc <i class="fas fa-sad-tear" style="font-size: 20px;"></i></h3>
              <img src="./assets/img/sorry-icon.jpg" alt="Event over">
          </div>
    </div>
    
    <!-- Setting -->
    <div id="setting">
        <div id="modal-setting">
            <div class="btn-close">
              <i class="fas fa-times"></i>
            </div>

            <div class="modal-setting__label">
              <img class="text-center" src="./assets/img/Logo.png" alt="" width="80" height="80">
              <span class="label-app">Viet Tour</span>
            </div>

            <!-- Setting content -->
            <div class="modal-setting__content">
              <form action="" method="POST">
                <div class="modal-setting__input-section">
                  <label for="name-setting">Họ tên:</label>
                  <input type="text" name="new-name" id="name-setting" placeholder="Họ tên mới">
                </div>

                <div class="modal-setting__input-section">
                  <label for="place-setting">Địa chỉ:</label>
                  <input type="text" name="new-place" id="place-setting" placeholder="Địa chỉ mới">
                </div>

                <div class="modal-setting__input-section">
                  <label for="phone-number-setting">Số điện thoại:</label>
                  <input type="tel" name="new-phone-number" id="phone-number-setting" placeholder="Số điện thoại mới">
                </div>

                <div class="modal-setting__input-section">
                  <label for="old-password-setting">Mật khẩu cũ:</label>
                  <input type="password" name="old-password-register" id="old-password-setting" placeholder="Mật khẩu">
                </div>

                <div class="modal-setting__input-section">
                  <label for="password-setting">Mật khẩu mới:</label>
                  <input type="password" name="new-password-setting" id="password-setting" placeholder="Mật khẩu mới">
                </div>

                <?php
                  require_once 'connect.php';
                  if (isset($_POST['setting__btn'])){
                      if (!empty($_POST['new-name']) && !empty($_POST['new-place']) && !empty($_POST['new-phone-number']) && !empty($_POST['old-password-register']) && !empty($_POST['new-password-setting']) ) {
                          $newName = $_POST['new-name'];
                          $newPlace = $_POST['new-place'];
                          $newPhoneNumber = $_POST['new-phone-number'];
                          $oldPwdRegister = $_POST['old-password-register'];
                          $newPwdSetting = $_POST['new-password-setting'];

                          $userID =$_SESSION['user-id'];
                          $query = "update khach set Ten_Khach = '$newName' ,DiaChi_Khach = '$newPlace' , SDT_Khach = '$newPhoneNumber' , MatKhau_TaiKhoan = '$newPwdSetting' WHERE ID_Khach = '$userID' ";

                          $userQuery = mysqli_query($conn, $query)  ;

                          if ($userQuery == $userID) {
                              echo "Cập nhật thành công";
                          } else {
                              echo "Cập nhật thất bại";
                          }
                      }
                      else {
                          echo "Bạn chưa nhập tất cả các ô nhập!" ;
                      }
                  }
                ?>
                <button type="submit" name="setting__btn" class="btn setting__btn">Lưu</button>
              </form>

            </div>


        </div>
    </div>
</div>
</body>
</html>

