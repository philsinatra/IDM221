<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Homework Assignments | IDM 221</title>
  <?php require_once '../../includes/hayden/_head.php'; ?>
  <link rel="stylesheet" href="http://cdn.philsinatra.com/projects/hayden/tags/master/css/prettify.min.css">
</head>
<body>
  <?php include '../../includes/hayden/_spritesheet.php'; ?>

  <header role="banner" class="header">
    <div class="header__agency">
      <p>Assessment Admin</p>
    </div>
  </header>

  <section class="compass">
    <p>Assignment Results</p>
  </section>

  <main role="main">
    <div class="container">

      <div class="controlgroup full_width_inputs">
        <div class="hc-textfield hc-searchfield">
          <input type="search" name="search_input" class="hc-textfield__input hc-textfield__input_search">
          <label for="search_input" class="hc-textfield__label">Submission #</label>
          <button class="search_input_clear" data-target="search_input" hidden>
            <svg><use xlink:href="#icon_close_black"></use></svg>
          </button>
        </div>
      </div>

      <div class="controlgroup flex_center">
        <button class="btn btn_primary btn_sound btn_search"><span class="icon"><svg><use xlink:href="#searchicon-white"></use></svg></span> Search</button>
      </div>

      <table class="table table-striped table-bordered" id="search_results" hidden>
        <thead>
          <tr>
            <th>A #</th>
            <th>Student Name</th>
            <th>Submission #</th>
            <th>Final Score</th>
          </tr>
        </thead>
        <tbody id="search_results_body"></tbody>
      </table>

      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>A #</th>
            <th>Student Name</th>
            <th>Submission #</th>
            <th>Final Score</th>
          </tr>
        </thead>
        <tbody id="assignment_results"></tbody>
      </table>
    </div>
  </main>

  <script>
    var hayden = {};
    hayden.assignments_total = 6;
  </script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/main.js"></script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/assessment_results.js"></script>

</body>
</html>
