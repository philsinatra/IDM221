build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Cobalt2, 1

# IDM 221

## Web Design I

### CSS Positioning (Part 1)

^ Part 1 because part 2 is coming next term (RWD, Flexbox, Grids)

---

# Objectives

- Discuss Positioning Techniques

---

# Objective

## Discuss Positioning Techniques

---

## Position An Element

- position
- top
- bottom
- left
- right
- z-index

^ Use these properties to position elements on a page. Let's look at these individually.

---

## Position

- static
- relative
- fixed
- absolute
- sticky

^ The `position` property determines how an element is positioned. Possible values are `static`, `absolute`, `fixed` and `relative`.

^  _Static_ is the default value, which means the element is placed in the normal flow of the page.

^ _Relative_ means the element is positioned relative to it's position in the normal flow, again based on the top, left, bottom and right properties.

^ _Absolute_ means the element is removed from the flow and positioned relative to the closest containing block that is also positioned. The position is determined by the top, left, bottom and right properties.

^ _Fixed_ means the element is positioned absolutely relative to the browser window. The position again is determined by the top, left, bottom and right properties.

^ _Sticky_ means the element is positioned based on the user's scroll position.

^ Let's review examples of each. (examples available in _examples_ folder)

---

## Static Position

---

![fit](http://i.giphy.com/5qjdJAEkucf3a.gif)

^ In normal flow, each block-level element sits on top of the next one. Since this is the default way in which browsers treat HTML elements, you do not need a CSS property to indicate that elements should appear in normal flow.

^ _example: position-static_

---

## Relative Position

---

![fit](http://i.giphy.com/xhlMhF845lZuw.gif)

^ Relative positioning moves an element in relation to where it would have been in normal flow. For example, you can move it 10 pixels lower than it would have been in normal flow or 20% to the right.

---

```html
<p>Lorem ipsum.</p>
<p class="example">Ut enim ad.</p>
```

```css
p.example {
  position: relative;
  left: 100px;
  top: 10px;
}
```

^ _example: position-relative_

---

## Absolute Position

---

![fit](http://i.giphy.com/oOfdItdCgP5ao.gif)

^ When the position property is given a value of absolute, the box is taken out of normal flow and no longer affects the position of other elements on the page. (They act like it is not there.) The box offset properties (top or bottom and left or right) specify where the element should appear in relation to its containing element.

---

```html
<h1>My Awesome Web Page</h1>
<p>Lorem ipsum dolor.</p>
```

```css
h1 {
  position: absolute;
  left: 500px;
  top: 0;
  width: 250px;
}
```

^ _example: position-absolute_ and _position-absolute-2_

---

## Fixed Position

---

![fit](http://i.giphy.com/5AYYpkqYkBNK0.gif)

^ Fixed positioning is a type of absolute positioning that requires the position property to have a value of `fixed`. It positions the element in relation to the browser window. Therefore, when a user scrolls down the page, it stays in the exact same place. It is a good idea to try this example in your browser to see the effect.

---

```html
<h1>My Awesome Web Page</h1>
<p>Lorem ipsum dolor.</p>
```

```css
h1 {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
}
```

^ _example: position-fixed_

---

## Sticky Position

^ Sticky positioning is a newer CSS property. It combines _static_ and _fixed_ positioning techniques, and uses the user's scroll position on the page to determine the position of the element. The basic concept is the element is positioned statically until some specific scroll condition is met, at which point the position of the element becomes fixed. Let's look at an example.

^ _example: position-sticky_

---

## z-index

---

![fit](http://i.giphy.com/A296QNZ6tLCp2.gif)

^ When you start positioning elements and messing with the natural flow of the page, there is the possibility that content will begin to overlap or fight for a specific spot on the page. The `z-index` property helps us deal with the issue by defining the order of our content. Think of it like layers in your graphic design software.

---

```css
.thing1, .thing2 {
  height: 100px; width: 100px;
  position: absolute;
}

.thing1 {
  left: 0; top: 0;
  z-index: 10;
}

.thing2 {
  left: 20px; top: 20px;
  z-index: 20;
}
```

^ Why did I use 10 and 20 instead of 1 and 2?

---

## Float

^ By default, block elements flow from top to bottom. When you _float_ an element, it's taken out of the flow of the document. Because of that, any elements that follow the floated element flow into the space that's left by the floated element.

---

```html
<div class="wrapper">
  <aside>
    <p>Lorem ipsum...</p>
  </aside>
  <main>
    <p>Lorem ipsum...</p>
  </main>
  <footer>
    <p>Lorem ipsum...</p>
  </footer>
</div>
```

---

```css
main {
  margin: 0;
  padding: 0 20px;
}

aside {
  border: 1px solid black;
  float: right;
  margin: 0 0 10px 20px;
  padding: 0 20px;
  width: 250px;
}
```

^ The basic skills for floating an element include first using the `float` property to define whether you want the element floated to the left or right. You also have to set a width of the floated element. In the example, the `aside` is 250px and floated to the right. The `main` element that follows flows into the space to the left of the `aside`.

---

```css
footer {
  border-top: 1px solid lightgray;
  clear: both;
  font-size: 0.88rem;
}
```

^ By default, any content that follows the floated element will fill in the space to the side of the floated element. If you want to stop the flow of elements into the space behind a floated element, you can use the `clear` property. In this example, this property is used to stop the `footer` from flowing into the space next to the `aside`. The value of this property can be _left_, _right_ or _both_ and works whether the floated element is floated to the left or right.

---

## Exercise 🏋️‍

[http://digm.drexel.edu/crs/IDM221/exercises/layouts](http://digm.drexel.edu/crs/IDM221/exercises/layouts/index.php/index.php)
