<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>0428webhomework</title>

    <style>
      * {
        box-sizing: border-box;
        margin: 0px;
        padding: 0px;
      }

      .container {
        max-width: 1200px;
        height: max-content;
        margin: 0 auto;
        padding: 10px;
      }

      .word {
        height: 100px;
        text-align: center;
      }

      .box {
        float: left;
        text-align: center;
        width: 20%;
        padding: 50px;
        height: 50px;
      }

      .col-2 {
        width: 100%;
      }

      .col-3 {
        width: 33%;
        margin: 10px;
        float: left;
      }

      .col-4 {
        width: 33%;
        margin: 10px;
        float: left;
      }

      .col-5 {
        width: 33%;
        margin: 10px;
        float: left;
      }

      .col-6 {
        width: 100%;
      }

      /* row-1 */
      /* 加上一點間距 */
      row-1 {
        margin-bottom: 10px;
      }

      .box11 {
        background-color: rgb(227, 234, 232);
      }

      /* row-2 */
      .row-2 {
        margin-bottom: 15px;
      }

      .box21 {
        background-color: rgb(227, 234, 232);
      }

      .box22 {
        background-color: rgb(227, 234, 232);
      }

      .box23 {
        background-color: rgb(227, 234, 232);
      }

      .row-3 {
        margin-bottom: 15px;
      }

      /* row-3 */
      .box31 {
        background-color: rgb(227, 234, 232);
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div style="text-align: center;">
        <h1>LOGO</h1>
      </div>

      <div class="box" style="background-color: #dbcccc;">
        <p>Home</p>
      </div>
      <div class="box" style="background-color: #dbcccc">
        <p>Products</p>
      </div>
      <div class="box" style="background-color: #dbcccc">
        <p>Service</p>
      </div>
      <div class="box" style="background-color: #dbcccc">
        <p>About</p>
      </div>
      <div class="box" style="background-color: #dbcccc">
        <p>Contact</p>
      </div>
      &nbsp;
      <div class="row-1">
        <div class="box box11 col-2">
          <div class="word">Feature</div>
        </div>
        &nbsp;
      </div>

      <div class="row-2">
        <div class="box box21 col-3">
          <div class="word">Column one</div>
        </div>
        &nbsp
        </div>
                        &nbsp;
                        <div class="box box22 col-4">
                            <div class="word">Column Two</div>
                        </div>
                        &nbsp;
                        <div class="box box23 col-5">
                            <div class="word">Column Three</div>
                        </div>
                        <div class="clear-fix">
                        </div>
                        &nbsp;
                        <div class="row-3">
                            <div class="box box31 col-6">
                                <div class="word">© 2023 Kaidi Chang</div>
                            </div>
                            &nbsp;
                            <div class="clear-fix"></div>
                        </div>
    </body>

</html>