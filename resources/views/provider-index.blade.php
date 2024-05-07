@extends('layout.web-layout-updates')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholar Provider')


@section('webpage2')

<section id="navigation-bar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a href="#" class="navbar-brand ms-5">ScholarKonek</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naviCollapse">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="naviCollapse">
        <div class="navbar-nav ms-auto ">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        </div>
      
        
          
            <a href="{{route('scholarprovider.login')}}" class="btn btn-primary">Login</a>
         

            
      </div>  
    </div>
    </nav>
  </section>

<!--Navbar End-->

<section id="hero-section">

  <div class="px-4 py-5 my-5 text-center">
    
    <h1 class="display-5 fw-bold text-body-emphasis">Empower The Students with ScholarKonek</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
        At ScholarKonek, we're dedicated to helping college students achieve their dreams. Our app connects students with scholarship providers, making it easier than ever to access the support they need for education.
<br>
<br>
With ScholarKonek, finding scholarships is simple. Say goodbye to endless searches and missed opportunities. Join us today and let's make your dreams a reality!
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="£" class="btn btn-primary btn-lg px-4 gap-3">Publish a Scholarship</a>
        <a href="£" class="btn btn-outline-secondary btn-lg px-4 gap-3">For Students</a>
      </div>
    </div>
  </div>
  
  </section>


  

  
<!--Features-->

<!--Features-->

<div class="container feature-box mx-auto">

  
    <div class="row" style="padding: 20px;">
      <div class="col text-center ">
        <i class="fas fa-pen-to-square fa-2x mb-lg-3 feature-icon"></i>
      
        <h2 class="col">Customizable Forms</h2>
        <p> Tailor your scholarship application process to meet your specific requirements effortlessly. With customizable forms, you can gather the information you need efficiently and effectively. </p>
      </div>
  
      <div class="col text-center ">
        <i class="fas fa-shield-alt feature-icon fa-2x mb-lg-3"></i>
        <h2 class="text-center">Secured Information</h2>
        <p> Rest assured that applicant data is kept safe and confidential with our robust security measures. Our platform ensures the protection of sensitive information, providing peace of mind for both scholarship providers and applicants.
        </p>
        </div>
  
        <div class="col text-center ">
          <i class="fas fa-chart-simple fa-2x mb-lg-3 feature-icon"></i>
        <h2 class="text-center">Statistics</h2>
        <p> Gain valuable insights into your scholarship programs with comprehensive statistics. Track application trends, demographic data, and program effectiveness to make informed decisions and optimize your offerings.
        </p>
          </div>

          <div class="col text-center">
            <i class="fa-solid fa-hand-holding-dollar fa-2x mb-lg-3 "></i>
          <h2 class="text-center">Affordability</h2>
          <p>Maximize the impact of your scholarship programs without breaking the bank. ScholarKonek offers cost-effective solutions that empower you to reach more students and make a difference in their academic journeys.</p>
            </div>
  
  
    </div>
  </div>
  
  


 


  <div class="container">
      
    <h1 class="display-5 fw-bold text-body-emphasis text-center mb-5 pb-5 my-5 py-5">F.A.Q</h1>
    <div class="bd-example m-0 border-0">
      
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h4 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Does our scholarship listings are going to be published immediately?
                </button>
              </h4>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                <div class="accordion-body">
                It depends on the validity of scholarships. We would like to verify at first if the scholarship is valid once it was published and it will immediately 
                get published to our website once the validators approved the validation.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How long our scholarship listings will get published?
                </button>
              </h4>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Minimum is in 30 days. You can immediately stop the publishing but the charges is still the same.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Is there any way to contact you for support and feedback? 
                </button>
              </h4>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                You can email us at  <strong>email@emailprovider.com</strong>.  We are open to receive feedbacks and suggestions. To provide you the better services.
              
                </div>
              </div>
            </div>
          </div>
          
    </div>
  </div>

@endsection