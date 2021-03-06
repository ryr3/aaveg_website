@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/scoreboard.css')}}">
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
    <script type="text/javascript" src="{{asset('js/scoreboard.js')}}"></script>
@endsection
@section('main')
<script type="text/template" id="display">
  <br><br><br>
  <table class="table table-hover table-striped">
    <h1>Culturals Cup</h1>
    <thead class="thead-default">
      <tr>
        <th>Event Name</th>
        <th class="gold">Diamond</th>
        <th>Coral</th>
        <th>Jade</th>
        <th>Agate</th>
        <th>Opal</th>
      </tr>
    </thead>
    <tbody>
    @{{#each message.Culturals}}
      <tr>
        <td>@{{event_name}}</td>
        <td class="gold">@{{diamond_score}}</td>
        <td>@{{coral_score}}</td>
        <td>@{{jade_score}}</td>
        <td>@{{agate_score}}</td>
        <td>@{{opal_score}}</td>
      </tr>
    @{{/each}}
      <tr>
        <td>TOTAL</td>
        <td class="gold">@{{message.culturals_total.diamond}}</td>
        <td>@{{message.culturals_total.coral}}</td>
        <td>@{{message.culturals_total.jade}}</td>
        <td>@{{message.culturals_total.agate}}</td>
        <td>@{{message.culturals_total.opal}}</td>
      </tr>
    </tbody>
    </table>
    </br>

    <br><br><br>
    <table class="table table-hover table-striped">
    <h1>Sports Cup</h1>
    <thead class="thead-default">
      <tr>
        <th>Event Name</th>
        <th>Diamond</th>
        <th>Coral</th>
        <th>Jade</th>
        <th class="gold">Agate</th>
      </tr>
    </thead>
    <tbody>
    @{{#each message.Sports}}
      <tr>
        <td>@{{event_name}}</td>
        <td>@{{diamond_score}}</td>
        <td>@{{coral_score}}</td>
        <td>@{{jade_score}}</td>
        <td class="gold">@{{agate_score}}</td>
      </tr>
    @{{/each}}
      <tr>
        <td>TOTAL</td>
        <td>@{{message.sports_total.diamond}}</td>
        <td>@{{message.sports_total.coral}}</td>
        <td>@{{message.sports_total.jade}}</td>
        <td class="gold">@{{message.sports_total.agate}}</td>
      </tr>
    </tbody>
    </table>
    </br>

    <br><br><br>
    <table class="table table-hover table-striped">
    <h1>Spectrum Cup</h1>
    <thead class="thead-default">
      <tr>
        <th>Event Name</th>
        <th>Diamond</th>
        <th class="gold">Coral</th>
        <th>Jade</th>
        <th>Agate</th>
        <th>Opal</th>
      </tr>
    </thead>
    <tbody>
    @{{#each message.Spectrum}}
      <tr>
        <td>@{{event_name}}</td>
        <td>@{{diamond_score}}</td>
        <td class="gold">@{{coral_score}}</td>
        <td>@{{jade_score}}</td>
        <td>@{{agate_score}}</td>
        <td>@{{opal_score}}</td>
      </tr>
    @{{/each}}
      <tr>
        <td>TOTAL</td>
        <td>@{{message.misc_total.diamond}}</td>
        <td class="gold">@{{message.misc_total.coral}}</td>
        <td>@{{message.misc_total.jade}}</td>
        <td>@{{message.misc_total.agate}}</td>
        <td>@{{message.misc_total.opal}}</td>
      </tr>
    </tbody>
  </table>
</script>
<div class="container" id="main-container">
  <br><br><br>
  <div class="jumbotron">
    <h1 class="display-3">The Standings!</h1>
    <p class="lead">This is where the heart of Aaveg lies. All of the wins and losses, triumphs and disasters, joys and sorrows are encapsulated in the numbers below. We wish the freshers the best of luck in achieving glory and making their hostels proud.</p>
    <p class="lead">Culturals Cup - <strong>Diamond</strong></p>
    <p class="lead">Sports Cup - <strong>Agate</strong></p>
    <p class="lead">Spectrum Cup - <strong>Coral</strong></p>
    <h3>Overall Trophy - <strong>Diamond</strong></h3>
  </div>
  <h3 style="text-align: center" id="caption">Culturals Cup</h3>
  <div id="chart-container">
    <canvas id="myChart" width="400" height="100"></canvas>
  </div>
  <br><br>
  <button type="button" class="btn btn-default col-sm-4" onclick="setCap('Culturals Cup');charts(culturals)">Culturals</button>
  <button type="button" class="btn btn-default col-sm-4" onclick="setCap('Sports Cup');charts(sports)">Sports</button>
  <button type="button" class="btn btn-default col-sm-4" onclick="setCap('Spectrum Cup');charts(misc)">Spectrum</button>
  <br><br><br>
</div>
@endsection
