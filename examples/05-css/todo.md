# Week 5 Example

1. Build HTML structure
1. Apply colors and font sizes
    ```css
    html {
      font-size: 16px;
    }

    body {
      font-size: 100%;
    }

    h1 {
      font-size: 4rem;  /* 64px */
    }

    h3 {
      font-size: 2.81rem; /* 45px */
      font-weight: normal;
    }

    p {
      line-height: 1.4;
    }

    #introduction {
      background: smoke;
    }

    section.dark {
      background-color: #111;
      color: #fff;

    }

    section.dark .quote {
      font-size: 2rem;
    }
    ```

1. Generate custom font files using [webfont-generator](https://www.web-font-generator.com)
1. Load in custom `@font-face` [ChunkFive-Roman](http://digm.drexel.edu/crs/IDM221/presentations/examples/week5/ChunkFive-Roman.zip)
    ```css
    @font-face {
      font-family: "chunkfiveroman";
      src: url("../fonts/chunkfive-webfont.woff2") format("woff2"),
        url("../fonts/chunkfive-webfont.woff") format("woff");
      font-weight: normal;
      font-style: normal;
    }
    ```

1. Build CSS class for using ChunkFive-Roman
    ```css
    .ff-bold {
      font-family: 'chunkfiveroman', Arial, sans-serif;
    }
    ```

1. Apply class to HTML
1. [Google Fonts Demo](https://fonts.google.com/specimen/Eczar?selection.family=Eczar:400,600|Open+Sans) - Eczar
1. Build CSS class for Eczar
    ```css
    .ff-semi_bold {
      font-family: 'Eczar', serif;
    }
    ```

1. Apply class to CSS
1. Apply Open Sans to `<body>`
    ```css
    body {
      font-family: 'Open Sans', sans-serif;
    }
    ```

1. Add _boxes_ custom code to CSS for final design
