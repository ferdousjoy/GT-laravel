@extends('layouts.site')
<style media="screen">

</style>
@section('content')

<section>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner banner_slider">
      @php $i=0; @endphp
      @foreach($banner as $key)
      <div class="item oplo {{ ($i==0)? 'active' : '' }}">
       <img src="{{$key->allimg}}"class="img-fluid" style="width:100%;">
       <div class="banner_item2">
           <h1>{{$key->title}}</h1>
           <p>{{$key->text}}</p>
           <a class="banner_btn"> Detail</a>
       </div>
      </div>
      @php $i++; @endphp
      @endforeach


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
  	  <!-- <section class="banner_sec">
           <div class="banner_holder"> <img src="{{asset('GT/images/2.jpg')}}"class="img-fluid" style="width:100%;height:430px;">
              <div class="container banner_con">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="banner_item">
                              <h1>We are one.we are two</h1>
                              <p>china is the biggest competitor of India.</p>
                              <a class="banner_btn"> Detail</a>
                          </div>
                      </div>
             </div>
          </div>
        </section> -->


<!-- ================ == ===================================================================

================================================================================================-->
						<div id="pg-2869-1"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-1" id="service" >
								<div id="pgc-2869-1-0"  class="panel-grid-cell" >
									<div id="panel-2869-1-0-0" class="so-panel widget widget_siteorigin-panels-builder panel-first-child panel-last-child" data-index="1" >
										<div id="pl-w5cbacc6628f36"  class="panel-layout" >
											<div id="pg-w5cbacc6628f36-0"  class="panel-grid panel-has-style" >
												<div class="section-title-wrap wow fadeInUp panel-row-style panel-row-style-for-w5cbacc6628f36-0" >
													<div id="pgc-w5cbacc6628f36-0-0"  class="panel-grid-cell" >
														<div id="panel-w5cbacc6628f36-0-0-0" class="so-panel widget widget_sow-headline panel-first-child panel-last-child" data-index="0" >
															<div class="panel-widget-style panel-widget-style-for-w5cbacc6628f36-0-0-0" >
																<div class="so-widget-sow-headline so-widget-sow-headline-default-8a9ff60e0bdf">
																	<div class="sow-headline-container ">
																		<h1 class='sow-headline'>Our Services</h1>
																		<div class="decoration">
																			<div class="decoration-inside"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <section>
              <div class="container">
                <div class="row">
                  @foreach($ser as $key)

                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid"></div>
                      <a href="{{$key->link}}">{{$key->ttile}}</a>
                    </div>
                  </div>
                    @endforeach

                </div>

              </div>
            </section>
            <!-- <section>
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{asset('GT/images/s1.png')}}" alt="" class="img-fluid"></div>
                      <a href="#">Oracle Solution</a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{asset('GT/images/s1.png')}}" alt="" class="img-fluid"></div>
                      <a href="#">Oracle Solution</a>
                    </div>
                  </div><div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{asset('GT/images/s1.png')}}" alt="" class="img-fluid"></div>
                      <a href="#">Oracle Solution</a>
                    </div>
                  </div><div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{asset('GT/images/s1.png')}}" alt="" class="img-fluid"></div>
                      <a href="#">Oracle Solution</a>
                    </div>
                  </div>
                </div>

              </div>
            </section>

 -->

































						<div id="pg-2869-2"  class="panel-grid panel-has-style" >
							<div class="service-layoutmPS2id-clicked mPS2id-target mPS2id-highlight panel-row-style panel-row-style-for-2869-2" id="oracle" >
								<div id="pgc-2869-2-0"  class="panel-grid-cell" >
									<div id="panel-2869-2-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="2" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-2-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Oracle Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div id="panel-2869-2-0-1" class="so-panel widget widget_siteorigin-panels-builder panel-last-child" data-index="3" >
										<div class="service-row wow fadeInRight panel-widget-style panel-widget-style-for-2869-2-0-1" >
											<div id="pl-w5cbaef64cc47b"  class="panel-layout" >
												<div id="pg-w5cbaef64cc47b-0"  class="panel-grid panel-has-style" >
													<div class="panel-row-style panel-row-style-for-w5cbaef64cc47b-0" >

                           @foreach($sol as $key)
                           <div id="pgc-w5cbaef64cc47b-0-0"  class="panel-grid-cell" >
                             <div id="panel-w5cbaef64cc47b-0-0-0" class="so-panel widget widget_sow-hero panel-first-child panel-last-child" data-index="0" >
                               <div class="so-widget-sow-hero so-widget-sow-hero-default-3165f59a3c38 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
                                 <div class="sow-slider-base " style="display: none">
                                   <ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
                                     <li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;https:\/\/www.oracle.com\/bd\/index.html&quot;,&quot;new_window&quot;:true}" >
                                       <div class="sow-slider-image-container">
                                         <div class="sow-slider-image-wrapper">
                                           <p>
                                             <img class="aligncenter wp-image-2781 size-thumbnail" src="{{$key->allimg}}" alt="" width="150" height="150" />
                                           </p>
                                           <h4 style="text-align: center">{{$key->title}}</h4>
                                         </div>
                                       </div>
                                     </li>
                                   </ul>
                                   <ol class="sow-slider-pagination">
                                     <li>
                                       <a href="#" data-goto="0" aria-label="display slide 1">1</a>
                                     </li>
                                   </ol>
                                   <div class="sow-slide-nav sow-slide-nav-next">
                                     <a href="#" data-goto="next" aria-label="next slide" data-action="next">
                                       <em class="sow-sld-icon-thin-right"></em>
                                     </a>
                                   </div>
                                   <div class="sow-slide-nav sow-slide-nav-prev">
                                     <a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
                                       <em class="sow-sld-icon-thin-left"></em>
                                     </a>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                           @endforeach



													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div id="pg-2869-3"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-3" id="gtsolution" >
								<div id="pgc-2869-3-0"  class="panel-grid-cell" >


									<div id="panel-2869-3-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="4" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-3-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>GT Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div id="panel-2869-3-0-1" class="so-panel widget widget_siteorigin-panels-builder panel-last-child" data-index="5" >
										<div class="service-row wow fadeInRight panel-widget-style panel-widget-style-for-2869-3-0-1" >
											<div id="pl-w5c03655fe8b26"  class="panel-layout" >
												<div id="pg-w5c03655fe8b26-0"  class="panel-grid panel-has-style" >
													<div class="panel-row-style panel-row-style-for-w5c03655fe8b26-0" >


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <section>
              <div class="container">
                <div class="row">
                  @foreach($gt as $key)

                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid"></div>
                      <h1>{{$key->title}}</h1>
                      <p>{{$key->text}}</p>
                    </div>
                  </div>
                    @endforeach

                </div>

              </div>
            </section>













						<div id="pg-2869-4"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-4" id="ApparelCAD" >
								<div id="pgc-2869-4-0"  class="panel-grid-cell" >
									<div id="panel-2869-4-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="6" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-4-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Apparel CAD Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
                  <div class="row">
                    @foreach($cad as $key)

                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="service_box">
                        <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid"></div>
                        <h1>{{$key->title}}</h1>
                        <p>{{$key->text}}</p>
                      </div>
                    </div>
                      @endforeach

                  </div>











<!--
									<div id="panel-2869-4-0-1" class="so-panel widget widget_siteorigin-panels-builder panel-last-child" data-index="7" >
										<div class="panel-widget-style panel-widget-style-for-2869-4-0-1" >
											<div id="pl-w5c03781446dfa"  class="panel-layout" >
												<div id="pg-w5c03781446dfa-0"  class="panel-grid panel-no-style" >
													<div id="pgc-w5c03781446dfa-0-0"  class="panel-grid-cell" >

                            <div id="panel-w5c03781446dfa-0-0-0" class="so-panel widget widget_sow-features panel-first-child" data-index="0" style="float:left">
                              <div class="service-row wow fadeInRight panel-widget-style panel-widget-style-for-w5c03781446dfa-0-0-0" >
                                <div class="so-widget-sow-features so-widget-sow-features-default-b609b43dfed7">
                                  <div class="sow-features-list sow-features-responsive">
                                    @foreach($cad as $key)
                                    <div class="sow-features-feature sow-icon-container-position-top sow-features-feature-last-row" style="width: 100%">
                                      <div class="sow-icon-container sow-container-none" style="color: #000000; ">
                                        <span class="sow-icon-elegantline" data-sow-icon="&#xe00c;" style="font-size: 54px; color: #000000"></span>
                                      </div>
                                      <div class="textwidget">
                                        <h5>	CAD Software	</h5>
                                        <p style="text-align: center">
                                          <a href="http://gtcad.com/cad-software/" target="_blank" rel="noopener">EASY PATTERN DESIGN For Pattern Design.Very easy to use. On screen pattern making.</a>
                                        </p>
                                      </div>
                                    </div>

                                      @endforeach

                                  </div>
                                </div>
                              </div>
                            </div>



													</div>
												</div>
											</div>
										</div>
									</div> -->


								</div>
							</div>
						</div>

            <!-- <section>
              <div class="container">
                <div class="row">
                  @foreach($cad as $key)

                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid"></div>
                      <h1>{{$key->title}}</h1>
                      <p>{{$key->text}}</p>
                    </div>
                  </div>
                    @endforeach

                </div>

              </div>
            </section> -->






































						<div id="pg-2869-5"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-5" id="biometric" >
								<div id="pgc-2869-5-0"  class="panel-grid-cell" >
									<div id="panel-2869-5-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="8" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-5-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Biometric Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="panel-2869-5-0-1" class="so-panel widget widget_siteorigin-panels-builder panel-last-child" data-index="9" >
										<div class="service-row wow fadeInRight panel-widget-style panel-widget-style-for-2869-5-0-1" >
											<div id="pl-w5c03670479213"  class="panel-layout" >
												<div id="pg-w5c03670479213-0"  class="panel-grid panel-has-style" >
													<div class="panel-row-style panel-row-style-for-w5c03670479213-0" >
                            @foreach($bio as $key)
                            <div id="pgc-w5c03670479213-0-0"  class="panel-grid-cell" >

                              <div id="panel-w5c03670479213-0-0-0" class="so-panel widget widget_sow-hero panel-first-child" data-index="0" >
                                <div class="so-widget-sow-hero so-widget-sow-hero-default-6f8574a307c1 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
                                  <div class="sow-slider-base " style="display: none">
                                    <ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
                                      <li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;http:\/\/gtrbd.com\/biometric-solution\/&quot;,&quot;new_window&quot;:true}" >
                                        <div class="sow-slider-image-container">
                                          <div class="sow-slider-image-wrapper">
                                            <h5 style="text-align: center">
                                              <img class="aligncenter wp-image-1796 size-thumbnail" src="{{ $key->allimg}}" alt="" width="150" height="150" />{{ $key->title}}
                                            </h5>
                                            <p style="text-align: center">{{ $key->text}}.</p>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                    <ol class="sow-slider-pagination">
                                      <li>
                                        <a href="#" data-goto="0" aria-label="display slide 1">1</a>
                                      </li>
                                    </ol>
                                    <div class="sow-slide-nav sow-slide-nav-next">
                                      <a href="#" data-goto="next" aria-label="next slide" data-action="next">
                                        <em class="sow-sld-icon-thin-right"></em>
                                      </a>
                                    </div>
                                    <div class="sow-slide-nav sow-slide-nav-prev">
                                      <a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
                                        <em class="sow-sld-icon-thin-left"></em>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="panel-w5c03670479213-0-0-1" class="so-panel widget widget_sow-hero panel-last-child" data-index="1" >
                                <div class="so-widget-sow-hero so-widget-sow-hero-default-6f8574a307c1 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
                                  <div class="sow-slider-base " style="display: none">
                                    <ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
                                      <li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;http:\/\/gtrbd.com\/biometric-solution\/&quot;,&quot;new_window&quot;:true}" >
                                        <div class="sow-slider-image-container">
                                          <div class="sow-slider-image-wrapper">
                                            <h5 style="text-align: center">
                                              <img class="aligncenter wp-image-1800 size-thumbnail" src="{{ $key->allimg1}}" alt="" width="150" height="150" />{{ $key->title1}}
                                            </h5>
                                            <p style="text-align: center">{{ $key->text1}}</p>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                    <ol class="sow-slider-pagination">
                                      <li>
                                        <a href="#" data-goto="0" aria-label="display slide 1">1</a>
                                      </li>
                                    </ol>
                                    <div class="sow-slide-nav sow-slide-nav-next">
                                      <a href="#" data-goto="next" aria-label="next slide" data-action="next">
                                        <em class="sow-sld-icon-thin-right"></em>
                                      </a>
                                    </div>
                                    <div class="sow-slide-nav sow-slide-nav-prev">
                                      <a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
                                        <em class="sow-sld-icon-thin-left"></em>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="pg-2869-6"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-6" id="ups" >
								<div id="pgc-2869-6-0"  class="panel-grid-cell" >
									<div id="panel-2869-6-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="10" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-6-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Online UPS</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>



									<div id="panel-2869-6-0-1" class="so-panel widget widget_siteorigin-panels-builder panel-last-child" data-index="11" >
										<div class="service-row wow fadeInRight panel-widget-style panel-widget-style-for-2869-6-0-1" >
											<div id="pl-w5c0367e3d777e"  class="panel-layout" >
												<div id="pg-w5c0367e3d777e-0"  class="panel-grid panel-has-style" >
													<div class="panel-row-style panel-row-style-for-w5c0367e3d777e-0" >
                             @foreach($ups as $key)
                             <div id="pgc-w5c0367e3d777e-0-0"  class="panel-grid-cell" >
 															<div id="panel-w5c0367e3d777e-0-0-0" class="so-panel widget widget_sow-hero panel-first-child panel-last-child" data-index="0" >
 																<div class="panel-widget-style panel-widget-style-for-w5c0367e3d777e-0-0-0" >
 																	<div class="so-widget-sow-hero so-widget-sow-hero-default-1ac6e8c5c653 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
 																		<div class="sow-slider-base " style="display: none">
 																			<ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
 																				<li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;http:\/\/gtrbd.com\/online-ups\/&quot;,&quot;new_window&quot;:true}" >
 																					<div class="sow-slider-image-container">
 																						<div class="sow-slider-image-wrapper">
 																							<h5 style="text-align: center">
 																								<img class="aligncenter wp-image-1807 size-thumbnail" src="{{ $key->allimg}}" alt="" width="150" height="150" />{{$key->title}}
 																							</h5>
 																						</div>
 																					</div>
 																				</li>
 																			</ul>
 																			<ol class="sow-slider-pagination">
 																				<li>
 																					<a href="#" data-goto="0" aria-label="display slide 1">1</a>
 																				</li>
 																			</ol>
 																			<div class="sow-slide-nav sow-slide-nav-next">
 																				<a href="#" data-goto="next" aria-label="next slide" data-action="next">
 																					<em class="sow-sld-icon-thin-right"></em>
 																				</a>
 																			</div>
 																			<div class="sow-slide-nav sow-slide-nav-prev">
 																				<a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
 																					<em class="sow-sld-icon-thin-left"></em>
 																				</a>
 																			</div>
 																		</div>
 																	</div>
 																</div>
 															</div>
 														</div>
                             @endforeach

														<!-- <div id="pgc-w5c0367e3d777e-0-1"  class="panel-grid-cell" >
															<div id="panel-w5c0367e3d777e-0-1-0" class="so-panel widget widget_sow-hero panel-first-child panel-last-child" data-index="1" >
																<div class="panel-widget-style panel-widget-style-for-w5c0367e3d777e-0-1-0" >
																	<div class="so-widget-sow-hero so-widget-sow-hero-default-ccf009d30909 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
																		<div class="sow-slider-base " style="display: none">
																			<ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
																				<li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;http:\/\/gtrbd.com\/online-ups\/&quot;,&quot;new_window&quot;:true}" >
																					<div class="sow-slider-image-container">
																						<div class="sow-slider-image-wrapper">
																							<h5 style="text-align: center">
																								<img class="aligncenter wp-image-1809 size-thumbnail" src="http://gtrbd.com/wp-content/uploads/2018/11/3-1-150x150.jpg" alt="" width="150" height="150" />XT 900II
																							</h5>
																						</div>
																					</div>
																				</li>
																			</ul>
																			<ol class="sow-slider-pagination">
																				<li>
																					<a href="#" data-goto="0" aria-label="display slide 1">1</a>
																				</li>
																			</ol>
																			<div class="sow-slide-nav sow-slide-nav-next">
																				<a href="#" data-goto="next" aria-label="next slide" data-action="next">
																					<em class="sow-sld-icon-thin-right"></em>
																				</a>
																			</div>
																			<div class="sow-slide-nav sow-slide-nav-prev">
																				<a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
																					<em class="sow-sld-icon-thin-left"></em>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div id="pgc-w5c0367e3d777e-0-2"  class="panel-grid-cell" >
															<div id="panel-w5c0367e3d777e-0-2-0" class="so-panel widget widget_sow-hero panel-first-child panel-last-child" data-index="2" >
																<div class="panel-widget-style panel-widget-style-for-w5c0367e3d777e-0-2-0" >
																	<div class="so-widget-sow-hero so-widget-sow-hero-default-45d77aae60b2 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
																		<div class="sow-slider-base " style="display: none">
																			<ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
																				<li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;http:\/\/localhost:8080\/gtrbd_site_new\/&quot;,&quot;new_window&quot;:false}" >
																					<div class="sow-slider-image-container">
																						<div class="sow-slider-image-wrapper">
																							<h5 style="text-align: center">
																								<img class="aligncenter wp-image-1812 size-thumbnail" src="http://gtrbd.com/wp-content/uploads/2018/11/6-150x150.jpg" alt="" width="150" height="150" />XT 890
																							</h5>
																						</div>
																					</div>
																				</li>
																			</ul>
																			<ol class="sow-slider-pagination">
																				<li>
																					<a href="#" data-goto="0" aria-label="display slide 1">1</a>
																				</li>
																			</ol>
																			<div class="sow-slide-nav sow-slide-nav-next">
																				<a href="#" data-goto="next" aria-label="next slide" data-action="next">
																					<em class="sow-sld-icon-thin-right"></em>
																				</a>
																			</div>
																			<div class="sow-slide-nav sow-slide-nav-prev">
																				<a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
																					<em class="sow-sld-icon-thin-left"></em>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div id="pgc-w5c0367e3d777e-0-3"  class="panel-grid-cell" >
															<div id="panel-w5c0367e3d777e-0-3-0" class="so-panel widget widget_sow-hero panel-first-child panel-last-child" data-index="3" >
																<div class="panel-widget-style panel-widget-style-for-w5c0367e3d777e-0-3-0" >
																	<div class="so-widget-sow-hero so-widget-sow-hero-default-45d77aae60b2 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
																		<div class="sow-slider-base " style="display: none">
																			<ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
																				<li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;http:\/\/localhost:8080\/gtrbd_site_new\/&quot;,&quot;new_window&quot;:false}" >
																					<div class="sow-slider-image-container">
																						<div class="sow-slider-image-wrapper">
																							<h5 style="text-align: center">
																								<img class="aligncenter wp-image-1810 size-thumbnail" src="http://gtrbd.com/wp-content/uploads/2018/11/4-1-150x150.jpg" alt="" width="150" height="150" />Industrial AVR
																							</h5>
																						</div>
																					</div>
																				</li>
																			</ul>
																			<ol class="sow-slider-pagination">
																				<li>
																					<a href="#" data-goto="0" aria-label="display slide 1">1</a>
																				</li>
																			</ol>
																			<div class="sow-slide-nav sow-slide-nav-next">
																				<a href="#" data-goto="next" aria-label="next slide" data-action="next">
																					<em class="sow-sld-icon-thin-right"></em>
																				</a>
																			</div>
																			<div class="sow-slide-nav sow-slide-nav-prev">
																				<a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
																					<em class="sow-sld-icon-thin-left"></em>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


            <div id="pg-2869-7"  class="panel-grid panel-has-style container" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-7" id="firePro" >

								<div id="pgc-2869-7-0"  class="panel-grid-cell" >
									<div id="panel-2869-7-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="12" >
										<div class=" section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-7-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Fire Detection &amp; Protection</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
                  <div class="row">
                    @foreach($fir as $key)

                    <div class="col-lg-4 col-md-4 col-sm-6">
                      <div class="service_box">
                        <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid"></div>
                        <h1>{{$key->title}}</h1>
                        <p>{{$key->text}}</p>
                      </div>
                    </div>
                      @endforeach

                  </div>




  </div>
</div>
</div>






						<div id="pg-2869-8"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-8" id="news" >
								<div id="pgc-2869-8-0"  class="panel-grid-cell" >
									<div id="panel-2869-8-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="14" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-8-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-3ead4f064630">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>News &amp; Events</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>







                	<div id="panel-2869-8-0-1" class="so-panel widget widget_sow-layout-slider panel-last-child" data-index="15" >
										<div class="service-row wow fadeInRight panel-widget-style panel-widget-style-for-2869-8-0-1" >
											<div class="so-widget-sow-layout-slider so-widget-sow-layout-slider-default-250270e64bf6">
												<div class="sow-slider-base " style="display: none">
													<ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1500,&quot;timeout&quot;:2000,&quot;swipe&quot;:true,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
														<li class="sow-slider-image" style="" >
															<div class="sow-slider-image-container">
																<div class="sow-slider-image-wrapper">
																	<div id="pl-wdb3cb1c4"  class="panel-layout" >
																		<div id="pg-wdb3cb1c4-0"  class="panel-grid panel-no-style" >

                                      @foreach($eve as $key)
                                      <div id="pgc-wdb3cb1c4-0-0"  class="panel-grid-cell" >
                                        <div id="panel-wdb3cb1c4-0-0-0" class="so-panel widget widget_sow-hero panel-first-child panel-last-child" data-index="0" >
                                          <div class="so-widget-sow-hero so-widget-sow-hero-default-9d11d0e02fb0 so-widget-fittext-wrapper" data-fit-text-compressor="0.85">
                                            <div class="sow-slider-base " style="display: none">
                                              <ul class="sow-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1,&quot;timeout&quot;:false,&quot;swipe&quot;:false,&quot;nav_always_show_mobile&quot;:&quot;&quot;,&quot;breakpoint&quot;:&quot;780px&quot;}">
                                                <li class="sow-slider-image" style="cursor: pointer;" data-url="{&quot;url&quot;:&quot;#&quot;,&quot;new_window&quot;:true}" >
                                                  <div class="sow-slider-image-container">
                                                    <div class="sow-slider-image-wrapper">
                                                      <p>
                                                        <img class="size-full wp-image-2827 aligncenter" src="{{$key->allimg}}" alt="" width="300" height="300" />
                                                      </p>
                                                      <h5 style="text-align: center"> {{$key->title}}</h5>
                                                      <p style="text-align: justify"> {{$key->text}}</p>
                                                    </div>
                                                  </div>
                                                </li>
                                              </ul>
                                              <ol class="sow-slider-pagination">
                                                <li>
                                                  <a href="#" data-goto="0" aria-label="display slide 1">1</a>
                                                </li>
                                              </ol>
                                              <div class="sow-slide-nav sow-slide-nav-next">
                                                <a href="#" data-goto="next" aria-label="next slide" data-action="next">
                                                  <em class="sow-sld-icon-thin-right"></em>
                                                </a>
                                              </div>
                                              <div class="sow-slide-nav sow-slide-nav-prev">
                                                <a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
                                                  <em class="sow-sld-icon-thin-left"></em>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach


																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
													<ol class="sow-slider-pagination">
														<li>
															<a href="#" data-goto="0" aria-label="display slide 1">1</a>
														</li>
													</ol>
													<div class="sow-slide-nav sow-slide-nav-next">
														<a href="#" data-goto="next" aria-label="next slide" data-action="next">
															<em class="sow-sld-icon-thin-right"></em>
														</a>
													</div>
													<div class="sow-slide-nav sow-slide-nav-prev">
														<a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
															<em class="sow-sld-icon-thin-left"></em>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>




























              	</div>

							</div>
						</div>





						<div id="pg-2869-9"  class="panel-grid panel-has-style" >
							<div class="service-layout siteorigin-panels-stretch panel-row-style panel-row-style-for-2869-9" data-stretch-type="full-stretched" >
								<div id="pgc-2869-9-0"  class="panel-grid-cell" >
									<div id="panel-2869-9-0-0" class="so-panel widget widget_widget_carousel_slider widget_carousel_slider panel-first-child panel-last-child" data-index="16" >
										<div class="panel-widget-style panel-widget-style-for-2869-9-0-0" >
											<div class="carousel-slider-outer carousel-slider-outer-images carousel-slider-outer-554">

										 <div id="id-554" class="owl-carousel carousel-slider arrows-outside arrows-visible-hover dots-hidden dots-center dots-square" data-slide-type="image-carousel" data-margin="20" data-slide-by="1" data-loop="true" data-lazy-load="false" data-stage-padding="0" data-auto-width="false" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-timeout="1500" data-autoplay-speed="500" data-autoplay-hover-pause="true" data-colums="6" data-colums-desktop="6" data-colums-small-desktop="4" data-colums-tablet="3" data-colums-small-tablet="2" data-colums-mobile="1">
                       @foreach($par as $key)
                       <div class="carousel-slider__item">
                          <img width="150" height="150" src="{{$key->allimg}}" class="attachment-thumbnail size-thumbnail" alt="" />
                        </div>
                       @endforeach


												</div>
												<!-- #id-## -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
      @endsection
      @section('footer_scripts')
      <script>
      $(document).ready(function(){
     $('.owl-carousel').owlCarousel();
   });




      </script>

      @endsection

			<!-- #content -->
