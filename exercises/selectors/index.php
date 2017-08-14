<?php header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercises: CSS Selectors | IDM 221</title>
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
    <p>CSS Selectors</p>
  </section>

  <main role="main">
    <div class="container">
      <h1>CSS Selectors</h1>
      <p>Complete the following exercises related to CSS selectors.</p>

      <section>
        <h2>Example</h2>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;h1&gt;Hello World&lt;/h1&gt;&NewLine;  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;&NewLine;&lt;/body&gt;</pre>
        <p>Using the above sample code <i>program a CSS selector that will style the <code>h1</code> element <span style="color: red">red</span>.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex000" id="ex000" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex000" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex000">Feedback</button>
          <div data-solution="ex000" hidden>
            h1 { color: red; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 1</h2>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;h1&gt;Hello World&lt;/h1&gt;&NewLine;  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;&NewLine;&lt;/body&gt;</pre>
        <p>Using the above sample code <i>program a CSS selector that will style the <code>p</code> element, setting the font size to 18px.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex001" id="ex001" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex001" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex001">Feedback</button>
          <div data-solution="ex001" hidden>
            p { font-size: 18px; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 2</h2>
        <pre class="prettyprint">body {&NewLine;  font-size: 16px;&NewLine;}&NewLine;&NewLine;h1 {&NewLine;  font-size: ???&NewLine;}</pre>
        <p>The <code>h1</code> element <code>font-size</code> property needs to be twice as large as the <code>body</code> element <code>font-size</code>. <i>Using a percentage unit, what should the font-size value be? (type the number and the unit)</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <input type="text" class="full" id="ex002" placeholder="#%" />
          </div>
          <div class="feedback alert" data-feedbackfor="ex002" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex002">Feedback</button>
          <div data-solution="ex002" hidden>200%</div>
        </div>
      </section>

      <section>
        <h2>Exercise 3</h2>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;h1&gt;Hello World&lt;/h1&gt;&NewLine;  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;&NewLine;  &lt;h2&gt;CSS Selectors&lt;/h2&gt;&NewLine;  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;&NewLine;  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;</pre>
        <p>Using the above sample code <i>program a CSS selector that will style all of the <code>p</code> elements, setting the the color to <span style="color: blue">blue</span>, and then font size to 14px.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex003" id="ex003" cols="30" rows="4" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex003" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex003">Feedback</button>
          <div data-solution="ex003" hidden>p { color: blue; font-size: 14px; }</div>
        </div>
      </section>

      <section>
        <h2>Exercise 4</h2>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;h1 id=&quot;introduction&quot;&gt;Hello World&lt;/h1&gt;&NewLine;  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;&NewLine;  &lt;h2&gt;CSS Selectors&lt;/h2&gt;&NewLine;  &lt;p class=&quot;introduction&quot;&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;&NewLine;  &lt;p class=&quot;subplot&quot;&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;</pre>
        <p>Using the above sample code <i>program a CSS selector that will style <b>only</b> the element that has an <code>id</code> equal to <i>introduction</i>, setting the the color to the hex code <span style="color: #990000">990000</span>.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex004" id="ex004" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex004" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex004">Feedback</button>
          <div data-solution="ex004" hidden>#introduction { color: #990000; }</div>
        </div>
      </section>

      <section>
        <h2>Exercise 5</h2>
        <pre class="prettyprint">&lt;p&gt;Ipsum dolor sit amet, consectetur.&lt;/p&gt;&NewLine;&lt;h2 class=&quot;primary&quot;&gt;CSS Selectors&lt;/h2&gt;&NewLine;&lt;p class=&quot;primary&quot;&gt;Lorem ipsum dolor sit.&lt;/p&gt;&NewLine;&lt;p&gt;Dolor sit amet, consectetur.&lt;/p&gt;&NewLine;&lt;h3&gt;Multiple Elements&lt;/h3&gt;&NewLine;&lt;p class=&quot;primary&quot;&gt;Lorem ipsum dolor sit.&lt;/p&gt;&NewLine;&lt;p&gt;Dolor sit amet, consectetur.&lt;/p&gt;</pre>
        <p>Using the above sample code <i>program a CSS selector that will style <b>all</b> the elements that have a <code>class</code> equal to <i>primary</i>, setting the the color to an rgb code that has <span style="color: rgb(5,100,50)">5 red, 50 blue and 100 green</span>.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex005" id="ex005" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex005" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex005">Feedback</button>
          <div data-solution="ex005" hidden>.primary { color: rgb(5,100,50); }</div>
        </div>
      </section>

      <section>
        <h2>Exercise 6</h2>
        <pre class="prettyprint">&lt;p&gt;Ipsum dolor sit amet, consectetur.&lt;/p&gt;&NewLine;&lt;h2 class=&quot;primary&quot;&gt;CSS Selectors&lt;/h2&gt;&NewLine;&lt;p class=&quot;primary&quot;&gt;Lorem ipsum dolor sit.&lt;/p&gt;&NewLine;&lt;p&gt;Dolor sit amet, consectetur.&lt;/p&gt;&NewLine;&lt;h3&gt;Multiple Elements&lt;/h3&gt;&NewLine;&lt;p class=&quot;primary&quot;&gt;Lorem ipsum dolor sit.&lt;/p&gt;&NewLine;&lt;p&gt;Dolor sit amet, consectetur.&lt;/p&gt;</pre>
        <p>Using the above sample code <i>program two CSS selectors</i>. </p>
        <ol>
          <li><b>Selector 1</b>: The first should style <b>all</b> the elements that have a <code>class</code> equal to <i>primary</i>, setting the the color to an rgb code that has <span style="color: rgb(201, 8, 8)">201 red, 8 green and 8 blue</span>.</li>
          <li><b>Selector 2</b>: The second selector should style <b>only</b> the <code>p</code> elements that have a <code>class</code> equal to <i>primary</i> setting the font size to <code>14px</code></li>
        </ol>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex006" id="ex006" cols="30" rows="7" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex006" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex006">Feedback</button>
          <div data-solution="ex006" hidden>.primary { color: rgb(201, 8, 8); } p.primary { font-size: 14px; }</div>
        </div>
      </section>

      <section>
        <h2>Exercise 7</h2>
        <p><i>Program a CSS selector that will set the color of all <code>h1</code>, <code>h2</code>, and <code>h3</code> elements to hex code <span style="color: #0da3f2">0da3f2</span>.</i></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex007" id="ex007" cols="30" rows="7" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex007" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex007">Feedback</button>
          <div data-solution="ex007" hidden>h1, h2, h3 { color: #0da3f2; }</div>
        </div>
      </section>

      <section>
        <h2>Exercise 8</h2>
        <pre class="prettyprint">&lt;h1&gt;Hello World&lt;/h1&gt;&NewLine;&lt;ul class=&quot;speakers&quot;&gt;&NewLine;  &lt;li&gt;Speaker 1&lt;/li&gt;&NewLine;  &lt;li&gt;Speaker 2&lt;/li&gt;&NewLine;&lt;/ul&gt;&NewLine;&lt;h2&gt;Show Times&lt;/h2&gt;&NewLine;&lt;ul&gt;&NewLine;  &lt;li&gt;9:00 a.m.&lt;/li&gt;&NewLine;  &lt;li&gt;2:30 p.m.&lt;/li&gt;&NewLine;&lt;/ul&gt;</pre>
        <p>Using the above sample code <i>program a CSS selector</i> that sets the font size for all of the list items in lists with a <code>class</code> of <i>speakers</i> to <b>18px</b>. </p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex008" id="ex008" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex008" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex008">Feedback</button>
          <div data-solution="ex008" hidden>.speakers li { font-size: 18px; }</div>
        </div>
      </section>

      <section>
        <h2>Exercise 9</h2>
        <pre class="prettyprint">a {&NewLine;  color: blue;&NewLine;}&NewLine;/* need visited, active and hover styles */</pre>
        <p>I need help styling some links. <i>Program three CSS selectors</i>:</p>
        <ol>
          <li><b>Selector 1:</b> links that have been visited should be <span style="color: purple">purple</span>.</li>
          <li><b>Selector 2:</b> when a user hovers over a link, it should be <span style="color: green">green</span>.</li>
          <li><b>Selector 3:</b> when a user clicks down on a link, it should be <span style="color: red">red</span>.</li>
        </ol>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex009" id="ex009" cols="30" rows="11" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex009" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex009">Feedback</button>
          <div data-solution="ex009" hidden>
            a:visited { color: purple; }
            a:hover { color: green; }
            a:active { color: red; }
          </div>
        </div>
      </section>

    </div> <!-- ./container -->
  </main>

  <script src="http://cdn.philsinatra.com/projects/hayden/tags/1.3.1/js/main.js"></script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/1.3.1/js/run_prettify.min.js"></script>


</body>
</html>
