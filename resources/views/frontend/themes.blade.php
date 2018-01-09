@extends('frontend.layouts.home')

@section('content')
<section class="themes complete">
    <div class="h-c-page">
        <h3 class="h-c-headline h-c-headline--three h-has-bottom-margin">
            Complete themes      </h3>
            <p class="h-c-copy h-c-copy--two subtitle">These themes introduce students to core computer science concepts. Each includes 8 activities and roughly 10 hours of content that can be spread out over several days or weeks.</p>

            <div class="h-c-grid">
                @foreach($themes as $key=>$theme)
                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/friends/video/10429">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-friends.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">{{$theme->title}}</h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    难度: 
                                    <span class="difficulty" style="color: #2095f2;">Moderate</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two">
                                    {{$theme->description}}
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/friends/video/10429" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        
                                </a>
                            </li>
                            <li>
                                <a href="/clubplan/friends" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        
                                </a>
                            </li>
                            <li>
                                <a href="/club/10429/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    @endsection
    @section('after-scripts')

    @endsection