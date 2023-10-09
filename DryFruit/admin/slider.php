<html>
<body>
<html lang="en">
  <head>
  <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <style>
      
    /* @font-face {
    font-family: "Monument_Extended";
    src: url(C:\xampp\htdocs\PRO\OnlineShopping\CSS & JS\MonumentExtended-FreeForPersonalUse\MonumentExtended-Ultrabold.otf) format("truetype");
    font-weight: normal;
    } */
    @import url(https://db.onlinewebfonts.com/c/55d433372d270829c51e2577a78ef12d?family=Monument+Extended+Bold);
    body {
    margin: 0; /* Remove default margin */
    padding: 0;
    box-sizing:border-box;
    max-height: 100%;
    }
    /* .max{
      height:100vh;
    } */
    #main{
      height: 100vh;
      width: 100%;
      position: relative;
      display: flex;
      align-item:center;
      justify-content: center;
    }
    #main img{
      height:600px;
      width: 600px;
      position: relative;
      z-index: 99;
      object-fit: cover;
    }
    #scroll-div{
      position: absolute;
      top:20%;
      width: 100%;
      /* height: 100px; */
      white-space: nowrap;
      overflow-x:auto;
      overflow-y:hidden;
      color:#6fdeff;
    }
    #scroll-div::-webkit-scrollbar{
      display:none;
    }
    #scroll-div h1{
      display: inline-block;
      font-size: 110px;
      text-transform:uppercase;
      margin-right:30px;
      latter-spacing:4px;
      font-family: "Monument Extended Bold";
      animation-name: scroll;
      animation-timing-function: linear;
      animation-duration: 4s;
      animation-iteration-count: infinite;
    }

    #scroll-div2{
      position: absolute;
      top:40%;
      width: 100%;
      /* height: 100px; */
      white-space: nowrap;
      overflow-x:auto;
      overflow-y:hidden;
      z-index: 100;
      color:#6faaff;
    }
    #scroll-div2::-webkit-scrollbar{
      display:none;
    }
    #scroll-div2 h1{
      display: inline-block;
      font-size: 110px;
      text-transform:uppercase;
      margin-right:30px;
      latter-spacing:4px;
      color: transparent;
       font-family: "Monument Extended Bold";
      -webkit-text-stroke-color: #6faaff; 
      -webkit-text-stroke-width: 2px; 
      animation-name: scroll;
      animation-timing-function: linear;
      animation-duration: 4s;
      animation-iteration-count: infinite;
      animation-direction: reverse;
    }

    #scroll-div3{
      position: absolute;
      top:60%;
      width: 100%;
      /* height: 100px; */
      white-space: nowrap;
      overflow-x:auto;
      overflow-y:hidden;
      color:#6fdeff;
    }
    #scroll-div3::-webkit-scrollbar{
      display:none;
    }
    #scroll-div3 h1{
      display: inline-block;
      font-size: 110px;
      text-transform:uppercase;
      margin-right:30px;
      latter-spacing:4px;
      font-family: "Monument Extended Bold";
      animation-name: scroll;
      animation-timing-function: linear;
      animation-duration: 4s;
      animation-iteration-count: infinite;
    }
    #text{
        font-size: 35px;
        position: absolute;
        font-family: "Monument Extended Bold";
        width: 80%;
        text-transform: uppercase;
        z-index: 999;
        top: 5%;
        text-align: center;
        -webkit-text-stroke-color: #000; 
      -webkit-text-stroke-width: 0.75px; 
      color: #6faaff;
    }

    @keyframes scroll {
        0%{
            transform: translateX(calc(-100% - 32px));
        }
        100%{
            transform: translateX(0);
        }
    }
  </style>
  <body><br><br>
  <!-- home section -->
  <!-- <div class="max"> -->
    <div id="main">
      <img src="image\index1.webp" alt="">
      <h1 id="text"> We're content creation tea and we're going to make some cool stuff for your </h1>
      <div id="scroll-div">
        <h1>CASHEW COCOCNUTPOWDER ELAICHI</h1>
        <h1>CASHEW COCOCNUTPOWDER ELAICHI</h1>
        <h1>CASHEW COCOCNUTPOWDER ELAICHI</h1>
        <h1>CASHEW COCOCNUTPOWDER ELAICHI</h1>
      </div>
      <div id="scroll-div2">
        <h1>FIGS SPRINKLES APRICOTS</h1>
        <h1>FIGS SPRINKLES APRICOTS</h1>
        <h1>FIGS SPRINKLES APRICOTS</h1>
        <h1>FIGS SPRINKLES APRICOTS</h1>
      </div>
      <div id="scroll-div3">
        <h1>ALMOND RAISINS WALNUTS</h1>
        <h1>ALMOND RAISINS WALNUTS</h1>
        <h1>ALMOND RAISINS WALNUTS</h1>
        <h1>ALMOND RAISINS WALNUTS</h1>
      </div>
    </div>
  </body>
</html>
