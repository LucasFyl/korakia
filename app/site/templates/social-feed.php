<?php
  // Instagram API
  require 'instagram.class.php';

  function getInstagramData(){
      
      // Initialize class for public requests
      // Setup class
      $instagram = new Instagram(array(
              'apiKey'      => '73b2123729934af5acbe7d275e382eef',
              'apiSecret'   => '7d065e9b5bcd47c399139ecb79d2bc92',
              'apiCallback' => 'http://misterbrowns.com/' // must point to success.php
      ));
      
      $instagram->setAccessToken('509731687.73b2123.3f895a50426f4fed96adbfb6c1c123cc');
      
      $data = $instagram->getUserMedia('52746983', 7);
      return $data;
  }

  $listInstagramImages = getInstagramData();

  // Limite caption size
  $limitCaptionSize = 250;

?>

<?php snippet('head') ?>
  <?php snippet('header') ?>

  <div id="content" class="social-feed">

    <div class="main container">
      <div id="instagram-area">
        <div class='instagram-elt explore'>
          <div class="vertical_align">
            <div class="vertical_align_inner">
              Explore
               <img src='<?php echo $page->image('explore-arrow.jpg')->url() ?>' />
             </div>
           </div>
        </div>
        <?php
          foreach ($listInstagramImages->data as $key => $data) {
            $caption = '';
            if ($key == 0) {
              if(isset($data->caption->text) && $data->caption->text != '') {
                $caption = substr($data->caption->text,0, $limitCaptionSize);
              }
              echo "
                <div class='instagram-elt first image ". $data->id ."' data-id='". $data->id ."' >
                  <img src=\"{$data->images->standard_resolution->url}\" class='instagram-image' >
                  <a href='". $data->link ."' target='_blank'>
                    <img src='". $page->image('instagram-open-link.png')->url() ."' class='go-to-instagram' alt='Go to Instagram' />
                  </a>
                </div>
                <div class='instagram-elt first text ". $data->id ."' data-id='". $data->id ."'>
                  <img src='". $page->image('arrow-left.png')->url() ."' class='arrow-text arrow-text-normal' />
                  <img src='". $page->image('arrow-left-hover.png')->url() ."' class='arrow-text arrow-text-hover' />
                  <img src='". $page->image('arrow-bg-left.png')->url() ."' class='arrow-bg' />
                  <div class='inner'>
                    <div class='like'>
                       <img src='". $page->image('like.png')->url() ."' alt='Facebook likes' class='like-image' />
                       <img src='". $page->image('like-hover.png')->url() ."' alt='Facebook likes' class='like-image-hover' />
                       <div class='nb-like'>". $data->likes->count ."</div>
                       <div class='clear'></div>
                    </div>
                    <div class='liseret'></div>
                    <div class='caption'>
                      ". $caption ."
                    </div>
                  </div>
                </div>
              ";
            } else {
              if ($key%3 == 1) {
                if(isset($data->caption->text) && $data->caption->text != '') {
                  $caption = substr($data->caption->text, 0, $limitCaptionSize);
                }
                echo "
                  <div class='instagram-elt img-left image ". $data->id ."' data-id='". $data->id ."' >
                    <img src=\"{$data->images->standard_resolution->url}\" class='instagram-image' >
                    <a href='". $data->link ."' target='_blank'>
                      <img src='". $page->image('instagram-open-link.png')->url() ."' class='go-to-instagram' alt='Go to Instagram' />
                    </a>
                  </div>
                  <div class='instagram-elt img-left text ". $data->id ."' data-id='". $data->id ."'>
                    <img src='". $page->image('arrow-left.png')->url() ."' class='arrow-text arrow-text-normal' />
                    <img src='". $page->image('arrow-left-hover.png')->url() ."' class='arrow-text arrow-text-hover' />
                    <img src='". $page->image('arrow-bg-left.png')->url() ."' class='arrow-bg' />
                    <div class='inner'>
                      <div class='like'>
                         <img src='". $page->image('like.png')->url() ."' alt='Facebook likes' class='like-image' />
                         <img src='". $page->image('like-hover.png')->url() ."' alt='Facebook likes' class='like-image-hover' />
                         <div class='nb-like'>". $data->likes->count ."</div>
                         <div class='clear'></div>
                      </div>
                      <div class='liseret'></div>
                      <div class='caption'>
                        ". $caption ."
                      </div>
                    </div>
                  </div>
                ";
              } elseif ($key%3 == 0) {
                if(isset($data->caption->text) && $data->caption->text != '') {
                  $caption = substr($listInstagramImages->data[$key-1]->caption->text, 0, $limitCaptionSize);
                }
                echo "
                  <div class='instagram-elt img-top image ". $data->id ."' data-id='". $data->id ."' >
                    <img src=\"{$data->images->standard_resolution->url}\" class='instagram-image' >
                    <a href='". $data->link ."' target='_blank'>
                      <img src='". $page->image('instagram-open-link.png')->url() ."' class='go-to-instagram' alt='Go to Instagram' />
                    </a>
                  </div>
                  <div class='instagram-elt img-top text ". $listInstagramImages->data[$key-1]->id ."' data-id='". $listInstagramImages->data[$key-1]->id ."'>
                    <img src='". $page->image('arrow-top.png')->url() ."' class='arrow-text arrow-text-normal' />
                    <img src='". $page->image('arrow-top-hover.png')->url() ."' class='arrow-text arrow-text-hover' />
                    <img src='". $page->image('arrow-bg-top.png')->url() ."' class='arrow-bg' />
                    <div class='inner'>
                      <div class='like'>
                         <img src='". $page->image('like.png')->url() ."' alt='Facebook likes' class='like-image' />
                         <img src='". $page->image('like-hover.png')->url() ."' alt='Facebook likes' class='like-image-hover' />
                         <div class='nb-like'>". $data->likes->count ."</div>
                         <div class='clear'></div>
                      </div>
                      <div class='liseret'></div>
                      <div class='caption'>
                        ". $caption ."
                      </div>
                    </div>
                  </div>
                ";
              } else {
                if(isset($data->caption->text) && $data->caption->text != '') {
                  $caption = substr($listInstagramImages->data[$key+1]->caption->text, 0, $limitCaptionSize);
                }
                echo "
                  <div class='instagram-elt img-right image ". $data->id ."' data-id='". $data->id ."' >
                    <img src=\"{$data->images->standard_resolution->url}\" class='instagram-image' >
                    <a href='". $data->link ."' target='_blank'>
                      <img src='". $page->image('instagram-open-link.png')->url() ."' class='go-to-instagram' alt='Go to Instagram' />
                    </a>
                  </div>
                  <div class='instagram-elt img-right text ". $listInstagramImages->data[$key+1]->id ."' data-id='". $listInstagramImages->data[$key+1]->id ."'>
                    <img src='". $page->image('arrow-right.png')->url() ."' class='arrow-text arrow-text-normal' />
                    <img src='". $page->image('arrow-right-hover.png')->url() ."' class='arrow-text arrow-text-hover' />
                    <img src='". $page->image('arrow-bg-right.png')->url() ."' class='arrow-bg' />
                    <div class='inner'>
                      <div class='like'>
                         <img src='". $page->image('like.png')->url() ."' alt='Facebook likes' class='like-image' />
                         <img src='". $page->image('like-hover.png')->url() ."' alt='Facebook likes' class='like-image-hover' />
                         <div class='nb-like'>". $data->likes->count ."</div>
                         <div class='clear'></div>
                      </div>
                      <div class='liseret'></div>
                      <div class='caption'>
                        ". $caption ."
                      </div>
                    </div>
                  </div>
                ";
              }
            }
          }
        ?>
      </div>
    </div>

  </div> <!-- / #content  -->

<?php snippet('footer') ?>

<script type="text/javascript">

  var lastId;

  // Detect bottom page on scroll
  window.onscroll = function (e) {

    //console.log("Scroll");
    var nbElt = ($('.instagram-elt').length - 2);
    var lastId = $('.instagram-elt').eq(nbElt).attr('data-id');

    if($(window).scrollTop() + $(window).height() == $(document).height()) {
      getInstagramLastImages('https://api.instagram.com/v1/users/52746983/media/recent?access_token=509731687.73b2123.3f895a50426f4fed96adbfb6c1c123cc&max_id='+ lastId +'&count=3');
    }
  };

  function getInstagramLastImages(url) {
    console.log("Call ajax");
    $.ajax({
        method: "GET",
        url: url,
        dataType: "jsonp",
        jsonp: "callback",
        jsonpCallback: "jsonpcallback",
        success: function(data) {
          $.each(data.data, function(i, item) {
            var eltImage,
                eltLink,
                eltText,
                eltId,
                nbLike,
                idText,
                limitCaptionSize = 250;

            if(i == 0) {
              eltImage = item.images.standard_resolution.url;
              eltLink = item.link;
              eltText = item.caption.text.substr(0, limitCaptionSize);
              eltId = item.id,
              nbLike = item.likes.count,
              idText = item.id;
            } else if(i == 1) {
              eltImage = item.images.standard_resolution.url;
              eltLink = item.link;
              eltText = data.data[i+1].caption.text.substr(0, limitCaptionSize);
              eltId = item.id,
              nbLike = data.data[i+1].likes.count,
              idText = data.data[i+1].id;
            } else {
              eltImage = item.images.standard_resolution.url;
              eltLink = item.link;
              eltText = data.data[i-1].caption.text.substr(0, limitCaptionSize);
              eltId = item.id,
              nbLike = data.data[i-1].likes.count,
              idText = data.data[i-1].id;
            }

            //Add new images
            $('#instagram-area').append(buildInstagramElt(i, eltImage , eltLink, eltText, nbLike, eltId, idText));
          });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Check your internet Connection");
        }
    });
  };

  // Build news instagram elements
  function buildInstagramElt(cpt, image, link, text, like, id, idText) {
    console.log("cpt : "+ cpt);

    var totalElt = $('.instagram-elt.image').length;

    var imgClass,
        textClass;

    if(cpt == 0) {
      imgClass = "img-left";
      textClass = "img-left";
      imgArrow = '<img src="<?php echo $page->image('arrow-left.png')->url() ?>" class="arrow-text arrow-text-normal" />';
      imgArrowHover = '<img src="<?php echo $page->image('arrow-left-hover.png')->url() ?>" class="arrow-text arrow-text-hover" />';
      imgArrowBg = '<img src="<?php echo $page->image('arrow-bg-left.png')->url() ?>" class="arrow-bg" />';
    } else if (cpt == 1) {
      imgClass = "img-top";
      textClass = "img-right";
      imgArrow = '<img src="<?php echo $page->image('arrow-right.png')->url() ?>" class="arrow-text" />';
      imgArrowHover = '<img src="<?php echo $page->image('arrow-right-hover.png')->url() ?>" class="arrow-text arrow-text-hover" />';
      imgArrowBg = '<img src="<?php echo $page->image('arrow-bg-right.png')->url() ?>" class="arrow-bg" />';
    } else {
      imgClass = "img-right";
      textClass = "img-top";
      imgArrow = '<img src="<?php echo $page->image('arrow-top.png')->url() ?>" class="arrow-text" />';
      imgArrowHover = '<img src="<?php echo $page->image('arrow-top-hover.png')->url() ?>" class="arrow-text arrow-text-hover" />';
      imgArrowBg = '<img src="<?php echo $page->image('arrow-bg-top.png')->url() ?>" class="arrow-bg" />';
    }

    var newInstagramElt = '<div class="instagram-elt '+ imgClass +' image '+ id +'" data-id="'+ id +'" style="height:'+ $('.instagram-elt.image').eq(0).height() +'px"><img src="'+ image +'" class="instagram-image" /><a href="'+ link +'" target="_blank"><img src="<?php echo $page->image('instagram-open-link.png')->url() ?>" class="go-to-instagram" alt="Go to Instagram" /></a></div><div class="instagram-elt '+ textClass +' text '+ idText +'" style="height:'+ $('.instagram-elt.image').eq(0).height() +'px" data-id="'+ idText +'">'+ imgArrow +''+ imgArrowHover +''+ imgArrowBg +'<div class="inner"><div class="like"><img src="<?php echo $page->image('like.png')->url() ?>" alt="Facebook likes" class="like-image" /><img src="<?php echo $page->image('like-hover.png')->url() ?>" alt="Facebook likes"  class="like-image-hover" /><div class="nb-like">'+ like +'</div><div class="clear"></div></div><div class="liseret"></div><div class="caption">'+ text +'</div></div></div>';

    return newInstagramElt;
  };

</script>
