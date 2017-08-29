<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assignment | IDM 221</title>
  <?php require_once '../../includes/hayden/_head.php'; ?>
  <link rel="stylesheet" href="http://cdn.philsinatra.com/projects/hayden/tags/master/css/prettify.min.css">
  <link rel="stylesheet" href="sunburst.css">
  <style media="screen">
    code {
      background-color: #eff0f1;
      font-size: 0.88rem;
      padding: .25rem;
    }
    textarea { font-size: 0.875rem; }
  </style>
</head>
<body onload="PR.prettyPrint()">
  <?php include '../../includes/hayden/_spritesheet.php'; ?>
  <header role="banner" class="header">
    <div class="header__agency">
      <p>IDM 221</p>
    </div>
  </header>

  <section class="compass">
    <p></p>
  </section>

  <main role="main">
    <div class="container">

      <div id="exercises_output"></div>

      <hr class="soften">

      <h2>Assignment Submission</h2>
      <p>You have reached the end of the assignment. Your current score is: <b><span id="current_score"></span>/<span id="possible_score"></span></b>.</p>
      <p>To complete the assignment and submit your final score, you must select the <i>Submit Assignment</i> button below. If you do not select the <i>Submit Assignment</i> button below, your score will not be sent and you will not receive a grade for the assignment.</p>

      <div class="alert alert-success" id="submission_feedback" hidden>
        <div class="alert-icon">
          <svg><use xlink:href="#check_circle_black"></use></svg>
        </div>
        <div class="alert-content">
          <h4>Submission Success</h4>
          <p>Submission confirmation number <b class="confirmation_number"></b></p>
          <p>Enter this number in <a href="https://learn.dcollege.net" target="_blank">Drexel Learn</a>.</p>
          <p>You can close this window or <a href="assessment_intro.php">return to the assignment list</a>.</p>
        </div>
      </div>

      <div class="controlgroup">
        <button class="btn btn_primary btn_sound" id="btn_submit_assignment">Submit Assignment</button>
      </div>

    </div> <!-- ./container -->
  </main>

  <div class="modal" name="modal_submission_complete" hidden>
    <div class="modal__content">
      <h3 class="modal__title">Submission Complete</h3>
      <div class="modal__inner_content">
        <p>Thank you <span id="modal__student_name"></span> <small>(<span id="modal__student_id"></span>)</small></p>
        <p>Your assignment submission is complete. Your confirmation number is:</p>
        <p><b class="confirmation_number"></b></p>
        <p>You must submit this confirmation number in <a href="https://learn.dcollege.net" target="_blank">Drexel Learn</a> under the correct assignment. If you do not submit this confirmation number, you will not receive credit for the assignment.</p>
      </div>
      <div class="modal__footer">
        <button class="btn btn_small btn_sound btn_modal_close">Close</button>
      </div>
    </div>
  </div>

  <script>
    var hayden = {};
    hayden.project_syntax = 'php';
    hayden.assignment_count = 19;
  </script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/main.js"></script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/assignment.js"></script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/run_prettify.min.js"></script>
</body>
</html>
