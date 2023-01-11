<?php

// Functions
function getLanguage() {
  return isset($_GET['language']) ? $_GET['language'] : 'en';
}
function getPage() {
  return isset($_GET['page']) ? $_GET['page'] : 'home';
}

function getTranslation($key, $fallback = null) {
  global  $translations;

  $language = getLanguage();
  if(isset($translations[$language][$key])) {
    return $translations[$language][$key];
  }
  return isset($fallback) ? $fallback : '--translate me--';
}

function getArticle($key) {
  global $articles;

  $language = getLanguage();
  if(isset($articles[$language][$key])) {
    return $articles[$language][$key];
  }
  return '';
}

function renderCarousel($id,$images) {



  $html = '<div id="'.$id.'" class="mini-carousel carousel slide mb-4" data-ride="carousel" align="center">';
    $html .= '<div class="carousel-inner">';

      $cnt= 0;
      foreach($images as $image) {
        $html .= '<div class="carousel-item '.($cnt==0?'active':'').'">';
          $html .= '<img src="'.$image['src'].'" alt="'.$image['alt'].'">';
        $html .= '</div>';
        $cnt++;
      }

    $html .= '</div>';

    $html .= '<a class="carousel-control-prev" href="#'.$id.'" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>';
    $html .= '<a class="carousel-control-next" href="#'.$id.'" data-slide="next"><span class="carousel-control-next-icon"></span></a>';

    $html .= '<ol class="carousel-indicators list-inline">';

      $cnt= 0;
      foreach($images as $image) {
        $html .= '<li class="list-inline-item ' .($cnt==0?'active':'').'">';
          if($cnt ==0) {
            $html .= '<a id="carousel-selector-0" class="'.($cnt==0?'selected':'').'" data-slide-to="0" data-target="#'.$id.'">';
          } else {
            $html .= '<a id="carousel-selector-'.$cnt.'" data-slide-to="'.$cnt.'" data-target="#'.$id.'">';
          }
            $html .= '<img src="'.$image['src'].'" class="img-fluid">';
          $html .= '</a>';
        $html .= '</li>';
        $cnt++;
      }

    $html .= '</ol>';

  $html .= '</div>';

  return $html;
}

?>
