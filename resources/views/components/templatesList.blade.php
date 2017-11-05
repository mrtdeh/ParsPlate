<div class="templates">
    


    {{-- Templates --}}

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" v-for="(t,i) in givenTemplates">
            <div class="card soft-show">
                <a :href="'/template/' + t.hashid + '/' + t.kebabTitle">
                    <div class="img">
                        <img-pro :src="'../images/products/thumb_' + t.tag + '.jpg'" :alt="t.title" :title="t.title">
                    </div>
                    <div class="info">
                        <a :href="'/template/' + t.hashid + '/' + t.kebabTitle"><strong>@{{ t.title.toFaDigit() }}</strong></a>


                        <div class="bottom">
                         {{--    <div class="col-md-6"></div>
                            <div class="col-md-6"></div> --}}
                            <span class="date">
                                <i class="fa fa-clock-o fa-lg"></i> @{{ t.humanDate.toFaDigit() }}
                            </span>
                            <span class="heart" @click="likeToggle(t,i)">
                                @{{ t.likesCount.toFaDigit() }} 
                                <i class="fa fa-2x" :class="likedStatus(t,i)"></i>
                            </span>
                        </div>
                        
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Templates --}}






    {{-- Load More Button --}}

    <div class=" p-5 text-center">
        @if($templateCount > 8)
            <button id="loadMoreButton" class="btn btn-primary btn-lg btn-more" 
            @click="loadMore('#loadMoreButton')" v-if="showLoadMoreButton" v-show="!loadMoreLoading">

              <i class="fa fa-chevron-down" aria-hidden="true"></i><strong> قالب های بیشتر ...</strong>
            </button>

            <vue-loading type="bars" color="#025aa5" :size="{ width: '50px', height: '50px' }" 
            v-show="loadMoreLoading"></vue-loading>

        @endif
    </div>

    {{-- Load More Button --}}


    

</div>