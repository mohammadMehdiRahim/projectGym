<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>فرم ثبت نام</title>
    <link rel="stylesheet" href="assets/css/form.css">
  </head>
  <body>
    <form action="<?=site_url("auth-signup.php")?>" method="post">
      <img src="assets/img/user.png" alt="user" class="user" />
      <h2>خوش آمدید</h2>
      <p>برای ثبت نام اطلاعات خود را وارد کنید</p>
      <div class="inputed">
        <div class="name">
          <label for="name">نام کاربری:</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="نام کاربری خود را وارد کنید"
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
            style="font-family: vazir"
          />
        </div>
        <br />
        <div class="gmail">
          <label for="gmail">ایمیل:</label>
          <input
            type="email"
            id="gmail"
            name="email"
            placeholder="ایمیل خود را وارد کنید"
            style="font-family: vazir"
          />
        </div>
        <br />
        <input
          type="submit"
          name="submit"
          class="button"
          value="ثبت نام"
          id="sub-msg"
        />
        <br />
      </div>
    </form>
  </body>
</html>