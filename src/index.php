<html>

<head>
  <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
  
  <script src="code/js/wScript.js"></script>
  <link rel="stylesheet" href="code/css/wStyles.css">
</head>

<body>

  <div id="video">
    <video controls class="video">
      <source src="assets/videos/movie.mp4" type="video/mp4">
    </video>
  </div>

  <div id="presentation" class="container text-center">
    <div class="row">
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
    </div>
    <div class="row">
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
    </div>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/800/450/?random&1" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/800/450/?random&1" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/800/450/?random&1" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div id="contact">
  <div id="contact">
    <div class="container text-center">
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
        aria-controls="collapseExample">
        Contact Us
      </a>
    </div>

    <div class="collapse container text-center" id="collapseExample">
      <div class="row">
        <div class="col-4 bg-danger p-1">
          <div class="m-1 p-1 bg-success">
            <div class="m-1">
              <select class="form-select" id="main-selector" onchange="toggleExtraInfoSelector(this)">
                <option value="none" selected>Open this select menu</option>
                <option value="selector-courses-info">Couses</option>
                <option value="selector-general-info">Genral</option>
              </select>

              <select class="form-select display-none children-selector" id="selector-courses-info" onchange="toggleInfoPanel(this)">
                <option value="none" selected>Open this select menu</option>
                <option value="smr-info">SMR</option>
                <option value="dam-info">DAM</option>
                <option value="daw-info">DAW</option>
                <option value="asir-info">ASIR</option>
              </select>

              <select class="form-select display-none children-selector" id="selector-general-info" onchange="toggleInfoPanel(this)">
                <option value="none" selected>Open this select menu</option>
                <option value="location">Ubicación</option>
                <option value="patata">Patata</option>
                <option value="tomate">Tomate</option>
                <option value="cebolla">Cebolla</option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-8 bg-danger p-1">
          <div class="m-1 bg-success" id="test">
            <div class="display-none info-pannel" id="smr-info">
              [SMR] Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus adipisci doloribus nesciunt
              sapiente labore accusantium illo. Quibusdam dicta unde, sapiente tenetur, cumque praesentium sunt
              molestias illum odit nulla vel numquam!
            </div>
            <div class="display-none info-pannel" id="dam-info">
              [DAM] Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus adipisci doloribus nesciunt
              sapiente labore accusantium illo. Quibusdam dicta unde, sapiente tenetur, cumque praesentium sunt
              molestias illum odit nulla vel numquam!
            </div>
            <div class="display-none info-pannel" id="daw-info">
              [DAW] Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus adipisci doloribus nesciunt
              sapiente labore accusantium illo. Quibusdam dicta unde, sapiente tenetur, cumque praesentium sunt
              molestias illum odit nulla vel numquam!
            </div>
            <div class="display-none info-pannel" id="asir-info">
              [ASIR] Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus adipisci doloribus nesciunt
              sapiente labore accusantium illo. Quibusdam dicta unde, sapiente tenetur, cumque praesentium sunt
              molestias illum odit nulla vel numquam!
            </div>
          </div>
        </div>
      </div>

      <!-- <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->
    </div>
  </div>
  </div>

  <div id="presentation" class="container text-center">
    <div class="row">
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
    </div>
    <div class="row">
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
      <div class="col tmp">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
    </div>
  </div>
</body>

</html>
