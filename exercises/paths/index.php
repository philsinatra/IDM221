<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercises: Paths | IDM 221</title>
  <?php require_once '../../includes/hayden/_head.php'; ?>
  <link rel="stylesheet" href="../screen.css">
</head>
<body>
  <?php include '../../includes/hayden/_spritesheet.php'; ?>
  <header role="banner" class="header">
    <div class="header__agency">
      <p>IDM 221</p>
    </div>
  </header>

  <section class="compass">
    <p>Working With File Paths</p>
  </section>

  <main role="main">
    <div class="container">
      <h1>Working With File Paths</h1>
      <p>Complete the exercises based on the following structure, which shows <span style="background-color: #94dcfc;">directories</span> and files.</p>
      <?php
        $dir_structure = '<ul class="dir_structure">
          <li><span class="dir">my_project</span>
            <ul>
              <li><span class="dir">images</span>
                <ul>
                  <li><span class="file">cat.jpg</span></li>
                  <li><span class="dir">fullsize</span>
                    <ul>
                      <li><span class="file">cat.jpg</span></li>
                    </ul>
                  </li>
                  <li><span class="dir">thumbnail</span>
                    <ul>
                      <li><span class="file">cat.jpg</span></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><span class="dir">screens</span>
                <ul>
                  <li><span class="file">index.html</span></li>
                  <li><span class="dir">movies</span>
                    <ul>
                      <li><span class="file">index.html</span></li>
                    </ul>
                  </li>
                  <li><span class="dir">music</span>
                    <ul>
                      <li><span class="file">index.html</span></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>';

        echo $dir_structure;
      ?>

      <section>
        <h2>Example</h2>
        <p>I am currently working on file <code>my_project/screens/index.html</code>. I am coding an image element that should load in <code>my_project/images/cat.jpg</code>. Use a <i>relative path</i> to complete the HTML code to load the correct image.</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <code>&lt;img src=&quot;</code><input type="text" class="medium" id="ex000" /><code>&quot; alt=&quot;a cat&quot;&gt;</code>
          </div>
          <div class="feedback alert" data-feedbackfor="ex000" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex000">Feedback</button>
          <div data-solution="ex000" hidden>../images/cat.jpg</div>
        </div>
      </section>

      <section>
        <h2>Exercise 1</h2>
        <p>I'm currently working on file <code>my_project/screens/music/index.html</code>. I'm coding a link to move the user to <code>my_project/screens/index.html</code>. <i>Use a <i>relative path</i> to complete the HTML code for the link.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <code>&lt;a href="</code><input type="text" class="medium" id="ex001" /><code>"&gt;my link&lt;/a&gt;</code>
          </div>
          <div class="feedback alert" data-feedbackfor="ex001" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex001">Feedback</button>
          <div data-solution="ex001" hidden>../index.html</div>
        </div>
      </section>

      <section>
        <h2>Exercise 2</h2>
        <p>I'm currently working on file <code>my_project/screens/movies/index.html</code>. I'm coding a link to move the user to <code>my_project/screens/music/index.html</code>. Use a <i>relative path</i> to complete the HTML code for the link.</i></p>
        <p><a href="#mi-1" class="DoMore"><small>Review directory structure.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <code>&lt;a href="</code><input type="text" class="medium" id="ex002" /><code>"&gt;my link&lt;/a&gt;</code>
          </div>
          <div class="feedback alert" data-feedbackfor="ex002" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex002">Feedback</button>
          <div data-solution="ex002" hidden>../music/index.html</div>
        </div>
      </section>

      <section>
        <h2>Exercise 3</h2>
        <p>I'm currently working on file <code>my_project/screens/index.html</code>. I'm coding a link to move the user to <code>my_project/screens/movies/index.html</code>. Use a <i>relative path</i> to complete the HTML code for the link.</i></p>
        <p><a href="#mi-1" class="DoMore"><small>Review directory structure.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <code>&lt;a href="</code><input type="text" class="medium" id="ex003" /><code>"&gt;my link&lt;/a&gt;</code>
          </div>
          <div class="feedback alert" data-feedbackfor="ex003" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex003">Feedback</button>
          <div data-solution="ex003" hidden>movies/index.html</div>
        </div>
      </section>

      <section>
        <h2>Exercise 4</h2>
        <p>I'm currently working on file <code>my_project/screens/music/index.html</code>. I am coding an image element that should load in <code>my_project/images/fullsize/cat.jpg</code>. Use a <i>relative path</i> to complete the HTML code to load the correct image.</p>
        <p><a href="#mi-1" class="DoMore"><small>Review directory structure.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <code>&lt;img src="</code><input type="text" class="medium" id="ex004" /><code>" alt="a cat"&gt;</code>
          </div>
          <div class="feedback alert" data-feedbackfor="ex004" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex004">Feedback</button>
          <div data-solution="ex004" hidden>../../images/fullsize/cat.jpg</div>
        </div>
      </section>

      <section>
        <h2>Exercise 5</h2>
        <p>I'm currently working on file <code>my_project/screens/index.html</code>. I'm coding a link to move the user to <a href="http://drexel.edu" target="_blank">Drexel University homepage</a>. Use an <i>absolute path</i> to complete the HTML code for the link.</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <code>&lt;a href="</code><input type="text" class="medium" id="ex005" /><code>"&gt;my link&lt;/a&gt;</code>
          </div>
          <div class="feedback alert" data-feedbackfor="ex005" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex005">Feedback</button>
          <div data-solution="ex005" hidden>http://drexel.edu</div>
        </div>
      </section>

    </div> <!-- ./container -->
  </main>

  <div aria-label="more info" aria-hidden="true" class="more_info_template" hidden>
    <div class="mi_close">
      <button class="btn_mi_close btn_mi_close_trigger"><svg><use xlink:href="#icon_close_white"></use></svg><span class="visually-hidden">close</span></button>
    </div>
    <div id="mi"> </div>
    <button type="button" name="btn_mi_close" class="btn btn-small btn_sound btn_mi_close-2 btn_mi_close_trigger">Close</button>
  </div>

  <div class="more_information" aria-hidden="true">
    <div class="more_info" id="mi-1">
      <h4>Project File Structure</h4>
      <?php echo $dir_structure; ?>
    </div>
  </div>

  <script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/main.js"></script>

</body>
</html>
