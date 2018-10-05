build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Dark Mode

# IDM 221

## Web Design I

---

## Working With Text

---

## Special Characters

---

# © ® ™ > < &

^ When working with text, sometimes we have to deal with special characters like these. Can anyone tell me a problem with dealing with any of these characters in our HTML code?

---

## Dealing With Special Characters

```html
<p> 12<6 </p>
<p> Research & Development </p>
<p> © 2016 </p>
```

^ How about in this example, where we look at the actual HTML code. What are some of the issues present in this source code?

---

## Reserved/Special Characters

- reserved characters
- special characters

^ Reserved characters in HTML must be replaced with character entities. Characters that are not present on your keyboard can also be replaced by entities. If you use the less than (<) or greater than (>) signs in your text, the browser might mix them with tags.

---

## Character Entities

```html
&entity_name;

<!-- OR -->

&#entity_number;
```

---

## Encoding Character Entities

```html
<p> 12&lt;6 </p>
<p> Research &amp; Development </p>
<p> &copy; 2016 </p>
```

---

## Useful Entities

- [Useful Entities](http://www.w3schools.com/html/html_entities.asp)

^ Here's a list of some useful entities. Note: Entity names are case sensitive.

---

## Typography

^ Before we dive into any new code, let's take a moment to review some of the basic concepts of typography.

---

## The Five (generic) Families

![Godfather logo](https://s-media-cache-ak0.pinimg.com/originals/ab/c1/9f/abc19f3eb7500ad138a98e334f8f8d92.jpg)

---

## The Five (generic) Typography Families

| Name | Description |
| ---- | ----------- |
| serif | Tapered, flared or slab stroke ends |
| sans-serif | Plain stroke ends |
| monospace | Every character uses the same width |
| cursive | Connected, flowing letters |
| fantasy | Decorative styling |

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/serif.png)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/sansserif.png)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/monospace.png)

---

## Web Safe Typefaces

^ Our discussion on web typography begins with web safe typefaces. Can anyone tell me what we mean by the term "Web Safe"?

---

### Most Safe

- Arial
- Times New Roman / Times
- Courier New / Courier

^ The fonts that are most safe to use are:

---

### Also Safe

- Palatino
- Garamond
- Bookman

^ Other options that usually work cross-platform are:

---

### macOS / Window Safe

- Verdana
- Georgia
- Comic Sans MS
- Trebuchet MS
- Arial Black
- Impact

^ Fonts that work on Windows and MacOS but not Unix+X are:

---

## Web Safe Fonts

- [Web Safe Fonts](http://www.w3schools.com/cssref/css_websafe_fonts.asp)

---

## Define A Font Family

```css
p {
  font-family: Arial, Helvetica, sans-serif;
  font-family: 'Times New Roman', Times, serif;
  font-family: 'Courier New', Courier, monospace;
}

```

^ When you code the values for the `font-family` property, you code a list of the fonts that you want to use. The browser will use the first font in the list that is available to it. If none of the fonts are available, the browser will substitute its default font for the generic font that's coded last in the list.

^ If the name of a font family contains spaces, you need to enclose the name in quotation marks when you code the list.

---

## Set Font Size

```css
p {
  font-size: 12px;  /* in pixels */
  font-size: 150%;  /* as a percentage of the parent element */
  font-size: 1.5em; /* desired / parent */
}
```

^ To set the font size, you use the `font-size` property.

---

## Type Scale

![60% left](http://digm.drexel.edu/crs/IDM221/presentations/images/font-scale.png)

- Developed in the 16th century
- Pleasing to the eye
- Now used in programs such as Word, Photoshop etc.

---

## Why `em`s

- relative units
- more precision
- preferred method

---

## How to calculate `em`s

1em = 100% of parent font

```css
body { font-size: 16px; }
h1 { font-size: 2em; /* 32px */ }
h2 { font-size: 1.5em; /* 24px */ }
```

desired px value / parent px value
$$24/16 = 1.5$$

---

```css
body { font-size: 16px; }
main { font-size: 0.88em; /* 14px */}
main p {
  /* font-size: 12px; */
  font-size: ??em;
}
```

---

```css
body { font-size: 16px; }
main { font-size: 0.88em; /* 14px */}
main p {
  /* font-size: 12px; */
  font-size: 0.86em;
}
```

$$12/14 = 0.86$$

---

## `rem`

![right](https://upload.wikimedia.org/wikipedia/commons/7/7e/Michael_Stipe_of_REM_photographed_by_Kris_Krug.jpg)

---

```css
html { font-size: 100%; /* ~16px */}
body { font-size: 1rem; }
main { font-size: 0.88rem; /* 14px */}
main p {
  /* font-size: 12px; */
  font-size: 0.75rem;
}
```

    desired px value / root px value
$$12/16 = 0.75$$

---

## Font styling properties

| Property | Description |
| -------- | ----------- |
| font-style | how the font is slanted: normal, italic, oblique |
| font-weight | the boldness: normal, bold, bolder, lighter, 100-900 |
| font-variant | small caps used: normal, small-caps |
| line-height | amount of vertical space for each line |

---

## Font styles & variants

```css
p {
  font-style: italic;
  font-style: normal; /* remove style */
  font-variant: small-caps;
}
```

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/font-style.png)

---

## Font weights

```css
p {
  font-weight: 700;
  font-weight: bold;    /* same as 700 */
  font-weight: normal;  /* same as 400 */
  font-weight: lighter; /* relative to parent element */
}
```

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/font-weight.png)

---

## Line height

```css
p {
  line-height: 14px;
  line-height: 140%;
  line-height: 1.4em; /* same as 140% */
  line-height: 1.4;   /* same as 140% and 1.4em */
}
```

^ The excess space is divided equally above and below the text.

---

### Example

```css
p {
  font-family: Arial, Helvetica, sans-serif;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 1.4;
}
```

^ You can set the `font-style`, `font-weight` and `font-variant` properties to a value of "normal" to remove any formatting that has been applied. The `line-height` property determines the spacing between lines within a block element. If you specify just a number for the `line-height`, the font size is multiplied by that value to determine the line height, and the multiplier is inherited by child elements.

---

## Shorthand

    font: [style] [weight] [variant] size[/line-height] family;

```css
p {
  font: italic bold 14px/19px Arial, sans-serif;
  font: small-caps 150% "Times New Roman", Times, serif;
  font: 90%/120% "Comic Sans MS", Impact, sans-serif;
}
```

^ You can use the shorthand property for a font to set all six font properties with a single rule. The `font-size` and `font-family` are the only required properties.

---

## Formatting Text

| Property | Description |
| -------- | ----------- |
| text-indent | relative/absolute value |
| text-align | left, center, right, justify |
| vertical-align | relative/absolute/keyword |
| text-decoration | underline, overline, line-through, none |

^ The `text-indent` property is a relative or absolute value that determines the indentation for the first line of text. This property is inherited.

^ The `text-align` property is defined by a keyword that determines the horizontal alignment of text. This property is inherited.

^ The `vertical-align` property is a relative or absolute value or a keyword that determines the vertical alignment of text. Possible keywords are baseline, bottom, middle, top, text-bottom, text-top, sub and super.

^ The `text-decoration` property determines special decorations that are applied to text.

---

## Formatting Text In CSS

```css
main p { text-indent: 2em; }
main a { text-decoration: none; }
main a:hover { text-decoration: underline; }
footer p { text-align: right; }
```

---

## Text shadows

    text-shadow: horizontalOffset, verticalOffset, blurRadius, shadowColor;

```css
h1 {
  text-shadow: 4px 4px 8px rgba(0,0,0,0.3);
}
h2 {
  text-shadow: -2px -2px 4px red;
}
```

^ Before CSS3 you had to use an image to display text with a shadow. CSS3 provides the `text-shadow` property which makes this much easier. You can specify four parameters. The first specifies how much the shadow should be offset to the right/left. The second specifies the offset up/down. The third specifies how big the blur radius is, and the fourth specifies the color of the shadow.

^ Remember to much shadow makes text harder to read.

---

## Exercise 🏋️‍

[http://digm.drexel.edu/crs/IDM221/exercises/text](http://digm.drexel.edu/crs/IDM221/exercises/text/index.php/index.php)

---

## Custom Typefaces

$$websafe = boring?$$

^ So we have the basics of how to work with text. But so far everything we've been building is using web safe fonts. Wouldn't it be more interesting if our websites could use any typeface we want?

---

## CSS3 Web Fonts

```css
body {
  font-family: ChunkFiveRegular, Times, serif;
}
```

^ Why can't we spec any typeface we want in our `font-family` declaration?

^ For years web designers were frustrated with the limited number of fonts available for a website. (further explanation of web safe fonts) CSS3 offers a feature to embed fonts within your pages. You can also use third party services to embed fonts within your pages.

---

## `@font-face`

```css
@font-face {
  font-family: 'ChunkFiveRegular';
  src: url('fonts/chunkfive.eot'); }

h1, h2 {
  font-family: ChunkFiveRegular, Georgia,
     serif; }
```

^ Copy the file for the font family into a subfolder within your website. In the CSS, code a rule set for the `@font-face` selector. Use the `font-family` property to provide a name for the imported font family, and use the `src` property to locate the font file. In the rule set for an HTML element, use the name that you gave the font as the value for the `font-family` property. Then, list one or more other font families in case the brwoser doesn't support the CSS3 `@font-face` selector.

^ Windows fonts: `C\Windows\Fonts`

^ OSX fonts: `System\Library\Fonts`

---

### Bulletproof Font Face

![Superman](http://s1.picswalls.com/wallpapers/2014/02/25/superman-wallpaper_022920424_35.jpg)

^ Unfortunately not all operating systems and browsers can work with a single type of font file. We need to provide an array of font files to ensure our custom fonts work properly on all operating systems and browsers.

---

```css
@font-face {
 font-family: 'ChunkFiveRegular';
 src: url('fonts/chunkfive.eot');
 src: url('fonts/chunkfive.eot?#iefix')
    format('embedded-opentype'),
  url('fonts/chunkfive.woff')
    format('woff'),
  url('fonts/chunkfive.ttf')
    format('truetype'),
  url('fonts/chunkfive.svg#ChunkFiveRegular')
    format('svg');}
```

^ A few years ago - this is what it looked like to get the job done on all modern browsers.

---

```css
@font-face {
 font-family: 'ChunkFiveRegular';
 src: url('fonts/chunkfive.woff2') format('woff2'),
      url('fonts/chunkfive.woff') format('woff');
}
```

^ Currently, we can trim this down to just two formats.

---

## Tools

- [Web Font Generator](https://www.web-font-generator.com)
- [Font Squirrel](https://www.fontsquirrel.com/tools/webfont-generator)

^ There are a number of tools that will take your font file and generate the array of files you need for your website. [Melior](http://cdn.philsinatra.com/libraries/fonts/Melior.zip). Let's try implementing this font.

---

## Online Font Services

- [Google Fonts](https://www.google.com/fonts)
- [Adobe Edge Fonts](https://edgewebfonts.adobe.com)

^ Let's try using Google fonts.

---

## Example Time

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-type-base.jpg)

^ Here's our example wireframe. Our plan here is to build three simple sections. The first section is going to fill the entire "above the fold" area. How many containers do we see?

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-type-sections.jpg)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-type-introduction.jpg)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-type-sections-inner.jpg)

---

## Let's Build it

---

## FTP

---

## For Next Week
