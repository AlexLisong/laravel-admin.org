@extends('frontend.layouts.home')
<link href="/css/csfirst-maia.css" rel="stylesheet">


@section('content')
<div id="maia-main" role="main">
  <div class="maia-aux">
    <div class="club-header">
      <div class="themeicon small round left" style="background: url('https://storage.googleapis.com/csfirst-files/files/animationicon-100.png')
      no-repeat center center;
      background-color: #FF5151;
      background-size: 50px;"></div>
      <div class="club-header-title">
        <h1 id="page-title">Animation @ Citadel Middle School</h1>
        <a class="slink" id="edit-name">edit name</a>
        <span style="color: #da4336; display: block;">
        Setup 50% Complete        </span>
      </div>
    </div>
    
    <div class="club-container">
      <ul class="club-tabs">
        <li class="notifications">
          <a class="tab" href="/club/485890/notifications"><span class="club-tab-notification-number">1</span>
            <span class="club-tab-description">Notifications</span>
          </a>
        </li>
        <li class="setup active">
          <a class="tab" href="/club/485890/setup">
            <span class="club-tab-description">Setup</span>
          </a>
        </li>
        <li class="materials">
          <a class="tab" href="/club/485890/materials">
            <span class="club-tab-description">Materials</span>
          </a>
        </li>
        <li class="stats">
          <a class="tab" href="/club/485890/stats">
            <span class="club-tab-description">Student Stats</span>
          </a>
        </li>
      </ul>
      <div class="club-code" title="Tell students to visit cs-first.com/go and enter this club
      code on their first day to get assigned to your club. New
      club members will receive a username and password. Returning
      club members may reuse their usernames and passwords.">
      CLUB CODE: 76insect        <img src="/img/assets/ic_help_grey600_18dp.png" style="vertical-align: text-bottom">
    </div>
    <div id="setup" data-tab-name="Setup" class="maia-aside whitecard club-box active">
      <div class="club-steps-timeline">
        <a class="flat blue button" id="club-steps-expandall">Expand all steps</a>

        <!-- theme -->
        <div class="club-step">
          <div class="club-step-number">Step 1</div>
          <div class="club-step-icon done"></div>
          <div class="club-step-content">
            <h2>Theme: Animation                      </h2>
          </div>
        </div>
        
        <!-- schedule -->
        <div class="club-step">
          <div class="club-step-number">Step 2</div>
          <div class="club-step-icon incomplete"></div>
          <div class="club-step-content">
            <h2>Create Schedule                          <span class="club-step-edit">
              <a class="slink" href="/club/485890/set-schedule">
              complete this step                </a>
            </span>
          </h2>
        </div>
      </div>
      
      <!-- materials -->
      <div class="club-step">
        <div class="club-step-number">Step 3</div>
        <div class="club-step-icon done"></div>
        <div class="club-step-content">
          <h2>
            Materials: You can download materials                          
            <span class="club-step-edit">
              <a class="slink" href="/club/485890/download-materials">
              download materials                </a>
            </span>
            
            
            
          </h2>

        </div>
      </div>
      
      <!-- specify role -->
      <div class="club-step">
        <div class="club-step-number">Step 4</div>
        <div class="club-step-icon incomplete"></div>
        <div class="club-step-content">
          <h2>Specify Your Role <span class="club-step-edit"><a class="slink" href="/club/485890/specify-role">complete this step</a></span></h2>
        </div>
      </div>
      
      <!-- invite volunteers -->
      <div class="club-step">
        <div class="club-step-number">Step 5</div>
        <div class="club-step-icon incomplete"></div>
        <div class="club-step-content">
          <h2>Invite Volunteers <span class="club-step-edit"><a class="slink" href="/club/485890/find-gurus">complete this step</a></span></h2>
        </div>
      </div>
      
      <!-- additional hosts -->
      <div class="club-step collapsed">
        <div class="club-step-number">Optional</div>        <div class="club-step-icon done"></div>
        <div class="club-step-content">
          <h2>Hosts: 1 added <span class="club-step-edit"><a class="slink" href="/club/485890/edit-hosts">edit</a></span></h2>
          <span class="club-step-details">
            <ul>
              <li><strong>Grant Yao</strong> (<a href="mailto:grant23812531@gmail.com" class="nopassthrough">grant23812531@gmail.com</a>)</li>
            </ul>
          </span>
        </div>
      </div>
    </div>
    <div style="text-align: center;">
      <a class="red raised button" id="delete-club">Delete This Club</a>
    </div>
    <div id="csrf-token" data-value="gA1hGyJnR4OM0-A0tg5dcCC322QdDIIZkxK8Ug2EO6E+1515008968"></div>
    <div id="nid" data-value="485890"></div>
  </div>
</div>
</div>
</div>

@endsection
@section('after-scripts')

@endsection