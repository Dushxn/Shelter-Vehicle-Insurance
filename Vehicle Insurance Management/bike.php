<?php
include 'Header.php';
?>

<style>
  .container {
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .box {
    box-sizing: border-box;
    border-radius: 5px;
    float: left;
    height: 100px;
    padding: 10px;
    transition: transform 0.3s ease;
  }

  .box1 {
    width: 40%;
    height: 80%;
    background-image: url('images/bike2.jpg');
    background-size: cover;
    background-repeat: no-repeat;

    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-right: 15px;
  }

  .box2,
  .box3,
  .box4 {
    width: 17%;
    height: 66%;
    background-color: #e6ccff;
    
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  
    margin-bottom: 50px;
    margin-right: 8px;
  }
  .box2,
  .box3,
  .box4 p {
    font-family:'Courier New', Courier, monospace,cursive;
    font-weight: bolder;
  }
  .heading {
    font-family:'Courier New', Courier, monospace,cursive;
    text-decoration: underline;
  }
  .para{
    color:#ffffff;
    font-size: 18px;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
    font-family: 'Courier New', Courier, monospace,cursive;
    letter-spacing: 0.1em;
    padding-bottom: 25%;
    
  }

  .icon{
    width:230px ;
    padding-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    
  }


  .button {
      width: 100%;
      padding: 10px;
      background-color: #d9b3ff;
      border: none;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      border-radius: 3px;
      font-size: 16px;
      
    }

    .button:hover {
      background-color: #9933ff;
    }

    .box2:hover {
    transform: scale(1.2);
    }
    .box3:hover {
    transform: scale(1.2);
    }
    .box4:hover {
    transform: scale(1.2);
    }

    .heading{
        font-size: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    

</style>



<h1 class="heading">Bike Insurance</h1>

<div class="container">

  <div class="box box1">
    <p class="para">Introducing Shelter Bike Insurance, the ultimate protection for your two-wheeled companion. We understand that your bike is more than just a means of transportation; it's your freedom, your passion, and your ticket to unforgettable adventures. With Shelter's comprehensive Bike Insurance, we've crafted a tailored coverage solution to ensure that you and your bike are protected against any unexpected surprises along the way.

From city streets to scenic routes, our Bike Insurance has you covered. Whether it's theft, accidents, or damages, our policy is designed to shield you from the financial burdens that can arise from unfortunate incidents. Ride with confidence, knowing that we're there to support you when you need it most, so you can focus on what you love – the thrill of the ride.</p>
  </div>


  <div class="box box2">
    <img src="images/premium.png" class="icon">
    <p>We understand that your time is valuable, and that's why we've made it a priority to provide a seamless and convenient insurance experience. With our Premium Insurance category, you can rest assured knowing that your vehicle is protected by the most comprehensive coverage available, leaving you free to focus on what truly matters, enjoying the ride.  </p>

    <button class="button" style="margin-top: 30px;">Premium</button>
  </div>


  <div class="box box3">
  <img src="images/normal.png" class="icon">
  <p>Discover peace of mind on the road with Shelter's reliable and affordable Normal Insurance category. We believe that everyone deserves quality protection for their vehicle, and that's exactly what you'll find with our comprehensive coverage. </p>

  <button class="button" style="margin-top: 90px;">Normal</button>
  </div>


  <div class="box box4">
  <img src="images/3rd.png" class="icon">
  <p>With Shelter's Third-Party Insurance, you can enjoy the freedom of the open road while staying safeguarded from unforeseen circumstances. Whether it's property damage or bodily injury caused to others, our policy ensures that you're covered, giving you peace of mind knowing that you won't face significant financial burden in the event of an accident. </p>

  <button class="button" style="margin-top: 30px;">Third-Party</button>
  </div>


</div>

<?php
include 'Footer.php';
?>