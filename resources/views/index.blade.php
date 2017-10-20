@extends("layouts/master")




@section("jumbotron")

        
    <div class="jumbotron" >


        <div class="container">
            <div class="text-center">
                
                <div class="pt-5">
                    <h2>اعتبار ما اعتماد شماست</h2>
                </div>
                <div class="pt-2">
                    <p>شس یشسیس سیسشسشال شل شسایش س ششسلبی شسیشهعی شسزیس ایسصثف قلطز سی یسابسیاب</p>
                </div>
            </div>
        </div>



    </div>


@endsection




@section("main")

    <div class="container">
    
        @include("components/templatesList")

    </div>

@endsection


@section("startHead")

    @getAppCss()
    
@endsection

@section("endBody")

    @include("jsVars")
    @getAppScript()
    
@endsection