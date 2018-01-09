@extends('frontend.layouts.home')

@section('content')
<section class="signin student">
  <div class="h-c-page">

    <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin h-u-text-center">
      Teacher sign in    
    </h2>


    <div class="signin-student-box" style="position: relative">
      <form action="/lesson_list" method="get" id="user-login" accept-charset="UTF-8">
        <div>
          <div class="form-item form-type-textfield form-item-name">
            <label for="edit-name">Username 
              <span class="form-required" title="This field is required.">*</span>
            </label>
            <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
          </div>
          <div class="form-item form-type-password form-item-pass">
            <label for="edit-pass">Password 
              <span class="form-required" title="This field is required.">*</span>
            </label>
            <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
          </div>
          <input type="hidden" name="form_build_id" value="form-LILJuw_DhyvUoaQbwJIc8XThfMdfvFnHoTDMxPx574Y">
          <input type="hidden" name="form_id" value="user_login">
          <div class="form-actions form-wrapper" id="edit-actions">
            <!-- <input class="blue raised button form-submit" type="submit" id="edit-submit" name="op" value="Sign In"> -->
            <input class="blue raised button form-submit" type="submit" name="" value="Sign In">
          </div>
        </div>
      </form> 
      <p class="h-has-top-margin">
        Don't have an account ? <a href="#" onclick="showClubCodeFlow();">create a new account</a>
      </p>
    </div>
  </div>
</section>

@endsection
@section('after-scripts')

@endsection