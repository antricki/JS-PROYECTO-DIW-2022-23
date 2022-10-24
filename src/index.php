<html>

<head>
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">

    <script src="code/js/index.js"></script>
    <link rel="stylesheet" href="code/css/index.css">
</head>

<body>
    <?php
    $d = __DIR__;
    include "code/php/route.php";
    include "code/php/navbar.php";
    ?>

    <div id="video">
        <video controls class="video">
            <source src="assets/videos/movie.mp4" type="video/mp4">
        </video>
    </div>

    <div id="presentation" class="container text-center">
        <div class="row m-5">
            <div class="col">
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
                    blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
                    odit. Nesciunt facere dolores non?</p>
            </div>
            <div class="col">
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
                    blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
                    odit. Nesciunt facere dolores non?</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
                    blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
                    odit. Nesciunt facere dolores non?</p>
            </div>
            <div class="col">
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellat
                    blanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaerat
                    odit. Nesciunt facere dolores non?</p>
            </div>
        </div>
    </div>

    <div id="carousel" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php echo getFormattedOpinions(50); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="contact">
        <div class="container text-center">
            <a class="btn btn-primary m-5 px-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Contact Us
            </a>
        </div>

        <div class="collapse container text-center" id="collapseExample">
            <div class="row mb-5">
                <div class="col-4 bg-danger p-1 text-center">
                    <div class="m-1 p-1 bg-success">
                        <div class="m-2">
                            <select class="form-select" id="main-selector" onchange="toggleExtraInfoSelector(this)">
                                <option value="none" selected>[None]</option>
                                <option value="course-selector">[Courses]</option>
                                <option value="second-selector">[Second]</option>
                                <option value="third-selector">[Third]</option>
                            </select>
                        </div>

                        <div class="m-2">
                            <select class="form-select display-none children-selector" id="course-selector" onchange="toggleInfoPanel(this)">
                                <option value="none" selected>[None]</option>
                                <option value="smr-info">[SMR]</option>
                                <option value="dam-info">[DAM]</option>
                                <option value="daw-info">[DAW]</option>
                                <option value="asir-info">[ASIR]</option>
                            </select>

                            <select class="form-select display-none children-selector" id="second-selector" onchange="toggleInfoPanel(this)">
                                <option value="none" selected>[None]</option>
                                <option value="hydrogen-info">[Hydrogen]</option>
                                <option value="helium-info">[Helium]</option>
                                <option value="lithium-info">[Lithium]</option>
                                <option value="beryllium-info">[Beryllium]</option>
                            </select>

                            <select class="form-select display-none children-selector" id="third-selector" onchange="toggleInfoPanel(this)">
                                <option value="none" selected>[None]</option>
                                <option value="boron-info">[Boron]</option>
                                <option value="carbon-info">[Carbon]</option>
                                <option value="nitrogen-info">[Nitrogen]</option>
                                <option value="oxygen-info">[Oxygen]</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-8 bg-danger p-1 text-center">
                    <div class="m-1 bg-success text-center p-5" id="test">
                        <div class="info-panel bg-warning" id="none">[None]</div>

                        <div class="display-none info-panel bg-warning" id="smr-info">[SMR]</div>
                        <div class="display-none info-panel bg-warning" id="dam-info">[DAM]</div>
                        <div class="display-none info-panel bg-warning" id="daw-info">[DAW]</div>
                        <div class="display-none info-panel bg-warning" id="asir-info">[ASIR]</div>

                        <div class="display-none info-panel bg-warning" id="hydrogen-info">[Hydrogen]</div>
                        <div class="display-none info-panel bg-warning" id="helium-info">[Helium]</div>
                        <div class="display-none info-panel bg-warning" id="lithium-info">[Lithium]</div>
                        <div class="display-none info-panel bg-warning" id="beryllium-info">[Beryllium]</div>

                        <div class="display-none info-panel bg-warning" id="boron-info">[Boron]</div>
                        <div class="display-none info-panel bg-warning" id="carbon-info">[Carbon]</div>
                        <div class="display-none info-panel bg-warning" id="nitrogen-info">[Nitrogen]</div>
                        <div class="display-none info-panel bg-warning" id="oxygen-info">[Oxygen]</div>
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

    <?php include "code/php/footer.php"; ?>
</body>

</html>

<?php

function getFormattedOpinions(int $num)
{
    $opinions = '';

    foreach (createOpinion($num) as $opinion) {
        $opinions .= formatOpinion($opinion);
    }

    return $opinions;
}

function createOpinion(int $num): array
{
    $result = [];

    for ($i = 1; $i <= $num; $i++) {
        $result[] = [
            'id' => ($i === 1),
            'title' => 'Opinion #' . $i,
            'date' => date('j F Y', random_int(1400000000, time())),
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellatblanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaeratodit. Nesciunt facere dolores non?',
            'image' => 'https://picsum.photos/450/350/?random&' . random_int(1, 100),
            'score' => random_int(1, 50) / 10
        ];
    }

    return $result;
}

function formatOpinion(array $opinion): string
{
    $text = ''; // '★'

    $text .= "<div class='carousel-item " . ($opinion['id'] ? 'active' : '') . "'>";
    $text .= "<div class='container'><div class='row m-3'>";
    $text .= "<img src='" . $opinion['image'] . "' class='col-auto carrousel-image' alt='image'>";
    $text .= "<div class='col p-4 d-flex flex-column position-static'>";
    $text .= "<h2 class='mb-3'>" . $opinion['title'] . "</h2>";
    $text .= "<h5 class='mb-3 text-muted'>" . $opinion['date'] . "</h5>";
    $text .= "<p class='mb-auto'>" . repeatString($opinion['text'] . '</br></br>', random_int(1, 3)) . "</p>";
    $text .= "</div></div>";
    $text .= "<div class='row m-3'><div class='col-auto'>";
    $text .= "<span class='mb-3 text-warning pl-5 fs-5'>" . repeatString('★', ceil($opinion['score'])) . "</span>";
    $text .= "<span class='mb-3 text-muted pl-5 fs-5'>" . repeatString('★', 5 - ceil($opinion['score'])) . "</span>";
    $text .= "</div><div class='col-auto'>";
    $text .= "<span class='mb-3 text-muted pl-5 fs-5'>" . $opinion['score'] . "</span>";
    $text .= "</div></div></div></div>";

    return $text;
}

function repeatString(string $string = '?', int $num = 1): string
{
    $text = '';

    for ($i = 0; $i < $num; $i++) {
        $text .= $string;
    }

    return $text;
}
