<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Formwatcher tests</title>

    <script type="text/javascript" src="third_party/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="third_party/underscore-1.2.3.js"></script>
    <script type="text/javascript" src="formwatcher.js?load=validators"></script>
    <script type="text/javascript" src="formwatcher.Hint.js"></script>
    <script type="text/javascript" src="formwatcher.DropDown.js"></script>

    <style type="text/css">

      @import "formwatcher.css";

      @import "formwatcher.DropDown.css";


      body {
        font-family: arial, sans-serif;
        font-size: 13px;
      }
      label {
        display: block;
      }


      #container {
        width: 600px;
        margin: 30px auto;
      }

      input, textarea, select {
        width: 300px;
        box-sizing: border-box;
      }

      input, textarea  {
        padding: 5px;
      }
      input, textarea, select  {
        font-size: 13px;
      }


      input.focus, select.focus, textarea.focus {
        background: #ffc;
        /*      border: 1px solid green;*/
      }
      button.focus {
        color: #ffc;
      }
      input.changed, select.changed, textarea.changed, button.changed {
        /*      font-weight: bold;*/
      }
      input.error, select.error, textarea.error {
        background: #ffeeee;
      }
      button.error {
        color: #a00;
        font-weight: bold;
      }
      input.validated, select.validated, textarea.validated {
        background: #dfd;
        /*      border: 1px solid green;*/
      }
      button.validated {
        color: #363;
      }
      .errors {
        color: red;
      }


    </style>

    <script type="text/javascript">
      Formwatcher.debugging = true;
      Formwatcher.defaultOptions.Float = { decimalMark: ',' };
    </script>

  </head>
  <body>


    <div id="container">
<pre>
<?php if (!empty($_POST)) { print_r($_POST); } ?>
</pre>
      <form data-fw='{ "ajax": false, "automatchLabel": true }' id="test" action="demo.php" method="post">

        <label for="some-number">Alter</label> <input id="some-number" name="some-number" type="text" class="validate-integer not-zero" value="" />

        <div id="some-number-errors"></div>

        <br />
        <br />

        <div><label>Gewicht</label> <input id="some-float" name="some-float" type="text" class="validate-float required" /></div>

        <br />
        <br />
        <label for="some-text">Beschreibung: </label> <textarea id="some-text" name="some-text"></textarea>

        <br />
        <br />


        <label>Required font selector</label>
        <select name="font" class="font required">

          <option value="">EMPTY</option>
          <option value="arial">arial</option>
          <option value="times">times</option>
          <option value="verdana">verdana</option>

        </select>
        <br />
        <br />


        <label>Pimped drop down</label>
        <select class="drop-down required">

          <option value="">EMPTY</option>
          <option value="arial">House</option>
          <option value="times">Car</option>
          <option value="verdana">Dog</option>
          <option value="arial">Limousine</option>
          <option value="times">Tree</option>
          <option value="verdana">Street</option>
          <option value="arial">Bear</option>
          <option value="times">Kitchen</option>
          <option value="verdana">Nest</option>
          <option value="arial">House 2</option>
          <option value="times">Car 2</option>
          <option value="verdana">Dog 2</option>
          <option value="arial">Limousine 2</option>
          <option value="times">Tree 2</option>
          <option value="verdana">Street 2</option>
          <option value="arial">Bear 2</option>
          <option value="times">Kitchen 2</option>
          <option value="verdana">Nest 2</option>

        </select>
        <br />
        <br />



        <label>Image selector</label>
        <select name="image" class="image">

          <option value="images/imagepicker.close.png">close</option>
          <option value="images/imagepicker.slider.handle.png">slider</option>
          <option value="images/imagepicker.titlebar.left.png">titlebar-left</option>

        </select>
        <br />
        <br />


        <label>E-Mail</label>
        <input name="email" type="text" class="required validate-email" />

        <br />
        <br />
        <label>Required Dropdown</label>
        <select name="dropdown" class="required">

          <option value="">EMPTY</option>
          <option value="a">Das ist A</option>
          <option value="b">Das ist B</option>
          <option value="c">Das ist C</option>
          <option value="d" selected="selected">Das ist D</option>
          <option value="e">Das ist E</option>
          <option value="f">Das ist F</option>
          <option value="g">Das ist G</option>
          <option value="h">Das ist H</option>
          <option value="i">Das ist I</option>

        </select>
        <br />
        <br />
        <button name="buttonA" value="1">Submit button A</button>
        <button name="buttonB" value="1">Submit button B</button>

      </form>

    </div>

  </body>
</html>