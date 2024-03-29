<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Home</title>
  </head>
  <body>
    <div class="desktop">
      <div class="div">
        <div class="overlap-group">
          <div class="text-wrapper">Home</div>
          <div class="rectangle"></div>
          <div class="rectangle-2"></div>
          <div class="rectangle-3"></div>
          <p class="home-about-services">
          <a href="home" class="text-wrapper">Home&nbsp;&nbsp; </a>
          <a href="about" class="span">About&nbsp;&nbsp;</a>
          <a href="service" class="span">Services&nbsp;&nbsp;</a>
          <a href="pricing" class="span">Pricing&nbsp;&nbsp;</a>
          <a href="contact" class="span">Contact</a>
          <a href="{{route('actionlogout')}}" class="span"><i class="fa fa-power-off"></i> Log Out</a>
          </p>
          <p class="title">
            <span class="text-wrapper-2">RR</span>
            <span class="text-wrapper-3">&nbsp;</span>
            <span class="span">SHOESLAUNDRY</span>
          </p>
          <div class="text-wrapper-4">Home</div>
          <p class="faqs-i-help-i">FAQs&nbsp;&nbsp; I&nbsp;&nbsp; Help&nbsp;&nbsp; I&nbsp;&nbsp; Support</p>
        </div>
        <p class="LEARN-ABOUT-US-we">
          <span class="text-wrapper-8"><br /></span>
          <span class="text-wrapper-9">We Are Quality Laundry<br />Provider In Your City<br /></span>
          <span class="text-wrapper-10"><br /></span>
          <span class="text-wrapper-11">
            Welcome to RRShoesClean! We are an experienced team that focuses on caring for your shoes. With the best
            cleaning techniques and environmentally friendly materials, we pay close attention to ensuring every shoe is
            returned to its best condition. Trust us to care for and extend the life of your beloved shoes.
            </span>
        </p>
        <img class="image" src="{{asset('img/sepatu.png')}}" />
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
  width: 1440px;
  height: 1024px;
  position: relative;
}

.desktop .overlap-group {
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
.desktop .home-about-services a {
 text-decoration: none;
}

.desktop .text-wrapper {
  color: #000000;
  font-family: "Inter-MediumItalic", Helvetica;
}

.desktop .span {
  color: #46c6ce;
  font-family: "Inter-MediumItalic", Helvetica;
}

.desktop .title {
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

.desktop .text-wrapper-2 {
  color: #194376;
}

.desktop .text-wrapper-3 {
  color: #ed1515;
}

.desktop .text-wrapper-4 {
  position: absolute;
  width: 262px;
  height: 58px;
  top: 225px;
  left: 173px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: #ffffff;
  font-size: 50px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.desktop .text-wrapper-5 {
  color: #ffffff;
}

.desktop .text-wrapper-6 {
  color: #e3e3e3;
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

.desktop .LEARN-ABOUT-US-we {
  position: absolute;
  width: 759px;
  top: 481px;
  left: 602px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 400;
  color: transparent;
  font-size: 25px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-7 {
  font-weight: 800;
  color: #46c6ce;
}

.desktop .text-wrapper-8 {
  font-weight: 800;
  color: #000000;
  font-size: 15px;
}

.desktop .text-wrapper-9 {
  font-weight: 800;
  color: #194376;
  font-size: 50px;
}

.desktop .text-wrapper-10 {
  font-weight: 800;
  color: #000000;
  font-size: 30px;
}

.desktop .text-wrapper-11 {
  font-family: "Inter-Medium", Helvetica;
  font-weight: 500;
  color: #000000;
}

.desktop .image {
  position: absolute;
  width: 410px;
  height: 473px;
  top: 456px;
  left: 116px;
  object-fit: cover;
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
