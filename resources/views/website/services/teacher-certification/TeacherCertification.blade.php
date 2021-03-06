 @extends('layouts.website.app')
 @section('footer') @include('layouts.website.footer-main') @endsection
 @section('demo') href="{{route('services.teacher-certification-form')}}" @endsection
 @section('image')style="background-image:url({{asset('assets/images/degree.jpg')}})" @endsection
 @section('heading') Get e-EdPort Smart Teacher certification @endsection
 @section('sub-heading') Strengthen Your Competence @endsection
 @section('content')
 <style>
     .header-area {
         margin-top: 6.2rem;
     }

     li.remove {
         display: none !important;
     }
 </style>
 <section id="about" class="portfolio-area bg-light">
     <div class="site-section">
         <div class="container">
             <div class="row align-items-center mt-4">
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <img src="{{asset('assets\images\KeyFeatures\SmartTeacherTraining\SmartTeacherCertification.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 ml-auto order-lg-1 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                     <h3 class="mb-4 section-heading"><strong>What is a Smart Teacher Certificate?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         Smart Teacher Certification is the evaluation process that helps you
                         analyse your growth after the Smart
                         Teacher Training Program. This Certificatuon is also in three levels.
                     </p>
                 </div>
             </div>
             <div class="row align-items-center mt-4">
                 <div class="col-lg-8 col-md-8 col-12 ml-auto wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                     <h3 class="mb-4 section-heading"><strong>Why it is important?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         This is important for your evaluation and assessment so that you can know if you
                         have learnt the usage of all the tools as well as content management properly.
                     </p>
                 </div>
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <img src="{{asset('assets/images/mission.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
             </div>
             <div class="row align-items-center mt-4">
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <img src="{{asset('assets/images/vision.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 ml-auto order-lg-1 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                     <h3 class="mb-4 section-heading"><strong>How it will help you?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         This Certificates will be an additional feature which will help you improve your CV to be impressive and
                         signify some of your potential skills which are highly preferred now-a-days.
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id="portfolio" class="portfolio-area ">
     <div class="container-fluid">
         <div class="row justify-content-center wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0s">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20">
                     <h3 class="title">What will you get</h3>
                     <div class="w-50 m-auto text-center">
                         <hr style=" border-top: 1px solid #161f33;">
                     </div>
                 </div>
             </div>
         </div>
         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row justify-content-center">
                     <div class="col-lg-4  col-12 col-md-4 justify-content-center wow fadeInLeft mragin-bottom" data-wow-duration=".8s" data-wow-delay="0s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center m-auto" style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets/images/traning/stage_11.jpg')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0 ">
                                 <h4 class="mt-0 ">Level 1 Exam</h4>
                                 <p class="text m-0 p-0 ">This is the basic level of examination program in which we will test the educators on the usage of basic electronic
                                     devices like Android mobiles or laptops or computers for online teaching
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4  col-12 col-md-4  justify-content-center wow fadeInDown mragin-bottom" data-wow-duration=".8s" data-wow-delay="0s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center m-auto" style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets/images/traning/stage_22.jpg')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Level 2 Exam</h4>
                                 <p class="text m-0 p-0 ">In this level of exam the educators for using different types of educational softwares like Google Classroom,
                                     Microsoft Team, etc. Also we will help them to learn all the features of Ms-office
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4  col-12 col-md-4 justify-content-center  wow fadeInRight mragin-bottom" data-wow-duration=".8s" data-wow-delay="0.2s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center m-auto" style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets/images/traning/stage_33.jpg')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Level 3 Exam</h4>
                                 <p class="text m-0 p-0 ">This is the most advanced level of training program in which we will train them on
                                     using several teaching softwares and specially Content Creation & Management using CMS & LMS
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section class=" bg-light">
     <div class="container-fluid">
         <div class="row pt-5 pb-5" style="background-color: #161f33;">
             <div class="col-md-12 col-lg-6  col-12 wow bounceIn" data-wow-duration=".8s" data-wow-delay="0.1s">
                 <h1 class="text-white text-center font-weight-light mb-4">
                     Ready to get started?
                 </h1>
                 <h5 class="text-white text-center">
                     Get in touch, or Request A Demo
                 </h5>
             </div>
             <div class="col-md-12 p-0  col-lg-6  mt-4 col-12 ">
                 <div class="row">
                     <div class="col-md-12 d-flex justify-content-center col-lg-6 col-12  ">
                         <a href="{{route('services.teacher-certification-form')}}" class="btn bg-white rounded-pill btn-hover mr-3 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s" style="color: #161f33;">Request A Demo &#x27A7;
                         </a>
                     </div>
                     <div class="col-md-12 d-flex justify-content-center  col-12    col-lg-4  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.5s">
                         <a href="{{route('about.contactus')}}" class="btn bg-white rounded-pill btn-hover " style="color: #161f33;">Contact Us &#x27A7;</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id="portfolio" class="portfolio-area bg-light">
     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 ">
                     <h3 class="title wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0s">Key Features</h3>
                     <p class="text wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0.2s">Become a Certified Smart Teacher to lead the world</p>
                 </div>
             </div>
         </div>
         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row ">
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\certification\personal-empowerment.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Personal Empowerment</h5>
                                 <p class="text pr-2"> These skills help you to empower yourself as a Digital Educator</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\certification\communication-skills.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Communication Skills</h5>
                                 <p class="text pr-2"> Improve your communication skills with our certification</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\certification\greater-networking.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Greater Networking</h5>
                                 <p class="text ">Desire to innovate across discipline and empower students</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\certification\learn-and-lead.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Learn and Lead</h5>
                                 <p class="text pr-2"> Learn and help individuals to develop their own personal leadership style. </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- <section id="deliverables" class="contact-area bg-white">
     <div class="container ">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <h4 class="title">FAQS
                         <hr style=" border-top: 1px solid #161f33; ">
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
 </section> -->
 @endsection