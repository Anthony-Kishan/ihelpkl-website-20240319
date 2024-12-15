<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    @if (is_array($dataList) && count($dataList))
        <div class="blog-widget-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row justify-content-center">
                            @foreach ($dataList as $key => $item)
                                <div class="col-lg-6 col-md-6" key="{{ $key }}">
                                    <div class="blog-card-two">
                                        <a href="{{ $item['slug'] }}">
                                            <img src="{{ $item['img_thumb'] }}" alt="Blog Images">
                                        </a>
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="{{ $item['slug'] }}">
                                                        <i class='bx bx-user'></i> {{ $item['author'] }}</a>
                                                </li>
                                                <li>
                                                    <i class='bx bx-calendar'></i> 
                                                    {{ $item['date'] }} 
                                                </li>
                                                <li>
                                                    <i class='bx bx-comment-dots'></i> 
                                                    <a href="javascript:void(0)">{{ ucfirst($item['category']) }}</
                                                </li>
                                            </ul>
                                            <h3>
                                                <a href="{{ $item['slug'] }}">
                                                    {{ ucfirst($item['title']) }}
                                                </a>
                                            </h3>
                                            <a href="{{ $item['slug'] }}" class="read-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-4">
                        <div class="side-bar-area pl-20">
                            <div class="side-bar-widget">
                                <h3 class="title">Recent Post</h3>
                                <div class="widget-popular-post">
                                    @if (is_array($dataList) && count($dataList))
                                        @foreach ($dataList as $key => $item)
                                            <article class="item">
                                                <a href="javascript:void(0)" class="thumb">
                                                    <span class="full-image cover" role="img">
                                                        <img src="{{ $item['img_thumb'] }}" alt=" {{  $item['title'] }}">
                                                    </span>
                                                </a>
                                                <div class="info">
                                                    <h4 class="title-text">
                                                        <a href="javascript:void(0)">
                                                            {{  $item['title'] }}
                                                        </a>
                                                    </h4>

                                                    <a href="javascript:void(0)" class="read-btn" target="_blank">Read
                                                        More</a>
                                                </div>
                                            </article>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="side-bar-widget side-bar-categories">
                                <h3 class="title">Categories</h3>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank">
                                            Data Entry
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>


                            <div class="side-bar-widget">
                                <h3 class="title">Tags</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="javascript:void(0)">Employee</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.blog-widget-area -->
    @endif
</main>
