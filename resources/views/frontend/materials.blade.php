@extends('frontend.layouts.home')

@section('content')
    <section class="hero curriculum">
        <div class="h-c-page">
            <h1 class="h-c-headline h-c-headline--one h-has-bottom-margin">
                Curriculum      </h1>
            <h3 class="h-c-headline h-c-headline--three">
                for ages 9-14      </h3>
            <p class="subtitle">
                The activities below introduce students to computer science and the programming language Scratch. Different themes attract and engage students of varying backgrounds and interests. All materials are free and easy to use.      </p>
        </div>
    </section>

    <section class="themes sample">
        <div class="h-c-page">
            <h3 class="h-c-headline h-c-headline--three h-has-bottom-margin">
                Sample activities      </h3>
            <p class="h-c-copy h-c-copy--two subtitle">These activities take approximately one hour to complete, and are great for special one-day events such as a conference or Hour of Code.</p>

            <div class="h-c-grid">
                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/hoc2017">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/hoc2017-icon.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Create your own Google logo
                                </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #4bae4f;">Easier</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two">
                                    Be a designer and programmer &ndash; bring the Google logo to life using code.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/hoc2017" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities                  </a>
                            </li>
                            <li>
                                <a href="/hoc2017-teachers" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans                  </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/high-seas-activity/video/45866">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-highseas.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    High Seas Activity      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #4bae4f;">Easier</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In this sample activity students animate an ocean wave to create a setting, then tell a story that takes place on the high seas. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/high-seas-activity/video/45866" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/high-seas-activity" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/45866/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/gumball&#039;s-coding-adventure/video/183175">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-gumball.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Gumball&#039;s Coding Adventure      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #4bae4f;">Easier</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In this sample activity students tell a story using the characters from Cartoon Network’s "The Amazing World of Gumball." </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/gumball&#039;s-coding-adventure/video/183175" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/gumballs-coding-adventure" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/183175/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="themes complete">
        <div class="h-c-page">
            <h3 class="h-c-headline h-c-headline--three h-has-bottom-margin">
                Complete themes      </h3>
            <p class="h-c-copy h-c-copy--two subtitle">These themes introduce students to core computer science concepts. Each includes 8 activities and roughly 10 hours of content that can be spread out over several days or weeks.</p>

            <div class="h-c-grid">

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/storytelling/video/2692">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-storytelling.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Storytelling      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #4bae4f;">Easier</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Storytelling, students use computer science to tell fun and interactive stories. Storytelling emphasizes creativity by encouraging club members to tell a unique story each day. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/storytelling/video/2692" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/storytelling" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/2692/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/friends/video/10429">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-friends.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Friends      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #2095f2;">Moderate</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Friends, students are encouraged to sign up with a friend or make a new friend in the club. Friends emphasizes teamwork by allowing club members to tell the story of how their friendship started and imagine a company together. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/friends/video/10429" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/friends" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/10429/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/fashion-and-design/video/2656">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-fashion.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Fashion &amp; Design      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #2095f2;">Moderate</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Fashion &amp; Design, students learn how computer science and technology are used in the fashion industry while building fashion-themed programs, like a fashion walk, a stylist tool, and a pattern maker. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/fashion-and-design/video/2656" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/fashion-design" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/2656/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/art/video/2703">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-art.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Art      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #2095f2;">Moderate</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Art, students create animations, interactive artwork, photograph filters, and other exciting, artistic projects. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/art/video/2703" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/art" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/2703/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/social-media/video/14526">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-social.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Social Media      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #ff9700;">Challenging</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Social Media, students create fun social media style applications and games while learning about the computer science concepts that enable these programs to work. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/social-media/video/14526" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/social-media" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/14526/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/sports/video/15730">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-sports.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Sports      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #ff9700;">Challenging</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Sports, students use computer science to simulate extreme sports, make their own fitness gadget commercial, and create commentary for a big sporting event. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/sports/video/15730" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/sports-0" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/15730/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/music-and-sound/video/226">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-music.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Music &amp; Sound      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #4bae4f;">Easier</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Music &amp; Sound, students use the computer to play musical notes, create a music video, and build an interactive music display while learning how programming is used to create music. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/music-and-sound/video/226" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/music-sound" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/226/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/game-design/video/241">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-games.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Game Design      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #ff9700;">Challenging</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> In Game Design, students learn basic video game coding concepts by making different types of games, including racing, platform, launching, and more! </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/game-design/video/241" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/game-design" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/241/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="h-c-grid__col h-c-grid__col--12 theme-card">
                    <a href="/course/animation/video/44750">
                        <div class="theme-card-body">
                            <div class="theme-card-icon">
                                <img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-animation.png">
                            </div>
                            <div class="theme-card-text">
                                <h4 class="theme-card-name h-c-headline h-c-headline--four h-u-font-weight-medium">
                                    Animation      </h4>
                                <div class="theme-card-difficulty h-c-copy h-c-copy--two">
                                    Difficulty: <span class="difficulty" style="color: #f34235;">Advanced</span>
                                </div>
                                <p class="h-c-copy h-c-copy--two"> Students create fun and complex animated projects. This is an advanced curriculum, which means it teaches new concepts that are recommended for students who have already participated in at least two other CS First themes. </p>
                            </div>
                        </div>
                    </a>
                    <div class="theme-card-buttons">
                        <ul class="h-no-bullet">
                            <li>
                                <a href="/course/animation/video/44750" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">play_circle_filled</i>
                                    Student activities        </a>
                            </li>
                            <li>
                                <a href="/clubplan/animation-0" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">assignment</i>
                                    Lesson plans        </a>
                            </li>
                            <li>
                                <a href="/club/44750/download-materials" class="h-c-link h-c-link--internal">
                                    <i class="material-icons">book</i>
                                    Digital materials        </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('after-scripts')

@endsection