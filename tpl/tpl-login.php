<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>فرم ورود</title>
    <link rel="stylesheet" href="./assets/css/form.css">
  </head>
  <body>
    <form action="<?=site_url("auth-login.php")?>" method="post">
      <h2>خوش آمدید</h2>
      <p>برای ورود اطلاعات خود را وارد کنید</p>
      <div class="inputed">
        <div class="gmail">
          <label for="gmail">ایمیل:</label>
          <input
            type="email"
            id="gmail"
            name="email"
            placeholder="ایمیل خود را وارد کنید"
            style="font-family: assets/fonts/vazir"
          />
        </div>
        <br />
        <div class="pass">
          <label for="pass">رمز عبور:</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="رمز عبور خود را وارد کنید"
            style="font-family: assets/fonts/vazir"
          />
        </div>
        <a href="<?=site_url("auth-signup.php")?>">حساب کاربری ندارید؟</a>
        <br />
        <input type="submit" name="submit" class="button" value="ورود" id="sub-msg"/>
      <p id="result"></p>
      <br>
      </div>
    </form>
  </body>
</html>