<!doctype html>
<html class="no-js" lang="zxx">

@include('header')

        <main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url({{ asset('temp/assets/img/about/aboutus.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>About Us</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="{{route('home')}}">home</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->

            <!-- case-details-area-start -->
            <div class="case-details-area pt-130 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-4 mb-30">
                         
                            <div class="widget mb-40">
                                <div class="widget-title-box mb-30">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">Important Documents</h3>
                                </div>
                                <ul class="recent-posts">
                                    <li>
                                       
                                        <div class="widget-posts-body">
                                            <h6 class="widget-posts-title"><a href="{{route('childprotection')}}">CHILD PROTECTION & SAFE GUARDING POLICY.</a></h6>
                                        
                                        </div>
                                    </li>
                                    <li>
                                     
                                        <div class="widget-posts-body">
                                            <h6 class="widget-posts-title"><a href="{{route('downloadd')}}">SIKU YA MTOTO WA AFRICA .</a></h6>
                                        
                                        </div>
                                    </li>
                                    <li>
            
                                    </li>
                                </ul>
                            </div>
                       
                        </div>
                        <div class="col-xl-8 col-lg-8 mb-30">
                            <div class="case-details-wrapper">
                                <div class="case-details-img mb-50">
                                    <img src="{{ asset('temp/assets/img/about/aboutus.jpg')}}" alt="">
                                </div>
                          
                 
                                <div class="case-details-text">
                                    
                                    <p><b>VVCYF</b> is a non government organization (NGO) striving for helping children and youth out of dangerous situations. This organization was founded in 2021 at Mlandizi division in the Coastal region to operate in the united Republic of Tanzania especially in mainland.The certificate was issued in September 2022 with registration No 00NGO/R/3645 under the terms and conditions of National NGOs Policy 2001 and the NGOs act No 24/2002 as amended by act No 11/2005 and act No 3/2019 and it's regulations.
It was started by a team of dedicated founding members with target that children are protected from the threat of any kind of violence, abuse and exploitation. The organization believes that proper care delivered at the youngest age forms the strongest foundation for person’s future. Taking into account that aged people lives the form of life which is almost the impact of childhood formation, so great care at youngest age is inevitable.
<br><b>VVCYF</b> takes into account that children and youth have right to be assured of physical, mental and psychological protection. The future security of our communities depend entirily on the current situation and treatment partaining to children care. The security and welfare of tomorrow is determined by the treatment we are employing on today's generation. It is this day that the community can begin to weaken the welfare of tomorrow's generation especially when children are denied with their rights. They demand all the kind of care regarding their rights. When they are deprived  of their rights this day, they will be unrighteous in future; a future full of life uncertainties.
<br>
<br><b>WHY VISIMA VIWILI ?.</b>
The name VISIMA VIWILI means "TWO WELLS". The name  originated in the place where there are two wells for domestic water use. 
The work  was initially established in this area with intensive focus to reaching group of children slightly isolated from town exposure on the boundary of open area of cultivation and wilderness called visima viwili. 
Following our belief that every child deserves to live life in all its fullness, we started providing education to children and youth regarding moral values and ethics. Our target has been to do everything we can to see that children and youth are free from all kind of violence in the community.
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- case-details-area-end -->
        </main>
        <!-- footer-area-start -->
        @include('footer')
    </body>
</html>