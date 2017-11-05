@extends("layouts/master")




@section("jumbotron")

        
    <div class="jumbotron" >


        <div class="container">
            <div class="text-center">
                
                <div class="pt-5">
                    <h2>قالبِت رو راحت پیدا کن ؛ راحت دانلود کن و اگه نبود سفارش بده !!</h2>
                </div>
                <div class="pt-2">
                    <p></p>
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

