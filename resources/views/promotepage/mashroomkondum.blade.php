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
                <h2 class="animate__animated animate__fadeInDown"><span>เห็ดขอนดำ</span></h2>
                <p class="animate__animated animate__fadeInUp">เห็ดขอนดำ 
   หรือ เห็ดกระด้าง การเพาะเห็ดขอนดำในถุงพลาสติก การเพาะเห็ดขอนดำในถุงพลาสติกมีวิธีการ
   ไม่แตกต่างไปจากการเพาะเห็ดในพลาสติกอื่นๆเกษตรกรที่อยู่ในเขตภาคเหนือ และภาคอีสานหรือ
   ภาคอื่นๆสามารถเพาะเห็ดชนิดนี้ได้เนื่องจากเห็ดชอบสภาพอากาศร้อนชื้น สามารถเพาะนอกฤดูกาลได้</p>
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
                <h2 class="animate__animated animate__fadeInDown">เห็ดขอนดำ</h2>
                <p class="animate__animated animate__fadeInUp">เห็ดชนิดนี้ดอกอ่อนจะนิ่ม เมื่อแก่จะเหนียวและแข็ง จึงสามารถเก็บรักษาไว้รับประทานได้นานข้ามปี เวลาจะนำมาปรุงอาหารก็นำไปแช่น้ำให้คืนสภาพเหมือนเห็ดหูหนู เป็นเห็ดที่มีรสหวานกว่าเห็ดชนิดอื่น ๆ ในตระกูลเดียวกัน ดอกอ่อนนำไปแกงซุปหรือลาบให้ความรู้สึก ในการรับประทานคล้ายเนื้อสัตว์ คือก รุบเหนียว ลื่นลิ้น จึงเป็นที่นิยมรับประทานของคนในภาคเหนือ และภาคตะวันออกเฉียงเหนือ ดังนั้นจึงเป็นพื้นที่ ๆ เป็นแหล่งผลิตด้วยราคาของเห็ดกระด้างค่อนข้างสูงกว่าเห็ดพื้นเมืองชนิดอื่น ๆ
</p>
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
                <h2 class="animate__animated animate__fadeInDown">เห็ดขอนดำ</h2>
                <p class="animate__animated animate__fadeInUp">มีเกษตรกรที่ชำนาญการเพาะเห็ดลมในภาคอีสาน นิยมกระตุ้น ให้เห็ดออกดอกสม่ำเสมอโดยปิดโรงเรือนให้ร้อนในช่วงเท ียงถึงบ่าย 3 โมงเย็น โดย อุณหภูมิในโรงเรือนอยู่ระหว่าง 35-37 องศาเซลเซียส แต่ไม่ควรเกิน 40 องศาเซลเซียส เพราะเส้นใยอาจตายได้ หากอุณหภูมิขึ้นสูงมาก ก็จะระบายความร้อนโดยการรดน้ำด้วย สปริงเกอร์ ส่วนในเวลากลางคนจะเปิดโรงเปิดดอก ให้ได้รับความเย็นและอากาศ ถ่ายเทได้เต็มที่ จะช่วยให้ผลผลิตออกสม่ำเสมอได้ ซึ่งเป็นเทคนิคที่ผู้สนใจเห็ดลม ควรฝึกปฏิบัติและสังเกตเทคนิคให้ดี จึงจะประสบผลสำเร็จในการเพาะ</p>
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
          <h2>ราคาของ <span>เห็ดขอนดำ</span> ในร้านบ้านสวนเห็ด</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="template/promote/assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>เชื้อเห็ดขอนดำราคาส่ง</h3>
                  <div class="price">
                    <p><span>7฿</span></p>
                  </div>
                  <p class="fst-italic">
                    เชื้อเห็ดขอนดำราคาส่งคุณภาพดี เหมาะกับการเพาะพันธุ์ขายหรือใช้เองภายในครัวเรือน
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> ปลอดภัยไร้สารพิษ</li>
                    <li><i class="bi bi-check-circle"></i> เชื้อเห็ดแข็งแรง</li>
                    <li><i class="bi bi-check-circle"></i> ราคาดี พันธุ์สวย</li>
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
                  <h3>โปรโมชั่นสำหรับเห็ดขอนดำ</h3>
                  <div class="price">
                    <p><span>สั่งซื้อเห็ดขอนดำราคา 150฿ ขึ้นไป แถมฟรีอีก 50฿</span></p>
                  </div>
                  <p class="fst-italic">
                    โปรโมชั่นสำหรับลูกค้าที่ต้องการตุนเชื้อเห็ดขอนดำเพื่อนำไปเพาะพันธุ์ สั่งซื้อในราคาส่ง 150฿ ขึ้นไป แถมฟรีอีก 50฿
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> คุ้มค่า คุ้มราคา</li>
                    <li><i class="bi bi-check-circle"></i> โปรโมชั่นนี้ใช้ได้กับเชื้อเห็ดทุกชนิดในร้าน ยกเว้น เชื้อเห็ดโคนน้อย</li>
                    <li><i class="bi bi-check-circle"></i> โปรโมชั่นตั้งแต่วันที่ 1 พ.ย. - 30 พ.ย. 65</li>
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