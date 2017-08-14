<?php header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercises: CSS Layouts | IDM 221</title>
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
    <p>CSS Layouts</p>
  </section>

  <main role="main">
    <div class="container">
      <h1>CSS Layouts</h1>
      <p>Complete the following exercises related to CSS layouts.</p>

      <section>
        <h2>Exercise 1</h2>
        <p>Using the CSS <code>position</code> property, <i>program a CSS selector that positions the page's <code>header</code> element in the top left corner of the page. </i> If the user scrolls the page, the <code>header</code> will scroll/move with the rest of the content. (<b>Note:</b> program your selectors in alphabetical order)</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex001" id="ex001" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex001" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex001">Feedback</button>
          <div data-solution="ex001" hidden>
            header {
              left: 0;
              position: absolute;
              top: 0;
            }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 2</h2>
        <p>Using the CSS <code>position</code> property, <i>program a CSS selector that positions the page's <code>footer</code> element in the bottom left corner of the page. </i> If the user scrolls the page, the <code>footer</code> will <b>not</b> scroll/move with the rest of the content. (<b>Note:</b> program your selectors in alphabetical order)</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex002" id="ex002" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex002" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex002">Feedback</button>
          <div data-solution="ex002" hidden>
            footer {
              bottom: 0;
              left: 0;
              position: fixed;
            }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 3</h2>
        <p>Using the CSS <code>position</code> property, <i>program a CSS selector that moves an element with an <code>id</code> equal to <b>hero</b> down 32px from it's current position.</i> (<b>Note:</b> program your selectors in alphabetical order, and all measurements should be expressed in <code>rem</code> units. You can assume the follow CSS)</p>
        <pre class="prettyprint">html { &NewLine;  font-size: 100%; &NewLine;}</pre>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex003" id="ex003" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex003" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex003">Feedback</button>
          <div data-solution="ex003" hidden>
            #hero {
              position: relative;
              top: 2rem;
            }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 4</h2>
        <p>I have the following HTML structure:</p>
        <pre class="prettyprint">&lt;div class=&quot;row&quot;&gt;&NewLine;  &lt;div class=&quot;col&quot;&gt;&lt;/div&gt;&NewLine;  &lt;div class=&quot;col&quot;&gt;&lt;/div&gt;&NewLine;  &lt;div class=&quot;col&quot;&gt;&lt;/div&gt;&NewLine;  &lt;div class=&quot;col&quot;&gt;&lt;/div&gt;&NewLine;&lt;/div&gt;</pre>
        <p><i>Program a CSS selector that will position each of the <code>.col</code> elements next to each other, so that all four fit together in a single line. (<b>Note:</b> program your selectors in alphabetical order)</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex004" id="ex004" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex004" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex004">Feedback</button>
          <div data-solution="ex004" hidden>
            .col {
              float: left;
              width: 25%;
            }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 5</h2>
        <p>I have the following HTML structure:</p>
        <pre class="prettyprint">&lt;div class=&quot;wrapper&quot;&gt;&NewLine;  &lt;main&gt;&lt;/main&gt;&NewLine;  &lt;aside&gt;&lt;/aside&gt;&NewLine;&lt;/div&gt;</pre>
        <p><i>Program a CSS selector that will position the <code>main</code> and <code>aside</code> elements next to each other. Also - add 32px of <code>padding</code> on all four sides of both elements.</i> (<b>Note:</b> program your selectors in alphabetical order, and all measurements should be expressed in <code>rem</code> units. You can assume the follow CSS)</p>
        <pre class="prettyprint">html { &NewLine;  font-size: 100%; &NewLine;}</pre>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex005" id="ex005" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex005" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex005">Feedback</button>
          <div data-solution="ex005" hidden>
            aside, main {
              float: left;
              padding: 2rem;
            }
          </div>
          <h3>Part 2</h3>
          <p><i>Program two CSS selectors:</i></p>
          <ol>
            <li>set the width of the <code>aside</code> element to be a quarter of the available space</li>
            <li>set the width of the <code>main</code> element to fill the remaining available space</li>
          </ol>
          <div class="kc_text">
            <div class="kc_text__input">
              <textarea name="ex005b" id="ex005b" cols="30" rows="4" class="full"></textarea>
            </div>
            <div class="feedback alert" data-feedbackfor="ex005b" hidden>
              <div class="alert-content"></div>
            </div>
            <button class="btn btn_feedback" data-assert="ex005b">Feedback</button>
            <div data-solution="ex005b" hidden>
              aside {
                width: 25%;
              }
              main {
                width: 75%;
              }
            </div>
            <h3>Part 3</h3>
            <p><i>Program a CSS selectors that will fix the size calculations so the elements all fit on one line.</i></p>
            <p><b>Note</b>: this is done with the <b>universal selector</b> and a property covered when we discussed <b>box model</b>.</p>
            <div class="kc_text">
              <div class="kc_text__input">
                <textarea name="ex005c" id="ex005c" cols="30" rows="4" class="full"></textarea>
              </div>
              <div class="feedback alert" data-feedbackfor="ex005c" hidden>
                <div class="alert-content"></div>
              </div>
              <button class="btn btn_feedback" data-assert="ex005c">Feedback</button>
              <div data-solution="ex005c" hidden>
                * {
                  box-sizing: border-box;
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
