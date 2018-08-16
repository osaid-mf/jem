@extends('layout')

@section('content')
<section id="abouts" class="abouts">
		<div class="container">
			<div class="row">
                <div class="col-md-1"></div>
                <div class="whtrepo col-md-10">
                  <p>
                    <span class="text-danger">Special Report:</span> Can Immuniguard help keep your immune system healthy to avoid bugs like the flu and common cold? 
                    This report was created to help safeguard against illnesses with some preseason training for the cold and flu months..
                  </p>
                  <div class="alert alert-info" role="alert">
                    <p>  Note: Immuniguard – Rated #1 – is sold out at most major retailers. As of Sunday, August 12, 2018 it is still available online.</p>
                  </div>
                </div>
                <div class="col-md-1"></div>
			</div>
		</div>
	</section>
	
	
	<section id="wedo">
		<div class="container">
			<div class="row">
				<div class="wedo_content_area">
					
					<div class="col-md-6 col-sm-6 col-xs-12">
                          <h4 class="font-dohy">The Future of Immune System Health is Here</h4>
                          <p>
                              Immune system supplements are nothing new. They have been around for years, promising consumers everything under the sun – while most of the time delivering no results. That is all changing. By combining proven immune boosters and antivirals, Immuniguard is on the cutting edge of immune system support.
                          </p>
                          <h4 class="font-dohy">What is Immuniguard?</h4>
                          <p>
                              Immunuiguard is a specially crafted supplement containing premium ingredients with exceptional immune boosting and antiviral properties.
                          </p>	
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="{{ URL::asset('assets/images/man.png') }}" width="420" alt="">
					</div>
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="counterUp" class="counterUp">
		<div class="counter_overlay">
			<div class="container">
				<div class="row">
					<div class="main_counter_content">
                    <div class="sinle_counter wow fadeIn" data-wow-duration="1s">
                                <h1 class="font-dohy whthow">How does Immuniguard Work?</h1>
								<ul>
                                    <li>
                                      <h4><i class="fa fa-star"></i><span class="static-counter">Optimize Immune System</span></h4>
                                      <p class="ptex">Immuniguard’s formula provides optimized immunity boosters to help prevent illness during cold & flu season.</p>
                                    </li>
                                    <li>
                                      <h4><i class="fa fa-star"></i><span class="static-counter">Potent Antivirals and Antioxidants</span></h4>
                                      <p class="ptex">Immuniguard’s formula provides optimized immunity boosters to help prevent illness during cold & flu season.</p>
                                    </li>
                                </ul>
							</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="steps" class="steps">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow fadeIn" data-wow-duration="1.5s">
					<h2>What We Think</h2>
					<div class="separetor"></div>
				</div>
				
					
                  <div>
                  <div class="col-md-6">
                    <p class="htli">
                       A healthy immune system is the best weapon against getting sick. Keep your natural defenses strong and give your body the nutrients it needs. Immuniguard capsules give your body the vitamins and minerals it needs to enhance your immune system. The clinically proven ingredients will help keep you energized and healthy this season.
                    </p>
                  </div>
                  <div class="col-md-6 cenme">
                    <img src="{{ URL::asset('assets/images/btlem.png') }}" alt="">
                  </div>
                  </div>	
            </div>
            
            <div class="row">
                  <p class="noteme">
                    Every order of Immuniguard is a one-time-only transaction. In other words, there are absolutely no reoccurring charges or hidden offers.
                  </p>
            </div>

            <div class="row cenme">
              <a href="{{ url('order') }}">
                <img src="{{ URL::asset('assets/images/lnk.png') }}" width="80%" alt="">
              </a>
            </div>

		</div>
	</section>
	
@endsection