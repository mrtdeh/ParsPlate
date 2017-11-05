@extends("layouts/master")


@section("endBody")
    <script>
        function resizeBg(){
            var st = $(document).scrollTop();

            $(".product-jumbotron").css({
                backgroundPosition : "center " + ((st / 8)-300) + "px"
            })
        }

        resizeBg();

        $(document).scroll(function(){

            
            
            resizeBg();

        })
    </script>
@endsection

@section("jumbotron")

    
    <div class="jumbotron product-jumbotron" 
    style="transition: all 1s ease-out;background : 
    radial-gradient(circle at 50% 53%,rgba(0,0,0, 0.95),rgba(0,0,0, 0.95)),
    url('/images/products/cover_{{ $template->tag }}.jpg')no-repeat;
    background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content">
                        <h3>{{ $template->title }}</h3>
                        <span class="date">
                            <i class="fa fa-clock-o fa-lg"></i> @{{ template.humanDate.toFaDigit() }}
                        </span>
                        <div class="features pt-5">
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i>
                                کاملا واکنشگرا (نمایش صحیح در موبایل و کامپیوتر)</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>
                                سئو خوب (انتخاب خوب از نظر موتور های جستجو)</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>
                                ساخته شده با بالاترین تکنولوژی های روز</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>
                                سریع و بدون لگ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="actions pt-5">
                        <a href="/demo/{{ $template->hashid }}" {{-- target="_blank" --}} class="btn btn-primary btn-block btn-lg">
                            <i class="fa fa-magic" aria-hidden="true"></i>پیش نمایش</a>
                        <a href="/download/{{ $template->hashid }}" class="btn btn-success btn-block btn-lg">
                        <i class="fa fa-download" aria-hidden="true"></i>دانلود رایگان</a>
                    </div>
                    
                </div>
                <div class="col-md-8 text-center">

                    <div class="counters">
           
                        <div class="text-left pr-3" @click="likeToggle()">
                            @{{ template.downloads.toFaDigit() }}
                            <i class="fa fa-download fa-2x"></i>
                        </div>
                        <div class="text-left pr-3" @click="likeToggle()">
                            @{{ template.pageViews.toFaDigit() }}
                            <i class="fa fa-eye fa-2x"></i>
                        </div>
                        <div class="text-left pr-3 heart" @click="likeToggle()">
                            @{{ template.likesCount.toFaDigit() }}
                            <i class="fa fa-2x" :class="likedStatus()"></i>
                        </div>
                    </div>

                    <div class="cover">
                        <img src="/images/products/cover_{{ $template->tag }}.jpg" 
                        alt="{{ $template->title }}">
                    </div>
                </div>
            </div>
            
        </div>

    </div>


@endsection




@section("main")

    <div id="product-view">
        <div class="container">
            <div class="row">
                <div class="content pt-5">
                    <h1>معرفی قالب</h1>
                    <div class="pt-5">
                        <p> {{ $template->desc }}</p>
                    </div>
                </div>
            </div>
         
        </div>

   </div>

@endsection


