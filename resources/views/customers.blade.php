@extends('layouts.app')
@section('content')

<head>
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>

.container-m {
    display: flex;
    height: 50vh;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    padding: 20px
}

.card {
    background-color: #095f45;
    padding: 15px;
    border: none;
    height: 250px;
}

.u-color,.cc {
    color: #fff
}

.user-image img {
    border: 3px solid #fff;
    padding: 2px
}
.font-weight-bold{
    font-size: 17px;
    font-weight: 600;
    padding: 8px;
}



.section-header h3 {
     font-size: 36px;
     color: #283d50;
     text-align: center;
     font-weight: 500;
     position: relative
 }

 .section-header p {
     text-align: center;
     margin: auto;
     font-size: 15px;
     padding-bottom: 60px;
     color: #556877;
     width: 50%
 }

 #clients {
     padding: 60px 0
 }

 #clients .clients-wrap {
     border-top: 1px solid #d6eaff;
     border-left: 1px solid #d6eaff;
     margin-bottom: 30px
 }

 #clients .client-logo {
     padding: 64px;
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: center;
     -webkit-justify-content: center;
     -ms-flex-pack: center;
     justify-content: center;
     -webkit-box-align: center;
     -webkit-align-items: center;
     -ms-flex-align: center;
     align-items: center;
     border-right: 1px solid #d6eaff;
     border-bottom: 1px solid #d6eaff;
     overflow: hidden;
     background: #fff;
     height: 160px
 }

 #clients img {
     transition: all 0.4s ease-in-out
 }
  </style>
</head>


<section id="clients" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h3>عملاونا من المطاعم</h3>
            <p>هذه المطاعم تقدم جوده طعام جيدة</p>
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="images/clients-logo/rest6.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="images/clients-logo/rest5.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="images/clients-logo/rest3.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="images/clients-logo/rest2.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="images/clients-logo/rest4.png" class="img-fluid" alt=""> </div>
            </div>
        </div>
    </div>
</section>


{{-- 
<hr>
<div class="title-box text-center" >
    <h2 class="title">ماذا يقول عملاؤنا عنا</h2>
 </div>

<div class="container-m">
    <div class="row">
        <div class="col-md-4">
            <div class="card"> <i class="fa fa-quote-left u-color"></i>
                <p class="cc">                        تقول إلهام يسري- ربة منزل إنها اعتادت التخلص من الزيت المستعمل بإلقائه في الحوض، ثم تشغيل المياه الساخنة للتخلص نهائيًا منه، لكن رغم ذلك إلا أنها تعاني من انسدادها،ثم رأت بعض المنشورات التي تروج لفكرة استبدال الزيت حتى توصلت لنا 
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user-about cc"> <span class="font-weight-bold d-block cc" >الهام يسرى</span> <span class="u-color">ربه منزل | بالدقى</span>
                        <div class="d-flex flex-row mt-1"> <i class="fa fa-star u-color"></i> <i class="fa fa-star u-color"></i> <i class="fa fa-star-o u-color"></i> <i class="fa fa-star-o u-color"></i> <i class="fa fa-star-o u-color"></i> </div>
                    </div>
                    <div class="user-image"> <img src="images/juan-encalada-vIM0htb0gJs-unsplash.jpg" class="rounded-circle" width="70"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"> <i class="fa fa-quote-left u-color"></i>
                <p class="cc">يقول "محمد مصطفى" إنه يضع الزيت المستعمل في براميل فارغة، وكلما امتلأت يحكم إغلاقها ويتخلص منها باعطاءها للروبابيكيا ، وهي طريقة قد يستغلها بعض المتاجرين بصحة المواطنين بإعادة تكريره أواستخدامه مرة اخرى ولكن بعد ان تاكد اننا شركه مسجله اطمن.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user-about cc"> <span class="font-weight-bold d-block cc">محمد مصطفى</span> <span class="u-color">مدير مطعم كوك دور | الزمالك</span>
                        <div class="d-flex flex-row mt-1"> <i class="fa fa-star u-color"></i> <i class="fa fa-star u-color"></i> <i class="fa fa-star u-color"></i> <i class="fa fa-star-o u-color"></i> <i class="fa fa-star-o u-color"></i> </div>
                    </div>
                    <div class="user-image"> <img src="images/testimonial-img1.jpg" class="rounded-circle" width="70"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"> <i class="fa fa-quote-left u-color"></i>
                <p class="cc">تحمست "إيمان نجيب" ربة منزل من القاهرة، وتواصلت مع المبادرة تليفونيًا، فتوضح: " في المرة الأولى ملأت قارورة زيت وبعد أن استكملت كمية خمسة لتر اتصلت بهم وجائوا وأعطوني قارورة فارغة وقمع للمرات القادمة وانها احب الشركه لسرعه الاستجابه وارسال المندوب".</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user-about cc"> <span class="font-weight-bold d-block cc">ايمان نجيب</span> <span class="u-color">ربة منزل | القاهرة</span>
                        <div class="d-flex flex-row mt-1"> <i class="fa fa-star u-color"></i> <i class="fa fa-star u-color"></i> <i class="fa fa-star u-color"></i> <i class="fa fa-star u-color"></i> <i class="fa fa-star-o u-color"></i> </div>
                    </div>
                    <div class="user-image"> <img src="images/testimonial-img2.jpg" class="rounded-circle" width="70"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr> --}}


  
     <!--Start History-->
     <section id="history" class="section parallax">
		<div class="overlay"></div>
            <div class="container">

                 <div class="title-box text-center white">
                    <h2 class="title">بدايتنا</h2>
                 </div>

                     <!-- History Timeline -->
                    <ul class="timeline list-unstyled">

                        <li class="year">2019</li>

                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>تم انشاء شركة زيت شركة مستقلة </h4>
                            <p>تم البدء فى العمل بشركة زيت وبدا التعامل مع العملاء وتجميع الزيت من المطاعم اولا</p>
                            <span>18 OCT 2019</span>
                        </li>
                        <!-- End Item -->

                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>التوسع فى شركة زيت</h4>
                            <p>تم عمل عقود مع المصانع الكبيرةوتحميل اطنان من الزيت الهالك واعادة تدويرة كزيت الهلك لمصانع الشيبسى </p>
                            <span> 18 DEC 2019</span>
                        </li>
                        <!-- End Item -->

                        <!-- History Year -->
                        <li class="year">2020</li>


                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>تم التوسع ف القاهرة الكبرى</h4>
                            <p>استطاعت شركه زيت التوسع فى جميع انحاء القاهرة الكبرى والتجميع من ربات المنزل</p>
                            <span> 10 OCT 2020</span>
                        </li>
                        <!-- End Item -->

                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>التوسع فى الوجه البحرى فى مصر</h4>
                            <p>تم فتح فرع تجميع للشركه فى الوجه البحرى لمصر والان تستطيع تغطية مساحه كبيرة من العملاء.</p>
                            <span> 11 OCT 2020</span>
                        </li>
                        <!-- End Item -->

                         <!--History Item -->
                        <li class="timeline-item">
                            <h4>فتح فرع صعيد مصر</h4>
                            <p>جارى الان الانتشار فى وسط وصعيد مصر وتغطيه الجمهوريه كلها حتى ننشر وعى صحى جديد</p>
                            <span> 18 OCT 2021</span>
                        </li>
                        <!-- End Item -->

                         <li class="clear"></li>

                        <li class="end-icon fa fa-bookmark"></li>
                    </ul>
                   <!-- End History Timeline -->

           </div> <!--/.container-->
	</section>
   <!--End History-->

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


@endsection

