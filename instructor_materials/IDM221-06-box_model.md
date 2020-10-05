build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Cobalt2, 1

# IDM 221

## Web Design I

---

## The Box Model

^ When a browser displays a web page, it places each HTML block element in a box. That makes it easy to control the spacing, borders, and other formatting for elements like headers, sections, footers, headings and paragraphs. Some inline elements like images are placed in a box as well. To work with boxes, you use the CSS _box model_.

---

^ This figure shows how the box model works. By default the box for a block element is as wide as the block that contains it and as tall as it needs to be based on its content. However, you can explicitly specify the size of the content area for a block element by using the height and width properties. You can also use other properties to set the borders, margins and padding for a block element.

^ _Padding_ is the space between the content area and a border. _Margin_ is the space between the border and the outside of the box.

![box model](http://digm.drexel.edu/crs/IDM221/presentations/images/box_model.png)

---

![fit right](http://digm.drexel.edu/crs/IDM221/presentations/images/box_model.png)

## Calculate height

      top margin
    + top border
    + top padding
    + height
    + bottom padding
    + bottom border
    + bottom margin

^ When you calculate the overall height of a box, you use this formula.

---

![fit right](http://digm.drexel.edu/crs/IDM221/presentations/images/box_model.png)

## Calculate width

      left margin
    + left border
    + left padding
    + width
    + right padding
    + right border
    + right margin

^ The formula for calculating the overall width is similar. You can use any of the units we've learned.

---

```html
<body>
  <main>
    <h1>Welcome Home!</h1>
    <p>Welcome to our site. Here's more text... </p>
  </main>
</body>
```

^ Let's look at an  of how the box model works.

---

```html
<body>
  <main>
    <h1>Welcome Home!</h1>
    <p>Welcome to our site. Here's more text... </p>
  </main>
</body>
```

```css
body {
  border: 3px dotted black;
  margin: 10px;
}
```

^ For the `body`, the margin on all four sides is set to 10 pixels, and we add a 3px border around all four sides.

---

```html
<body>
  <main>
    <h1>Welcome Home!</h1>
    <p>Welcome to our site. Here's more text... </p>
  </main>
</body>
```

```css
main {
  border: 2px solid black;
  width: 500px;
  margin: 20px; /* all four sides */
  padding: 10px; /* all four sides */
}
```

^ For the `main` element, the width is set to 500px, and the margins on all four sides of the box are set to 20 pixels. You can see these margins on the left, top, and bottom of the main box, but not on the right because the width of the section is set to 500px (the margin is there even if you can't see it).

---

```html
<body>
  <main>
    <h1>Welcome Home!</h1>
    <p>Welcome to our site. Here's more text... </p>
  </main>
</body>
```

```css
h1, p {
  border: 1px dashed black;
  padding: 10px;
}
```

^ The next rule set sets properties for both the `h1` and `p` elements.

---

```css
h1 {
  /* 0 top, 0 right and left, .25em bottom */
  margin: 0 0 .25em;
  padding-left: 15px;
}
p {
  margin: 0; /* all four sides */
  padding-left: 15px;
}
```

^ The next two rule sets set additional properties for each of these elements.

---

^ Let's review in the browser.

```css
body {
  border: 3px dotted black;
  margin: 10px;
}
main {
  border: 2px solid black;
  width: 500px;
  margin: 20px; /* all four sides */
  padding: 10px; /* all four sides */
}
h1, p {
  border: 1px dashed black;
  padding: 10px;
}
h1 {
  /* .5em top, 0 right and left, .25em bottom */
  margin: .5em 0 .25em;
  padding-left: 15px;
}
p {
  margin: 0; /* all four sides */
  padding-left: 15px;
}
```

---

## Size and space of elements

^ As you can see there are several different properties that determine the size of an element and the spacing between the elements on a page. Next we will cover each of these properties in detail.

---

## Height and Width Properties

| Property | Description |
| -------- | ----------- |
| `width` | the width of the content area |
| `height` | the height of the content area |
| `min-width` | the minimum width of the content area |
| `max-width` | the maximum width of the content area |
| `min-height` | the minimum height of the content area |
| `max-height` | the maximum height of the content area |

---

## Height and Width

- `width`
- `height`
- `height: auto;`
- `width: auto;`

^ The two properties used most often are _width_ and _height_. By default, these properties are set to a value of "auto". As a result, the size of the content area for the element is automatically adjusted so it's as wide as the element that contains it and as tall as the content it contains.

---

## Height and Width Values

```css
div {
  width: 450px; /* absolute width */
  width: 75%;   /* relative width */
  width: 23em;   /* relative width */
  width: 23rem;   /* relative width */
  width: auto;  /* default */

  height: 125px;  /* absolute height */
  height: 50%;    /* relative height */
  height: 23em;   /* relative height */
  height: 23rem;   /* relative height */
  height: auto;   /* default */
}
```

^ To change that you can use the height and width properties.

---

## Min and Max

```css
div {
  min-width: 450px;
  max-width: 600px;
  min-height: 120px;
  max-height: 160px;
}
```

^ You can use the min/max properties to specify the minimum and maximum heights/widths of content areas.

---

```html
<!-- HTML -->
<div class="wrapper">
  <p>Lorem ipsum&hellip;</p>
</div>
```

```css
/* CSS */
.wrapper {
  background-color: blue;
  color: white;
}
```

---

```css
.wrapper {
  background-color: blue;
  color: white;

  width: 100%; /* container fills 100% of available width */
  max-width: 900px; /* but never more than 900px */
}
```

---

## Viewport Units

```css
div {
  height: 100vh;
  width: 100vw;
}
```

1vw = 1% viewport width
1vh = 1% viewport height

---

## Margin

```css
div {
  margin-top: .5em;
  margin-right: 1em;
  margin-bottom: 2em;
  margin-left: 1em;
}
```

^ You can use individual properties to set individual margins.

---

```css
div {
  margin: 1em; /* all four sides */
  margin: 0 1em; /* top and bottom 0, right and left 1em */
  margin: .5em 1em 2em; /* top: .5em, right and left 1em, bottom 2em */
  margin: .5em 1em 2em 1em; /* clockwise starting at top */
}
```

^ Instead of setting individual margins though, you can use the margin property to set the margins for all four sides of a box. When you use a shorthand property like this, you can specify one, two, three or four values. If you specify less than four values, the property still sets the margins for all four sides of the box. If you specify one value, that value is set for all four sides. If you specify two vales, the first value applies to the top and bottom, and the second value applies to the left and right. If you specify three values, the first applies to the top, the second applies to the left and the right, and the third applies to the bottom.

^ Values are specified in a specific order: clockwise starting at the top.

---

```css
div {
  margin: 0 auto;
}
```

^ You can also specify the keyword "auto" for any margin. In most cases your use this to center a page in the browser window.

---

^ Let's bring back our previous.

```css
.wrapper {
  background-color: blue;
  color: white;

  width: 100%; /* container fills 100% of available width */
  max-width: 900px; /* but never more than 900px */

  /* 0 on the top and bottom, `auto` on the left and right */
  margin: 0 auto;
}
```

---

## Padding

```css
div {
  padding-top: 0;
  padding-right: 1em;
  padding-bottom: .5em;
  padding-left: 1em;

  padding: 1em;
  padding: 0 1em;
  padding: 0 1em .5em;
  padding: 0 1em .5em 1em;
}
```

^ The properties for setting padding are similar to the properties for setting margins.

---

## Reset

```css
* {
  margin: 0;
  padding: 0;
}

ul {
  margin: 0 0 1.5em 1.25em;
}
```

^ By default, the browser applies certain margin/padding values to certain elements. This  uses the universal selector to set the margins and padding of all elements to 0. After you code the reset selector, you can get the spacing you want by applying margins and padding to specific elements, which overrides the reset selector value of 0.

---

## Box Sizing

      left margin
    + left border
    + left padding
    + width
    + right padding
    + right border
    + right margin
    ----------------
    total width

^ Recall our formula for calculating the width (or height) of a box.

---

## Box Sizing Example

      left margin (20px)
    + left border (5px)
    + left padding (10px)
    + width (200px)
    + right padding (10px)
    + right border (5px)
    + right margin (20px)
    ----------------
    total width (270px)

---

$$
270 ≠ 200
$$

^ Wouldn't it be nice if we could define the width of a box and have the box actually be the width we've defined even after we've applied margins and paddings and borders?

---

## Box Sizing: Border Box

```css
* {
  box-sizing: border-box;
}
```

^ Apply the `box-sizing` property to the universal selector with a value of "border-box" and the browser will now do the math for you and maintain your width/height values even when margin/padding/borders are applied. The browser will calculate the totals and dynamically adjust the width value so that your container with a _width_ value of 200px will actually be 200px even if there's 20px of margins, a 2 pixel border and 10 pixels of padding applied.

---

## Borders

    border
    border-side
    border-width
    border-style
    border-color
    border-side-width
    border-side-style
    border-side-color

^ Next we'll begin applying other formatting to boxes. That includes adding borders and setting background colors and images. These are the properties that can be set to apply borders to boxes.

---

### Border Width

```css
div {
  border-width: 2px;
  border-width: 2px 1px;
  border-width: 2px 1px 2px;
  border-width: 2px 1px 2px 1px;
}
```

^ Similar to margin/padding properties, the width of a border can be defined as one, two, three or four values, always starting at the top and rotating clockwise.

---

### Border Style

```css
div {
  border-style: solid;
  border-style: dashed;
  border-style: inset;
}
```

^ There are various styles available. Here are some s, a full list is available online (check the lecture notes for the URL).

^ [http://www.w3schools.com/cssref/pr_border-style.asp](http://www.w3schools.com/cssref/pr_border-style.asp)

---

### Border Color

```css
div {
  border-color: black;
  border-color: black red;
  border-color: #fff #000 rgb(255,255,255) rgba(0,0,0,0.3);
}
```

^ Border color can be defined using any of the color definition syntaxes, and again can be specced as one, two, three or four values.

---

### Border Shorthand

```css
div {
  border: [width] [style] [color];
  border: 2px solid black;
}
```

^ The border property has a shorthand for specifying all of the properties in a single rule. The order of the values must be width, then style, then color.

---

## Rounded Corners and Shadows

```css
div {
  border-radius: [radius]; /* applies to all four sides */
  border-radius: [topLeft] [topRight] [lowerRight] [lowerLeft];
  box-shadow: [horizontalOffset] [verticalOffset] [blurRadius] [spread] [color];
}
```

^ CSS3 includes features for adding rounded corders and shadows to borders. This lets you add graphic effects without the need for images. These features are supported by all modern browsers; older browsers that don't support these properties will simply ignore them.

---

```css
div {
  color: blue;
  padding: 20px;
  text-align: center;
  width: 360px;

  border-radius: 10px 20px 0 20px;
  border: 5px solid blue;
  box-shadow: 3px 3px 4px 4px red;
  /* box-shadow: 3px 3px 20px 4px rgba(0,0,0,0.6); */
}
```

---

## Display

- block
- inline
- inline-block
- flex
- list-item
- [more](https://www.w3schools.com/cssref/pr_class_display.asp)

^ `block` vs `inline` vs `inline-block`

---

## Display Property

```css
div {
  display: block; /* default */
  display: inline;
  display: flex;
}

span {
  display: inline; /* default */
  display: block;
}
```

---

### `display: block`

- `header`
- `section`
- `main`
- `div`
- `h1`, `h2`, `h3`, `h4`
- `p`, `ul`, `ol`, `li`

---

### `display: inline`

- `span`
- `a`
- `img`
- `b`, `strong`
- `i`, `em`

^ Let's build some examples to see the defaults and then change the property values to non defaults.

---

## Background

    background
    background–color
    background–image
    background–repeat
    background-attachment
    background–position
    background-size

^ When you set a background, it's display behind the content, padding and border for the box, but it isn't displayed behind the margin. When you specify a background, you can set a background color, a background image, or both. If you set both, the browser displays the background color behind the image. As a result, you can only see the background color if the image has areas that are transparent with the image doesn't repeat.

---

## Background Color

^ Background color is a color value with the word that specifies the color of an elements background. You can also specify the "transparent" keyword if you want the elements behind the element to be visible. This is the default.

```css
div {
  background-color: blue;
  background-color: #808080;
  background-color: transparent;
}
```

---

## Background Image

```css
div {
  background-image: url('images/texture.png');
}
```

^ Background image is a relative or absolute URL that points to an image. You can also specify the keyword "none" if you don't want to display an image. This is the default.

---

## Background Repeat

```css
div {
  background-image: url('images/texture.png');
  background-repeat: repeat;
  background-repeat: repeat-x;
  background-repeat: repeat-y;
  background-repeat: no-repeat;
}
```

^ Background repeat is a keyword that specifies if and how images repeated. Possible values are "repeat", "repeat-x", "repeat-y", and "no-repeat".

---

## Background Attachment

```css
div {
  background-image: url('images/texture.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
}
```

^ Background attachment excepts a keyword that specifies whether an image schools with the document over means any fixed position.

---

## Background Position

```css
div {
  background-image: url('images/texture.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: left top;
  background-position: center top;
  background-position: 90% 90%; /* 90% from the top and left */
}
```

^ Background position except one or two relative or absolute values or keywords that specify the initial horizontal and vertical positions of an image. Keywords are left, center, and right; top, center and bottom. If no position is specified, the default is to place the image in the top left corner of the element.

---

## Background Shorthand

```css
div {
  background: [color] [image] [repeat] [attachment] [position];
  background: blue url('images/texture.png') repeat-x;
}
```

^ Background property allows you to set the color, image, repeat, attachment, and position values. (Let's build an ).

---

## Background Size

```css
div {
  background-size: auto; /* default */
  background-size: 100% 100%; /* width height */
  background-size: cover;
  background-size: contain;
}
```

^ The `background-size` property specifies the size of the background images. `auto` is the default value. The `background-image` contains its width and height.

^ `cover`: scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area.

^ `contain`: Scale the image to the largest size such that both its width and its height can fit inside the content area.

---

## Background Gradients

```css
div {
  background: linear-gradient(direction, color %, color %, ...);

  /* Old browsers */
  background: rgb(30,87,153);
  /* FF3.6-15 */
  background: -moz-linear-gradient(top, rgba(30,87,153,1) 0%, rgba(125,185,232,1) 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: -webkit-linear-gradient(top, rgba(30,87,153,1) 0%,rgba(125,185,232,1) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  background: linear-gradient(to bottom, rgba(30,87,153,1) 0%,rgba(125,185,232,1) 100%);

}
```

- [http://www.colorzilla.com/gradient-editor/](http://www.colorzilla.com/gradient-editor/)

^ CSS3 includes a feature for linear gradients. At present, all modern browsers provide at least basic support for this feature. Except for Internet explorer, browsers support this feature with properties that are prefixed by -webkit for Safari and Chrome, and -moz for Firefox and Opera. Luckily, we can use some tools to help write this code for us.

---

![50%](http://digm.drexel.edu/crs/IDM221/presentations/images/css_toolkit.jpg)

---

## Exercise 🏋️‍

[http://digm.drexel.edu/crs/IDM221/exercises/box_model](http://digm.drexel.edu/crs/IDM221/exercises/box_model/index.php/index.php)

---

## Example

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-box_model-base.jpg)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-box_model-navbar.jpg)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-box_model-outer.jpg)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-box_model-rows.jpg)

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/wireframe-box_model-cols.jpg)

---

## For Next Week