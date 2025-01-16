<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>سایت ورزشی ایر اسپرت</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <div class="navigation">
        <div class="logo">
          <img src="" alt="" />
        </div>

        <div class="nav">
          <ul>
            <li><a href="#">خانه</a></li>
            <li><a href="#">وسایل ورزشی</a></li>
            <li><a href="#">محصولات جدید</a></li>
            <li><a href="#">کفش</a></li>
            <li><a href="#">وزنه</a></li>
          </ul>
        </div>
        <div class="lgn">
       <?php // login and register button was here?>
      <a href="<?=site_url("?logout")?>">خروج از حساب کاربری</a> 
      </div>
      </div>
    </header>
    <main>
      <div class="head1">
        <img
          src="assets/img/DALL·E 2024-11-30 19.41.13 - A bold and dynamic sports equipment poster design tailored for a laptop screen aspect ratio. The design features a yellow and black color palette, sho.webp"
          alt=""
        />
      </div>
      <div class="head2" dir="rtl">
        <h1 class="title">به سایت ورزشی ایر اسپرت خوش آمدید</h1>
        <p id="matn">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
          از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و
          سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
          متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه
          درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
          نرم افزارها شناخت بیشتری را برای طراحان رایانه ای و فرهنگ پیشرو در
          زبان فارسا
        </p>
        <button class="sub">دیدن محصولات</button>
      </div>
    </main>
    <div class="product">
      <h3 style="text-align: center">محصولات ورزشی</h3>
      <div class="p2">
        <?php foreach ($products as $product):?>
      <div class="box">
          <img
            src="assets/img/<?= $product->image_url?>"
            alt=""
          />
          <span><?= $product->lable?></span>
          <span><?= $product->price?></span>
          <hr />
          <span>خرید محصول</span>
        </div>
        <?php endforeach;?>
      </div>
    </div>
    <h2 class="h22">دسته بندی پیشنهادی</h2>
    <div class="category">
      <div class="cat1">
        <img src="assets/img/football.webp" alt="ball" />
        <p>توپ فوتبال</p>
      </div>
      <div class="cat1">
        <img src="assets/img/kit.webp" alt="ball" />
        <p>کیت فوتبال</p>
      </div>
      <div class="cat1">
        <img src="assets/img/football-boots.webp" alt="ball" />
        <p>استوک فوتبال</p>
      </div>
      <div class="cat1">
        <img src="assets/img/sweater.webp" alt="ball" />
        <p>گرمکن ورزشی</p>
      </div>
      <div class="cat1">
        <img src="assets/img/shoes.webp" alt="ball" />
        <p>کفش سالن</p>
      </div>
      <div class="cat1">
        <img src="assets/img/bag.webp" alt="ball" />
        <p>ساک ورزشی</p>
      </div>
      <div class="cat1">
        <img src="assets/img/football-equipments.webp" alt="ball" />
        <p>لوازم فوتبال</p>
      </div>
    </div>
    <footer>
      <div class="f1">
        <h2>دسترسی سریع</h2>
        <p>خدمات مشتریان</p>
        <p>آخرین خبر</p>
        <p>محصولات</p>
      </div>
      <div class="f1">
        <h2>شبکه های اجتماعی</h2>
      </div>
      <div class="f1">
        <h2>تماس با ما:</h2>
        <p>+9898225820</p>
        <p>0258936230</p>
      </div>
      <div class="f1">
        <h2>آدرس</h2>
        <p>قم خیابان بلوار امین کوچه 31</p>
      </div>
    </footer>
  </body>
</html>