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
    background-image: url('images/cv2.jpg');
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
    padding-bottom: 5%;
    
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



<h1 class="heading">Commercial Vehicle Insurance</h1>

<div class="container">

  <div class="box box1">
    <p class="para">Introducing Shelter Commercial Vehicle Insurance, your trusted partner in protecting your business on wheels. We understand that your commercial vehicle is the backbone of your operations, tirelessly carrying your goods and services to customers. With Shelter's comprehensive Commercial Vehicle Insurance, we've tailored a coverage solution to ensure that you can navigate the road with confidence, knowing that your business is protected.

From delivery vans to trucks and beyond, our Commercial Vehicle Insurance has you covered. Whether it's accidents, theft, or damages, our policy is designed to safeguard your vehicle and keep your business running smoothly. Focus on what you do best, while we take care of the risks that come with being on the road.

At Shelter, we go above and beyond to provide exceptional service and support to our commercial vehicle policyholders. Our dedicated team of experts understands the unique needs of business owners, and we're here to assist you every step of the way. From claims processing to risk management advice, we're committed to helping your business thrive.

</p>
  </div>


  <div class="box box2">
    <img src="images/premium.png" class="icon">
    <p>We understand that your time is valuable, and that's why we've made it a priority to provide a seamless and convenient insurance experience. With our Premium Insurance category, you can rest assured knowing that your vehicle is protected by the most comprehensive coverage available, leaving you free to focus on what truly matters, enjoying the ride.</p>

    <button class="button" style="margin-top: 30px;">Premium</button>
  </div>


  <div class="box box3">
  <img src="images/normal.png" class="icon">
  <p>Discover peace of mind on the road with Shelter's reliable and affordable Normal Insurance category. We believe that everyone deserves quality protection for their vehicle, and that's exactly what you'll find with our comprehensive coverage.</p>

  <button class="button" style="margin-top: 90px;">Normal</button>
  </div>


  <div class="box box4">
  <img src="images/3rd.png" class="icon">
  <p>With Shelter's Third-Party Insurance, you can enjoy the freedom of the open road while staying safeguarded from unforeseen circumstances. Whether it's property damage or bodily injury caused to others, our policy ensures that you're covered, giving you peace of mind knowing that you won't face significant financial burden in the event of an accident..</p>

  <button class="button" style="margin-top: 30px;">Third-Party</button>
  </div>


</div>

<?php
include 'Footer.php';
?>