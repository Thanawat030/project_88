<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+66 11222345</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.php">บ้านสวนเห็ด</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li>
          <li><a class="nav-link scrollto" href="#about">เกี่ยวกับ</a></li>
          <li class="dropdown"><a href="#"><span>วิธีปลูกเห็ด</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/mashroom')}}">เห็ดโคนน้อย</a></li>
                <ul>
                  <li><a href="#">เห็ดโคนน้อย</a></li>
                  <li><a href="#">เห็ดขอนขาว</a></li>
                  <li><a href="#">เห็ดขอนดำ</a></li>
                  <li><a href="#">เห็ดนางฟ้า</a></li>
                  <li><a href="#">เห็ดภูฐาน</a></li>
                  <li><a href="#">เห็ดหลินจือ</a></li>
                </ul>
              </li>
              <li><a href="#">เห็ดขอนขาว</a></li>
              <li><a href="#">เห็ดขอนดำ</a></li>
              <li><a href="#">เห็ดนางฟ้า</a></li>
              <li><a href="#">เห็ดภูฐาน</a></li>
              <li><a href="#">เห็ดหลินจือ</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#specials">รายละเอียดสินค้า</a></li>
          <div class=""></div>
          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li> <a class="nav-link scrollto"  href="{{ url('/admin/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">admin</a></li>
                    @else
                    <li> <a class="nav-link scrollto" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <<li> <a class="nav-link scrollto" href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">register</a></li>
                        @endif
                    @endauth
                </div>
            @endif


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">ติดต่อสอบถาม</a>

    </div>
  </header><!-- End Header -->