<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Service</title>
  </head>
  <body>
    <div class="desktop">
      <div class="div">
        <div class="overlap-group">
          <div class="text-wrapper">Service</div>
          <div class="rectangle"></div>
          <div class="rectangle-2"></div>
          <div class="rectangle-3"></div>
          <p class="RR-SHOESLAUNDRY">
            <span class="span">RR</span>
            <span class="text-wrapper-2">&nbsp;</span>
            <span class="text-wrapper-2">SHOESLAUNDRY</span>
          </p>
          <div class="text-wrapper-4">Our Services</div>x
          <p class="faqs-i-help-i">FAQs&nbsp;&nbsp; I&nbsp;&nbsp; Help&nbsp;&nbsp; I&nbsp;&nbsp; Support</p>
          <p class="home-about-services">
            <a href="home" class="text-wrapper-5">Home&nbsp;&nbsp; </a>
            <a href="about" class="text-wrapper-5">About&nbsp;&nbsp;</a>
            <a href="service" class="text-wrapper-3">Services&nbsp;&nbsp;</a>
            <a href="pricing" class="text-wrapper-5">Pricing&nbsp;&nbsp;</a>
            <a href="contact" class="text-wrapper-5">Contact</a>
          </p>
        </div>
        <p class="OUR-SERVICE-what-we">
            <span class="text-wrapper-6">OUR SERVICE<br /></span>
            <span class="text-wrapper-7">What We Offer</span>
        </p>
        <img class="cleaning-products" src="img/cleaning-products.png" />
        <p class="p">Use the best tools that will not damage your shoes</p>
        <img class="cleaning-staff" src="img/cleaning-staff.png" />
        <p class="text-wrapper-8">Cleaned by experts experienced in shoe cleaning</p>
        <div class="overlap">
            <img class="quick" src="img/quick.png" />
            <p class="text-wrapper-9">Clean shoes quickly and on time</p>
        </div>
        <img class="sun" src="img/sun.png" />
        <p class="text-wrapper-10">Dry shoes quickly without damaging the material of the shoes</p>
      </div>
    </div>
    <div class="footer">
        <h4>Hubungi Kami</h4>
        <p>Alamat: Jl. Phh Musthafa</p>
        <p>Email: rrshoeslaundry@gmail.com</p>
        <p>WhatsApp: +62-8572-4495-430</p>

        <a href="home" class="home">Home</a>
        <a href="about" class="about">About</a>
        <a href="service" class="service">Service</a>
        <a href="pricing" class="pricing">Pricing</a>
        <a href="contact" class="contact">Contact</a>
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
  overflow: hidden;
  width: 1440px;
  height: 1024px;
  position: relative;
}

.desktop .overlap-group {
  position: absolute;
  width: 1440px;
  height: 378px;
  top: 0;
  left: 0;
}

.desktop .text-wrapper {
  position: absolute;
  width: 266px;
  height: 84px;
  top: 294px;
  left: 153px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: #ffffff;
  font-size: 50px;
  letter-spacing: 0;
  line-height: normal;
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
  top: 55px;
  left: 173px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: transparent;
  font-size: 35px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .span {
  color: #194376;
}

.desktop .text-wrapper-2 {
  color: #46c6ce;
}

.desktop .text-wrapper-3 {
  color: #000000;
}

.desktop .text-wrapper-4 {
  position: absolute;
  width: 325px;
  height: 65px;
  top: 225px;
  left: 173px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: #ffffff;
  font-size: 45px;
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
    color: #ffffff;
    font-size: 15px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .faqs-i-help-i {
  position: absolute;
  width: 315px;
  top: 10px;
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
  width: 518px;
  height: 71px;
  top: 82px;
  left: 736px;
  font-family: "Inter-Medium", Helvetica;
  font-weight: 500;
  color: transparent;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
}
.desktop .home-about-services a{
  text-decoration: none;
}

.desktop .text-wrapper-5 {
  color: #46c6ce;
}

.desktop .OUR-SERVICE-what-we {
  position: absolute;
  width: 426px;
  height: 171px;
  top: 416px;
  left: 501px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 400;
  color: transparent;
  font-size: 20px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-6 {
    font-weight: 600;
    color: #46c6ce;
}

.desktop .text-wrapper-7 {
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: #194376;
  font-size: 50px;
}

.desktop .cleaning-products {
    position: absolute;
    width: 203px;
    height: 201px;
    top: 588px;
    left: 91px;
    object-fit: cover;
}

.desktop .p {
    position: absolute;
    width: 244px;
    height: 58px;
    top: 796px;
    left: 71px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 15px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .cleaning-staff {
    position: absolute;
    width: 203px;
    height: 201px;
    top: 588px;
    left: 447px;
    object-fit: cover;
}

.desktop .text-wrapper-8 {
    position: absolute;
    width: 208px;
    height: 58px;
    top: 796px;
    left: 457px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 15px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .overlap {
    position: absolute;
    width: 239px;
    height: 259px;
    top: 588px;
    left: 803px;
}

.desktop .quick {
    position: absolute;
    width: 203px;
    height: 201px;
    top: 0;
    left: 0;
    object-fit: cover;
}

.desktop .text-wrapper-9 {
    position: absolute;
    width: 231px;
    height: 59px;
    top: 207px;
    left: 8px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 15px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .sun {
    position: absolute;
    width: 203px;
    height: 201px;
    top: 588px;
    left: 1159px;
    object-fit: cover;
}

.desktop .text-wrapper-10 {
    position: absolute;
    width: 231px;
    height: 62px;
    top: 796px;
    left: 1145px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 15px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}

.footer {
      background-color: #194376;
      padding: 30px 0;
      color: #333;
      text-align: center;
    }

    .footer h4 {
      margin-bottom: 15px;
      font-size: 20px;
      color: #ffffff;
    }

    .footer p {
      margin-bottom: 10px;
      font-size: 16px;
      color: #ffffff;
    }

    .footer a {
      color: #46c6ce;
      text-decoration: none;
      margin: 0 10px;
    }

    .footer a:hover {
      color: #194376;
      text-decoration: underline;
    }

    /* Tambahan CSS untuk tautan */
    .footer a.home:hover {
      color: #46c6ce;
      text-decoration: underline;
    }

    .footer a.about:hover {
      color: #46c6ce;
      text-decoration: underline;
    }

    .footer a.service:hover {
      color: #46c6ce;
      text-decoration: underline;
    }

    .footer a.pricing:hover {
      color: #46c6ce;
      text-decoration: underline;
    }

    .footer a.contact:hover {
      color: #46c6ce;
      text-decoration: underline;
    }

</style>
