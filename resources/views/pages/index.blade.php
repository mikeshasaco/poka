@extends('layouts.master')
@section('content')
<style>

.timeline {
  position: relative;
  width: 100%;
  padding: 30px 0;
}
.timeline .timeline-container {
  position: relative;
  width: 100%;
}
.timeline .timeline-end,
.timeline .timeline-start,
.timeline .timeline-year {
  position: relative;
  width: 100%;
  text-align: center;
  z-index: 1;
}
.timeline .timeline-end p,
.timeline .timeline-start p,
.timeline .timeline-year p {
  display: inline-block;
  width: 80px;
  height: 80px;
  margin: 0;
  padding: 30px 0;
  text-align: center;
  /* background: linear-gradient(#4F84C4, #00539C); */
  background: #fba0e3;
  border-radius: 100px;
  box-shadow: 0 0 5px rgba(0, 0, 0, .4);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
}
.timeline .timeline-year {
  margin: 30px 0;
}
.timeline .timeline-continue {
  position: relative;
  width: 100%;
  padding: 60px 0;
}
.timeline .timeline-continue::after {
  position: absolute;
  content: "";
  width: 1px;
  height: 100%;
  top: 0;
  left: 50%;
  margin-left: -1px;
  background: #fba0e3;
}
.timeline .row.timeline-left,
.timeline .row.timeline-right .timeline-date {
  text-align: right;
}
.timeline .row.timeline-right,
.timeline .row.timeline-left .timeline-date {
  text-align: left;
}
.timeline .timeline-date {
  font-size: 14px;
  font-weight: 600;
  margin: 41px 0 0 0;
}
.timeline .timeline-date::after {
  content: '';
  display: block;
  position: absolute;
  width: 14px;
  height: 14px;
  top: 45px;
  /* background: linear-gradient(#4F84C4, #00539C); */
  background: #fba0e3;
  box-shadow: 0 0 5px rgba(0, 0, 0, .4);
  border-radius: 15px;
  z-index: 1;
}
.timeline .row.timeline-left .timeline-date::after {
  left: -7px;
}
.timeline .row.timeline-right .timeline-date::after {
  right: -7px;
}
.timeline .timeline-box,
.timeline .timeline-launch {
  position: relative;
  display: inline-block;
  margin: 15px;
  padding: 20px;
  border: 1px solid #dddddd;
  border-radius: 6px;
  background: #000000;
}
.timeline .timeline-launch {
  width: 100%;
  margin: 15px 0;
  padding: 0;
  border: none;
  text-align: center;
  background: transparent;
}
.timeline .timeline-box::after,
.timeline .timeline-box::before {
  content: '';
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
}
.timeline .row.timeline-left .timeline-box::after,
.timeline .row.timeline-left .timeline-box::before {
  left: 100%;
}
.timeline .row.timeline-right .timeline-box::after,
.timeline .row.timeline-right .timeline-box::before {
  right: 100%;
}
.timeline .timeline-launch .timeline-box::after,
.timeline .timeline-launch .timeline-box::before {
  left: 50%;
  margin-left: -10px;
}
.timeline .timeline-box::after {
  top: 26px;
  border-color: transparent transparent transparent #ffffff;
  border-width: 10px;
}
.timeline .timeline-box::before {
  top: 25px;
  border-color: transparent transparent transparent #dddddd;
  border-width: 11px;
}
.timeline .row.timeline-right .timeline-box::after {
  border-color: transparent #ffffff transparent transparent;
}
.timeline .row.timeline-right .timeline-box::before {
  border-color: transparent #dddddd transparent transparent;
}
.timeline .timeline-launch .timeline-box::after {
  top: -20px;
  border-color: transparent transparent #dddddd transparent;
}
.timeline .timeline-launch .timeline-box::before {
  top: -19px;
  border-color: transparent transparent #ffffff transparent;
  border-width: 10px;
  z-index: 1;
}
.timeline .timeline-box .timeline-icon {
  position: relative;
  width: 40px;
  height: auto;
  float: left;
}
.timeline .timeline-icon i {
  font-size: 25px;
  /* color: #4F84C4; */
  color:#fba0e3;
}
.timeline .timeline-box .timeline-text {
  position: relative;
  width: calc(100% - 40px);
  float: left;
}
.timeline .timeline-launch .timeline-text {
  width: 100%;
}
.timeline .timeline-text h3 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 3px;
}
.timeline .timeline-text p {
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 0;
}
@media (max-width: 768px) {
  .timeline .timeline-continue::after {
    left: 40px;
  }
  .timeline .timeline-end,
  .timeline .timeline-start,
  .timeline .timeline-year,
  .timeline .row.timeline-left,
  .timeline .row.timeline-right .timeline-date,
  .timeline .row.timeline-right,
  .timeline .row.timeline-left .timeline-date,
  .timeline .timeline-launch {
    text-align: left;
  }
  .timeline .row.timeline-left .timeline-date::after,
  .timeline .row.timeline-right .timeline-date::after {
    left: 47px;
  }
  .timeline .timeline-box,
  .timeline .row.timeline-right .timeline-date,
  .timeline .row.timeline-left .timeline-date {
    margin-left: 55px;
  }
  .timeline .timeline-launch .timeline-box {
    margin-left: 0;
  }
  .timeline .row.timeline-left .timeline-box::after {
    left: -20px;
    border-color: transparent #ffffff transparent transparent;
  }
  .timeline .row.timeline-left .timeline-box::before {
    left: -22px;
    border-color: transparent #dddddd transparent transparent;
  }
  .timeline .timeline-launch .timeline-box::after,
  .timeline .timeline-launch .timeline-box::before {
    left: 30px;
    margin-left: 0;
  }
}

@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    .bpokemon{
        background-image: url("966315.png");
        /* background-size: 100%; */
  background-repeat: no-repeat;
  background-position: center;
  height: 1000px;
    }
    
    
    .cardone {
  
  --color1: rgb(0, 231, 255);
  --color2: rgb(255, 0, 231);
  
  width: 320px;
  height: 446px;
  /* background-color: #FFD700; */
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 5% / 3.5%;
  box-shadow: -13px -13px 13px -15px var(--color1), 
    13px 13px 13px -15px var(--color2), 
    0 0 4px 2px rgba(255,255,255,0.5),
    0 35px 25px -15px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  display: block;
  vertical-align: middle;
  margin: 20px 10px;
  /* roatation */
  /* animation: holoCard 15s ease infinite; */
  transform-origin: center;
  z-index: 10;
  overflow: hidden;
  transform: translate3d(0,0,-1px); 
}
.cardone.redmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("curselord.png");

}
.cardone.qmark {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("questionmark.jpeg");

}
.cardone.bluemask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("blue.png");

}

.cardone.rosemask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("rose.png");

}

.cardone.fullgoldmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("fullgold.png");

}

.cardone.greenmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("green.png");

}
.cardone.yellowmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("yellow.png");

}
.cardone.cardverse {
  --color1: #ffdf35;
  --color2: #65f0ff;
  background-image: url("blizzard.png");
}
.cardone.mew {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('gold.gif');
}
.cardone.black {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('black.gif');
}
.cardone.pink {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('pink.gif');
}
.cardone > span {
  position: relative;
  top: 45%;
}
.cardone:before,
.cardone:after {
  content: "";
  opacity: .1;
  mix-blend-mode: screen;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background-repeat: no-repeat;
}
.cardone:before {
  background-position: 50% 50%;
  background-size: 300% 300%;
  animation: holoGradient 15s ease infinite both;
  background-image: linear-gradient(
    115deg,
    transparent 0%,
    var(--color1) 30%,
    transparent 47.5%,
    transparent 52.5%,
    var(--color2) 70%,
    transparent 100%
  );
}
.cardone.cardverse:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/3ov9jQqeeHygU7zXrO/giphy.gif?cid=ecf05e47saar1c14zcrpsx889mhwyo6xb8py1laitbv9rt8b&rid=giphy.gif&ct=g");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.redmask:after {
  opacity: 1;
  background-image: url("https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExdWl3b2Zjbmtyd3IzN2VwY2FjMzFsem15NTZtcDVpamoxaDRyOGY0NCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/CzDBwKa5DBDppHCb6m/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.qmark:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/gmDwphaOWmfkY/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}

.cardone.bluemask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/CKlafeh1NAxz35KTq4/giphy-downsized-large.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.rosemask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/LVCdHNPTIY2be/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}

.cardone.fullgoldmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/3o7aCXpnE2y0YCCoJa/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}


.cardone.greenmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/1aTUTJOn3aavLVC6G1/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.yellowmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/GJnJcRCptdMRy/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}

.cardone.active {
  animation: none;
}
.cardone.active:before {
  opacity: 1;
  animation: none;
  transition: none;
  background-image: linear-gradient(
    115deg,
    transparent 30%,
    var(--color1) 48%,
    var(--color2) 53%,
    transparent 70%
  );
  filter: opacity(0.66);
  mix-blend-mode: screen;
}
.cardone.active:before,
.cardone.active:after {
  animation: none;  
}
.cardone.active:after {
  filter: brightness(2.5);
  mix-blend-mode: screen;
}
.demo .cardone:nth-of-type(1),
.demo .cardone:nth-of-type(2),
.demo .cardone:nth-of-type(3) {
  width: 124px;
  height: 170px;
  box-shadow: 0 0 1px 1px rgba(white,0.4), 0 25px 15px -10px rgba(0, 0, 0, 0.5);
  animation: none;
}
.demo .cardone:nth-of-type(1),
.demo .cardone:nth-of-type(2),
.demo .cardone:nth-of-type(3) {
  &:before, &:after {
    animation: none;
    opacity: 1;
  } 
}
.demo .cardone:nth-of-type(1) {
  &:before, &:after { display: none; }
}
.demo .cardone:nth-of-type(2) {
  background: none;
  &:before { display: none; }
}
.demo .cardone:nth-of-type(3) {
  background: none;
  &:before { background-position: center; }
  &:after { display: none; }
}
.operator {
  display: inline-block;
  vertical-align: middle;
  font-size: 45px;
}
@keyframes holoSparkle {
  0%, 5%, 100% { opacity: 0.2; background-position: 50% 50%; }
  33% { opacity: 1; background-position: 40% 40%; filter: brightness(2); }
  45% { opacity: 0.4; }
  66% { opacity: 1; background-position: 60% 60%; filter: brightness(2); }
}
@keyframes holoGradient {
  0%, 100% {
    opacity: 0.05;
    background-position: 50% 50%;
  }
  33% {
    background-position: 100% 100%;
    opacity: .66;
  }
  66% {
    background-position: 0% 0%;
    opacity: .66;
  }
}
@keyframes holoCard {
  0%, 100% {
    transform: rotateZ(0deg) rotateX(0deg) rotateY(0deg);
  }
  33% {
    transform: rotateZ(-10deg) rotateX(20deg) rotateY(-12deg);
  }
  66% {
    transform: rotateZ(10deg) rotateX(-20deg) rotateY(12deg);
  }
}
.telegramimage{
    height: 45px !important;
    width:  40px !important;
}
.twitterimage{
    height: 45px !important;
    width:  40px !important;
}
.demo,
.cardsone { 
  display: flex;
  align-items: center;
  justify-content: center;
  perspective: 2000px;
  position: relative;
  z-index: 1;
  transform: translate3d(0.1px, 0.1px, 0.1px )
}
.cardsone .cardone {
  &:nth-child(2) {
    &, &:before, &:after {
      animation-delay: 0.2s;
    }
  }
  &:nth-child(3) {
    &, &:before, &:after {
      animation-delay: 0.4s;
    }
  }
}
@media(max-width:430px){
   .header{
      /* margin-top: 43px; */
  
    }
}
    /* FAQ box */
    .question-title h3{
    font-size: 24px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 15px;
    margin: 0;
    cursor: pointer;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 2px;
    position: relative;
}
.question-title h3:after{
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 20px;
    top: 50%;
    transform: translateY(-50%);
}
.question-title.active h3:after{
    content: '-';
}
.content-main{
    background-color: #fff;
    display: none;
}
.content-inner{
    padding: 5%;
}
.content-inner p {
    font-size: 24px;
}
.content-main *{
    margin-top: 0;
    line-height: 1.5;
}
.question-title{
    border-bottom: 1px solid #fff;
}

.avatar-circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  overflow: hidden;
  background-color: #222;  /* Cyber black background */
  border: 2px solid #fba0e3;  /* Cyber pink border */
  display: flex;
  align-items: center;
  justify-content: center;
}

.avatar-circle img {
  width: 70%;
  height: auto;
}

  
  
</style>


<header id="header" class="header">
  <div class="fixed-top d-flex justify-content-center w-100">
    <nav class="d-flex flex-wrap align-items-center border rounded-pill px-3 py-2 mt-2"
         style="background-color: rgba(20, 20, 20, 0.9); border-color: #00ffc6; max-width: 800px; width: 95%;">
  
      <a class="text-light small mx-2 nav-link p-0" href="/">Home</a>
      <a class="text-light small mx-2 nav-link p-0" href="/tokens">Tokens</a>
      <a class="text-light small mx-2 nav-link p-0" href="/dashboard">Dashboard</a>
      <a class="text-light small mx-2 nav-link p-0" href="/roadmap">Roadmap</a>
  
      <a href="https://x.com/ClizaSystems" target="_blank" rel="noopener noreferrer" class="text-light small mx-2 nav-link p-0">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
          <path d="..."></path>
        </svg>
      </a>
  
      <a href="https://t.me/cliza_ai" target="_blank" rel="noopener noreferrer" class="text-light small mx-2 nav-link p-0">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
          <path d="..."></path>
        </svg>
      </a>
    </nav>
  </div>
</header>

<div class="basic-1 " style="background-color:black">

    <div class="container my-5">
    <h5 style="color:#fba0e3; padding-bottom:20px;">Experience the battles of Pokax AI </h5>

      <div class="row">


        <!-- Bot & Sniper Protection -->
        <div class="col-md-6 mb-4">
          <div class="p-4 rounded border" style="background-color: rgba(0,0,0,0.5); border-color: #00ffc6;">
            <h3 class="h5 text-light">Choose your favorite Pokamon AI </h3>
            <p class="text-info">You will have a selection of 4 pokamon to choose from to start battling against others and AI to earn badges.</p>
          </div>
        </div>

        <!-- Smart Metadata -->
        <div class="col-md-6 mb-4">
          <div class="p-4 rounded border" style="background-color: rgba(0,0,0,0.5); border-color: #00ffc6;">
            <div class="d-flex align-items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#00ffc6" stroke-width="2" class="mr-2">
                <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
                <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/>
                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>
              </svg>
              <h3 class="h5 text-light mb-0">Battle Against Other Trainers</h3>
            </div>
            <p class="text-info">You will be able to battle against other trainers and AI Gym leaders.</p>
          </div>
        </div>

        <!-- Locked Liquidity Pool -->
        <div class="col-md-6 mb-4">
          <div class="p-4 rounded border" style="background-color: rgba(0,0,0,0.5); border-color: #00ffc6;">
            <div class="d-flex align-items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#00ffc6" stroke-width="2" class="mr-2">
                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
              </svg>
              <h3 class="h5 text-light mb-0">Buy pokai tokens earn rewards</h3>
            </div>
            <p class="text-info">We will launch a pokai token that will offer rewards to trainers earn more as they go along.</p>
          </div>
        </div>

        <!-- Earn LP Fees -->
        <div class="col-md-6 mb-4">
          <div class="p-4 rounded border" style="background-color: rgba(0,0,0,0.5); border-color: #00ffc6;">
            <div class="d-flex align-items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#00ffc6" stroke-width="2" class="mr-2">
                <circle cx="8" cy="8" r="6"></circle>
                <path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path>
                <path d="M7 6h1v4"></path>
                <path d="m16.71 13.88.7.71-2.82 2.82"></path>
              </svg>
              <h3 class="h5 text-light mb-0">Battle against Top gym leaders on Twitter/x</h3>
            </div>
            <p class="text-info">Each Gym battle will have there own twitter where you can battle them.</p>
          </div>
        </div>

      </div>
    </div>
</div>

   

        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="cardone cardverse">

                    </div>

                </div> 
               
            </div>
        </div>  -->
        <!-- <svg class="frame-decoration" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 192.275"><defs><style>.cls-1{fill:#000000;}</style></defs><title>frame-decoration</title><path class="cls-1" d="M0,158.755s63.9,52.163,179.472,50.736c121.494-1.5,185.839-49.738,305.984-49.733,109.21,0,181.491,51.733,300.537,50.233,123.941-1.562,225.214-50.126,390.43-50.374,123.821-.185,353.982,58.374,458.976,56.373,217.907-4.153,284.6-57.236,284.6-57.236V351.03H0V158.755Z" transform="translate(0 -158.755)"/></svg> -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Takeaways -->
    <div class="basic-1 " style="background-color:black">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cardone redmask mx-auto mx-lg-0">

                    </div>

                </div>
                
                <div class="col-lg-6">
                    <h3 style="color:#fba0e3">How To Get Started</h3>
                    <p>
                      First purchase the NFT of the pokamon AI that you want, What you will do is send $eth of the pokamon you want to the AI agent wallet address.
                    </p>
                    <h5>AI AGENT Wallet Address: </h5>
                    <h3 style="color:#fba0e3">Step2</h3>
                    <p>
                      After you sent the eth you will dm the ai agent your wallet address that you used and the agent will respond with a link to your nft on opensea and message telling you that you are registered.
                    </p>
                    <h3 style="color:#fba0e3">Step3</h3>
                    <p>
                     Now your ready to go against the boss what you will do next is on twitter/x you can battle the gym leader by: @ai_agent battle 
                     <br>
                     This will trigger the battle to start between you and the gym leader.
                    </p>
                    <ul style="line-height: 120px;">
                        <!-- <p style="font-size:20px; color:white;" >Poka AI a collection of NFT that aims to make your Poka NFT your personal assistance! </p> 
                        <p style="font-size:20px; color:white;"  >Whether that researching market trends, token analysis and many more!</p> 
                         <p style="font-size:20px; color:white;"  >Holders will have  weekly collections of our NFT sent to them!</p> </li>
                         <p style="font-size:20px; color:white;"  >NFT holders will be allowed governance to week Poka AI NFT designs.</p> </li> -->

                    </ul>

                    <p></p>
                </div>
             
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of takeaways -->
    

    <section class="py-5" style="background-color: #000;">
  <div class="container text-center">
    <h3 style="color:#fba0e3;">Meet The Pokax AI Squad</h3>
    <div class="row justify-content-center mt-4">

      <!-- Icon 1 -->
      <div class="col-4 col-md-2 mb-4">
        <div class="avatar-circle mx-auto mb-2">
          <img src="elite1.webp" alt="Icon 1" class="img-fluid">
        </div>
        <p class="text-light small">Trainer</p>
      </div>

      <!-- Icon 2 -->
      <div class="col-4 col-md-2 mb-4">
        <div class="avatar-circle mx-auto mb-2">
          <img src="elite2.webp" alt="Icon 2" class="img-fluid">
        </div>
        <p class="text-light small">Sniper</p>
      </div>

      <!-- Icon 3 -->
      <div class="col-4 col-md-2 mb-4">
        <div class="avatar-circle mx-auto mb-2">
          <img src="elite3.webp" alt="Icon 3" class="img-fluid">
        </div>
        <p class="text-light small">Scout</p>
      </div>

      <!-- Icon 4 -->
      <div class="col-4 col-md-2 mb-4">
        <div class="avatar-circle mx-auto mb-2">
          <img src="elite4.webp" alt="Icon 4" class="img-fluid">
        </div>
        <p class="text-light small">AI Bot</p>
      </div>

      <!-- Icon 5 -->
      <div class="col-4 col-md-2 mb-4">
        <div class="avatar-circle mx-auto mb-2">
          <img src="elite5.webp" alt="Icon 5" class="img-fluid">
        </div>
        <p class="text-light small">Healer</p>
      </div>

      <!-- Icon 6 -->
      <div class="col-4 col-md-2 mb-4">
        <div class="avatar-circle mx-auto mb-2">
          <img src="elite6.webp" alt="Icon 6" class="img-fluid">
        </div>
        <p class="text-light small">Tank</p>
      </div>

    </div> <!-- end of row -->
  </div> <!-- end of container -->
</section>



   




                  
      


    <section id="Merchant-help"  style="padding-bottom:100px; background:black; " >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="vouch-merchant-customerh2" style="text-align: center; padding-bottom:80px; font-size: 60px; color:black; ">FAQ</h2>

                    <div class="question-title">
                        <h3 style="color:white;">What is  Pokax</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">
                                
                            </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;"> When is the launch Date?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                TBA Join Telegram for information.
                            </div>

                        </div>

                    </div>

               

                    <!-- <div class="question-title">
                        <h3 style="color:white;">  How much to mint a Inverse Meta Realm Slayer ?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">Join Discord For more Detail</p>
                            </div>

                        </div>

                    </div> -->

                
                    <!-- <div class="question-title">
                        <h3 style="color:white;">  Where can i buy one Inverse Meta Realm Slayer ?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">When the Project launch you will be able to buy from this website.</p>
                            </div>

                        </div>

                    </div> -->


                    <!-- <div class="question-title">
                        <h3 style="color:white;"> How can i buy?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">You will need to have Meta RealmMask installed and set up (If you don't know what Meta RealmMask is or how to install it, please visit <a href="https://meta Realmmask.io">Meta RealmMask</a>   for instructions).  In order to buy, connect with your wallet and use the minting interface to select how many Inverse Slayers you want to get.
Click the shiny mint button, approve the transaction on Meta RealmMask and watch Inverse Meta Realm Slayer show into your wallet!</p>
                            </div>

                        </div>

                    </div> -->

              


                    <div class="question-title">
                        <h3 style="color:white;"> Where can is the Telegram link?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> <a href="https://discord.gg/R3qtPKeCmJ">Discord</a> </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;"> where can i find the twitter link?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> <a href="https://twitter.com/RealmSolana" target="_blank">Twitter</a> </p>
                            </div>

                        </div>

                    </div>

                    <!-- <div class="question-title">
                        <h3 style="color:white;"> Where will I be able to see my Inverse Meta Realm Slayer NFT?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> Your Slayer NFT will appear in your metamask wallet, also you will be able to see your NFT on opensea.io .</p>
                            </div>

                        </div>

                    </div> -->

                


                    <div class="question-title">
                        <h3 style="color:white;"> Which BlockChain?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> Ethereum Network</p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;"> How can I join Presale?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> Join telegram for more information</p>
                            </div>

                        </div>

                    </div>


                

                    <div class="question-title">
                        <h3 style="color:white;"> What the Tokenomics?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <li>
                                  <ul>100 million Tokens</ul>
                                  <ul>Buy tax 5%</ul>
                                  <ul>Sell tax 10% (will decrease to 0% after the first hour)</ul>
                                  <ul>Team hold 2% </ul>
                                </li>
                            </div>

                        </div>

                    </div>
               

             

                
                    
                  
            </div>

        </div>
    </div>

</section>



@endsection

@section('javascripts')
<script  type="text/javascript">
$(document).ready(function(){
	$('.question-title h3').click(function(){
		$(this).next('.content-main').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content-main').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
</script>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 7, 2021 02:00:00").getTime();

countDownDate.toLocaleString('en-US', { timeZone: 'America/New_York' });

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

@endsection