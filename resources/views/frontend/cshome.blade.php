@extends('frontend.layouts.home')

@section('content')

    <section class="hero home">
        <div class="h-c-page">
            <h1 class="h-c-headline h-c-headline--one h-has-bottom-margin h-u-text-center">
                Introduce computer science to kids
            </h1>
            <h4 class="h-c-headline h-c-headline--four h-u-text-center">
                Join over 1 million teachers, parents, and students in creating fun projects with the free CS First
                curriculum
            </h4>
        </div>
    </section>

    <section class="student-cta sign-in">
        <div class="h-c-page">
            <a href="/user/login">
                <p><img src="https://csfirst.withgoogle.com/images/android-head.png" alt="Android head">Students: <span
                            class="yellow">click here</span> to sign in</p>
            </a>
        </div>
    </section>

    <section class="breadcrumb">
        <div class="h-c-page">
            <nav class="h-c-breadcrumbs h-u-mt-std h-u-mb-std" aria-label="You are here.">
                <ol class="h-c-breadcrubms__list">
                    <li class="h-c-breadcrumbs__item" aria-level="1">
                        <a href="https://edu.google.com" target="_blank">Home</a>
                    </li>
                    <li class="h-c-breadcrumbs__item" aria-level="2">
                        <a href="https://edu.google.com/computer-science/?modal_active=none" target="_blank">Computer
                            Science</a>
                    </li>
                    <li class="h-c-breadcrumbs__item h-c-breadcrumbs__item--active" aria-level="3">
                        CS First
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="anyone-can-teach">
        <a name="anyone-can-teach"></a>
        <div class="h-c-page">
            <div class="h-c-grid">
                <div class="h-c-grid__col h-c-grid__col--6 h-c-grid__col--align-middle">
                    <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin">
                        Anyone can teach CS First
                    </h2>
                    <p class="h-has-bottom-margin">Teachers, parents, and librarians alike have used CS First. No
                        computer science experience needed. Instructional videos guide students through each activity,
                        allowing you to work with students individually.</p>
                    <ul class="h-no-bullet">
                        <li>
                            <a href="/materials" class="h-c-link h-c-link--internal">
                                Explore curriculum
                                <svg role="img" class="h-c-icon h-c-icon--link h-c-icon--arrow-forward">
                                    <use xlink:href="#mi-arrow-forward"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="/signin-front" class="h-c-link h-c-link--internal">
                                Sign in and get started
                                <svg role="img" class="h-c-icon h-c-icon--link h-c-icon--arrow-forward">
                                    <use xlink:href="#mi-arrow-forward"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="h-c-grid__col h-c-grid__col--5 h-c-grid__col--offset-1 h-c-grid__col--align-middle">
                    <img src="https://csfirst.withgoogle.com/images/anyone-can-teach.jpg" alt="Kids in a classroom working on laptops">
                </div>
            </div>
        </div>
        <a class="jump-down" href="#how-it-works"><i class="material-icons">keyboard_arrow_down</i></a>
    </section>

    <section class="how-it-works">
        <a name="how-it-works"></a>
        <div class="h-c-page">
            <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin">
                How it works
            </h2>
            <div class="h-c-grid">
                <div class="h-c-grid__col h-c-grid__col--3">
                    <i class="material-icons">headset</i>
                    <h4 class="h-c-headline h-c-headline--four h-u-font-weight-medium">
                        Prepare
                    </h4>
                    <p>Find interested students, and secure a space with an internet-connected computer and headphones
                        for each of them.</p>
                </div>
                <div class="h-c-grid__col h-c-grid__col--3">
                    <i class="material-icons">account_circle</i>
                    <h4 class="h-c-headline h-c-headline--four h-u-font-weight-medium">
                        Sign in and create a club
                    </h4>
                    <p class="h-has-bottom-margin">Use your Google Account to create your CS First club.</p>
                    <a href="/signin-front" class="h-c-link h-c-link--internal">
                        Start now
                        <svg role="img" class="h-c-icon h-c-icon--link h-c-icon--arrow-forward">
                            <use xlink:href="#mi-arrow-forward"></use>
                        </svg>
                    </a>
                </div>
                <div class="h-c-grid__col h-c-grid__col--3">
                    <i class="material-icons">book</i>
                    <h4 class="h-c-headline h-c-headline--four h-u-font-weight-medium">
                        Review materials
                    </h4>
                    <p>Access materials digitally, or request to have a free kit shipped to you. Review materials before
                        students arrive.</p>
                </div>
                <div class="h-c-grid__col h-c-grid__col--3">
                    <i class="material-icons">laptop_chromebook</i>
                    <h4 class="h-c-headline h-c-headline--four h-u-font-weight-medium">
                        Teach the students
                    </h4>
                    <p>Access tools and track student progress using your dashboard.</p>
                </div>
            </div>
        </div>
        <a class="jump-down" href="#everything-you-need"><i class="material-icons">keyboard_arrow_down</i></a>
    </section>

    <section class="everything-you-need">
        <a name="everything-you-need"></a>
        <div class="h-c-page">
            <div class="h-c-grid">
                <div class="h-c-grid__col h-c-grid__col--6">
                    <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin">
                        Everything you need
                    </h2>
                    <p class="h-has-bottom-margin">CS First projects involve block-based coding using Scratch.</p>
                    <p class="h-has-bottom-margin">The CS First kit includes lesson plans and solution sheets for the
                        teacher, as well as fun passports and stickers for the students.</p>
                    <ul class="h-no-bullet">
                        <li>
                            <a href="/materials" class="h-c-link h-c-link--internal">
                                Explore curriculum
                                <svg role="img" class="h-c-icon h-c-icon--link h-c-icon--arrow-forward">
                                    <use xlink:href="#mi-arrow-forward"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="jump-down" href="#theme-based-projects"><i class="material-icons">keyboard_arrow_down</i></a>
    </section>

    <section class="theme-based-projects">
        <a name="theme-based-projects"></a>
        <div class="h-c-page">
            <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin h-u-text-center">Theme-based projects</h2>
            <p class="h-u-text-center">Students create computer science projects around different themes such as Sports,
                Art, and Fashion. Each theme contains 8 lessons of 60-90 minutes that can be tailored to fit your
                schedule.</p>
            <div class="theme-feature-container">
                <a class="theme-feature storytelling" href="/course/storytelling/video/2692">
                    <div class="theme-name">Storytelling</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-storytelling.png"
                                                 alt="storytelling theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-storytelling-r.png"
                                                            alt="storytelling theme icon reflection"></div>
                </a>
                <a class="theme-feature art" href="/course/art/video/2703">
                    <div class="theme-name">Art</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-art.png" alt="art theme icon">
                    </div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-art-r.png"
                                                            alt="art theme icon reflection"></div>
                </a>
                <a class="theme-feature games" href="/course/game-design/video/241">
                    <div class="theme-name">Game Design</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-games.png"
                                                 alt="games theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-games-r.png"
                                                            alt="Friends theme icon reflection"></div>
                </a>
                <a class="theme-feature fashion" href="/course/fashion-and-design/video/2656">
                    <div class="theme-name">Fashion</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-fashion.png"
                                                 alt="fashion theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-fashion-r.png"
                                                            alt="fashion theme icon reflection"></div>
                </a>
                <a class="theme-feature music" href="/course/music-and-sound/video/226">
                    <div class="theme-name">Music &amp; Sound</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-music.png"
                                                 alt="music theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-music-r.png"
                                                            alt="music theme icon reflection"></div>
                </a>
                <a class="theme-feature friends" href="/course/friends/video/10429">
                    <div class="theme-name">Friends</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-friends.png"
                                                 alt="Friends theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-friends-r.png"
                                                            alt="Friends theme icon reflection"></div>
                </a>
                <a class="theme-feature social" href="/course/social-media/video/14526">
                    <div class="theme-name">Social Media</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-social.png"
                                                 alt="social media theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-social-r.png"
                                                            alt="social theme icon reflection"></div>
                </a>
                <a class="theme-feature sports" href="/course/sports/video/15730">
                    <div class="theme-name">Sports</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-sports.png"
                                                 alt="sports theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-sports-r.png"
                                                            alt="sports theme icon reflection"></div>
                </a>
                <a class="theme-feature animation" href="/course/animation/video/44750">
                    <div class="theme-name">Animation</div>
                    <div class="theme-icon"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-animation.png"
                                                 alt="animation theme icon"></div>
                    <div class="theme-icon-reflection"><img src="https://csfirst.withgoogle.com/images/csfirst-theme-icons/icon-animation-r.png"
                                                            alt="animation theme icon reflection"></div>
                </a>
            </div>
        </div>
        <a class="jump-down" href="#why-cs"><i class="material-icons">keyboard_arrow_down</i></a>
    </section>

    <section class="why-cs">
        <a name="why-cs"></a>
        <div class="h-c-page">
            <div class="h-c-grid">
                <div class="h-c-grid__col h-c-grid__col--6 h-c-grid__col--align-middle">
                    <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin">
                        Why computer science?
                    </h2>
                    <p class="h-has-bottom-margin">Computer science is a 21st-century skill that enables kids to be
                        creators, rather than just consumers, of technology. Its emphasis on problem solving is
                        applicable across disciplines, driving growth and innovation across all sectors of the
                        workforce.
                    </p>
                </div>
                <div class="h-c-grid__col h-c-grid__col--5 h-c-grid__col--offset-1 h-c-grid__col--align-middle">
                    <img src="https://csfirst.withgoogle.com/images/why-cs-img.jpg" alt="Kids in a classroom working on laptops">
                </div>
            </div>
        </div>
        <a class="jump-down" href="#impact-map"><i class="material-icons">keyboard_arrow_down</i></a>
    </section>

    <section class="impact-map">
        <a name="impact-map"></a>
        <div class="h-c-page">
            <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin h-u-text-center">
                CS First around the world
            </h2>
            <p class="h-u-text-center">
                <span id="student-count">900,000+</span> students.
                <span id="club-count">32,000+</span> classes.
                <span id="country-count">75+</span> countries.</p>
            <div id="map"></div>
        </div>
    </section>

    <section class="more-cs-at-google">
        <div class="h-c-page">
            <div class="h-c-grid">
                <div class="h-c-grid__col h-c-grid__col--6">
                    <h2 class="h-c-headline h-c-headline--three h-has-bottom-margin">
                        More CS at Google
                    </h2>
                    <p>CS First is one of many initiatives at Google focused on improving access to computer science
                        education.
                        Visit our website to learn about other programs that may be of interest to you.</p>
                    <p><a class="h-c-link h-c-link--internal"
                          href="https://edu.google.com/computer-science/?modal_active=none" target="_blank">
                            CS Education at Google
                        </a></p>
                </div>
            </div>
            <div>
    </section>
@endsection
@section('after-scripts')

@endsection