<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="desktop">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <div class="rectangle-2"></div>
          <p class="HOME-ABOUT-SERVICES">
            <span class="text-wrapper">HOME</span>
            <span class="span"
              >&nbsp;&nbsp; ABOUT&nbsp;&nbsp; SERVICES&nbsp;&nbsp; PRICING&nbsp;&nbsp; PAGES&nbsp;&nbsp; CONTACT</span
            >
          </p>
          <p class="RR-SHOESLAUNDRY">
            <span class="text-wrapper-2">RR </span> <span class="text-wrapper-3">SHOESLAUNDRY</span>
          </p>
          <div class="text-wrapper-4">Home</div>
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

.desktop .overlap-group-wrapper {
  background-color: #ffffff;
  width: 1440px;
  height: 1024px;
}

.desktop .overlap-group {
  position: relative;
  height: 368px;
}

.desktop .rectangle {
  position: absolute;
  width: 1440px;
  height: 269px;
  top: 99px;
  left: 0;
  background-color: #46c6ce;
}

.desktop .div {
  position: absolute;
  width: 1440px;
  height: 118px;
  top: 0;
  left: 0;
  background-color: #194376;
}

.desktop .rectangle-2 {
  position: absolute;
  width: 1081px;
  height: 104px;
  top: 66px;
  left: 173px;
  background-color: #ffffff;
  box-shadow: 0px 4px 4px #00000040;
}

.desktop .HOME-ABOUT-SERVICES {
  position: absolute;
  width: 561px;
  height: 69px;
  top: 83px;
  left: 676px;
  font-family: "Inter-Medium", Helvetica;
  font-weight: 500;
  color: transparent;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper {
  font-family: "Inter-MediumItalic", Helvetica;
  font-style: italic;
  color: #46c6ce;
}

.desktop .span {
  font-family: "Inter-MediumItalic", Helvetica;
  font-style: italic;
  color: #000000;
}

.desktop .RR-SHOESLAUNDRY {
  position: absolute;
  width: 413px;
  height: 74px;
  top: 80px;
  left: 180px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: transparent;
  font-size: 35px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-2 {
  color: #46c6ce;
}

.desktop .text-wrapper-3 {
  color: #000000;
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

</style>