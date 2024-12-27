<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo MR_TDU ?>/images/about.png">
<link rel="stylesheet" href="<?php echo MR_TDU ?>/style.css">
<link rel="stylesheet" href="<?php echo MR_TDU ?>/css/fonts.css">
<script type="text/javascript" src="<?php echo MR_TDU ?>/js/jquery.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<!--شروع هدر-->
<header>

<!--شروع ناوبار-->
<nav class="rt">
<div class="main">
<span class="show-menu right rt-14" id="hiden-menu" onclick="document.getElementById('menu-side').style.display='block';document.getElementById('show-menu').style.display='block';document.getElementById('hiden-menu').style.display='none';"><i class="fa fa-align-center right"></i> منوی سایت</span>
<span class="show-menu right rt-14" id="show-menu" onclick="document.getElementById('menu-side').style.display='none';document.getElementById('show-menu').style.display='none';document.getElementById('hiden-menu').style.display='block';"><i class="fa fa-close right"></i> منوی سایت</span>
<ul class="right rt-13" id="menu-side">
<li class="right"><a href="" class="start">شروع کنید</a>
<ul class="right rt-13">
<li class="rt"><a href="how-to-buy.html"><i class="fa fa-circle"></i> خریدار هستید؟</a></li>
<li class="rt"><a href="how-to-sell.html"><i class="fa fa-circle"></i> فروشنده هستید؟</a></li>
<li class="rt"><a href="affiliate.html"><i class="fa fa-circle"></i> بازاریاب هستید؟</a></li>
</ul></li>
<li class="right"><a href="about.html">درباره ما</a></li>
<li class="right suber"><a href="" class="subewr"> قوانین مارکت<i class="fa fa-angle-down"></i></a>
<ul class="right rt-13">
<li class="rt"><a href="user-guide.html"><i class="fa fa-circle"></i> قوانین خرید محصول</a></li>
<li class="rt"><a href="user-guide.html"><i class="fa fa-circle"></i> قوانین بازاریابی</a></li>
<li class="rt"><a href="license.html"><i class="fa fa-circle"></i> مجوزهای انتشار</a></li>
</ul>
</li>

<li class="right"><a href="faq.html">سوالات متداول</a></li>
<li class="right"><a href="blog.html">وبلاگ</a></li>
<li class="right"><a href="logo.html">لوگو</a></li>
<li class="right"><a href="affiliate.html">بازاریابی</a></li>
<li class="right"><a href="contact.html">تماس با ما</a></li>

<li class="right suber"><a href="index.html" class="subewr">صفحات <i class="fa fa-angle-down"></i></a>
<ul class="right rt-13">
<li class="rt"><a href="payment.html"><i class="fa fa-circle"></i> پرداخت آنلاین</a></li>
<li class="rt"><a href="changelog.html"><i class="fa fa-circle"></i> پیشرفت ها</a></li>
<li class="rt"><a href="basket-1.html"><i class="fa fa-circle"></i> سبد خرید</a></li>
<li class="rt"><a href="page.html"><i class="fa fa-circle"></i> برگه خالی</a></li>
<li class="rt"><a href="my-account.html"><i class="fa fa-circle"></i> حساب کاربری</a></li>
<li class="rt"><a href="404.html"><i class="fa fa-circle"></i> صفحه 404</a></li>
<li class="rt"><a href="tab.html"><i class="fa fa-circle"></i> صفحه تب دار</a></li>
<li class="rt"><a href="my-account.html"><i class="fa fa-circle"></i> حساب کاربری</a></li>
<li class="rt"><a href="commnet.html"><i class="fa fa-circle"></i> صفحه دیدگاه ها</a></li>
</ul>

<li class="right suber"><a href="index.html" class="subewr">زیرمنو <i class="fa fa-angle-down"></i></a>
<ul class="right rt-13">
<li class="rt"><a href="#"><i class="fa fa-circle"></i> عنوان زیر منو یک</a></li>
<li class="rt"><a href="#"><i class="fa fa-circle"></i> عنوان زیر منو دو</a></li>
<li class="rt"><a href="#"><i class="fa fa-circle"></i> عنوان زیر منو سه</a></li>
<li class="rt"><a href="#"><i class="fa fa-circle"></i> عنوان زیر منو چهار</a></li>
<li class="rt"><a href="#"><i class="fa fa-circle"></i> عنوان زیر منو پنج</a></li>
</ul>

<li class="right"><a href="panel.html">پنل کاربری</a></li>

</ul>
<div class="panel-link h-c-panel left rt-13" style="display:none">
<div class="h-panel right">
<div class="right brief"><i class="fa fa-user"></i> <span>حمید جلیلیان</span>  <i class="fa fa-money"></i> <b>1400</b> تومان</div>
<div class="h-panel-links rt rt-12">
<a href="#" class="right">پیشخوان <i class="fa fa-desktop left"></i></a>
<a href="#" class="right">پروفایل کاربری <i class="fa fa-id-card-o left"></i></a>
<a href="#" class="right">دانلود ها <i class="fa fa-download left"></i></a>
<a href="#" class="right">بازاریابی <i class="fa fa-users left"></i></a>
<a href="#" class="right">علاقه مندی ها <i class="fa fa-heart left"></i></a>
<a href="#" class="right">تنظیمات کاربری <i class="fa fa-cogs left"></i></a>
<a href="#" class="right">شرح عملکرد <i class="fa fa-file-text-o left"></i></a>
<a href="#" class="right">تسویه حساب <i class="fa fa-money left"></i></a>
<a href="#" class="right">ارسال محصول <i class="fa fa-send-o left"></i></a>
<a href="#" class="right">درخواست پشتیبانی <i class="fa fa-support left"></i></a>
</div>
</div>
<a href="#" class="right sing-out"><i class="fa fa-power-off"></i> خروج </a>
</div>

<div class="panel-link left rt-13">
<a href="https://webresan.com/new/" class="mon left"><i class="fa fa-money"></i> کسب درآمد</a>
<a href="https://webresan.com/new/my-account/" class="log left"><i class="fa fa-sign-in"></i> ورود مشتریان</a>
<a href="https://webresan.com/new/register/" class="reg left"><i class="fa fa-user-plus"></i> ثبت نام</a>
</div>

</div>
</nav>
<!--پایان ناوبار-->
<div class="main">

<!--شروع لوگو سایت-->
<a href="index.html"><img src="<?php echo MR_TDU ?>/images//logo.jpg" class="right logo"></a>
<!--پایان لوگو سایت-->

<!--شروع ایکون های دسترسی سریع-->
<div class="h-icons left">
<a href="category.html" class="left"><div class="icon rt-center"><i class="fa fa-wordpress"></i></div><span class="rt-12">وردپرس</span></a>
<a href="category.html" class="left"><div class="icon rt-center"><i class="fa fa-joomla"></i></div><span class="rt-12">جوملا</span></a>
<a href="category.html" class="left"><div class="icon rt-center"><i class="fa fa-html5"></i></div><span class="rt-12">HTML</span></a>
<a href="category.html" class="left"><div class="icon rt-center"><i class="fa fa-github"></i></div><span class="rt-12">اسکریپت</span></a>
<a href="category.html" class="left"><div class="icon rt-center"><i class="fa fa-desktop"></i></div><span class="rt-12">PSD</span></a>
</div>
<!--پایان ایکون های دسترسی سریع-->

<!--شروع دسته بندی-->
<div class="right category">
<span class="show-cat right rt-14" id="hiden-cat" onclick="document.getElementById('category-side').style.display='block';document.getElementById('show-cat').style.display='block';document.getElementById('hiden-cat').style.display='none';"><i class="fa fa-list-ul right"></i> مشاهده دسته بندی</span>
<span class="show-cat right rt-14" id="show-cat" onclick="document.getElementById('category-side').style.display='none';document.getElementById('show-cat').style.display='none';document.getElementById('hiden-cat').style.display='block';"><i class="fa fa-close right"></i> بستن دسته بندی</span>
<ul class="right rt-category" id="category-side">

<li class="link right"><a href="#" class="right rt-13 name">ویترین <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-double-left"></i> زیر مجموعه دسته بندی</a><span class="left rt-13 open">باز کردن</span>
<ul>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>

<li class="link-big right"><a href="#" class="right rt-13 name">پوسته وردپرس <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="big rt rt-13">

<div class="widgets right">
<a href="category.html" class="right"><i class="fa fa-signal right"></i><h3 class="right rt-18">پرفروشترین های فصل</h3><span class="rt rt-13">پرفروشترین محصولات سه ماه اخیر</span></a>
<a href="category.html" class="right"><i class="fa fa-hand-peace-o right"></i><h3 class="right rt-18">محصولات حرفه‌ای</h3><span class="rt rt-13">محصولات با امکانات و طراحی بی‌نظیر</span></a>
<a href="category.html" class="right"><i class="fa fa-diamond right"></i><h3 class="right rt-18">ویژه سال</h3><span class="rt rt-13">محصولات ویژه یک سال اخیر</span></a>
<a href="category.html" class="right"><i class="fa fa-heart right"></i><h3 class="right rt-18">محبوب ترین محصولات</h3><span class="rt rt-13">پرفروشترین‌های 2 سال اخیر</span></a>
</div>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="right"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>

<li class="link right"><a href="category.html" class="right rt-13 name">قالب جوملا <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>
<li class="link right"><a href="category.html" class="right rt-13 name">قالب فروشگاهی <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>
<li class="link right"><a href="category.html" class="right rt-13 name">قالب HTML <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>
<li class="link right"><a href="category.html" class="right rt-13 name">قالب PSD <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>
<li class="link right"><a href="#" class="right rt-13 name">قالب whmcs <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>
<li class="link right"><a href="#" class="right rt-13 name">افزونه و ماژول <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>
<li class="link right"><a href="#" class="right rt-13 name">اسکریپت <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
<ul class="small right rt-13">
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
<li class="rt"><a href="category.html"><i class="fa fa-angle-left"></i> زیر مجموعه دسته بندی</a></li>
</ul>
</li>

</ul>
<!--شروع قیمت-->
<span class="left shoping"><i class="fa fa-shopping-cart"></i> <div>۰</div> تومان</span>
<!--پایان قیمت-->

</div>
<!--پایان دسته بندی-->

</div>
</header>
<!--پایان هدر-->