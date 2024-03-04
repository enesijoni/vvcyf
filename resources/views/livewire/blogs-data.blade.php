   <!-- blog-area-start -->
   <div>
   <div class="blog-area pt-130 pb-130">
                <div class="container">
             
                    <div class="row">
                    @foreach($frontimg as $frontimg)
                        <div class="col-xl-4 col-lg-4 col-md-6 " >
                            <div class="blog-wrapper mb-60 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <div class="blog-img">
                                    <img src="/BlogImgfile/{{ $frontimg->blog_file }}" height="200" width="200" alt="">
                                </div>
                                <div class="blog-text">
                                    <h4>{{$frontimg->blog_title}}</h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
        
                </div>
                <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination text-center">
                                <button wire:click="loadmore()" class="btn btn-primary">load more</button>
                            </div>
                        </div>
                    </div>
             
            </div>
        </div>
            <!-- blog-area-end -->
   