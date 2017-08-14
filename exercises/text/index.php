<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercises: CSS Text | IDM 221</title>
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
    <p>CSS Text</p>
  </section>

  <main role="main">
    <div class="container">
      <h1>CSS Text</h1>
      <p>Complete the following exercises related to CSS text styles.</p>

      <section>
        <h2>Exercise 1</h2>
        <pre class="prettyprint">body {&NewLine;  font-size: 16px;&NewLine;}&NewLine;&NewLine;p {&NewLine;  font-size: ???;&NewLine;}</pre>
        <p>The <code>p</code> element <code>font-size</code> property needs to be expressed using <code>em</code> units. The goal <code>font-size</code> is roughly <b>18px</b>. <i>How many ems will set the font-size correctly? (type the number and the unit)</i></p>
        <p><a href="#mi-1" class="DoMore"><small>Review <code>em</code> formula.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <input type="text" class="full" id="ex001" placeholder="#em" />
          </div>
          <div class="feedback alert" data-feedbackfor="ex001" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex001">Feedback</button>
          <div data-solution="ex001" hidden>1.125em</div>
        </div>
      </section>

      <section>
        <h2>Exercise 2</h2>
        <p>Here is a sample of HTML structured content:</p>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;section&gt;&NewLine;    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipi.&lt;/p&gt;&NewLine;  &lt;/section&gt;&NewLine;  &lt;p&gt;Ipsum omnis modi eum quibusdam asperiores sit.&lt;/p&gt;&NewLine;&lt;/body&gt;</pre>
        <p>Here is the start of a CSS file for that content:</p>
        <pre class="prettyprint">body {&NewLine;  font-size: 16px;&NewLine;}&NewLine;&NewLine;section {&NewLine;  font-size: 1.125em;&NewLine;}&NewLine;&NewLine;p {&NewLine;  font-size: 1em;&NewLine;}</pre>
        <p>What is the font size of the <code>p</code> element inside the <code>section</code> element in <code>px</code>s? </p>
        <p><a href="#mi-1" class="DoMore"><small>Review <code>em</code> formula.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <input type="text" class="full" id="ex002" placeholder="#px" />
          </div>
          <div class="feedback alert" data-feedbackfor="ex002" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex002">Feedback</button>
          <div data-solution="ex002" hidden>18px</div>
        </div>
        <p>What is the font size of the <code>p</code> element outside of the <code>section</code> element in <code>px</code>?</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <input type="text" class="full" id="ex002b" placeholder="#px" />
          </div>
          <div class="feedback alert" data-feedbackfor="ex002b" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex002b">Feedback</button>
          <div data-solution="ex002b" hidden>16px</div>
        </div>
      </section>

      <section>
        <h2>Exercise 3</h2>
        <p>Here is a sample of HTML structured content:</p>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;main&gt;&NewLine;    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;&NewLine;    &lt;ul&gt;&NewLine;      &lt;li&gt;dolor sit&lt;/li&gt;&NewLine;      &lt;li&gt;emt ipsum&lt;/li&gt;&NewLine;    &lt;/ul&gt;&NewLine;  &lt;/main&gt;&NewLine;&lt;/body&gt;</pre>
        <p>Here is the start of a CSS file for that content:</p>
        <pre class="prettyprint">body {&NewLine;  font-size: 16px;&NewLine;}&NewLine;&NewLine;main {&NewLine;  font-size: 1.25em;&NewLine;}&NewLine;&NewLine;main p {&NewLine;  font-size: 14px;&NewLine;}</pre>
        <p>Convert the <code>p</code> element font size from <code>px</code> to <code>em</code> units. (<b>Note</b>: do not include leading zeros in your answer)</p>
        <p><a href="#mi-1" class="DoMore"><small>Review <code>em</code> formula.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <input type="text" class="full" id="ex003" placeholder="#em" />
          </div>
          <div class="feedback alert" data-feedbackfor="ex003" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex003">Feedback</button>
          <div data-solution="ex003" hidden>.7em</div>
          <!-- 16 * 1.25 = 20,  14/20 = 0.7em -->
        </div>
      </section>

      <section>
        <h2>Exercise 4</h2>
        <p>Here is a sample of HTML structured content:</p>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;main&gt;&NewLine;    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;&NewLine;    &lt;ul&gt;&NewLine;      &lt;li&gt;dolor sit&lt;/li&gt;&NewLine;      &lt;li&gt;emt ipsum&lt;/li&gt;&NewLine;    &lt;/ul&gt;&NewLine;  &lt;/main&gt;&NewLine;&lt;/body&gt;</pre>
        <p>Here is the start of a CSS file for that content:</p>
        <pre class="prettyprint">html {&NewLine;  font-size: 16px;&NewLine;}&NewLine;&NewLine;body {&NewLine;  font-size: 14px;&NewLine;}&NewLine;&NewLine;main {&NewLine;  font-size: 1.25rem;&NewLine;}</pre>
        <p>What is the <code>px</code> value of the <code>main</code> element's <code>font-size</code>?</p>
        <p><a href="#mi-2" class="DoMore"><small>Review <code>rem</code> formula.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <input type="text" class="full" id="ex004" placeholder="#px" />
          </div>
          <div class="feedback alert" data-feedbackfor="ex004" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex004">Feedback</button>
          <div data-solution="ex004" hidden>20px</div>
        </div>
      </section>

      <section>
        <h2>Exercise 5</h2>
        <p>Here is a sample of HTML structured content:</p>
        <pre class="prettyprint">&lt;body&gt;&NewLine;  &lt;main&gt;&NewLine;    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;&NewLine;    &lt;ul&gt;&NewLine;      &lt;li&gt;dolor sit&lt;/li&gt;&NewLine;      &lt;li&gt;emt ipsum&lt;/li&gt;&NewLine;    &lt;/ul&gt;&NewLine;  &lt;/main&gt;&NewLine;&lt;/body&gt;</pre>
        <p>Here is the start of a CSS file for that content:</p>
        <pre class="prettyprint">html {&NewLine;  font-size: 100%;&NewLine;}&NewLine;&NewLine;main {&NewLine;  font-size: 14px;&NewLine;}</pre>
        <p>Convert the <code>main</code> element's <code>font-size</code> to <code>rem</code> units. (<b>Note</b>: do not include leading zeros in your answer)</p>
        <p><a href="#mi-2" class="DoMore"><small>Review <code>rem</code> formula.</small></a></p>
        <div class="kc_text">
          <div class="kc_text__input">
            <input type="text" class="full" id="ex005" placeholder="#rem" />
          </div>
          <div class="feedback alert" data-feedbackfor="ex005" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex005">Feedback</button>
          <div data-solution="ex005" hidden>.88rem</div>
        </div>
      </section>

      <section>
        <h2>Exercise 6</h2>
        <p><i>Program a CSS selector that will style a <code>p</code> element with a <b>class</b> equal to <b>intro</b> to be <b>bold</b></i>.</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex006" id="ex006" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex006" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex006">Feedback</button>
          <div data-solution="ex006" hidden>
            p.intro { font-weight: bold; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 7</h2>
        <p><i>Program a CSS selector that will style a <code>p</code> element with a <b>class</b> equal to <b>exit</b> to be <b>italic</b></i>.</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex007" id="ex007" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex007" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex007">Feedback</button>
          <div data-solution="ex007" hidden>
            p.exit { font-style: italic; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 8</h2>
        <p><i>Program a CSS selector that will style a <code>p</code> element with a <b>standout</b> equal to be <span style="text-decoration: underline;">underlined</span></i>.</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex008" id="ex008" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex008" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex008">Feedback</button>
          <div data-solution="ex008" hidden>
            p.standout { text-decoration: underline; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 9</h2>
        <p><i>Program a CSS selector that will style an <code>h2</code> element to be all <span style="text-transform: uppercase;"><b>uppercase</b></span></i>.</p>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex009" id="ex009" cols="30" rows="3" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex009" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex009">Feedback</button>
          <div data-solution="ex009" hidden>
            h2 { text-transform: uppercase; }
          </div>
        </div>
      </section>

      <section>
        <h2>Exercise 10</h2>
        <p><i>Program a CSS selector that will style a <code>p</code> element with a <code>class</code> equal to <code>custom</code> with the following attributes <b>in this order</b>:</i>.</p>
        <ul>
          <li>color should be hexcode: <span style="color: #70ca89">70ca89</span>.</li>
          <li>font size should be double the parent element's font size.</li>
          <li>text should be <span style="font-style: italic">italic</span></li>
          <li>text should be <span style="font-weight: bold;">bold</span></li>
          <li>text should be <span style="text-decoration: underline;">underlined</span></li>
          <li><span style="text-transform: capitalize;">the first letter of each word within the element should be capitalized</span></li>
        </ul>
        <div class="kc_text">
          <div class="kc_text__input">
            <textarea name="ex010" id="ex010" cols="30" rows="8" class="full"></textarea>
          </div>
          <div class="feedback alert" data-feedbackfor="ex010" hidden>
            <div class="alert-content"></div>
          </div>
          <button class="btn btn_feedback" data-assert="ex010">Feedback</button>
          <div data-solution="ex010" hidden>
            p.custom {
              color: #70ca89;
              font-size: 200%;
              font-style: italic;
              font-weight: bold;
              text-decoration: underline;
              text-transform: capitalize;
            }
          </div>
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
      <h4>Calculating <code>em</code></h4>
      <p>The formula for calculating <code>1em</code> is:</p>
      <small><code>desired px / parent element px</code></small>
      <p><small>1em = 100% of the parent element font size</small></p>
      <p>Example</p>
      <pre class="prettyprint">body {&NewLine;  font-size: 16px;&NewLine;}&NewLine;&NewLine;h1 {&NewLine;  /* font-size: 32px */&NewLine;  /* 32/16 = 2 */&NewLine;  font-size: 2em;&NewLine;}</pre>
    </div>
  </div>

  <div class="more_information" aria-hidden="true">
    <div class="more_info" id="mi-2">
      <h4>Calculating <code>rem</code></h4>
      <p>The formula for calculating <code>1rem</code> is:</p>
      <small><code>desired px / root element px</code></small>
      <p><small>1rem = 100% of the root element font size</small></p>
      <p>Example</p>
      <pre class="prettyprint">html {&NewLine;  font-size: 16px;&NewLine;}&NewLine;&NewLine;body {&NewLine;  font-size: 14px;&NewLine;}&NewLine;&NewLine;h1 {&NewLine;  font-size: 1rem; /* 16px */&NewLine;}</pre>
    </div>
  </div>

  <script src="http://cdn.philsinatra.com/projects/hayden/tags/1.3.1/js/main.js"></script>
  <script src="http://cdn.philsinatra.com/projects/hayden/tags/1.3.1/js/run_prettify.min.js"></script>

</body>
</html>
