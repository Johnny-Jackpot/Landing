<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test task</title>
  <link href="/template/css/bootstrap.css" rel="stylesheet">
  <link href="/template/css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div id="whatIsLyft"></div>
  <div id="whyLyft"></div>
  <div id="insurance"></div>
  <header>
    <a href="#" class="lyft"></a>
    <div class="container-fluid nav-links">
      <div class="row">
        <div class="col-sm-2 col-sm-offset-4">
          <a href="#whatIsLyft">What is</a>
        </div>
        <div class="col-sm-2">
          <a href="#whyLyft">Why Lyft</a>
        </div>
        <div class="col-sm-2">
          <a href="#insurance">Insurance</a>
        </div>
      </div>
    </div>
    <a href="#" class="signup">Sign up</a>
  </header>
  <div class="pos-r">
    <div class="bg-car"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-6">
        <h1 class="heading-text">Make Up to $35/hr Driving Your Car</h1>
      </div>
      <div class="col-xs-12 col-md-6 col-md-offset-6">
        <button type="button" class="btn pink-button" data-toggle="modal" data-target=".bs-example-modal-sm">Become a Driver</button>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content custom-modal">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрити</span></button>
                <h2>Apply now</h2>
                <p>Enter your info, and then download the Lyft app to create your driver profile.</p>
              </div>
              <div class="modal-body">
                <form id="order">
                  <input id="userName" type="text" name="name" placeholder="Full Name" required/>
                  <input id="userEmail" type="email" name="email" placeholder="Email" required/>
                  <input id="userPhone" type="text" name="phone" placeholder="Phone" maxlength="10" required/>
                  <input type="submit" name="submit" value="Become a driver" class="pink-button">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row bg-white mar-top-340px mar-top-246 mar-top-100">
      <div class="col-xs-12">
        <section class="get-wheels font-size-20px">
          <h4 class="text-color-pink font-size-25px">Don’t have wheels?<br/>Get one for $0/week.</h4>
          <p class="text-color-darkblue">
            Get access to all-inclusive rentals: The more you drive with Lyft, the lower the price.
          </p>
          <a href="#" class="text-color-pink">Learn more</a>
        </section>
      </div>
    </div>
    <div class="row bg-grey calculate-form">
      <div class="col-xs-12 col-sm-12">
        <h3 class="fw-bold">See How Much You Can Make</h3>
        <p class="font-size-16px font-em">How many hours do you want to drive this week?</p>
      </div>
      <div class="col-xs-12 mar-bottom col-sm-12">
        <form class="calculate">
          <div class="col-xs-12 col-sm-2 ">
            <input type="number" placeholder="Hours" class="res-width">
          </div>
          <div class="col-xs-12 col-sm-4">
            <input type="text" placeholder="City">
          </div>
          <div class="col-xs-12 col-sm-2">
            <input type="submit" value="Calculate" class="pink-button res-width">
          </div>
        </form>
      </div>
    </div>
    <div class="row bg-lightgrey">
      <div class="col-xs-12 text-color-darkblue text-align-center font-16px">
        <h3>What is Lyft?</h3>
        <p class="font-em">
          Lyft matches drivers with passengers who request rides through our smartphone app, and passengers pay automatically through
          the app.
        </p>
        <p class="font-em">
          Whether you’re trying to offset costs of your car, cover this month’s bills, or fund your dreams, Lyft will get you there.
          So, go ahead. Be your own boss.
        </p>
      </div>
    </div>
    <div class="row bg-lightgrey text-color-darkblue text-align-center font-16px">
      <div class="col-xs-12">
        <h3>Why Lyft?</h3>
      </div>
    </div>
    <div class="row bg-lightgrey text-color-darkblue text-align-center font-16px ">
      <div class="col-xs-12 col-sm-4">
        <img src="/template/img/earnings.svg" alt="earnings" class="medium-image">
        <h3 class="fw-bold">Keep Your Tips</h3>
        <p class="font-em">Earn tips from your passengers and keep the whole amount — they’re yours.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img src="/template/img/wallet.svg" alt="earnings" class="medium-image">
        <h3 class="fw-bold">Make More Money</h3>
        <p class="font-em">With increased Prime Time pricing during peak hours, you make more with Lyft.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img src="/template/img/peoples.svg" alt="earnings" class="medium-image">
        <h3 class="fw-bold">Best Community</h3>
        <p class="font-em">The Lyft community is full of awesome, friendly people — passengers and drivers alike.</p>
      </div>
    </div>
    <div class="row bg-lightgrey text-color-darkblue text-align-center font-16px ">
      <div class="col-xs-12 col-sm-2 col-sm-offset-1">
        <img src="/template/img/shield.svg" alt="earnings" class="big-image">
      </div>
      <div class="col-xs-12 col-sm-7">
        <h3>Lyft Insurance Protection</h3>
        <p class="text-align-left font-em text-justify">
          Lyft provides additional insurance policies, at no cost to the driver. We worked with leading insurance carriers to provide
          various coverages including: commercial auto liability insurance up to $1M per occurrence, contingent collision
          insurance for drivers who carry collision coverage on their personal auto policy, and coverage for bodily injury
          caused by uninsured/underinsured motorists when you are engaged in a ride. If you already carry commercial insurance
          or personal coverage providing specific coverage for ridesharing, Lyft’s policy will continue to be excess to your
          insurance coverage. Please note, the above coverage may be modified to comply with local regulations or state laws.
          Lyft’s policy is available in all states in the U.S., except for those rides originating in New York or occurring
          at any time in a New York-registered vehicle in markets outside New York, such as New Jersey and Connecticut.
        </p>
      </div>
    </div>
    <div class="row bg-lightgrey text-color-darkblue text-align-center font-16px">
      <div class="col-xs-12 col-sm-2 col-sm-offset-1 ">
        <img src="/template/img/stars.svg" alt="earnings" class="big-image">
      </div>
      <div class="col-xs-12 col-sm-7">
        <h3>Passenger Ratings</h3>
        <p class="text-align-left font-em text-justify">
          Drivers rate passengers after each ride, so you’ve always got a say. We also require passengers to provide valid credit card
          information for identity verification purposes.
        </p>
      </div>
    </div>
    <!--end container fluid -->
  </div>
  <footer class="bg-darkblue">
    <div class="container-fluid">
      <div class="row text-align-center text-color-white">
        <div class="col-xs-12 width-33 col-sm-2 col-sm-offset-1 col-md-2">
          <h4 class="mar-top-20px">Company</h4>
          <ul>
            <li><a href="#">Press</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="col-xs-12 width-33 col-sm-2 col-md-2">
          <h4 class="mar-top-20px">Ride</h4>
          <ul>
            <li><a href="#">Drive</a></li>
            <li><a href="#">Cities</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Safety</a></li>
            <li><a href="#">Log in</a></li>
          </ul>
        </div>
        <div class="col-xs-12 width-33 col-sm-2 col-md-2">
          <h4 class="mar-top-20px">Explore</h4>
          <ul>
            <li><a href="#">Enterprise</a></li>
            <li><a href="#">Partnerships</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Ambassadors</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Lyft Promo Coupon Code</a></li>
            <li><a href="#">Lyft Gift Cards</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-2">
          <ul class="mar-top-20px">
            <li><a href="#" class="btn-signup">Sign Up Now</a></li>
            <li>
              <a href="#"><img src="/template/img/applestore.svg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/template/img/googleplay.png" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 text-color-white text-align-center">
          <hr>
          <p>&copy; 2017 Lyft Inc.
            <a href="#" class="text-color-white pad-l-r">Terms</a>
            <a href="#" class="text-color-white pad-l-r">Privacy</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="/template/js/jquery-3.1.1.js"></script>
  <script src="/template/js/bootstrap.min.js"></script>
  <script src="/template/js/app.js"></script>
</body>

</html>