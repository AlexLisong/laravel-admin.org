@extends('frontend.layouts.home')

@section('content')
<section class="signin student">
  <div class="h-c-page">

    <h2 class="h-c-headline h-c-headline--two h-has-bottom-margin h-u-text-center">
      Student sign in    </h2>

    <div class="signin-student-box">
      <h4 class="h-c-headline h-c-headline--four h-u-font-weight-medium h-has-bottom-margin">
        New students      </h4>
      <a class="h-c-button h-c-button--primary" href="#" onclick="showClubCodeFlow();">
        Enter access code      </a>
      <p class="h-has-top-margin">Don't know your access code? Ask your teacher.</p>
    </div>

    <div class="signin-student-box" style="position: relative">
      <div class="credentials-callout" style="width: 325px; position: absolute; left: 530px; top: 0px; display: none; float: right;" id="credentials-callout">
        <h1 style="display: block; width: 300px; text-align: left; margin-left: 20px; font-weight: 100; margin-top: 10px;">Now, use your username and password to sign in! You will use this to sign in from now on.</h1>
        <a onclick="fillCredentials();" style="cursor: pointer;"><h1 style="display: block; width: 300px; text-align: left; margin-left: 20px; font-weight: 100; margin-top: 10px; color: inherit;">Show my username and password</h1></a>
      </div>
      <h4 class="h-c-headline h-c-headline--four h-u-font-weight-medium h-has-bottom-margin">
        Returning students      </h4>
      


<form action="/user/login" method="post" id="user-login" accept-charset="UTF-8"><div><div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
</div>
<div class="form-item form-type-password form-item-pass">
  <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
 <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
</div>
<input type="hidden" name="form_build_id" value="form-LILJuw_DhyvUoaQbwJIc8XThfMdfvFnHoTDMxPx574Y">
<input type="hidden" name="form_id" value="user_login">
<div class="form-actions form-wrapper" id="edit-actions"><input class="blue raised button form-submit" type="submit" id="edit-submit" name="op" value="Sign In"></div></div></form>      <p class="h-has-top-margin">
        Forgot your username or password? Let your teacher know, then <a href="#" onclick="showClubCodeFlow();">create a new account</a>
      </p>
    </div>

    <p class="h-u-text-center h-has-top-margin">Don't have a teacher? <a href="/c/cs-first/en/curriculum.html">Try the activities on your own</a>!</p>

  </div>
</section>

@endsection
@section('after-scripts')

@endsection