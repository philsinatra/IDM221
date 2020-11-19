build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Cobalt2, 1

# IDM 221

## Web Design I

### Color

---

# Objectives

- Discuss Color Application

^ There are a number of ways to specify color.

---

# Objective

## Discuss Color Application

---

[.build-lists: false]

# Color Specs & Names

- [CSS3 Color spec](http://www.w3.org/TR/css3-color)
- [Color Names](http://www.w3schools.com/cssref/css_colors.asp)

---

## Hexcodes

```css
p {
  color: #ffffff; /* white */
  color: #000000; /* black */
  color: #ff0000; /* red */
}
```

^ You can use the _hexadecimal_ values for red, green and blue. When you use this technique the value must be preceded by the pound sign (#).

---

## RGB(A) Colors

```css
p {
  color: rgb(red%, green%, blue%)
  color: rgb(100%, 40%, 20%);

  /* 0 to 255 */
  color: rgb(red, green, blue)
  color: rgb(255, 102, 51);

  /* opacity: 0 to 1 */
  color: rgba(red%, green%, blue%, opacity-value)
  color: rgba(255, 102, 51, .5);
}
```

^ Another way to specify a color is to use an _RGB_ value. One way to do that is to specify the percent of red, green and blue that make up the color. You can also use any values from 0 through 255 instead of percents (0 is equivalent to 0% and 255 is equivalent to 100%, this gives you more precision over the resulting colors).

---

## HSL(A)

```css
hsl(hue-degrees, saturation%, lightness%)
hsla(hue-degrees, saturation%, lightness%, opacity-value)
```

---

## Specifying color

```css
body {
  background-color: #ffffcc; /* light yellow */
  color: black;
}

p {
  background-color: #ff0000; /* red */
  /* `color` will be inherited as `black` */
}
```

^ The `color` property determines the foreground color (the color of the text). The `background-color` property determines the background color.

^ The `color` property for an element is _inherited_ by any child elements. For example: if you set the `color` for the `body` to _black_, that color will be inherited by all of the elements in the body of the document. However, you can override an inherited property by coding a rule set with a different value for that property.

---

## Accessibility guideline

^ Remember the visually-impaired. Dark text on a light background is easier to read, and black type on a white background is easiest to read.
