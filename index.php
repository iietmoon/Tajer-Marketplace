<!doctype html>
<html dir="rtl" lang="ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- On Page SEO -->
    <title>Tajer</title>
    <meta name="description" content="Tajer">
    <meta name="keywords" content=", , ">
    <meta name="author" content="Tajer LLC">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- include the header -->
    <?php include 'include/header.php'?>

  </head>
  <body>
     <!-- Navbar Section -->
     <section class="ns-bg pb-0" id="main-navbar">
        <!-- Ship + Discount -->
        <nav class="ns-bg main-nav-pd pt-2" dir="ltr">
          <ul class="list-inline">
                <li class="list-inline-item"><a class="ns-text-a" href="#">أفضل عروض <img src="helpers/bootstrap-icons/lightning.svg" alt="" width="18" height="18" title="Bootstrap"></a></li>
                <li class="list-inline-item"><a class="ns-text-a" href="#">إرجاع مجاني بسهولة <img src="helpers/bootstrap-icons/arrow-repeat.svg" alt="" width="18" height="18" title="Bootstrap"></a></li>
          </ul>
        </nav>
        <!-- Navigation -->
        <nav class="ns-bg main-nav-pd" dir="ltr">
          <ul class="list-inline ">
            <div class="left-content">
                <li class="list-inline-item pr-2"><a class="nm-text-a" href="#"><img src="helpers/bootstrap-icons/bag.svg" alt="" width="20" height="20" title="Bootstrap" class="pr-1">عربة التسوق</a></li>
                <li class="list-inline-item left-divider pl-2">
                  <div class="dropdown mr-1">
                    <button type="button" class="btn .nm-text-a" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                      <a class="nm-text-a" href="#"><i class="fa fa-caret-down mr-2 ml-2 ns-text-i" aria-hidden="true"></i>تسجيل الدخول أو الإشتراك</a>  
                    </button>
                    <div class="dropdown-menu nm-drop border-0 text-center p-3" aria-labelledby="dropdownMenuOffset">
                         <p class="nm-drop-text-a" >عملاء تاجر السابقين</p>
                         <button type="button" class="btn btn-primary font text-center rounded-0 pl-4 pr-4 pb-2">تسجيل الدخول</button>
                         <div class="dropdown-divider mt-3 mb-3"></div>
                         <p class="nm-drop-text-a" >ليس لديك حساب؟</p>
                         <a class="text-center text-primary nm-drop-text-a" href="">اشترك الآن</a> 
                    </div>
                  </div>
                </li>
            </div>
                <li class="list-inline-item pl-3 nm-form"> 
                    <div class="input-group mb-3 nm-form-bg pt-1 pb-1 pr-2 pl-2">
                         <div class="input-group-prepend">
                              <button class="btn btn-outline-secondary rounded-0 border-0 none-hover" type="button">
                                <img src="helpers/bootstrap-icons/search.svg" alt="" width="18" height="18" title="Bootstrap">
                              </button>
                         </div>
                         <input dir="rtl"  type="text" class="form-control rounded-0 border-0" placeholder="ما الذي تبحث عنه؟" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li class="list-inline-item right-content"> 
                   <img src="upload/main-brand/logo.png" alt="tajer logo" width="100" />
                </li>
          </ul>
        </nav>
     </section>

     <!--Mobile Navbar Section -->
     <section class="ns-bg pb-1" id="mobile-navbar">
        <!-- Navigation -->
        <nav class="ns-bg mobile-nav-pd pt-1" dir="ltr">
          <ul class="list-inline">
                <li class="list-inline-item left-ico pt-2">
                  <a class="nm-text-a pr-2" href="#"><img src="helpers/bootstrap-icons/cart2.svg" alt="" width="30" height="30" title="Bootstrap" class="pr-1"></a>
                  <a class="nm-text-a" href="#"><img src="helpers/bootstrap-icons/search.svg" alt="" width="27" height="27" title="Bootstrap" class="pr-1"></a> 
                </li>
                <li class="list-inline-item right-ico pt-1"> 
                   <img src="upload/main-brand/logo.png" alt="tajer logo" width="70" />
                   <a class="nm-text-a pl-2" href="#"><img src="helpers/bootstrap-icons/list.svg" alt="" width="30" height="30" title="Bootstrap" class="pr-1"></a>
                </li>
          </ul>
        </nav>
     </section>

     <!-- Mega Menu -->
     <?php include 'components/mega-menu.php' ?>

     <!-- Carousel -->
     <?php include 'components/carousel-ads.php' ?>






















    <!-- include the footer -->
    <?php include 'include/footer.php'?>

  </body>
</html>