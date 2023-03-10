@extends('layouts.master')
@section('title', 'Запослени')

@section('content')
<section class="tf-page-title">
    <div class="overlay"></div>
    <div class="overlay-bg"></div>
    <img src="assets/images/background/img1innerpage.png" class="bg-inner1" alt="">
    <img src="assets/images/background/img2innerpage.png" class="bg-inner2" alt="">
    <img src="assets/images/background/img3innerpage.png" class="bg-inner3" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title inner">
                    <h1 class="title">Запослени</h1>
                    <div class="breadcrumbs">
                        <ul class="jus-ct">
                            <li><a href="index.html" class="f-rubik">Почетна</a></li>
                            <li><p class="breadcrumbs-inner f-rubik">Запослени</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section> 
<section class="tf-section tf-time-table">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="title-heading st-3">
                    <div class="sub-heading clr-pri-3 f-mulish">
                        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g >
                              <image  width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEPklEQVRogd2Ze4hVVRTGf+pNHRtnegxqlonUMJYGY/pXWoFEJpVBTFRDaBbOVmxC/5GUUFJMqQh6MLUjfARBUVGEYi9rqFQU0UrQ8pXvMkcLmbJSZ2TdvlOHy73de+fOmXPv/eCwD+ewz9n7O2utb611enU2NZEGA4F+QFu6m2UF7/PeTe8M17cA48qesC4iHWk3AiOB70tiBzEgHWmfAr8CB8p+911EKmn1wGXAlyWzgxiQStpyjZ+V/c4LQCI0tQKYqPN8SDPia2Wl1wBXSH0D/AYcB3YD3wL7gY64N14IwqRNAi4CjuQgAv2Be3RMkksHOAOcBs6KvEqgT+h+m+LmWuAD4PeiYSNHhEm7S+P6/5l6FTAXeBSoFgGfAJ8D3wG7RFgY9iGuliKPByYA9wMPAu3A28CzwA9xEpEPwqTdprE1zfxLgSeBZrnje8BKWcz5LO8zi9unY62uDQIagNn6AI8AbwHzgYM9S0H+CIRgGDBc51+nPKVBFjQHWK34ZZbyUQ6EZcIvQAswGpgMbJfl2XueSHHnokNA2q0ajwF7dW7C8DrwjoL3GGAG8GM3bqJT5Fv18bDi4TK5+5XFTtp4jZs1mvt8oY2YW96smBUVOmXFo4B1wC0q5cb0PCXZEZAW1JlbFOw3KnDfASwtwA3zxc/A3RKGoUqyb+qhd+eM3hKDGzThkISgWtYVR5JrH2ieRKFSllcfwzoywki7Xm0gwyLgEiW5O2Jem1UnC4Aqxb1hsa7GuRqcszifJO260K0RwL1FQFgAE4VXgMFKhAfEuJYXgT9wLpFQ7AqwSBVB2B0sYz8FnIxnrTwO1Mn6jcBpPb4C5yxMTElmFt6fS2hBAZ7WkQ5nFPMOA3tUR34F7Ix4yeeAB5TLTQU2Aa9G/M5UPARcDLyMRKA9x4kVIrguVD0YjgIfqkpojUhpTyihtue/AGyT0kcP5/oqtqKEPElak9IKc8leoUUMUGFeJRWz43KlAoOUfAbjLB3m2quAJcDf3byhDaoWngPeBcaKzKgxRyLUjPdnCdWeB7tY85mQ1KggNxG5VqT2jYA0w/PK20ys3pfF/xnBe/6Bc1bmPSXvaQkuJ7JMy4YO1ZF2bI1s8f+hU0JQqyrmDdWs3R8SnBuqBkP/ZGfG+397gJn+RhUz2qVkFkvvE3HdW+A7NwT4WB60Hu83hG+XImnop8/t6uc1AmuUlBcO5+qk0KP1Ye5MfWah7hkndqqwX6Ma2RoKj0nJ84dzZkAzgWeUXhxIdn+8/yv1WZn+sJcSTIjelOWhfuBidaBz+RfRT+6+UNaFWlONeH883YRStrQAbfpPMVXdkQlqwf+kuGSu9o1+7nRoz4NF0ES5X5WedULkvRYO/KkoB0sLwxLw6WrLj8x9WrLxugJ4Ce+zJvvlRloYRpq10i1pt6aEJeIWqyxGmdVZzLKqohXvg+ZrdgAXAIwK6LO/4gPOAAAAAElFTkSuQmCC"></image>
                            </g>
                        </svg>
                        <span class="inner-sub st-1">Запослени</span>
                        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g >
                              <image  width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEMUlEQVRoge2Ze4hVVRTGf46WMyWmZvkaNSWfST7I1EINyVQ0kSxsQiyS3JFo/lGhUQSCJokk5aONhijhHyGRkKTlI3JMFKQaBx2o1HS0klSs66ucGVl3vhOnw73XwblPnQ8OZ+acfc/e+zvr8a11mtXNmsUtDe8T79659sAVvP87eqvo1mYsJR4C9ica0ERaclQBfXFuSHREE2nJ4P0x4BzwdXREE2mp8S3QDucGhUc1kZYa23V3SXhUizxb5I3AXnxPYCDQG+gAtAk9x7Lfb8AvwA/AT0BtA+cJSBuDcyV4f4kCJu1OYAowERgLtA/dqwFiIus2oDVQErp/FtgGbNZxOeks3lfhXDVQCowDPqcASesDvA5MA1rJYvYA5TpbxjsO/Bv5nRHXD3gwbjX1RJcB53HuY+B9vK9OMucO4HlgUkBaocS07sBG4DAwU8TMBjoBo4A3gS1ywShhhr+AfcAakdURmCCLexU4gnPLcK5tgt9+o/PjwYV8J605MF9k2Wa/12YHAKuA0zf4XHPhrbLYXsB6YF58HuemRsaW69wd57qS56R1AXYC7wIWgF+QSrfN1qVtFu+P4v1LwOC4xcEmnFsbD/z1938GTmn0aPKYtMEqYcz1vgQekDWkj6wovK8ARgJv6QXtwrl7NWqfzo+Sp6Q9IlHZGVgKPAn8npWZva/B+0XA+HgJBd/hXGmoBjVLzzvSBsmyLDMuAN5Q/MkuvN8uq7tLieC45h+Acy0C0koiWicX6Kp41VrZcElOV+P9QckTE8rv6Gox0L9IWu0i8EEOl3iHNJCp+dUK/rlHPXFPAT1Ca+lnhF0FLENMllvEcrBYI2qIsuXcnJHl3N3xAr2+4ghQLUtbrP/7BhXBCmA5MB34KMtLfRmYAZwEntVLzDT6K2YNxLleCg3dIuVWMvQJ2t1Wo/0DnADu19/ZwMPAbiWkx1QKZQLN9fyp8qgujZhjTWBpVnrMAT6UMn4vC4TdExeScDvwWoYIs2e/Ld1VGrpeo2ripM4mXs8oNMVUdl1WrA9QF++SeP9r+MNKkSzMCBwKVGZgEwGK1XYxsfgZ8HSGhGsrJZVTittHJR/+/K89lOzDSgqEuxy1KhPKVfyOCJUP6YS5ygYRdlAdhEwp/Zg8KK2Iits9aoV0UwegY4YIe0auMTlH2bpRSFQRTNSGrJOwVz2sdMBE4hfAc3KPJ4BjhUHT/5GItCuq/2xD9wEHgFcaWXKZRVWopjuiQvxQOjaQCyQjwoLlcIlNE3orgR/lVi0buM4idUh3q61sWugrYJj6YwWLVO3uP7RpS68L5a6fKh1vEaGVGndVJHVQ0T1CPfVOetZptak3FDJZAa73jaBWFcInykIvSvyW6bgeqqT91qmReFOgoR9WYtI7dph7mbo2NW8xz6zLXPaCLMpczz6VWYvHSLu5AFwD7u/9V73LPFIAAAAASUVORK5CYII="></image>
                            </g>
                        </svg>
                    </div>
                    {{-- <h2 class="title clr-pri-2">Имамо преко </h2> --}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="flat-tabs tab-time-table wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                    {{-- <ul class="menu-tab">
                        <li class="active"><span>Директор</span></li>
                        <li><span>Наставници разредне наставе</span></li>
                        <li><span>Предметни наставници</span></li>
                        <li><span>Стручни сарадници</span></li>
                        <li><span>Школска администрација</span></li>
                        <li><span>Ваннаставно особље</span></li>
                    </ul> --}}
                    <ul class="menu-tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <span class="nav-link active" id="direktor-tab" data-bs-toggle="tab" data-bs-target="#direktor" type="button" role="tab" aria-controls="direktor" aria-selected="true">Директор</span>
                        </li>
                        <li class="nav-item" role="presentation">
                          <span class="nav-link" id="nastavnici-tab" data-bs-toggle="tab" data-bs-target="#nastavnici" type="button" role="tab" aria-controls="nastavnici" aria-selected="false">Наставници разредне наставе</span>
                        </li>
                        <li class="nav-item" role="presentation">
                          <span class="nav-link" id="p-nastavnici-tab" data-bs-toggle="tab" data-bs-target="#p-nastavnici" type="button" role="tab" aria-controls="p-nastavnici" aria-selected="false">Предметни наставници</span>
                        </li>
                        <li class="nav-item" role="presentation">
                            <span class="nav-link" id="saradnici-tab" data-bs-toggle="tab" data-bs-target="#saradnici" type="button" role="tab" aria-controls="saradnici" aria-selected="false">Стручни сарадници</span>
                          </li>
                          <li class="nav-item" role="presentation">
                            <span class="nav-link" id="administracija-tab" data-bs-toggle="tab" data-bs-target="#administracija" type="button" role="tab" aria-controls="administracija" aria-selected="false">Школска администрација</span>
                          </li>
                          <li class="nav-item" role="presentation">
                            <span class="nav-link" id="vannastavno-tab" data-bs-toggle="tab" data-bs-target="#vannastavno" type="button" role="tab" aria-controls="vannastavno" aria-selected="false">Ваннаставно особље</span>
                          </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="direktor" role="tabpanel" aria-labelledby="direktor-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container">
                                    <div class="sc-employee wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="800ms" >
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-1.jpg" alt="Image"></div>
                                        <div class="box-content st-1">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ана Виторовић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Директор</p>
                                            <div class="social">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Тања Нешковић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Помоћник директора</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                        
                        <div class="tab-pane fade " id="nastavnici" role="tabpanel" aria-labelledby="nastavnici-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-1">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Радојичић Јасна</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Матијевић Добрила</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-1">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милаковић Слађана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-1">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Рстић Љубица</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Гавриловић Ката</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Гавриловић Зорица</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Симеуновић Мира</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ђорђевић Нада</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Васовић Славица</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Арсенијевић Милица</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Павловић Миланка</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Лучић Марина</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ковачевић Данка</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Млађеновић Станика</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Пантовић Мирјана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Пантовић Мирјана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Петровић Љиљана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Витезовић Слађана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јоксимовић Михаило</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јоксимовић Милка</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Тешовић Мирјана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Божовић Радмила</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Вујић Весна</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ерчић Бојана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Дучић Душица</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Наставник разредне наставе</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јанковић Милисав</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Продужени боравак</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>











                        <div class="tab-pane fade" id="p-nastavnici" role="tabpanel" aria-labelledby="p-nastavnici-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Бабић Светлана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Српски језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Вукотић Филип</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Српски језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Гаговић Данијела</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Српски језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Петровић Славица</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Српски језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Вукотић Сена</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Српски језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/Andrijana..jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јоксимовић Андријана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Француски језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Атанасовски Иван</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Француски језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милић Бранислава</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Енглески језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Радовановић Марија</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Енглески језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Кијачић Весна</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Енглески језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ристовић Зоран</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Енглески језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Максић Марина</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Енглески језик</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јанковић Јелена</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Ликовна култура</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Лекић Горан</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Музичка култура</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Цвијић Милош</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Географија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Миленко Стефановић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Географија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ђурић Иван</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Историја</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Николић Гордана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Историја</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/dragana.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Перишић Драгана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Математика</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Машић Снежана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Математика</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/danijela.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Томић Данијела</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Математика</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јоксимовић Љиљана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Хемија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/tanja.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Страиновић Крстић Татјана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Хемија/физика</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јовановић Мирјана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Биологија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Костић Милена</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Биологија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/ljilja.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Караклајић Љиљана</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Техника и технологија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/profesor.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Караклајић Ацо</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Техника и технологија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Нешковић Тања</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Техника и технологија</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/spajk.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Спасић Владимир</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Техника и технологија/информатика</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/marko.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Пантовић Марко</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Информатика и рачунарство</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/Sneza.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Глигоријевић Снежана </a></h4>
                                            <p class="sub f-mulish clr-pri-1">Информатика и рачунарствво</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Марковић Томо</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Физичко и здравствено васпитање</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Марковић Драгослав</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Физичко и здравствено васпитање</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Марић Жељко</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Физичко и здравствено васпитање</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Цвијић Немања</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Физичко и здравствено васпитање</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Стевановић Јован</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Верска настава</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Вулета Мила</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Верска настава</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Лучић Марија</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Информатика/математика</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>









                        <div class="tab-pane fade" id="saradnici" role="tabpanel" aria-labelledby="saradnici-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јована
                                                Радовић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Психолог</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Марија Глигоријевић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Педагог</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ђорђе Ђокић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Логопед</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милован
                                                Јоксимовић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Библиотекар</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>









                        <div class="tab-pane fade" id="administracija" role="tabpanel" aria-labelledby="administracija-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ђорђе Марјановић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Секретар</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милена Штулић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Шеф рачуноводства</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Живорад Глигоријевић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Благајник</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <div class="tab-pane fade" id="vannastavno" role="tabpanel" aria-labelledby="vannastavno-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Бранко
                                                Петровић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Домар</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Мишко
                                                Стојановић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Домар</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Жељко
                                                Пантић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Ложач</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Александар
                                                Лазић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Ложач</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Вида
                                                Павловић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Сервирка</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милкица
                                                Матић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јелена Мијатовић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Нада
                                                Трипковић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милина
                                                Марковић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Даница Ћирјанић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милка
                                                Павловић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Драган
                                                Субашић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Нада
                                                Остојић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јелена
                                                Мијатовић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Јованка Борисављевић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милијана
                                                Ралић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Милош Илић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Светлана
                                                Филиповић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Весна
                                                Мијаиловић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Мирјана
                                                Филиповић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Слађана
                                                Петровић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                                    <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                                        <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                                        <div class="box-content st-2">
                                            <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Кирекија
                                                Петровић</a></h4>
                                            <p class="sub f-mulish clr-pri-1">Радник на одржавању хигијене</p>
                                            <div class="social">
                                                <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container">
                        <div class="sc-employee wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="800ms" >
                            <div class="box-feature"><img src="assets/images/common/sc-employee-1.jpg" alt="Image"></div>
                            <div class="box-content st-1">
                                <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Ана Виторовић</a></h4>
                                <p class="sub f-mulish clr-pri-1">Директор</p>
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 container"">
                        <div class="sc-employee active wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                            <div class="box-feature"><img src="assets/images/common/sc-employee-2.jpg" alt="Image"></div>
                            <div class="box-content st-2">
                                <h4 class="name"><a href="teacher-details.html" class="clr-pri-1">Тања Нешковић</a></h4>
                                <p class="sub f-mulish clr-pri-1">Помоћник директора</p>
                                <div class="social">
                                    <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div> 
                            </div>
                        </div>
                    </div> --}}

                    {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                      </div> --}}

                    
                    
                    {{-- <div class="content-tab">
                        <div class="content-inner">
                            <ul class="list-date fx">
                                <li><span>Saturday</span></li>
                                <li><span>Sunday</span></li>
                                <li><span>Monday</span></li> 
                                <li><span>Tuesday</span></li>
                                <li><span>Wednesday</span></li>
                                <li><span>Thursday</span></li>
                                <li><span>Friday</span></li>
                            </ul>
                            <ul class="calendar-box fx">
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>


                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>

                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content-inner">
                            <ul class="list-date fx">
                                <li><span>Saturday</span></li>
                                <li><span>Sunday</span></li>
                                <li><span>Monday</span></li> 
                                <li><span>Tuesday</span></li>
                                <li><span>Wednesday</span></li>
                                <li><span>Thursday</span></li>
                                <li><span>Friday</span></li>
                            </ul>
                            <ul class="calendar-box fx">
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>


                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>

                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content-inner">
                            <ul class="list-date fx">
                                <li><span>Saturday</span></li>
                                <li><span>Sunday</span></li>
                                <li><span>Monday</span></li> 
                                <li><span>Tuesday</span></li>
                                <li><span>Wednesday</span></li>
                                <li><span>Thursday</span></li>
                                <li><span>Friday</span></li>
                            </ul>
                            <ul class="calendar-box fx">
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>


                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>

                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content-inner">
                            <ul class="list-date fx">
                                <li><span>Saturday</span></li>
                                <li><span>Sunday</span></li>
                                <li><span>Monday</span></li> 
                                <li><span>Tuesday</span></li>
                                <li><span>Wednesday</span></li>
                                <li><span>Thursday</span></li>
                                <li><span>Friday</span></li>
                            </ul>
                            <ul class="calendar-box fx">
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>


                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>

                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content-inner">
                            <ul class="list-date fx">
                                <li><span>Saturday</span></li>
                                <li><span>Sunday</span></li>
                                <li><span>Monday</span></li> 
                                <li><span>Tuesday</span></li>
                                <li><span>Wednesday</span></li>
                                <li><span>Thursday</span></li>
                                <li><span>Friday</span></li>
                            </ul>
                            <ul class="calendar-box fx">
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>


                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>

                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content-inner">
                            <ul class="list-date fx">
                                <li><span>Saturday</span></li>
                                <li><span>Sunday</span></li>
                                <li><span>Monday</span></li> 
                                <li><span>Tuesday</span></li>
                                <li><span>Wednesday</span></li>
                                <li><span>Thursday</span></li>
                                <li><span>Friday</span></li>
                            </ul>
                            <ul class="calendar-box fx">
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>


                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>

                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg7">
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>

                                <li class="bg7">
                                </li>
                                <li class="bg1">
                                    <p class="bold">Mathematics</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg2">
                                    <p class="bold">Arts & Drawing</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg3">
                                    <p class="bold">Computer</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg4">
                                    <p class="bold">Magic English</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg5">
                                    <p class="bold">ICT Learning</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                                <li class="bg6">
                                    <p class="bold">Language</p>
                                    <p>07.30 - 08.15</p>
                                    <p><span>Teacher:</span><span class="bold">Michel</span></p>
                                    <p><span>Room:</span><span class="bold">40G</span></p>
                                    <p><span>Level:</span><span class="bold">All Levels</span></p>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>  
    </div>
</section>   
@endsection