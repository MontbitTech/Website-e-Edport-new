 @extends('layouts.website.app')
 @section('footer') @include('layouts.website.footer-main') @endsection
 @section('demo') href="{{route('services.careecounselling-form')}}" @endsection
 @section('image')style="background-image:url({{asset('assets/images/success.jpg')}})" @endsection
 @section('heading') Plan Your Career with Our Experienced Mentors @endsection
 @section('sub-heading') Know the Best for You @endsection
 @section('content')
 <section id="about" class="portfolio-area">
     <div class="site-section">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\Careerguidance.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 ml-auto order-lg-1 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                     <h3 class="mb-4 section-heading"><strong>What is Career Counselling?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         Student Career Counselling is a process that focuses mainly on helping the students understand one’s own self, as well as career trends, so that they can take an informed decision about career and education. Career Counselling helps the students to manage a diverse
                         range of problems such as low concentration levels to lack of time management.
                     </p>
                 </div>
             </div>
             <div class="row align-items-center">
                 <div class="col-lg-8 col-md-8 col-12 ml-auto wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                     <h3 class="mb-4 section-heading"><strong>How it may help your child?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         This is a time of many changes taking place in a student's life, both
                         physical and emotional. Career Counselling helps them understand the career options that they have, and how to pursue them. Career Counselling helps them understand their
                         own strengths and weaknesses. It gives them a platform to voice their opinion.
                     </p>
                 </div>
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\Softskilltraining.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>
 <section id="portfolio" class="portfolio-area bg-light">
     <div class="container-fluid">
         <div class="row justify-content-center wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0s">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20">
                     <h3 class="title">Services</h3>
                     <div class="w-50 m-auto text-center">
                         <hr style=" border-top: 1px solid #161f33;">
                     </div>
                 </div>
             </div>
         </div>
         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row justify-content-center">
                     <div class="col-lg-4  col-12 col-md-4 justify-content-center wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\liveclasses.png')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0 ">
                                 <h4 class="mt-0 ">Live Classes</h4>
                                 <p class="text m-0 p-0 ">Helps conduct uninterrupted classes online from the
                                     comfort of your home.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4  col-12 col-md-4 offset-md-4 offset-lg-4 justify-content-center wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\liveclasses.png')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Live Classes</h4>
                                 <p class="text m-0 p-0 ">Helps conduct uninterrupted classes online from the
                                     comfort of your home.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4  col-12 col-md-4 justify-content-center mt-3 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.2s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\liveclasses.png')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Live Classes</h4>
                                 <p class="text m-0 p-0 ">Helps conduct uninterrupted classes online from the
                                     comfort of your home.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4  col-12 col-md-4 offset-md-4 offset-lg-4  mt-3 justify-content-center wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.2s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\liveclasses.png')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Live Classes</h4>
                                 <p class="text m-0 p-0 ">Helps conduct uninterrupted classes online from the
                                     comfort of your home.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section>
     <div class="container-fluid">
         <div class="row pt-5 pb-5" style="background-color: #161f33;">
             <div class="col-md-12 col-lg-6    col-12 wow bounceIn" data-wow-duration=".8s" data-wow-delay="0.1s">
                 <h1 class="text-white text-center font-weight-light">
                     Ready to get started?
                 </h1>
                 <h5 class="text-white text-center">
                     Get in touch, or Request A Demo
                 </h5>
             </div>
             <div class="col-md-12 p-0  col-lg-6  mt-4 col-12 ">
                 <div class="row">
                     <div class="col-md-12 d-flex justify-content-center col-lg-6 col-12  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <a href="{{route('services.careecounselling-form')}}" class="btn bg-white rounded-pill btn-hover mr-3" style="color: #161f33;">Request A Demo &#x27A7;
                         </a>
                     </div>
                     <div class="col-md-12 d-flex justify-content-center  col-12    col-lg-4  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.5s">
                         <div class="btn bg-white rounded-pill btn-hover " style="color: #161f33;">Contact Us &#x27A7;</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id="deliverables" class="contact-area bg-white">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <h4 class="title">FAQS
                         <hr style=" border-top: 1px solid #161f33;">
                     </h4>
                 </div>
             </div>
         </div>
         <ul class="nav nav-pills mb-3 justify-content-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s" id="pills-tab" role="tablist">
             <li class="nav-item justify-content-center">
                 <a class="nav-link active rounded-pill pl-5 pr-5 faqss mr-5  text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="background-color: #161f3373;">General</a>
             </li>
             <li class="nav-item justify-content-center">
                 <a class="nav-link  rounded-pill pl-5 pr-5   mr-5   text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="background-color: #161f3373; ">Technical</a>
             </li>
         </ul>
         <div class="tab-content wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.5s" id="pills-tabContent">
             <div class="tab-pane fade show active justify-content-center text-centerm " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                 <div id="accordion">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll" aria-expanded="true" aria-controls="generalonecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Will I get a certificate after the completion of this program?
                                 </div>
                                 <div id="generalonecoll" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     On completion of the course you will receive an internationally recognized Diploma Certificate after appearing in an exam.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#generaltwocoll" aria-expanded="true" aria-controls="generaltwocoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What is the learning mode for this program?
                                 </div>
                                 <div id="generaltwocoll" class="collapse pl-2 text-left" aria-labelledby="generaltwo" data-parent="#accordion">
                                     The courses are available in Online/ E- Learning mode where you can join our webinars also.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#generalthreecoll" aria-expanded="true" aria-controls="generalthreecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What is the advantage of this program to Government teachers?
                                 </div>
                                 <div id="generalthreecoll" class="collapse pl-2 text-left" aria-labelledby="generalthree" data-parent="#accordion">
                                     This will help you to get acquainted with latest technology required in online teaching.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade justify-content-center text-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <div id="accordion1">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicalone" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalonecoll" aria-expanded="true" aria-controls="technicalonecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Is this program recognized by government?
                                 </div>
                                 <div id="technicalonecoll" class="collapse pl-2 text-left" aria-labelledby="technicalone" data-parent="#accordion1">
                                     We provide a globally recognized program for teachers which is welcomed and considered worldwide.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#technicaltwocoll" aria-expanded="true" aria-controls="technicaltwocoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Do you provide any kind of placement?
                                 </div>
                                 <div id="technicaltwocoll" class="collapse pl-2 text-left" aria-labelledby="technicaltwo" data-parent="#accordion1">
                                     We do provide you placement opportunity to educators who successfully complete the course.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalthreecoll" aria-expanded="true" aria-controls="technicalthreecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What type of devices are needed?
                                 </div>
                                 <div id="technicalthreecoll" class="collapse pl-2 text-left" aria-labelledby="technicalthree" data-parent="#accordion1">
                                     It completely depends on you. We will provide training to use devices. It's your choice what you want.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 @endsection