@extends('frontend.layouts.home')

@section('content')

<section class="signin">
  <div class="h-c-page">
    <h4 class="h-c-headline h-c-headline--four h-u-text-center">
      Sign in to CS First    </h4>
    <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin h-u-text-center">
      What best describes you?    </h2>
    <div class="h-c-grid">
      <div class="h-c-grid__col h-c-grid__col--6">
        <a class="signin-box" href="/sign_in_student">
          <img src="/img/student.png" alt="A student on a laptop raising her hand">
          <h3 class="h-c-headline h-c-headline--three h-has-bottom-margin">
            I'm a <strong>student</strong>          </h3>
          <p>Create a new account,<br>or sign in with your CS First username and password</p>
        </a>
      </div>
      <div class="h-c-grid__col h-c-grid__col--6">
        <a class="signin-box" href="/hybridauth/window/Google?destination=user/login&amp;destination_error=user/login">
          <img src="/img/teacher.png" alt="A teacher using a computer">
          <h3 class="h-c-headline h-c-headline--three">
            I'm a <strong>teacher</strong>          </h3>
          <p>Sign in with your Google account</p>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
@section('after-scripts')

@endsection