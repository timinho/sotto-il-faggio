<div class="row">

  <!-- COL 1 -->
  <div class="col-md-8 col-sm-12">

    <article class="mb-4">
      <h4 class="card-title"><?php echo getTranslation('heading_home','"Sotto il Faggio" Campsite')?></h4>
      <p class="card-text">
        <img class="image-inline float-left mr-4" src="img/photos/ingresso.png" alt="">
        <?php echo getArticle('home_1')?>
      </p>
      <!--
        <img class="image-inline float-left" src="img/photos/sotto_il_faggio.png" alt="">
      -->
    </article>

    <article class="mb-4">

      <h4 class="card-title"><?php echo getTranslation('heading_atmosphere','Atmosphere')?></h4>

      <div class="row">
        <div class="col-6 col-md-5">
          <?php echo renderCarousel('AthmosphereImpression',[
          ['src'=>'img/photos/resized/tents.jpg','alt'=>'foo'],
          ['src'=>'img/photos/resized/river.jpg','alt'=>'foo'],
          ['src'=>'img/photos/resized/pizza.jpg','alt'=>'foo'],
          ['src'=>'img/photos/resized/full_moon.jpg','alt'=>'foo'],
          ]) ?>
        </div>
        <div class="col-6 col-md-7">
          <p class="card-text">
            <?php echo getArticle('atmosphere_1')?>
          </p>
          <p class="card-text">
            <?php echo getArticle('atmosphere_2')?>
          </p>
        </div>
      </div>

    </article>

    <article class="mb-4">

      <h4 class="card-title"><?php echo getTranslation('heading_camping','The camping')?></h4>

      <div class="row">
        <div class="col-6 col-md-5">
          <?php echo renderCarousel('CampingImpression',[
          ['src'=>'img/photos/resized/campfire.jpg','alt'=>'foo'],
          ['src'=>'img/photos/resized/kids_playing.jpg','alt'=>'bar'],
          ['src'=>'img/photos/resized/dinner.jpg','alt'=>'foo'],
          ['src'=>'img/photos/resized/camping_at_night.jpg','alt'=>'foo'],
          ]) ?>
        </div>
        <div class="col-6 col-md-7">
          <p class="card-text">
            <?php echo getArticle('camping_1')?>
          </p>
          <p class="card-text">
            <?php echo getArticle('camping_2')?>
          </p>
        </div>
      </div>

    </article>

    <article class="mb-4" id="services">
      <h4 class="card-title"><?php echo getTranslation('heading_services')?></h4>

      <div class="row">
        <div class="col-6 col-md-5">
          <?php echo renderCarousel('ServicesImpression',[
          ['src'=>'img/photos/resized/stasera_ravioli.jpg','alt'=>'foo'],
          ['src'=>'img/photos/resized/agnese_making_pizza.jpg','alt'=>'bar'],
          ['src'=>'img/photos/resized/luca_agnese.jpg','alt'=>'bar'],
          ]) ?>
        </div>
        <div class="col-6 col-md-7">
          <p class="card-text">
            <?php echo getArticle('services_1')?>
          </p>
          <p class="card-text">
            <?php echo getArticle('services_2')?>
          </p>
          <p class="card-text">
            <h5><?php echo getTranslation('subheading_rental_tents','Rental Tents')?></h5>
            <?php echo getArticle('rentals_1')?>
          </p>
          <p class="card-text">
            <h5><?php echo getTranslation('subheading_groups','Groups & Summer Camps')?></h5>
            <?php echo getArticle('groups_1')?>
          </p>
        </div>
      </div>

    </article>

    <article class="mb-4" id="park">
      <h4 class="card-title"><?php echo getTranslation('heading_park')?></h4>

      <div class="row">
        <div class="col-6 col-md-5">
          <?php echo renderCarousel('ParkImpression',[
          ['src'=>'img/photos/resized/valle_gesso.jpg','alt'=>'foo'],
          ['src'=>'img/photos/resized/elena_sorria.jpg','alt'=>'bar'],
          ['src'=>'img/photos/resized/butterflies.jpg','alt'=>'bar'],
          ]) ?>
        </div>
        <div class="col-6 col-md-7">
          <p class="card-text">
            <?php echo getArticle('where_1')?>
          </p>
          <p class="card-text">
            <?php echo getArticle('where_2')?>
          </p>
        </div>
      </div>

    </article>

    <div id="contact" class="mb-4">

      <h4 class="card-title"><?php echo getTranslation('heading_form','Info & reservations')?></h4>
      <div class="rounded bg-white p-3">
        <form action="https://formspree.io/f/" method="post">

            <div class="mb-3">
              <small>If you contact us for information, make sure you have read the <a href="#" onclick="openFaq()">Frequently Asked Questions</a>. Grazie!</small>
            </div>

            <div class="form-group">
              <label><?php echo getTranslation('form_name','Your name *')?></label>
              <input type="email" class="form-control">
            </div>

            <div class="row">
              <div class="col col-md-6">
                <div class="form-group">
                  <label><?php echo getTranslation('form_email','Your email *')?></label>
                  <input type="email" class="form-control">
                </div>
              </div>
              <div class="col col-md-6">
                <div class="form-group">
                  <label><?php echo getTranslation('form_phone','Your phone *')?></label>
                  <input type="email" class="form-control">
                </div>
              </div>
            </div>

            <div class="p-3 background-grey mb-3">
              <div class="mb-3 hr-divider"><div class="hr-divider-content"><?php echo getTranslation('form_optional_fields','Provide only for reservation')?></div></div>
              <div class="row">
                <div class="col col-md-6">
                  <div class="form-group">
                    <label><?php echo getTranslation('form_dates','Your arrival date')?></label>
                    <input type="text" class="form-control" style="width:200px" placeholder="<?php echo getTranslation('form_date_placeholder','Day / Month / Year')?>">
                    <div><small class="text-muted"><?php echo getTranslation('form_dates_notice',"We're open from June 1st till Sep 30th.")?></small></div>
                  </div>
                </div>
                <div class="col col-md-6">
                  <div class="d-flex">
                    <div class="mr-3">
                      <div class="form-group">
                        <label><?php echo getTranslation('form_adults','Adults')?></label>
                        <input type="number" min="0" class="form-control" style="width:60px">
                      </div>
                    </div>
                    <div class="">
                      <div class="form-group">
                        <label><?php echo getTranslation('form_children','Children')?></label>
                        <input type="number" min="0" class="form-control" style="width:60px" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-md-12">

                  <div>
                    <label><?php echo getTranslation('form_sleeping','We are coming with')?></label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="item" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1"><?php echo getTranslation('form_item','Camper')?></label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="item" id="customRadioInline2" name="customRadioInline2" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2"><?php echo getTranslation('form_item','Large tent')?></label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="item" id="customRadioInline3" name="customRadioInline3" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3"><?php echo getTranslation('form_item','Small tent')?></label>
                  </div>

                </div>
              </div>
            </div>

            <div class="form-group">
              <label><?php echo getTranslation('form_message','Your message')?></label>
              <textarea class="form-control" rows="4"></textarea>
            </div>

            <button class="btn btn-block btn-primary" type="submit"><?php echo getTranslation('form_submit','Send')?></button>

        </form>
      </div>
    </div>

  </div>

  <!-- COL 3 -->
  <div class="col-md-4 col-sm-12">

    <div class="d-lg-block d-md-none">
      <div class="mb-4 d-flex justify-content-between">
        <div>
          <small>Quickly jump to:</small><br />
          <a class="navbar-link" href="#services"><?php echo getTranslation('nav_services','Services')?></a>
          <a class="navbar-link" href="#sidebar-prices"><?php echo getTranslation('nav_prices','Prices')?></a>
          <a class="navbar-link" href="#contact"><?php echo getTranslation('nav_contact','Contact')?></a>
        </div>
        <div>
          <small>Choose your language:</small><br />
          <a class="navbar-flag" href="?language=it"><img src="img/flags/it.png" alt="Versione italiana"></a>
          <a class="navbar-flag ml-2" href="?language=en"><img src="img/flags/en.png" alt="English version"></a>
          <a class="navbar-flag ml-2" href="?language=fr"><img src="img/flags/fr.png" alt="Version francais"></a>
          <a class="navbar-flag ml-2" href="?language=nl"><img src="img/flags/nl.png" alt="Nederlandse versie"></a>
        </div>
      </div>
    </div>

    <article class="card mb-4" id="sidebar-services">
      <header class="card-header">
        <h4 class="card-title"><?php echo getTranslation('heading_services','Services')?></h4>
      </header>
      <div class="card-body pt-0">

        <div class="list-group list-group-flush">

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-tent"></div>
              <div class="flex-grow-1"><a href="#rental-tent" class="text-link"><strong><?php echo getTranslation('rental_tents','Rental tents')?></strong></a></div>
              <div><span class="badge badge-pill badge-warning"><?php echo getTranslation('new','new')?></span></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-plug"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('electricity','Electricity')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-man"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('sanitary','Toilets and showers')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-freezer"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('fridge','Shared fridge')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-washing-machine"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('laundry','Laundry machine')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-beer"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('bar','Bar')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-bread-2"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('daily_bread','Daily fresh bread')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-camp-fire"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('campfire_allowance','Campfire allowed')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-picnic-table"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('picknick_tables','Picknick tables')?></strong></div>
            </div>
          </div>

          <div class="list-group-item list-group-item-transparent">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-map"></div>
              <div class="flex-grow-1"><strong><?php echo getTranslation('park_info','Park info')?></strong></div>
            </div>
          </div>

        </div>
        <p class="card-text mt-3">
          <small><?php echo getArticle('sidebar_services')?></small>
        </p>
      </div>

    </article>

    <article class="card mb-4" id="sidebar-prices">
      <header class="card-header">
        <h4 class="card-title"><?php echo getTranslation('heading_prices')?></h4>
      </header>
      <div class="card-body pt-0">
        <p class="card-text">
          <small><?php echo getArticle('prices_1')?></small>
        </p>

        <div class="list-group list-group-flush mb-4">
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1"><small></small></div>
              <div class="text-muted"><small><strong><?php echo getTranslation('regular','Regular')?></strong> <span class="ml-2"><?php echo getTranslation('weekend','Weekend')?></span></small></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-female-face"></div>
              <div class="flex-grow-1"><?php echo getTranslation('adult','Adult')?></div>
              <div class="text-muted"><strong>€ 4</strong><span class="ml-2">€ 4</span></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-girl-with-barrette"></div>
              <div class="flex-grow-1"><?php echo getTranslation('child','Child (2 to 12 yrs)')?></div>
              <div class="text-muted"><strong>€ 3</strong><span class="ml-2">€ 4</span></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-baby-girl"></div>
              <div class="flex-grow-1"><?php echo getTranslation('baby','Baby')?></div>
              <div class="text-muted"><strong>Free</strong></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-dog"></div>
              <div class="flex-grow-1"><?php echo getTranslation('dog','Dog')?></div>
              <div class="text-muted"><strong>€ 3</strong><span class="ml-2">€ 4</span></div>
            </div>
          </div>

          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-tent"></div>
              <div class="flex-grow-1"><?php echo getTranslation('small_tent','Small tent')?></div>
              <div class="text-muted"><strong>€ 4</strong><span class="ml-2">€ 5</span></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-tent"></div>
              <div class="flex-grow-1"><?php echo getTranslation('large_tent','Large tent')?></div>
              <div class="text-muted"><strong>€ 5</strong><span class="ml-2">€ 6</span></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-camper"></div>
              <div class="flex-grow-1"><?php echo getTranslation('camper','Camper/van')?></div>
              <div class="text-muted"><strong>€ 7</strong><span class="ml-2">€ 8</span></div>
            </div>
          </div>

        </div>

        <div class="list-group list-group-flush">

          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1"><small><?php echo getTranslation('services','Services')?></small></div>
            </div>
          </div>

          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-tent"></div>
              <div class="flex-grow-1"><a href="#rental-tent" class="text-link"><strong><?php echo getTranslation('rental_tents','Rental tents')?></strong></a></div>
              <div class="text-muted"><strong>From € 35</strong></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-plug"></div>
              <div class="flex-grow-1"><?php echo getTranslation('electricity','Electricity')?></div>
              <div class="text-muted"><strong>€ 4</strong></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-shower"></div>
              <div class="flex-grow-1"><?php echo getTranslation('shower','Hot shower')?></div>
              <div class="text-muted"><strong>€ 1</strong></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-washing-machine"></div>
              <div class="flex-grow-1"><?php echo getTranslation('laundry','Laundry')?></div>
              <div class="text-muted"><strong>€ 3</strong></div>
            </div>
          </div>

          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-coffee-bean"></div>
              <div class="flex-grow-1"><?php echo getTranslation('coffee','Coffee')?></div>
              <div class="text-muted"><strong>From € 1</strong></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-bread"></div>
              <div class="flex-grow-1"><?php echo getTranslation('bread','Bread')?></div>
              <div class="text-muted"><strong>€ 2</strong></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-restaurant"></div>
              <div class="flex-grow-1"><?php echo getTranslation('dinner','Dinner (two courses)')?></div>
              <div class="text-muted"><strong>€ 18</strong></div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="mr-3 icon icon-pizza-slice-2"></div>
              <div class="flex-grow-1"><?php echo getTranslation('pizza','Pizza')?></div>
              <div class="text-muted"><strong>€ 12</strong></div>
            </div>
          </div>
        </div>

      </div>
    </article>

    <article class="card mb-4" id="sidebar-tents">
      <header class="card-header">
        <h4 class="card-title mb-0"><?php echo getTranslation('heading_rentals')?></h4>
      </header>
      <div class="card-body pt-0">

      <div class="list-group list-group-flush mb-3">
        <div class="list-group-item">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1"><small><?php echo getTranslation('tents','Per night')?></small></div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="d-flex align-items-center">
            <div class="mr-3 icon icon-tent"></div>
            <div class="flex-grow-1"><?php echo getTranslation('tent_small','Small dome tent (2-3P)')?></div>
            <div class="text-muted"><strong>€ 35</strong></div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="d-flex align-items-center">
            <div class="mr-3 icon icon-tent"></div>
            <div class="flex-grow-1"><?php echo getTranslation('tent_small','Large dome tent (4-5P)')?></div>
            <div class="text-muted"><strong>€ 50</strong></div>
          </div>
        </div>
      </div>

      <div class="list-group list-group-flush">
        <div class="list-group-item">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1"><small><?php echo getTranslation('tents_3','Min. 3 nights')?></small></div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="d-flex align-items-center">
            <div class="mr-3 icon icon-tent"></div>
            <div class="flex-grow-1"><?php echo getTranslation('tent_small','Small dome tent (2-3P)')?></div>
            <div class="text-muted"><strong>€ 35</strong></div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="d-flex align-items-center">
            <div class="mr-3 icon icon-tent"></div>
            <div class="flex-grow-1"><?php echo getTranslation('tent_small','Large dome tent (4-5P)')?></div>
            <div class="text-muted"><strong>€ 50</strong></div>
          </div>
        </div>
      </div>

    </article>

    <article class="card mb-2" id="sidebar-location">
      <header class="card-header">
        <h4 class="card-title"><?php echo getTranslation('heading_location','How to find us?')?></h4>
      </header>
      <div class="card-body pt-0">
        <p class="card-text">
          <strong>Campeggio "Sotto il Faggio"</strong><br />
          loc. San Giacomo Entracque<br />
          Cuneo <img src="img/flags/it.png" style="height:14px">
        </p>
        <p class="card-text">
          <small>Open in:</small><br />
          <a class="text-link" target="_blank" href="https://www.google.com/maps/place/Camping+Sotto+Il+Faggio/">Google Maps</a><br />
          <a class="text-link" target="_blank" href="https://www.openstreetmap.org/?mlat=44.1775&amp;mlon=7.3867#map=18/44.17750/7.38648">OpenStreetMap</a>
        </p>
      </div>
    </article>

    <div class="pl-3">
      <small>
        © 2022 Campeggio Sotto il Faggio<br />
        Alpimanie s.n.c. - P.IVA 02770870042
      </small>
    </div>

  </div>

</div>
