<?php header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercises: CSS Box Model | IDM 221</title>
  <?php require_once '../../includes/hayden/_head.php'; ?>
  <link rel="stylesheet" href="http://cdn.philsinatra.com/projects/hayden/tags/1.3.1/css/prettify.min.css">
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
    <p>CSS Box Model</p>
  </section>

  <main role="main">
    <div class="container">
      <h1>CSS Box Model</h1>
      <p>Complete the following exercises related to the CSS box model.</p>

      <section>
        <h2>Exercise 1</h2>
        <p><i>Program a CSS selector that sets the size of all <code>div</code> elements to <code>400px wide</code> x <code>300px</code> tall.</i> (<b>Note:</b> program your selectors in alphabetical order)</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex001" id="ex001" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex001" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex001">Feedback</button>
          <div data-solution="ex001" hidden>
            div { height: 300px; width: 400px; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 2</h2>
        <p>Here is some CSS:</p>
        <pre class="prettyprint">html {&NewLine;  font-size: 100%;&NewLine;}</pre>
        <p>Based on the provided styles, convert your CSS code from the previous exercise from <code>px</code> units to <code>rem</code> units. <i>Program a new CSS selector with your <code>rem</code> unit values.</i> (<b>Note:</b> program your selectors in alphabetical order)</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex002" id="ex002" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex002" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex002">Feedback</button>
          <div data-solution="ex002" hidden>
            div { height: 18.75rem; width: 25rem; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 3</h2>
        <p>Here is some CSS:</p>
        <pre class="prettyprint">html {&NewLine;  font-size: 100%;&NewLine;}&NewLine;&NewLine;div {&NewLine;  font-size: 1rem;&NewLine;}</pre>
        <p>Based on the provided styles, <i>program a new CSS selector that adds a <b>48px</b> <code>margin</code> to the <b>top</b> and <b>bottom</b> of every <code>div</code> element, <b>BUT</b> your <code>margin</code> value should be expressed in <code>rem</code> units, not <code>pixels</code>, and should be done using <b>shorthand</b> notation.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex003" id="ex003" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex003" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex003">Feedback</button>
          <div data-solution="ex003" hidden>
            div { margin: 3rem 0; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 4</h2>
        <p>Here is some CSS:</p>
        <pre class="prettyprint">html {&NewLine;  font-size: 100%;&NewLine;}&NewLine;&NewLine;div {&NewLine;  font-size: 1rem;&NewLine;}</pre>
        <p>Based on the provided styles, <i>program a new CSS selector that adds <b>32px</b> of <code>padding</code> to the <b>all four sides</b> of every <code>div</code> element that has a <code>class</code> equal to <b>either</b> <code>intro</code> or <code>sidebar</code>. Your <code>padding</code> value should be expressed in <code>rem</code> units, not <code>pixels</code>, and should be done using <b>shorthand</b> notation.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex004" id="ex004" cols="40" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex004" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex004">Feedback</button>
          <div data-solution="ex004" hidden>
            div.intro, div.sidebar { padding: 2rem; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 5</h2>
        <p><i>Program a CSS selector that adds a solid, <span style="border: 2px solid black;">2px black border</span> to all <code>span</code> elements.</i> (<b>Note</b>: your selector should be written using <b>shorthand</b> notation)</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex005" id="ex005" cols="50" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex005" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex005">Feedback</button>
          <div data-solution="ex005" hidden>
            span { border: 2px solid black; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 6</h2>
        <p><i>Program a CSS selector with the following declarations:</i> (<b>Note</b>: write all of your selectors in alphabetical order, and use <b>shorthand</b> notation wherever possible)</p>
        <ul>
          <li>element being selected is a <code>section</code></li>
          <li>element being selected <code>class</code> should be equal to <i>intro</i></li>
          <li>text color should be hexcode <span style="color: #ffc700">ffc700</span></li>
          <li>element background color should be hexcode <span style="background-color: #18354a; color:#ffc700;">18354a</span></li>
          <li>text font size should be equivalent to 18px</li>
          <li>element should have a 32px margin on the top and bottom</li>
          <li>element should be horizontally centered</li>
          <li>element should have 48px of padding on all four sides</li>
          <li>element should have a <span style="border: 1px solid lightgray"> solid, 1px border that is light gray</span></li>
          <li>element should be as wide as possible, but no wider than 900px</li>
          <li>element should be as high/tall as necessary based on the content within</li>
          <li>all size/dimension values should be coded in <code>rem</code> units (assume root element <code>font-size: 100%</code>)</li>
        </ul>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex006" id="ex006" cols="50" rows="9" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex006" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex006">Feedback</button>
          <div data-solution="ex006" hidden>
            section.intro {
              background-color: #18354a;
              border: 1px solid lightgray;
              color: #ffc700;
              font-size: 1.13rem;
              margin: 2rem auto;
              max-width: 56.25rem;
              padding: 3rem;
            }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 7</h2>
        <p><i>Program a CSS selector with the following declarations:</i> (<b>Note</b>: write all of your selectors in alphabetical order, and use <b>shorthand</b> notation wherever possible)</p>
        <ul>
          <li>element being selected is a <code>header</code></li>
          <li>element should have havea  background image that repeats only in the horizontal direction</li>
          <li>the background image file name is <code>bg_header.png</code></li>
          <li>the project directory structure is as follows:<br />
            <?php
              $dir_structure = '<ul class="dir_structure">
                <li><span class="dir">my_project</span>
                  <ul>
                    <li><span class="dir">css</span>
                      <ul>
                        <li><span class="file">screen.css</span></li>
                      </ul>
                    </li>
                    <li><span class="dir">images</span>
                      <ul>
                        <li><span class="file">bg_header.png</span></li>
                      </ul>
                    </li>
                    <li><span class="file">index.html</span></li>
                  </ul>
                </li>
              </ul>';
              echo $dir_structure;
            ?>
          </li>
          <li>the file <code>my_projects/index.html</code> includes the following <code>link</code> in the <i>document head</i>: </li>
        </ul>
        <pre class="prettyprint">&lt;link rel=&quot;stylesheet&quot; href=&quot;css/screen.css&quot;&gt;</pre>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex007" id="ex007" cols="50" rows="9" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex007" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex007">Feedback</button>
          <div data-solution="ex007" hidden>
            header {
              background: url('../images/bg_header.png') repeat-x;
            }
          </div>
        </div>
      </section>

    </div> <!-- ./container -->
  </main>

  <script src="http://cdn.philsinatra.com/projects/hayden/tags/1.3.1/js/main.js"></script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/1.3.1/js/run_prettify.min.js"></script>

</body>
</html>
