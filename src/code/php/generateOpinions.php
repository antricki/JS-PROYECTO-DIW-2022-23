<?php
function getFormattedOpinions(int $num): string
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
    $result[] = ['id' => ($i === 1), 'title' => 'Opinion ' . $i, 'date' => date('j F Y', random_int(1400000000, time())), 'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptas praesentium, repellatblanditiis, molestias dolorem modi, dolore nulla nihil sequi voluptate dolores quidem ut quaeratodit. Nesciunt facere dolores non?', 'image' => 'https://picsum.photos/450/350/?random&' . $i, 'score' => random_int(1, 50) / 10];
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
  return str_repeat($string, $num);
}