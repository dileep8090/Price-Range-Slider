<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Price Range Slider | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
 
    <div class="wrapper">
      <header>
        <h2>Price Range</h2>
        <p>Use slider or enter min and max price</p>
      </header>
      <div class="price-input">
        <div class="field">
          <span>Min</span>
          <input type="number" class="input-min" value="2500">
        </div>
        <div class="separator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="number" class="input-max" value="7500">
        </div>
      </div>
      <div class="slider">
        <div class="progress"></div>
      </div>
      <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
        <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>