build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Cobalt2, 1

# IDM 221

## Web Design I

---

### Tools for Development

- Text Editor
- Hosting
- Version Control
- FTP (later)

^ Last week we discussed some of the tools we'll be using for our development process. You should all have installed a (_click_) text editor, Sublime Text or whichever other option you prefer. You also should all have (_click_) hosting taken care of, and you should all have a (_click_) GitHub or Bitbucket account for version control, which we'll talk about tonight. (_click_) FTP will come later.

^ Let's start with an introduction to the text editor.

---

## Critical Concepts

- Users/Usability
- Cross browser compatibility
- User accessibility
- Search engine optimization (SEO)
- Responsive web design (RWD)

^ There are some critical concepts we need to be familiar with before we begin a project. Without considering these concepts, you're project will probably lack components that make it stand out as a well functioning, enjoyable experience.

---

## Users and usability

^ Before you design a website, you need to think about who your users are going to be and what they are going to expect. Remember, users determine the success of a website. What do users want when the reach a website? **The want to find what they're looking for as quickly and easily as possible**. When they find it, they want to extract the information or do the task as quickly and easily as possible.

---

![overstock.com](http://digm.drexel.edu/crs/IDM221/presentations/images/overstock.png)

^ How do users use a page? They don't read it in an orderly fashion, and they don't like to scroll any more than they have to. If they can't find what they're looking for or get frustrated, they leave the site. In web development terms, what users want is _usability_. The term refers to how easy it is to use a website. If a site is easy to use, it has a chance to be effective. 1. present critical content above the fold 2. group related items and limit the number of groups 3. include a header that identifies the site and provides navigation 4. use current navigation conventions (e.g. logo goes to home page)

---

## Cross browser compatibility

![Google Chrome](https://raw.githubusercontent.com/alrra/browser-logos/master/src/chrome/chrome.png)
![Microsoft Edge](https://raw.githubusercontent.com/alrra/browser-logos/master/src/edge/edge.png)
![Firefox](https://raw.githubusercontent.com/alrra/browser-logos/master/src/firefox/firefox.png)
![Safari](https://raw.githubusercontent.com/alrra/browser-logos/master/src/safari/safari.png)

^ If you want your website to be used by as many visitors as possible, you need to make sure that your web pages are compatible with as many browsers as possible. That's known as _cross browser compatibility_. Modern browsers also include special _Developer Tools_ that include Emulation options that will help us test our code.

---

## Guidelines

- use supported HTML5 and CSS3 features
- test all pages on all major browsers
- [Can I Use?](http://caniuse.com)
- [HTML 5 Test](http://html5test.com)

^ Let's go over a few basic guidelines. (_click_) Make sure to use supported HTML5 and CSS3 features when coding your site, (_click_) test all pages on all major browsers, not just your favorite browser. Before using a feature or tag, (_click_) check it's current availability on all modern browsers.

---

## User accessibility

^ _Accessibility_ refers to the qualities that make a website accessible to as many users as possible, especially disabled users. Visually impaired users may not be able to read text that's in images, so you need to provide other alternatives for them. Users with motor disabilities may not be able to use a mouse, so you need to make sure that all of the content and features can be accessed through the keyboard.

---

![webaim.org](http://digm.drexel.edu/crs/IDM221/presentations/images/accessibility.png)

^ There are many information sources on accessibility, we'll review the guidelines for coding the elements and attributes that provide accessibility as we progress through the course.

---

## Search engine optimization

---

![Google search results page](http://digm.drexel.edu/crs/IDM221/presentations/images/seo.png)

^ SEO refers to the goal of optimizing your website so your pages rank higher in search engines like Google, Bing and Yahoo. Although the search algorithms that are used by search engines change frequently, there are some common coding techniques that will help your pages do better in the search engines. We'll review these guidelines as we build our pages.

---

## Responsive web design

![responsive website](http://digm.drexel.edu/crs/IDM221/presentations/images/Responsive-Example.png)

---

```css
img { max-width: 100%; }

.flex {
  background-color: red;
  display: flex;
  flex-direction: column;
}

@media (min-width: 48em) {
  .flex {
    background-color: white;
    flex-direction: row;
  }
}

@media (min-width: 64em) {
  .flex {
    background-color: blue;
  }
}
```

^ The term _Responsive web design_ refers to the theory and practice of creating websites that adapt gracefully to all viewing mediums, from desktop computers to mobile phones. The layout of a website adapts to the viewing environment by using fluid, proportion-based grids, flexible images, and CSS3 media queries.

---

# Fun RWD statistics

- more people in the world own smartphones than toothbrushes
- 80% of all consumers do some shopping on smartphones
- 70% of mobile searches lead to some type of action within an hour
- 40% of users will choose a different search result if the first one isn't mobile friendly
- 45% of mobile users ages 18 to 29 use smartphones every day for searches
- as of 2017, 87% of connected devices are smartphones and tablets

---

## HTML Structure

---

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Document Title</title>
</head>
<body>
  <h1>Welcome to my page.</h1>
  <img src="../images/skatedog.jpg" alt="a dog on a skateboard" />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    reprehenderit in voluptate velit esse cillum dolore eu fugiat
    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</body>
</html>
```

^ An HTML document contains HTML elements that define the content and structure of a web page. Each HTML document consists of two parts: the DOCTYPE declaration and the document tree.

---

```html, [.highlight: 1]
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Document Title</title>
</head>
<body>
  <h1>Welcome to my page.</h1>
  <img src="../images/skatedog.jpg" alt="a dog on a skateboard" />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    reprehenderit in voluptate velit esse cillum dolore eu fugiat
    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</body>
</html>
```

^ The DOCTYPE declaration shown here indicates that the document is going to use HTML5. You need this at the start of every HTML document.

---

```html, [.highlight: 2, 20]
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Document Title</title>
</head>
<body>
  <h1>Welcome to my page.</h1>
  <img src="../images/skatedog.jpg" alt="a dog on a skateboard" />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    reprehenderit in voluptate velit esse cillum dolore eu fugiat
    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</body>
</html>
```

^ The _document tree_ starts with the html element, which marks the beginning and end of the HTML code. This element can be referred to as the root element of the document. The `html` element (note the opening and closing tags) always contains:

---

```html, [.highlight: 3-6]
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Document Title</title>
</head>
<body>
  <h1>Welcome to my page.</h1>
  <img src="../images/skatedog.jpg" alt="a dog on a skateboard" />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    reprehenderit in voluptate velit esse cillum dolore eu fugiat
    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</body>
</html>
```

^ one `head` element that provides information about the document and

---

```html, [.highlight: 7-19]
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Document Title</title>
</head>
<body>
  <h1>Welcome to my page.</h1>
  <img src="../images/skatedog.jpg" alt="a dog on a skateboard" />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    reprehenderit in voluptate velit esse cillum dolore eu fugiat
    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</body>
</html>
```

^ one `body` element that provides the structure and content of the document.

---

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

</body>
</html>
```

^ It's a good practice to start every HTML document from a template that contains this code or from another HTML document similar to the one you are going to create.

^ When you use HTML5, you can code elements using lowercase, uppercase, or mixed case. For consistency, you should use lowercase unless uppercase is required. **Best practice**

---

## Opening and closing tags

```html
<h1>Refresh Philly</h1>
<p>Our goal is to bring together the best and
  brightest web professionals in the Philadelphia
  area so that we may learn from one another.</p>
```

^ As you've seen, most HTML elements start with an _opening tag_ and end with a _closing tag_ that is like the opening tag but has a slash within it.

---

## Empty tags

```html
<br>
<img src="logo.gif" alt="logo">
```

^ Some elements have no content or closing tag. These tags are referred to as _empty tags_.

---

## Nesting

```html
<!-- correct nesting -->
<p>Order your copy <i>today</i></p>

<!-- incorrect nesting -->
<p>Order your copy <i>today</p></i>
```

^ This example shows the right and wrong way to code tags when one element is nested within another. The tags for one element shouldn't overlap with the tags for another element.

---

## Text

```html
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<p>Hello there, I am a paragraph.</p>
```

^ Let's try some simple examples in our editor.

---

[.build-lists: false]

### Linting

- [HTML Linting](https://marketplace.visualstudio.com/items?itemName=mkaufman.HTMLHint)

^ Linting is a term used to describe reviewing code for syntactical errors. One of the benefits of using a text editor designed for programming is that there are tools available to help detect mistakes in your code. VSCode has an extension that will detect HTML errors as you work.

---

## Comments

```html
<!DOCTYPE html>
<!-- This document display the home page -->
```

^ Here is an example of how to code HTML _comments_. One common use of comments is to describe or explain portions of code.

---

## Multi-line Comments

```html
<body>
  <h1>My Home Page</h1>
  <!--
    <ul>
      <li>Eagles</li>
      <li>Flyers</li>
      <li>Phillies</li>
      <li>76ers</li>
    </ul>
  -->
  <p>Contact us...
```

^ Another common use of comments is to comment out a portion of the code. This is useful when you're testing a web page and you want to temporarily disable a portion of code that you're having trouble with.

---

[.build-lists: false]

### Nesting Comments

```html
<!-- <main>
  <div class="container">
    <h2>Hello World</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <!~~ <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p> ~~>
  </div>
</main> -->
```

- [Nest Comments](https://marketplace.visualstudio.com/items?itemName=philsinatra.nested-comments)

---

## Whitespace

```html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Document Title</title>
</head>

<body>
  <h1>Welcome to my page.</h1>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  </p>
</body>
</html>
```

^ Whitespace is ignored when an HTML document is rendered. You can use the whitespace characters to format your HTML, so it is easier to read. In this example, you can see how whitespace has been used to indent and align the HTML elements. This is considered a **best practice**. Although whitespace doesn't effect the way an HTML document is rendered, it does take up space in the HTML file. As a result, you shouldn't overdo your use of it. Just use enough to make your code easy to ready.

---

## Attributes

```html
<!-- opening tag, one attribute -->
<a href="contact.html">

<!-- opening tag, three attributes -->
<a href="contact.html" title="Click to contact us" class="nav_link">

<!-- empty tag attributes -->
<img src="logo.gif" alt="logo">
```

^ Attributes are coded within the opening tag of an element or within an empty tag. For each attribute, you code the attribute name, an equals sign, and then the attribute value.

---

## Boolean Attributes

```html
<!-- Boolean attribute -->
<input type="checkbox" name="mailList" checked>
```

^ A Boolean attribute can have just two values, which represent either on or off. To turn a Boolean attribute on, you code the name of the attribute. In this example, The check attribute turns the attribute on, which causes the related checkbox to be checked when it is rendered by the browser. If you want the attribute to be off when the pages remember, you don't go the attribute.

---

## Identifying Elements

```html
<!-- `id` attribute -->
<div id="page">

<!-- `class` attribute -->
<a href="contact.html" class="nav_link">
```

^ This example illustrates the use of two attributes that are commonly used to identify HTML elements. The ID attribute is used to uniquely identify just one element, so each ID attribute must have a unique value. The class attribute can be used to mark one or more elements, so the same value can be used for more than one class attribute.

---

## HTML Validation

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/w3c_validator.png)

^ To validate and HTML document, you use a program where website for that purpose. One of the most popular websites for validating HTML is the one for the [W3C markup validation service](https://validator.w3.org). When you use this website, you can provide the HTML document that you want to validate and three ways. You can provide the URL for the page. You can upload the document. And you can copy and paste the document into the Validate by Direct Input tab. Once that's done, you click the Check button to validate the document.

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/w3c_validator_results.png)

^ If the HTML code is valid when the document is validated, the validator displays a message to that effect. If the code contains errors, the message will indicate the number of errors that were detected. Then, you can scroll down to a list of the errors.

---

## Version control

![GitHub Octocat](https://assets-cdn.github.com/images/modules/open_graph/github-octocat.png)

^ _Version control_ is a system that records changes to a file or set of files over time so that you can recall specific versions later. If you want to keep every version of a file or project, a Version Control System (VCS) is a very wise thing to use. It allows you to revert files back to a previous state, revert the entire project back to a previous state, compare changes over time, see who last modified something that might be causing a problem, who introduced an issue and when, and more. Using a VCS also generally means that if you screw things up or lose files, you can easily recover. In addition, you get all this for very little overhead.

---

## GIT

![Git branch illustration](https://git-scm.com/images/branching-illustration@2x.png)

^ Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency. Git allows groups of people to work on the same documents (often code) at the same time, and without stepping on each other's toes.

---

## Try GIT

[try.github.io](https://try.github.io/levels/1/challenges/1)

^ Lets try it out!

---

## GUI Git Clients

- [GitHub Desktop](https://desktop.github.com)
- [Source Tree](https://www.sourcetreeapp.com)

---

## Source Tree GUI

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/01_GetSourceTree.png)

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/02_AddRepoAccounts.png)

^ Setup git accounts like GitHub and Bitbucket within the app so that repositories can be pushed/pulled from any account(s).

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/03_CreateLocalRepo.png)

^ You can create a local repository out of any folder on your computer. Note that you can also select to have the new repository be created remotely as well.

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/04_LinkLocalRepo2Remote.png)

^ You can create a remote repository directly from the app. This can also be done by logging into your GitHub/BitBucket account via the web browser.

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/05_EmptyLocalRepo.png)

^ Once the repo is setup, you can view the current status in the workspace to review files and changes that have been made.

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/06_MoveStarterFilesIntoLocalRepo.png)

^ Here's a look at our initial files for our project.

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/07_UnstagedFiles.png)

^ SourceTree shows the new files as _unstaged_, meaning they are in our repository folder but have not yet been added to the repository.

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/08_StageFiles_Commit.png)

^ Add the files (stage) to prepare the changes for submission to the repository. Add a commit message to for the log. Git messages should explain _what_ and _why_ as opposed to _how_.

---

![inline](http://digm.drexel.edu/crs/IDM221/presentations/images/sourcetree/13_PushLocal2Remote.png)

^ Once the files have been committed to the local repository, you should sync (push) the updates to the remote copy of the repository.

---

## GitHub Desktop GUI

^ A live demo of the software.

---

## What goes in a repo

- .html
- .css
- .js
- .md

^ The repository should be free of bloat, and contain the source files for your project. Media assets should not be included in your repository, even if they are part of your project.

---

## What does not go in a repo

- .psd
- .ai
- .mov
- .mp4

^ Media files add tremendous bloat to your repository. They should be stored and hosted separately from the repository files. Some examples include this list of binary file types.

---

## .gitignore

- [Windows](https://github.com/github/gitignore/blob/master/Global/Windows.gitignore)
- [Mac](https://github.com/github/gitignore/blob/master/Global/macOS.gitignore)
- [Linux](https://github.com/github/gitignore/blob/master/Global/Linux.gitignore)

^ You can create a _.gitignore_ file and include it in your repository as a list of files/file types to be specifically ignored when maintaining the repository files. Let's take a look at the .gitignore file for this IDM project.

---

## For Next Week

^ Draw a sitemap example on whiteboard.