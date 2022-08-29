@extends('layouts.promote')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(template/promote/assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>เห็นขอนขาว</span></h2>
                <p class="animate__animated animate__fadeInUp">เห็ดขอนขาว (ชื่อวิทยาศาสตร์ : Lentinus squarrosulas Mont. ,ชื่อสามัญ : เห็ดขอนขาว ,ชื่ออื่น : เห็ดมันมะม่วง เห็ดมัน) ลักษณะโดยทั่วไปของเห็ดขอนขาวและเห็ดขอนดำโดยทั่วไปแล้วลักษณะก้านจะชูออกมา และหมวกเห็ดจะมีรอยปุ๋มตรงกลางเล็กน้อย โดยที่ขนาดของหมวกเห็ดจะไม่ใหญ่มากและถ้าหากสีของเห็ดเป็นสีขาวทั้งต้นจะถูกเรียกว่าเห็ดขอนขาวแต่ถ้าที่หมวกเห็ดออกสีคล้ำๆหน่อยจะเรียกว่าเห็ดขอนดำ ส่วนมากจะขึ้นบนไม้เนื้อแข็งและก้อนเชื้อเห็ดที่ชาวไร่เพาะขึ้นมา</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">เห็ดแต่ละชนิดในร้าน</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">ติดต่อสอบถาม</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(template/promote/assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">เห็ดขอนขาว</h2>
                <p class="animate__animated animate__fadeInUp">สำหรับเห็ดขอนขาวนั้นจะมีลักษณะเหมือนหรือคล้ายกับเห็ดนางรมมีสีขาว ซึ่งจะมีจุดที่สามารถสังเกตได้ถึงความแตกต่างระหว่างเห็ดทั้ง 2 ชนิดนี้ คือ เห็ดขอนขาวจะมีดอกที่เหนียว บาง และหอมกว่าเห็ดนางรม ส่วนบริเวณกึ่งกลางของเห็ดขอนขาวนั้นจะมีรอยบุ๋มเล็กน้อยบริเวณดอกเห็ดนี้ มองดูคล้ายๆ กับจานที่มีก้นลึก และบริเวณหมวกเห็ดก็จะมีขนขึ้นอยู่เป็นกระจุกปกคลุมอยู่ ส่วนก้านดอกที่เหนียวๆ แข็งๆ ของเห็ดชนิดนี้จะติดกับหมวกเห็ดเป็นเนื้อเดียวกัน แต่โดยมากมักจะไม่ค่อยอยู่ตรงกับกึ่งกลางของดอกเห็ดสักเท่าไหร่ และดอกเห็ดจะขึ้นแบบเรียงชิดติดกัน โดยเมื่อยังอ่อนเนื้อของเห็ดจะบางและเหนียว แต่หากเป็นดอกแก่จะมีเนื้อที่เหนียวและแข็ง</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">เห็ดแต่ละชนิดในร้าน</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">ติดต่อสอบถาม</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(template/promote/assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">เห็ดขอนขาว</h2>
                <p class="animate__animated animate__fadeInUp">ช่วยทำให้ระบบขับถ่ายสามารถทำงานได้อย่างเป็นปกติ ไม่เป็นโรคริดสีดวงทวาร
ช่วยแก้พิษไข้ และขับของเสียออกจากร่างกาย ช่วยป้องกันอาการเสื่อมสมรรถภาพทางเพศ ช่วยป้องกันโรคเบาหวาน ช่วยยืดอายุให้แก่ผู้ป่วยโรคเอดส์ หรือ HIV เป็นต้น</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">เห็ดแต่ละชนิดในร้าน</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">ติดต่อสอบถาม</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
<!-- ======= Events Section ======= -->
<section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>ราคาของ <span>เห็ดขอนขาว</span> ในร้านบ้านสวนเห็ด</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="template/promote/assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>เชื้อเห็ดขอนขาวราคาส่ง</h3>
                  <div class="price">
                    <p><span>7฿</span></p>
                  </div>
                  <p class="fst-italic">
                  เชื้อเห็ดขอนขาวราคาส่งคุณภาพดี เหมาะกับการเพาะพันธุ์ขายหรือใช้เองภายในครัวเรือน
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> ปลอดภัยไร้สารพิษ</li>
                    <li><i class="bi bi-check-circle"></i> เชื้อเห็ดแข็งแรง</li>
                    <li><i class="bi bi-check-circle"></i> พันธุ์สวย ราคาดี</li>
                  </ul>
                  <p>
                  หากสนใจสามารถสั่งซื้อได้กับแอดมินหรือช่องทางสั่งซื้อออนไลน์
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="template/promote/assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>โปรโมชั่นสำหรับเห็ดขอนขาว</h3>
                  <div class="price">
                    <p><span>ซื้อเชื้อเห็ดขอนขาวราคาส่ง ครบ 300฿ แถมฟรีอีก 80฿ </span></p>
                  </div>
                  <p class="fst-italic">
                   สำหรับลูกค้าที่ซื้อเชื้อเห็ดขอนขาวครบในราคาส่ง 300฿ แถมฟรีเชื้อเห็ดขอนขาวอีก 80฿
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> ปลอดภัย ไร้สารพิษ</li>
                    <li><i class="bi bi-check-circle"></i> โปรโมชั่นนี้ไม่สามารถใช้ร่วมกับเชื้อเห็ดโคนน้อยได้</li>
                    <li><i class="bi bi-check-circle"></i> ระยะเวลาโปรโมชันตั้งแต่ 1 ธ.ค. - 31 ธ.ค. 65</li>
                  </ul>
                  <p>
                  หากสนใจสามารถสั่งซื้อได้กับแอดมินหรือช่องทางสั่งซื้อออนไลน์
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>

        

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Book A Table Section ======= -->

@stop