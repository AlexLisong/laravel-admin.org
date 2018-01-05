@extends('frontend.layouts.home')
    <link href="/css/classes.css" rel="stylesheet">

@section('content')
<div id="maia-main" role="main">
  <div class="maia-aux">
    <h2 class="subtle-header" style="float:left">My Clubs</h2>

    <!-- only display this button if host -->
    <div id="myclubs-start-club">
      <a class="pink raised button">Start a New Club</a>
      <div id="myclubs-start-club-dropdown">
        <p>Select the location where you will host the club:</p>
        <ul>
          <li><a href="/registration/interstitial?lid=165542">» Banting Middle School</a></li>
          <li><a href="/registration/interstitial?lid=138853">» Citadel Middle School</a></li>
          <li><a href="/dashboard/locations">Add a new location</a></li>
        </ul>
      </div>
    </div>
    
    <div class="maia-aside whitecard myclubs-card
    launched" style="clear:both">
    <div class="themeicon round large left" style="background: url('https://storage.googleapis.com/csfirst-files/files/animationicon-100.png') no-repeat center center; background-color: #FF5151; background-size: 80px;"></div>
    <div class="myclubs-description">
      <h2>Animation @ Citadel Middle School</h2>
      <div class="club-code myclubs-club-code" title="Tell students to visit cs-first.com/go and enter this club code on their first day to get assigned to your club. New club members will receive a username and password. Returning club members may reuse their usernames and passwords.">
        CLUB CODE: 76insect <img src="/img/assets/ic_help_grey600_18dp.png" style="vertical-align: text-bottom">
      </div>
      <span class="myclubs-status incomplete">
        Setup 50% complete                            <a href="/club/485890/">Finish Setup</a>
      </span>
    </div>
    <div class="myclubs-actionbuttons">
      <a class="notifications" href="/club/485890/notifications">Notifications<span class="myclubs-notification-number">1</span></a>
      <a class="setup" href="/club/485890/setup">Setup</a>
      <a class="materials" href="/club/485890/materials">Materials</a>
      <a class="stats" href="/club/485890/stats">Student Stats</a>
    </div>
    <a href="/club/485890"><span class="create-box-click"></span></a>
  </div>

  <div class="maia-aside whitecard myclubs-card
  launched" style="clear:both">
  <div class="themeicon round large left" style="background: url('https://storage.googleapis.com/csfirst-files/files/storytellingicon-100.png') no-repeat center center; background-color: #0e9c57; background-size: 80px;"></div>
  <div class="myclubs-description">
    <h2>Storytelling @ Banting Middle School 11/28/17 - 12/21/17</h2>
    <div class="club-code myclubs-club-code" title="Tell students to visit cs-first.com/go and enter this club code on their first day to get assigned to your club. New club members will receive a username and password. Returning club members may reuse their usernames and passwords.">
      CLUB CODE: 56growth <img src="/img/assets/ic_help_grey600_18dp.png" style="vertical-align: text-bottom">
    </div>
    <span class="myclubs-status complete">
      Next session on 12/21/17                              <a href="/club/470029/set-schedule">Edit Schedule</a>
    </span>
  </div>
  <div class="myclubs-actionbuttons">
    <a class="notifications" href="/club/470029/notifications">Notifications<span class="myclubs-notification-number">5</span></a>
    <a class="setup" href="/club/470029/setup">Setup</a>
    <a class="materials" href="/club/470029/materials">Materials</a>
    <a class="stats" href="/club/470029/stats">Student Stats</a>
  </div>
  <a href="/club/470029"><span class="create-box-click"></span></a>
</div>




</div>
</div>
@endsection
@section('after-scripts')

@endsection