1. Build `html` structure
1. Normalize https://necolas.github.io/normalize.css/5.0.0/normalize.css
1. Add Google Font https://fonts.google.com/specimen/Economica
1. Review prepared images
1. Add basic styles
    ```css
    * { box-sizing: border-box; }
    html { font-size: 16px; }
    body { font-family: 'Economica', sans-serif; }
    figure { margin: 0; }
    .navbar {
      background-color: #231f20;
      height: 4.69rem; /* 75px */
    }
    .brand {
      background-image: url('../images/logo.jpg');
      background-repeat: no-repeat;
      background-position: left top;
    }
    .navbar ul {
      list-style: none;
      margin: 0;
      text-align: right;
    }
    .navbar ul li {
      display: inline-block;
    }
    .navbar ul li a {
      color: #fff;
      display: inline-block;
      padding: 8px;
      text-decoration: none;
      text-transform: uppercase;
    }
    .navbar ul li a:hover {
      color: #de4c26;
    }
    ```

1. Add `padding` to `navbar ul`
    ```css
    .navbar ul { padding: 1.25rem 2rem 0; }
    ```

1. Add custom section styles
    ```css
    #introduction {
      background: url('../images/hero.jpg') no-repeat;
      background-size: cover;

      /* height: 50vh */
      height: 100vh;
      width: 100%;
    }
    .statement {
      background-color: #fff;
      font-size: 5rem;
      font-weight: bold;
      padding: 5rem 0; /* 80px */
      text-align: center;
      text-shadow: 4px 4px 8px rgba(0,0,0,0.3);
      text-transform: uppercase;
    }
    .featured-project {
      background-color: #000;
    }
    .featured-project img {
      max-width: 100%;
    }
    .featured-project:hover img {
      opacity: .6;
    }
    .featured-project figcaption {
      color: #fff;
      font-size: 3rem;
      padding-left: 2rem;

      opacity: 0;
    }
    .featured-project:hover figcaption {
      opacity: 1;
    }
    .previews {
      margin: 2rem auto;
      max-width: 800px;
    }
    ```

1. Show `html` element with textured background
    ```css
    html { background: url('../images/texture.png') repeat; }
    ```
    
1. Show finished version    
