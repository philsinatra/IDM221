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
      <p>IDM 221</p>
    </div>
  </header>

  <section class="compass">
    <p>Homework Assignments</p>
  </section>

  <main role="main">
    <div class="container">
      <h1>Assignments</h1>
      <p>Select the assignment you wish to complete. Enter your student ID and select the "Begin Assignment" button.</p>
      <p>Once you complete the assignment, you must submit your results. When you submit your results, you'll receive a confirmation number that you must enter in <a href="https://learn.dcollege.net" target="_blank">Drexel Learn</a> under the correct assignment.</p>
      <h2>Select Assignment</h2>
      <div class="single_answer" id="assignment_index">
        <?php
          $assignments = [
            'Assignment 1: HTML Text',
            'Assignment 2: HTML Structure',
            'Assignment 3: CSS Selectors',
            'Assignment 4: CSS Text',
            'Assignment 5: CSS Box Model',
            'Assignment 6: CSS Layout'
          ];
          $i = 1;
          foreach ($assignments as $assignment) {
        ?>

        <div class="controlgroup flexgroup">
          <input type="radio" name="sa" value="0" id="sa-<?php echo $i; ?>" data-assignment="<?php echo $i; ?>" class="visually-hidden">
          <label for="sa-<?php echo $i; ?>"><?php echo $assignment; ?></label>
        </div>

        <?php
          $i++;
          }
        ?>
      </div>

      <form name="signin" id="signin" class="kc_text">
        <div class="kc_text">
          <div class="kc_text__input controlgroup controlinput">
            <input type="text" name="student_id" id="student_id" class="small" placeholder="#"  value="10139265" required>
            <label for="student_id">Enter your student ID</label>
          </div>
        </div>
        <div class="feedback alert alert-error" id="feedback-login_fail" hidden>
          <div class="alert-icon"><svg><use xlink:href="#error_black"></use></svg></div>
          <div class="alert-content">
            <h4>Sign in failed!</h4>
            <p>Check you have entered the correct student ID number.</p>
          </div>
        </div>
        <div class="controlgroup">
          <button type="submit" class="btn btn_primary">Begin Assignment</button>
        </div>
      </form>
    </div> <!-- ./container -->
  </main>

  <script>
    var hayden = {};
    hayden.student_roster = '../data/student_roster.json';
    hayden.project_syntax = 'php';
  </script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/main.js"></script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/assessment_intro.js"></script>

</body>
</html>
