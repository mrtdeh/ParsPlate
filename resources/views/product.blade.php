@extends("layouts/master")




@section("jumbotron")

        
    <div class="jumbotron product-jumbotron" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content">
                        <h3>{{ $template->title }}</h3>
                        <!-- <p>س یشسیشسیسشیش یشست شا شلاش سبشلب لس بیشسبی شسبی سبشلب لس بیشسبی شسبی سبشلب لس بیشسبی شسبی سبشلب لس بیشسبی شسبی لشسیش س شسیب لشسی</p> -->
                    </div>
                    <div class="features pt-3">
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
                    <div class="actions pt-5">
                        <a href="#" target="_blank" class="btn btn-primary btn-block btn-lg">
                            <i class="fa fa-magic" aria-hidden="true"></i>پیش نمایش</a>
                        <a href="#" class="btn btn-success btn-block btn-lg">
                        <i class="fa fa-download" aria-hidden="true"></i>دانلود رایگان</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="cover">
                        <img src="/images/products/cover_{{ $template->cover }}" 
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
                <div class="pt-5">
                    <h1>معرفی قالب</h1>
                    <div class="pt-5">
                        <p> {{ $template->desc }}</p>
                    </div>
                </div>
            </div>
         
        </div>

   </div>

@endsection