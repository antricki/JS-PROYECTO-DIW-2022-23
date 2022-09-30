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
        <img src="https://picsum.photos/800/450/?random&2" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/800/450/?random&3" class="d-block w-100" alt="...">
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
    <div class="container text-center">
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
        aria-controls="collapseExample">
        Contact Us
      </a>
    </div>

    <div class="collapse container text-center" id="collapseExample">
      <div class="row">
        <div class="col-4 bg-danger p-1 text-center">
          <div class="m-1 p-1 bg-success">
            <div class="m-2">
              <select class="form-select" id="main-selector" onchange="toggleExtraInfoSelector(this)">
                <option value="none" selected>[None]</option>
                <option value="course-selector">[Couses]</option>
                <option value="second-selector">[Second]</option>
                <option value="third-selector">[Third]</option>
              </select>
            </div>
            
            <div class="m-2">
              <select class="form-select display-none children-selector" id="course-selector"
                onchange="toggleInfoPanel(this)">
                <option value="none" selected>[None]</option>
                <option value="smr-info">[SMR]</option>
                <option value="dam-info">[DAM]</option>
                <option value="daw-info">[DAW]</option>
                <option value="asir-info">[ASIR]</option>
              </select>

              <select class="form-select display-none children-selector" id="second-selector"
                onchange="toggleInfoPanel(this)">
                <option value="none" selected>[None]</option>
                <option value="hydrogen-info">[Hydrogen]</option>
                <option value="helium-info">[Helium]</option>
                <option value="lithium-info">[Lithium]</option>
                <option value="beryllium-info">[Beryllium]</option>
              </select>

              <select class="form-select display-none children-selector" id="third-selector"
                onchange="toggleInfoPanel(this)">
                <option value="none" selected>[None]</option>
                <option value="boron-info">[Boron]</option>
                <option value="carbon-info">[Carbon]</option>
                <option value="nitrogen-info">[Nitrogen]</option>
                <option value="oxigen-info">[Oxigen]</option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-8 bg-danger p-1 text-center">
          <div class="m-1 bg-success text-center p-5" id="test">
            <div class="info-pannel bg-warning" id="none">[None]</div>

            <div class="display-none info-pannel bg-warning" id="smr-info">[SMR]</div>
            <div class="display-none info-pannel bg-warning" id="dam-info">[DAM]</div>
            <div class="display-none info-pannel bg-warning" id="daw-info">[DAW]</div>
            <div class="display-none info-pannel bg-warning" id="asir-info">[ASIR]</div>

            <div class="display-none info-pannel bg-warning" id="hydrogen-info">[Hydrogen]</div>
            <div class="display-none info-pannel bg-warning" id="helium-info">[Helium]</div>
            <div class="display-none info-pannel bg-warning" id="lithium-info">[Lithium]</div>
            <div class="display-none info-pannel bg-warning" id="beryllium-info">[Beryllium]</div>

            <div class="display-none info-pannel bg-warning" id="boron-info">[Boron]</div>
            <div class="display-none info-pannel bg-warning" id="carbon-info">[Carbon]</div>
            <div class="display-none info-pannel bg-warning" id="nitrogen-info">[Nitrogen]</div>
            <div class="display-none info-pannel bg-warning" id="oxigen-info">[Oxigen]</div>
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

  <div id="presentation" class="container text-center">
    <div class="row">
      <div class="col bg-danger">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
      <div class="col bg-danger">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
    </div>
    <div class="row">
      <div class="col bg-danger">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
      <div class="col bg-danger">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
          blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
          odit. Nesciunt facere dolores non?</p>
      </div>
    </div>
  </div>
</body>

</html>
