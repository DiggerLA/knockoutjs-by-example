<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <link rel="stylesheet" href="bulma/bulma.min.css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
  <title>KnockoutJS</title>
</head>
<body>   
  <div class="container mt-4"> 
    <div class="columns is-centered">
      <div class="column is-6-tablet is-6-desktop is-half-widescreen is-one-quarter-fullhd">  
      
        <div class="field">
          <h1 class="title">KnockoutJS</h1>
        </div>
      
        <div class="field">
          <label class="label" for="input">Input</label>
          <div class="control has-icons-left">
            <input class="input is-primary" id="input" type="text" placeholder="Enter text"
              data-bind=" textInput: model.name">
            <span class="icon is-small is-left">
              <i class="fas fa-bowling-ball"></i>
            </span>
          </div>
          <div data-bind="text: model.name"></div>
        </div>      
          
        <div class="field">
          <div class="control">
            <button class="button is-primary" data-bind="click: clickHandler">Click me!!</button>
          </div>
        </div>  
               
      </div>
    </div>
        
  </div>
      
  <script src="js/jquery.js"></script>
  <script src="js/knockout.js"></script>    
  <script src="js/demo.js"></script>
</body>
