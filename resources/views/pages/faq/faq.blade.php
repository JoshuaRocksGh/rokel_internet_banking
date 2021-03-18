@extends('layouts.app')

@section('content')

@include('snippets.top_navbar', ['page_title' => 'FAQ'])



<div class="container">

    <br>
    <div class="row">
        <legend></legend>
        <br>
            <legend></legend>
            <p class="sub-header font-18 purple-color">
                <br>
            </p>
            <br>
        <div class="col-lg-12">
            <div class="card card-body">
              

                <!-- faqs start -->
                <section class="section" id="faq">
                    <div class="container-fluid">
        
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <h3>Frequently Asked Questions</h3>
                                    <p class="text-muted">At solmen va esser necessi far uniform grammatica.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been thestandard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Why  Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4 pb-1 text-muted">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">How many variations exist?</h4>
                                    <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been thestandard dummy text ever since the 1500s.</p>
                                </div>
        
                            </div>
                            <!--/col-lg-5 -->
        
                            <div class="col-lg-5">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe  Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been thestandard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">When can be used?</h4>
                                    <p class="faq-answer mb-4 pb-1 text-muted">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">License &amp; Copyright</h4>
                                    <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.</p>
                                </div>
        
                            </div>
                            <!--/col-lg-5-->
                        </div>
                        <!-- end row -->
        
                    </div> <!-- end container-fluid -->
                </section>
                <!-- faqs end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion custom-accordion" id="custom-accordion-one">
                            <div class="card mb-0">
                                <div class="card-header" id="headingNine">
                                    <h5 class="m-0 position-relative">
                                        <a class="custom-accordion-title text-reset d-block"
                                            data-toggle="collapse" href="#collapseNine"
                                            aria-expanded="true" aria-controls="collapseNine">
                                            Q. Can I  this template for my client? <i
                                                class="mdi mdi-chevron-down accordion-arrow"></i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseNine" class="collapse show"
                                    aria-labelledby="headingFour"
                                    data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                        Yup, the marketplace license allows you to  this theme
                                        in any end products.
                                        For more information on licenses, please refere <a
                                            href="https://themeforest.net/licenses/standard" target="_blank">here</a>.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="headingFive">
                                    <h5 class="m-0 position-relative">
                                        <a class="custom-accordion-title text-reset collapsed d-block"
                                            data-toggle="collapse" href="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Q. Can this theme work with Wordpress? <i
                                                class="mdi mdi-chevron-down accordion-arrow"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse"
                                    aria-labelledby="headingFive"
                                    data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                        No. This is a HTML template. It wont directly with
                                        wordpress, though you can convert this into wordpress
                                        compatible theme
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="headingSix">
                                    <h5 class="m-0 position-relative">
                                        <a class="custom-accordion-title text-reset collapsed d-block"
                                            data-toggle="collapse" href="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            Q. How do I get help with the theme? <i
                                                class="mdi mdi-chevron-down accordion-arrow"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                         our dedicated support email (support@coderthemes.com) to
                                        send your issues or feedback. We are here to help anytime
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="m-0 position-relative">
                                        <a class="custom-accordion-title text-reset collapsed d-block"
                                            data-toggle="collapse" href="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            Q. Will you regularly give updates of UBold ? <i
                                                class="mdi mdi-chevron-down accordion-arrow"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse"
                                    aria-labelledby="headingSeven"
                                    data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                        Yes, We will update the UBold regularly. All the
                                        future updates would be available without any cost
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="accordion" class="mb-3">
                            <div class="card mb-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            What is Vakal text here?
                                        </a>
                                    </h5>
                                </div>
                    
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            Why  Vakal text here?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header" id="headingThree">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            How many variations exist?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-1">
                                <div class="card-header" id="headingFour">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            What is Vakal text here?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end #accordions-->
                    </div> <!-- end col -->



                </div>

           
            </div>
        </div>

    </div>


    <br>



</div>
<!-- end row -->


@endsection
