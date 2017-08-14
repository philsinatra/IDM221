build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Plain Jane, 2


# IDM 221
## Web Design I

---

## Week 3

---

## Links, lists and images

^ Because you'll use links, lists and images in most of the web pages you develop, we'll review these topics in full detail. But first, you need to know how to code absolute and relative URLs so you can use them in your links and images.

---

## Absolute URLs

```html
http://www.drexel.edu
https://www.google.com/#q=html
```

^ An _absolute URL_ includes the domain name of a website. When used within the code for a web page, an absolute URL is used to refer to a file in another website.

---

## Relative URLs

![fit inline](http://digm.drexel.edu/crs/IDM221/presentations/images/folder_structure.png)

^ This figure shows the folder structure of a simple website. The folders for this site are organized into three levels. The root folder for the site contains five subfolders, including the folders that contain the images and styles for the site. Then, the books folder contains subfolders of its own.

---

## Relative URLs

![right fit](http://digm.drexel.edu/crs/IDM221/presentations/images/folder_structure.png)

```html
/login.html
/images/logo.gif

images/logo.gif
books/php/overview.html

../index.html
../images/logo.gif
```

^ A relative URL is used to refer to a file within the same website.

---

### Root relative

![right fit](http://digm.drexel.edu/crs/IDM221/presentations/images/folder_structure.png)

```html
/login.html
/images/logo.gif
```

^ In a root-relative path, the path is relative to the root folder of the website.

---

### Document relative

![right fit](http://digm.drexel.edu/crs/IDM221/presentations/images/folder_structure.png)

```html
images/logo.gif
books/php/overview.html
```

^ In a document relative path, the path is relative to the current document. In this example, the assumption is that the paths are coded in a file that is in the root folder for a website. The first path refers to a file in the images subfolder of the root folder, and the second path refers to a file in the PHP subfolder of the books sub folder. This illustrates paths that navigate down the levels of the folder structure.

---

### Document relative

![right fit](http://digm.drexel.edu/crs/IDM221/presentations/images/folder_structure.png)

```html
../index.html
../images/logo.gif
../../index.html
```

^ You can also navigate up the levels with a document relative path. In this example, The assumption is that the current document is in the `root/books` folder. The first path goes on level for the `index.html` file in the root folder. The second path also goes up one level to the root folder and then down one level for the `logo.gif` file in the images folder.

---

## Link Terminology Review

- **Absolute URL**: code the complete URL including domain
- **Relative URL**: based on the folder of the current page
- **Root Relative**: relative to root folder, starts with /
- **Document Relative**: relative to current document folder

---

## Links

```html
<p>Go view our <a href="products.html">product list</a>.</p>
```

- **href**: Specifies a relative or absolute URL for a link

^ Most webpages contain links other webpages for web resources. To code a link, you use the `<a>` anchor element.

---

## Links

```html
<p>Go view our <a href="products.html">product list</a>.</p>

<p>Read about our <a href="../company/services.html">services</a>.</p>

<p>View your <a href="/orders/cart.html">shopping cart</a>.</p>

<p>Check <a href="http://amazon.com">Amazon</a>.</p>
```

^ The first example uses a relative URL to link to a page in the same folder as the current page. The second example uses a relative URL to link to a page in a subfolder of the parent folder. The third example uses a relative URL to link to a page based on the root folder. And the last example uses an absolute URL to link to a page at another website.

---

## Exercise 🏋️‍

[http://digm.drexel.edu/crs/IDM221/exercises/paths](http://digm.drexel.edu/crs/IDM221/exercises/paths/index.php/index.php)

---

![100%](http://digm.drexel.edu/crs/IDM221/presentations/images/links_in_browser.png)

^ By default, links are underline when they are displayed in a browser to indicate that they are clickable. When a link is displayed, it has a default color depending on its state. Four instance, link that has not been visited is displayed in blue, and a link that has been visited is displayed in purple. Later we'll use CSS to change these settings.

---

## Semantics and Usability

```html
<a href="contact.html">Click here</a> to contact us.

Please <a href="contact.html">contact us</a> with your comments.
```

^ When you create a link that contains text, the text should clearly indicate the function of the link. For example, you should not use text like "click here" because it does not indicate what the link does.

---

## Semantics and Usability

```html
<a href="contact.html">click here</a>

<a href="contact.html">contact us</a>
```

^ If you can't tell what a link does by reading it's text, you should rewrite the text. This improves the accessibility of your site, and help search engines index your site.

---

## Target windows

```html
<a href="http://google.com" target="win_search">Google</a>
<a href="http://bing.com"   target="win_search">Bing</a>
<a href="http://yahoo.com"  target="win_yahoo">Yahoo</a>
<a href="http://amazon.com" target="_blank">Amazon</a>
```

^ The `target` attribute can be used to open the linked file/page in a new window/tab. The value basically represents the name of the window; these values can be reused to load links in the same target window. The special value _\_blank_ will open a new window every time the link is clicked.

---

## Same Page Links

```html
<h1 id="top">Film Making Terms</h1>
<a href="#arc">Arc Shot</a>
<a href="#interlude">Interlude</a>
<a href="#prologe">Prologue</a>

<h2 id="arc">Arc Shot</h2>
<h2 id="interlude">Interlude</h2>
```

^ At the top of the long page you might want to add a list of contents that link to the corresponding sections lower down. Or you might want to add a link from partway down the page back to the top of it to save users from having to scroll to the top.

---

## Same Page Links

```html
<h1 id="top">Film Making Terms</h1>
<a href="#arc">Arc Shot</a>
<a href="#interlude">Interlude</a>
<a href="#prologe">Prologue</a>

<h2 id="arc">Arc Shot</h2>
<h2 id="interlude">Interlude</h2>
```

^ Before you can link to a specific part of the page, you need to identify the points and the page that the link will go to. You do this using the `id` attribute. You can see that the `h1` and `h2` elements have been given `id` attributes that identify those sections of the page.

---

## `id` Attribute

```html
<h1 id="top"></h1>
<h2 id="arc"></h2>
```

^ The value of the `id` attributes should start with the letter or an underscore, and, on a single page, new two `id` attributes should have the same value.

---

## Target the `id` Attribute

```html
<a href="#top">Back to top</a>
<a href="#arc">Arc Shot</a>
```

^ To link to an element that uses an `id` attribute you use the `a` element again, but the value of the `href` attribute starts with a # symbol, followed by the `id` attribute of the element you want to link to. (example)

---

## Lists

---

## Lists

```html
<ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
</ul>

<ol>
  <li>Enter billing info</li>
  <li>Enter shipping info</li>
  <li>Confirm Order</li>
</ol>
```

^ Here are two basic types list: ordered lists and unordered lists.

---

## Unordered lists

```html
<ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
</ul>
```

^ To create an unordered list, you use the `<ul>` element. Then, within this element, you code one `<li>` list item element for each item in the list. By default, when the list is displayed in the browser, each item in and unordered list is preceded by a bullet. However, you can change the bullet with CSS.

---

## Ordered lists

```html
<ol>
  <li>Enter billing info</li>
  <li>Enter shipping info</li>
  <li>Confirm Order</li>
</ol>
```

^ To create an ordered list, you use the `<ol>` element, along with one `<li>` element for each item in the list. This works like the `<ul>` element, except the items that are preceded by numbers rather than bullets when they're displayed in the browser. Again you can change the type of numbers that are used with CSS.

---

## Nesting

```html
<ol>
  <li>Prep materials
    <ul>
      <li>Keynote</li>
      <li>Notes</li>
      <li>Lighting</li>
    </ul>
  </li>
  <li>Rehearsal</li>
  <li>Presentation</li>
</ol>
```

---

## Definition lists

```html
<dl>
  <dt>Definition Term</dt>
  <dd>Definition of the term</dd>
</dl>
```

---

## Images

```html
<img src="images/logo.gif" alt="website logo">
```

^ To display an image, you use the `<img>` element. This is an inline element that's coded as an empty tag. The `src` attribute of an `<img>` element specifies the URL of the image you want to display, and is required. The `alt` attribute is used to provide information about the image in case it can't be displayed or the page is being accessed using a screen reader. This attribute is also required.

---

## Image format

- JPG
- GIF
- PNG
- SVG

^ The images that you include in a web page need to be in one of the formats modern web browsers support. Currently, most browsers support these formats. Typically, imaging software is used to create and maintain these files for a website.

---

## Photoshop Demo

![](https://wwwimages2.adobe.com/content/dam/acom/en/products/photoshop/cc2016/images/ps-marquee1440x660.jpg)

---

## Example

^ _examples/03-images/_

---

## Page structure

^ Now that we've seen some HTML elements used for structuring content, lets put together a simple web page that uses these elements.

---


## `div` and `span` elements

```html
<div id="header">
  <h1>Town Hall</h1>
</div>
<div id="main">
  <p><span id="welcome">Welcome to the Town Hall</span>. We have some&hellip;</p>
</div>
<div id="footer">
  <p>&copy; 2016</p>
</div>
```

^ The `div` of `span` elements have traditionally been used to structure a page and to format portions of inline content.

^ The `div` element is a block element that you can use to divide an HTML document into divisions. In this example, you can see that the content of the document is divided into three divisions. The first division contains the header for the page, the second division contains the main content of the page, and the third division is for the footer. For each `div` element, the `id` attribute is used to indicate the contents of the division.

^ The other element that is presented in this example is the `span` element. This inline element has traditionally been used to identify content so CSS can be used to format it.

---

## We can do better

---

```html
<div id="header">
  <h1>Town Hall</h1>
</div>
<div id="main">
  <p>Welcome to the Town Hall. We have some&hellip;</p>
</div>
<div id="footer">
  <p>&copy; 2016</p>
</div>
```

---

```html
<div id="header">
  <h1>Town Hall</h1>
  <div id="nav">
    <ul>
      <li><a href="about.html">About</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
  </div>
</div>
<div id="main">
  <div id="primary">
    <p>Welcome to the Town Hall. We have some&hellip;</p>
  </div>
  <div id="sidebar">
    <p>Upcoming Events</p>
  </div>
</div>
<div id="footer">
  <p>&copy; 2016</p>
</div>
```

---

```html
<div id="header">
  <h1>Town Hall</h1>
  <div id="nav">
    <ul> <li><a href="about.html">About</a></li> </ul>
  </div>
</div>
<div id="main">
  <div id="primary">
    <div class="article">
      <h2>Article Heading</h2>
      <img src="myimage.jpg" alt="a dog on a skateboard">
    </div>
    <div class="article">
      <h2>Article Heading</h2>
      <img src="myimage.jpg" alt="a cat sleeping">
    </div>
    <div class="article">
      <h2>Article Heading</h2>
      <img src="myimage.jpg" alt="a fish eating">
    </div>
  </div>
  <div id="sidebar">
    <div class="story"><h3>Story Heading</h3></div>
    <div class="story"><h3>Story Heading</h3></div>
  </div>
</div>
<div id="footer">
  <p>&copy; 2016</p>
</div>
```

---

![](http://i.giphy.com/ecZVHGjhMgCyc.gif)

^ There are already a dozen `div` tags. Legibility is already suffering, and the likelihood of a nesting error is growing. And this example is really only the beginning since there's barely any real content included.

---

```html
<header>
  <h1>Town Hall</h1>
</header>
<main>
  <p>Welcome to the Town Hall. We have some&hellip;</p>
</main>
<footer>
  <p>&copy; 2016</p>
</footer>
```

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/html5_elements.png)

---

## Build an Example

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Philadelphia Town Hall</title>
  </head>
```

^ The DOCTYPE declaration, `html` element and `head` element illustrate the way these items should be coded in every document you create. In the `html` element you see the use of the `lang` attribute. In the `head` element, you see the coding for the charset `meta` element and the `title` element.

---

```html
<body>
  <header>
    <img src="images/logo.jpg" alt="Town hall logo">
    <h2>Philadelphia Town Hall</h2>
    <h3>Bringing speakers to the city</h3>
  </header>
```

^ In the `body` element, we see the use of HTML5 semantic elements. Here the `header` element contains one `h2` and one `h3` element.

---

```html
<main>
  <h1>This season's speakers</h1>
  <nav>
    <ul>
      <li>April: <a href="speakers/toobin.html">Jeff Toobin</a></li>
      <li>May: <a href="speakers/sorkin.html">Andy Sorkin</a></li>
      <li>June: <a href="speakers/tynan.html">Ron Tynan</a></li>
    </ul>
  </nav>
  <p><i>Contact Us</i> for more info.</p>
</main>
```

^ The `main` element contains one `h1` element, a `nav` element, and a `p` element. Within the `nav` element is an unordered list that contains a series of list items. Each list item contains an anchor element. This is consistent with HTML5 semantics because a `nav` element should contain a series of links. It is also a best practice to code the anchor elements within an unordered list.

  ---

```html
<footer>
  <p> © 2016 Philadelphia Town Hall </p>
</footer>
```

^ The HTML5 semantic elements make the structure of the page obvious.

---

## HTML5 elements

![right fit](http://digm.drexel.edu/crs/IDM221/presentations/images/html5_elements.png)

- header
- nav
- main
- aside
- footer
- section
- article
- figure
- [more](http://www.w3schools.com/html/html5_semantic_elements.asp)

^ You should use HTML5 elements whenever appropriate. Use `div` elements when your content needs additional styling or division and a semantic element is not available or appropriate. Here is a list of some of the commonly used HTML5 semantic elements, a full list and descriptions of when to use them is available online.

---

## Example

^ _examples/03-structure_

---

## Tables

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/tables.png)

^ The table consist of one or more rows and columns. Need define a table by defining it's rows. Then, within each row, you define a cell for each column. Within each row, a table can contain two different kinds of cells. Header cells identify what's in the columns and rows of the table, and data cells contain the actual data of the table. In broad terms, the table starts with the header that can consist of one or more rows. Then, the body of the table presents the data for the table. Last, the footer provides summary data that can consist of one or more rows.

---

```html
<table>
  <thead>
    <tr>
      <th> Books </th>
      <th> Year </th>
      <th> Sales </th>
    </tr>
  </thead>
```

^ To create a header, you simply code the rows that make up the header between the opening and closing tags of the `thead` element.

---

```html
  <tbody>
    <tr>
      <td> PHP & MySQL </td>
      <td> 2014 </td>
      <td> $372,381 </td>
    </tr>
    <!-- Additional rows/columns -->
  </tbody>
```

^ Code a body by coding rows with a `tbody` element.

---

```html
  <tfoot>
    <tr>
      <th> Total Sales </th>
      <td> </td>
      <td> $2,154,786 </td>
    </tr>
  </tfoot>
</table>
```

^ Code a footer by coding rows within a `tfoot` element.

---

```html
<table>
  <thead>
    <tr>
      <th> Books </th>
      <th> Year </th>
      <th> Sales </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> PHP & MySQL </td>
      <td> 2014 </td>
      <td> $372,381 </td>
    </tr>
    <!-- Additional rows/columns -->
  </tbody>
  <tfoot>
    <tr>
      <th> Total Sales </th>
      <td> </td>
      <td> $2,154,786 </td>
    </tr>
  </tfoot>
</table>
```

---

## Forms

^ A form contains one or more controls like text boxes, radio buttons, lists, or check boxes that can receive data.

---

```html
<form name="email_form" action="subscribe.php" method="post">
  <div class="form_control">
    <label for="email">Email: </label>
    <input type="email" name="email" value="" placeholder="email address">
  </div>
  <input type="button" name="submit" value="Subscribe">
</form>
```

^ You should code the name attribute to uniquely identify each form and control. When a form is submitted to the server for processing, the data in the controls the sent along with the request.

---

### Buttons

```html
<input type="button" name="message" value="Alert Me">
<input type="submit" name="checkout" value="Checkout">
<input type="reset" name="resetForm" value="Reset">
<input type="image" src="images/submit.jpg" alt="submit button">
```

^ The first button is a generic button, defined by setting the `type` attribute to "button". When the user clicks this type of button, client-side code is usually run. For instance, JavaScript can be used to validate the data on the form. Then, if the data is valid, the script can submit the form to the server.

^ The second button is a submit button. When it is clicked, the form is submitted to the server for processing. Unlike a generic button, a submit button sends the data to the server automatically without using client-side code.

^ The third button is a reset button. When it is clicked, the values and all of the control on our reset to their default values.

^ The fourth button is an image button. It works like a submit button. The difference is that an image button displays an image rather than text. To specify the URL for the image, you use the `src` attribute. To specify text if the image can't be displayed, you use the `alt` attribute.

---

### Text inputs

```html
<input type="text" name="username" placeholder="Your name">
<input type="email" name="email" placehodler="Email">
<input type="password" name="userpw" placeholder="Password">
<input type="URL" name="URL" placeholder="Website">
```

^ There are several types of text fields. For example, _text_, _password_, _email_, etc. A normal text field except input data from the user. Then, when the form is submitted, the name and value attributes are passed to the server. The password field also excepts input that that is submitted to the server, but the entry is up scared but bullets.

---

### Inputs, labels, fieldsets...

^ Review the links in the resources section to learn more about the available inputs and attributes that can be used to build a form.

---

## iFrames

```html
<iframe src="http://www.w3schools.com"></iframe>

<iframe
  width="480"
  height="360"
  src="https://www.youtube.com/embed/ZqkfMeut_QY"
  frameborder="0"
  allowfullscreen>
</iframe>
```

^ An `iframe` like a window on your page. It uses an inline frame to embed another document within the current HTML document. Common uses include Google Maps, YouTube/Vimeo video.

---

## For Next Time...
