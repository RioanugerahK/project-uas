<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="desktop">
      <div class="div">
        <div class="overlap">
          <div class="rectangle"></div>
          <div class="rectangle-2"></div>
          <div class="rectangle-3"></div>
          <p class="RR-SHOESLAUNDRY">
            <span class="text-wrapper">RR</span>
            <span class="span">&nbsp;</span>
            <span class="text-wrapper-2">SHOESLAUNDRY</span>
          </p>
          <div class="text-wrapper-3">Pricing Plan</div>
          <p class="HOME"><span class="text-wrapper-4">HOME &gt; </span> <span class="text-wrapper-5">Pricing</span></p>
          <p class="faqs-i-help-i">FAQs&nbsp;&nbsp; I&nbsp;&nbsp; Help&nbsp;&nbsp; I&nbsp;&nbsp; Support</p>
          <p class="home-about-services">
          <a href="home.blade.php" class="text-wrapper-6">Home&nbsp;&nbsp; </a>
          <a href="about.blade.php" class="span">About&nbsp;&nbsp;</a>
          <a href="service.blade.php" class="text-wrapper-6">Services&nbsp;&nbsp;</a>
          <a href="pricing.blade.php" class="text-wrapper-2">Pricing&nbsp;&nbsp;</a>
          <a href="pages.blade.php" class="text-wrapper-6">Pages&nbsp;&nbsp;</a>
          <a href="contact.blade.php" class="text-wrapper-6">Contact</a>
          </p>
        </div>
        <p class="OUR-PRICING-PLAN-the">
          <span class="text-wrapper-7">OUR PRICING PLAN<br /></span>
          <span class="text-wrapper-8"><br /></span>
          <span class="text-wrapper-9">The Best Price</span>
        </p>
        <div class="frame">
          <div class="overlap-group">
            <div class="ellipse"></div>
            <p class="p">Fast Cleaning<br /><br />Clean Upper And Midsol<br />(2 - 3 Hari)</p>
          </div>
          <div class="overlap-group-2">
            <div class="frame-2"></div>
            <div class="text-wrapper-10">Rp. 30K</div>
          </div>
        </div>
        <div class="frame-3">
          <div class="ellipse-2"></div>
          <p class="spesial-clean-like-a">
            Spesial Clean<br /><br />Like A New Treatment<br />All Material (Luar dan Dalam)<br />Plus Pewangi/Anti
            Jamur<br />Member Card<br />Sticker
          </p>
          <div class="overlap-2">
            <div class="frame-4"></div>
            <div class="text-wrapper-10">Rp. 80K</div>
          </div>
        </div>
        <div class="frame-5">
          <div class="overlap-3">
            <div class="ellipse"></div>
            <p class="p">
              Deep Clean<br /><br />All Material (Luar dan Dalam)<br />Plus Pewangi/Anti Jamur<br />( 3 - 5 Hari)
            </p>
          </div>
          <div class="overlap-4">
            <div class="frame-2"></div>
            <div class="text-wrapper-10">Rp. 45K</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<style>
    .desktop {
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.desktop .div {
  background-color: #ffffff;
  width: 1440px;
  height: 1024px;
  position: relative;
}

.desktop .overlap {
  position: absolute;
  width: 1440px;
  height: 368px;
  top: 0;
  left: 0;
}

.desktop .rectangle {
  position: absolute;
  width: 1440px;
  height: 269px;
  top: 99px;
  left: 0;
  background-color: #46c6ce;
}

.desktop .rectangle-2 {
  position: absolute;
  width: 1440px;
  height: 118px;
  top: 0;
  left: 0;
  background-color: #194376;
}

.desktop .rectangle-3 {
  position: absolute;
  width: 1081px;
  height: 104px;
  top: 66px;
  left: 173px;
  background-color: #ffffff;
  box-shadow: 0px 4px 4px #00000040;
}

.desktop .RR-SHOESLAUNDRY {
  position: absolute;
  width: 413px;
  height: 74px;
  top: 80px;
  left: 173px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: transparent;
  font-size: 35px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper {
  color: #194376;
}

.desktop .span {
  color: #ed1515;
}

.desktop .text-wrapper-2 {
  color: #46c6ce;
}

.desktop .text-wrapper-3 {
  position: absolute;
  width: 325px;
  height: 65px;
  top: 225px;
  left: 173px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: #ffffff;
  font-size: 48px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .HOME {
  position: absolute;
  width: 150px;
  height: 45px;
  top: 232px;
  left: 1064px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: transparent;
  font-size: 15px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-4 {
  color: #ffffff;
}

.desktop .text-wrapper-5 {
  color: #e3e3e3;
}

.desktop .faqs-i-help-i {
  position: absolute;
  width: 315px;
  top: 23px;
  left: 183px;
  font-family: "Inter-Medium", Helvetica;
  font-weight: 500;
  color: #ffffff;
  font-size: 25px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .home-about-services {
  position: absolute;
  width: 416px;
  height: 72px;
  top: 82px;
  left: 798px;
  font-family: "Inter-Medium", Helvetica;
  font-weight: 500;
  color: transparent;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-6 {
  color: #000000;
}

.desktop .OUR-PRICING-PLAN-the {
  position: absolute;
  width: 503px;
  height: 152px;
  top: 435px;
  left: 468px;
  font-family: "Inter-Medium", Helvetica;
  font-weight: 400;
  color: transparent;
  font-size: 23px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-7 {
  font-weight: 500;
  color: #46c6ce;
}

.desktop .text-wrapper-8 {
  font-weight: 500;
  color: #46c6ce;
  font-size: 20px;
}

.desktop .text-wrapper-9 {
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: #194376;
  font-size: 50px;
}

.desktop .frame {
  position: absolute;
  width: 273px;
  height: 399px;
  top: 612px;
  left: 173px;
  background-color: #e6e6e6;
}

.desktop .overlap-group {
  position: absolute;
  width: 212px;
  height: 268px;
  top: 39px;
  left: 31px;
}

.desktop .ellipse {
  position: absolute;
  width: 128px;
  height: 126px;
  top: 0;
  left: 42px;
  background-color: #888888;
  border-radius: 64px/63px;
}

.desktop .p {
  position: absolute;
  width: 212px;
  height: 143px;
  top: 125px;
  left: 0;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #000000;
  font-size: 15px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .overlap-group-2 {
  position: absolute;
  width: 213px;
  height: 44px;
  top: 326px;
  left: 30px;
}

.desktop .frame-2 {
  position: absolute;
  width: 210px;
  height: 39px;
  top: 5px;
  left: 3px;
  background-color: #194376;
  border: 1px solid;
  border-color: #000000;
}

.desktop .text-wrapper-10 {
  position: absolute;
  width: 213px;
  height: 43px;
  top: 0;
  left: 0;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #e6e6e6;
  font-size: 15px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .frame-3 {
  position: absolute;
  width: 273px;
  height: 399px;
  top: 612px;
  left: 583px;
  background-color: #e6e6e6;
}

.desktop .ellipse-2 {
  position: absolute;
  width: 128px;
  height: 126px;
  top: 32px;
  left: 73px;
  background-color: #888888;
  border-radius: 64px/63px;
}

.desktop .spesial-clean-like-a {
  position: absolute;
  width: 212px;
  height: 143px;
  top: 169px;
  left: 30px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #000000;
  font-size: 15px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .overlap-2 {
  position: absolute;
  width: 213px;
  height: 44px;
  top: 325px;
  left: 32px;
}

.desktop .frame-4 {
  position: absolute;
  width: 210px;
  height: 39px;
  top: 5px;
  left: 0;
  background-color: #194376;
  border: 1px solid;
  border-color: #000000;
}

.desktop .frame-5 {
  position: absolute;
  width: 273px;
  height: 399px;
  top: 612px;
  left: 981px;
  background-color: #e6e6e6;
}

.desktop .overlap-3 {
  position: absolute;
  width: 212px;
  height: 268px;
  top: 34px;
  left: 31px;
}

.desktop .overlap-4 {
  position: absolute;
  width: 213px;
  height: 44px;
  top: 319px;
  left: 29px;
}

</style>