@extends('layout.web-layout-updates')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Home')


@section('webpage2')

<section id="navigation-bar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a href="#" class="navbar-brand ms-5">ScholarKonek</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naviCollapse">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="naviCollapse">
        <div class="navbar-nav ">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Scholarships</a></li>

        </div>
      
          <div class="ms-auto">
          
            <a href="£" class="btn btn-primary">Login</a>
          </div>

            
      </div>  
    </div>
    </nav>
  </section>

<!--Navbar End-->

<section id="hero-section">

  <div class=" py-5 my-5 text-center ">
    
    <h1 class="display-5 fw-bold text-body-emphasis">Empower Your Academic Journey with ScholarKonek!</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Dreaming of academic success? ScholarKonek is here to make it a reality! We connect students with life-changing scholarships, tailored just for you. From finding the perfect opportunity to offering personalized support, ScholarKonek is your partner every step of the way. Let's unlock your potential and achieve your dreams together!"




      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="£" class="btn btn-primary btn-lg px-4 gap-3">Find Scholarship Now</a>
        <a href="{{url('providers')}}" class="btn btn-outline-secondary btn-lg px-4 gap-3">For Scholarship Providers</a>
      </div>
    </div>
  </div>
  
  </section>


  

  
<!--Features-->

<!--Features-->

<div class="container feature-box mx-auto">

  <h1 class="display-6 text-body-emphasis text-center">Empower Your Academic Journey with ScholarKonek!</h1>
  <p class="lead mb-4 text-center">In ScholarKonek we will guarantee you a better solution for your scholarship hunt needs with easy navigations and applications.


  </p>
    <div class="row" style="padding: 20px;">
      <div class="col text-center ">
        <i class="fas fa-table fa-2x mb-lg-3 feature-icon"></i>
      
        <h2 class="col">Tailored Scholarships</h2>
        <p> Discover personalized scholarship matches tailored to your unique profile and interests. </p>
      </div>
  
      <div class="col text-center ">
        <i class="fas fa-search feature-icon fa-2x mb-lg-3"></i>
        <h2 class="text-center">Streamlined Search</h2>
        <p> Effortlessly find the perfect scholarships with our intuitive search function, making your hunt stress-free.
        </p>
        </div>
  
        <div class="col text-center ">
          <i class="fas fa-shield-alt fa-2x mb-lg-3 feature-icon"></i>
        <h2 class="text-center">Verified Opportunities</h2>
        <p> Rest easy knowing all scholarships are thoroughly vetted and up-to-date, shielding you from fake offers.
        </p>
          </div>

          <div class="col text-center">
            <i class="fa-solid fa-hand-holding-dollar fa-2x mb-lg-3 "></i>
          <h2 class="text-center">Zero Cost Access</h2>
          <p>Unlock a treasure trove of scholarships without spending a dime – it’s all freely accessible!</p>
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
                    Is this free?
                  </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                  <div class="accordion-body">
                  <strong>It is free!</strong> Users can apply scholarships without any payments. Just create an account and start searching!
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What are the requirements needed for me to apply for scholarship?
                  </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    It depends for the scholarship providers really. Just read all of the requirements made by the scholarship providers since they are the one who will pick their students that will grant scholarships.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Is our data safe?
                  </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   We are doing our best to keep your data safe for the potential data breach. But once the application has ended all of the applicant files will be removed from our server
                   to mitigate worst.
                  </div>
                </div>
              </div>
            </div>
            
      </div>
    </div>
  

    <div class="container">

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">© 2024 Software Design, Project</p>
  
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <h5>ScholarKonek</h5>
      </a>
  
  
    </footer>
 
    <div>

@endsection