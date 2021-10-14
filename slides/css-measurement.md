build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Cobalt2, 1

# IDM 221

## Web Design I

### Units of Measurement

---

# Objectives

- Discuss CSS Units of Measurement

---

# Objective

## Discuss CSS Units of Measurement

---

## Units of Measurements

| Symbol | Name | Type | Description |
| ------ | ---- | ---- | ----------- |
| px | pixels | absolute | a single dot on a monitor |
| em | ems | relative | 1em = current font size |
| rem | rems | relative | 1rem = root font size |
| %  | percent | relative | relative to current size |
| vw | viewport | width | relative | relative to viewport |
| vh | viewport | height | relative | relative to viewport |
| ch | character | width | relative | relative to character width |

^ You use the units of measure to specify a variety of CSS properties, including font-size, line-height, width, height, margin and padding. Some commonly used units of measurement in CSS include: pixels, points, ems and percent. The first two are absolute units, the second two are relative units.

^ When you use relative units of measure like ems or percent, the measurement will change if the user changes the browser's font size. Example: You set the size of a font to 80 percent of the browser's default font size, that element will change if the user changes the font size in the browser. Because this lets the users adjust the font sizes to their own preferences, it is often recommended to use relative measurements for font sizes.

^ When you use absolute units of measurement the measurement won't change even if the user changes the font size in the browser. Example: set the width of an element in pixels and the font size in points, the width and font size won't change.

^ When you use pixels though, the size will change if the screen resolution changes. Screen resolution determines the number of pixels that are displayed on the monitor. Pixels on a monitor with a screen resolution of 1280 x 1024 are closer together than the pixels on a monitor with a screen resolution of 1152 x 864. That means a measurement of 10 pixels will be smaller on the screen with the higher resolution. A point is 1/72 of an inch no matter what the screen resolution is.

---

```css
body {
  font-size: 100%;
  margin-left: 2em;
  margin-right: 2em;
}

header {
  padding-bottom: .75em;
  border-bottom: 3px solid black;
  margin-bottom: 0;
}
h1 {
  font-size: 200%;
  margin-bottom: 0;
}
```
