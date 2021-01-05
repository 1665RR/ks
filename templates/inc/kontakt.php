<head> <
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
        <div class="container1">
            <h2>Responsive Form</h2>
        <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

          <form>
          <div class="row">
            <div class="col-25">
              <label for="fname">Ime</label>
            </div>
            <div class="col-75">
              <input type="text"  placeholder="Your name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Prezime</label>
            </div>
            <div class="col-75">
              <input type="text"placeholder="Your last name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="country">Country</label>
            </div>
            <div class="col-75">
              <select>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="subject">Subject</label>
            </div>
            <div class="col-75">
              <textarea placeholder="Write something.." style="height:200px"></textarea>
            </div>
          </div>
          <div class="row">
              <input type="submit" formaction="/online_tecajevi/templates/inc/scc.php" class="btn btn-success"  value="Submit">
          </div>
          </form>
