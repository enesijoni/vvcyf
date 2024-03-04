
<!doctype html>
<html class="no-js" lang="zxx">

@include('header')

        <main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url({{ asset('temp/assets/img/services/outreach.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>OUTREACH SERVICES</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="{{route('home')}}">home</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->

            <!-- financial-advice-area-start -->
            <div class="financial-advice-area pt-125 pb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="financial-wrapper">
                                <div class="financial-text text-center">
                                    <h3>OUTREACH SERVICES</h3>
                                    <div class="relationship-img mt-60 mb-35">
                                        <img src="{{ asset('temp/assets/img/services/outreach.jpg')}}" height="450" alt="">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="relationship-info mb-75">
                                    <p>
In an attempt to reach more people in the community, various seminars have been organized and conducted by VVCYF. These seminars are like child protection, child rights and child formation. 
In collaboration with the police gender and children desk in Kibaha district  VVCYF has run seminars relevant to the current situation that threaten security and welfare of children and youth. Experts from gender and children desk shared their experience to Parents and  children  on the lessons such as child abuse, child labour, child sexual exploitation and earlier marriage. 
Parents and children were advised to live the life of great precautions especially in management of children around all areas of home, school and streets.
</p>
                                </div>
                       


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- footer-area-start -->
        @include('footer')
    </body>

</html>