<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center" data-aos="fade-up">
      <h1>Welcome to DELHI</h1>
      <a href="#about" class="btn-get-started scrollto">Covid Dashboard</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="img/delhi/map.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">About DELHI</h3>
            <p data-aos="fade-up">
              Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque, whose courtyard accommodates 25,000 people. Nearby is Chandni Chowk, a vibrant bazaar filled with food carts, sweets shops and spice stalls.
            </p>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-cube-alt"></i>
              <h4><strong>Area:</strong> 1,484 km²</h4>
            </div>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-cube-alt"></i>
              <h4><strong>Population:</strong> 1.9 crores (2012)</h4>
            </div>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-cube-alt"></i>
              <h4><strong>Chief minister:</strong> Arvind Kejriwal</h4>
            </div>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-cube-alt"></i>
              <h4><strong>Weather:</strong> 33 °C, Wind E at 5 km/h, 69% Humidity</h4>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
            <span>01</span>
            <h4><a href="https://coronabeds.jantasamvad.org/">COVID-19 Beds Availibility Status</a></h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">
            <span>02</span>
            <h4><a href="https://delhi.gov.in/Order212.pdf">Order No.212 Regarding Extension Of Lockdown Till 30.06.2020</a></h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="200">
            <span>03</span>
            <h4><a href="https://epass.jantasamvad.org/train/passenger/">Register New Stranded Passenger (For Return To Home State By Train)</a></h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="300">
            <span>04</span>
            <h4><a href="https://delhishelterboard.in/covid19/">Form For Collecting Information Of Delhiites 
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="400">
            <span>05</span>
            <h4><a href="https://ration.jantasamvad.org/ration/">Apply For Temporary Ration Coupon</a></h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="500">
            <span>06</span>
            <h4><a href="http://health.delhigovt.nic.in/wps/wcm/connect/DoIT_Health/health/home/covid19?WCM_Page.ResetAll=TRUE&CACHE=NONE&CONTENTCACHE=NONE&CONNECTORCACHE=NONE&SRV=Page">CORONA Updates
            </a></h4>
          </div>

        </div>

      </div>
    </section><!-- End Steps Section -->

        <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Coronavirus</h3>
          <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.<br><br>
The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <br><br><br>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Covid19 Confirmed Cases</h4>
                  <p id="StateConfirmed"></p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Covid19 Active Cases</h4>
                  <p id="StateActive"></p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Covid19 Recovered Cases</h4>
                  <p id="StateRecovered"></p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Covid19 Death Cases</h4>
                  <p id="StateDeath"></p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="img/delhi/corona.jpg" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

         <div class="section-title" data-aos="fade-up">
          <h2>Coronavirus Symptoms</h2>
          <p>Check the symptoms</p>
        </div>

        <div class="row">
           <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons/cold.png"></div>
              <h4 class="title">Fever</h4>
              <p class="description">A fever is a body temperature that is higher than normal. A normal temperature can vary from person to person,but it is usually around 98.6F. </p>
            </div>
           </div> 
                         

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons/education.png">
            </div>
              <h4>Tiredness</h4>
              <p>Feeling overtired, with low energy and a strong desire to sleep that interferes with normal daily activities.</p>
            </div> 
            </div>              

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons/avatar.png">
            </div>
              <h4>Dry Cough</h4>
              <p>A sudden, forceful hacking sound to release air and clear an irritation in the throat or airway.</p>
            </div>
            </div>               

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons//healthcare-and-medical (2).png">
            </div>
              <h4>Aches and Pains</h4>
              <p>Muscle pain is most often related to tension, overuse, or muscle injury from exercise or hard physical work.</p>
            </div>
          </div>
            
        </div>
        <br><br>

        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons/discharge.png">
            </div>
              <h4>Nasal Congestion</h4>
              <p>Nasal passages swollen with excess fluid and mucus, may be triggered by infection, tobacco smoke or perfume.</p>
            </div>
          </div>
            
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons/discharge (5).png">
            </div>
              <h4>Runny Nose</h4>
              <p>Excess drainage, ranging from a clear fluid to thick mucus, from the nose and nasal passages.</p>
            </div>
          </div>
          
         <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons/medical.png">
            </div>
              <h4>Sore Throat</h4>
              <p>Pain or irritation in the throat that can occur with or without swallowing, often accompanies infections, such as a cold or flu.</p>
            </div>
          </div>
            
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
              <img src="img/icons/healthcare-and-medical (1).png">
            </div>
              <h4>Diarrhoea</h4>
              <p>Loose, watery bowel movements that may occur frequently and with a sense of urgency.</p>
            </div>
          </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title text-center" >Our Services</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Health Care</li>
              <li data-filter=".filter-card">Disaster Management</li>
              <li data-filter=".filter-web">Education & Skillng</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/delhi/centers.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Public Health Care Center</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/medical.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Medical</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/blood.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Blood Bank</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/donate.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Donations</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

             <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/volunteer.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Volunteers</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/delhi/logo.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Government Services</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/mask.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Movement Pass</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>
          
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/home/hr.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>HR Recruitment</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/home/courses.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Online Vocational Training Courses</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/msme.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>MSME Products</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/courses.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Essential Workers</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/donation.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Food Supply</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

<script type="text/javascript">
  
$.ajax({
    url:"https://api.covid19india.org/v2/state_district_wise.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

     //console.log(covid_data);
     var newArray = covid_data.filter(function (el) {

      return el.state === 'Delhi';

    });

    //console.log(newArray);

    Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
    }

    var StateConfirmed = newArray[0].districtData.sum("confirmed");
    document.getElementById("StateConfirmed").innerHTML = StateConfirmed;

    var StateActive = newArray[0].districtData.sum("active");
    document.getElementById("StateActive").innerHTML = StateActive;

    var StateDeath = newArray[0].districtData.sum("deceased");
    document.getElementById("StateDeath").innerHTML = StateDeath;

    var StateRecovered = newArray[0].districtData.sum("recovered");
    document.getElementById("StateRecovered").innerHTML = StateRecovered;

    // var MainStateConfirmed = newArray[0].districtData.sum("confirmed");
    // document.getElementById("MainStateConfirmed").innerHTML = "Covid19 Cases - " + (MainStateConfirmed) ;
}

});


</script>


<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>

