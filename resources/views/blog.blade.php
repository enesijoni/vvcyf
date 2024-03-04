
<!doctype html>
<html class="no-js" lang="zxx">
    

@include('header')
        <main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url({{  asset('temp/assets/img/blog/IMG-20230818-WA0112.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Blog Grid View</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="index.html">home</a></li>
                                    <li><span>Blog Grid View</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->
          @livewire('blogs-data')
          
        </main>
        <!-- footer-area-start -->
        
        @include('footer')     
    </body>
</html>