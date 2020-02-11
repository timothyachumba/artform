<?php snippet('header') ?>
<main lang="en">

  <div class="left fixed">
    <div class="hero">
      <div class="logo">
        <svg viewBox="0 0 724 698" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="gradient" class="gradient">
              <stop offset="0%"  stop-color="black" />
              <stop offset="50%" stop-color="white" />
              <stop offset="100%" stop-color="black" />
            </linearGradient>
            <linearGradient id="gradient2" class="gradient">
              <stop offset="0%"  stop-color="black" />
              <stop offset="50%" stop-color="black" />
              <stop offset="100%" stop-color="black" />
            </linearGradient>
          </defs>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M234.44 158.821C186.751 158.821 151.204 127.721 151.204 79.4157C150.542 31.3312 187.192 -0.651641 234.44 0.0100773C281.909 -0.651641 318.117 31.3312 317.455 79.4157C317.455 127.721 282.35 158.821 234.44 158.821ZM167.543 79.4157C167.543 119.56 196.686 144.043 232.674 144.043H236.206C271.974 144.043 301.117 119.56 301.117 79.4157C301.117 39.2718 271.974 14.7884 236.206 14.7884H232.674C196.686 14.7884 167.543 39.2718 167.543 79.4157ZM16.1173 156.616H0V2.21579H123.418V16.9941H16.1173V74.3426H111.055V89.1208H16.1173V156.616ZM358.11 156.616H374.228V92.2088H449.074C464.749 92.2088 468.944 96.1791 468.944 110.296V156.616H485.061V104.781C485.061 90.4443 475.568 82.0626 463.645 82.0626C476.892 77.6511 488.152 63.7551 488.152 44.3449C488.152 20.0821 467.84 2.21579 439.801 2.21579H358.11V156.616ZM374.228 77.4306V16.9941H436.489C458.788 16.9941 471.814 28.0226 471.814 46.5506C471.814 65.0786 458.567 77.4306 436.489 77.4306H374.228ZM633.037 142.499L697.064 2.21579H724V156.616H707.883V14.7884L643.193 156.616H622.439L557.97 15.4501V156.616H541.853V2.21579H569.009L633.037 142.499ZM155.026 250.731V266.833H16.1136V331.901H0.00305001L0.00305176 185.662H16.1136L16.1136 250.731H155.026ZM155.026 490.928V474.826H90.5573V400.052C90.5573 384.392 94.5314 380.201 108.662 380.201H155.026V364.099H103.142C88.7911 364.099 80.4013 373.584 80.4013 385.495C75.9856 372.26 62.0762 361.011 42.6472 361.011C18.3609 361.011 0.477412 381.304 0.477411 409.316L0.47741 490.928H155.026ZM75.7648 474.826H15.27L15.27 412.625C15.27 390.347 26.3091 377.334 44.855 377.334C63.4009 377.334 75.7648 390.568 75.7648 412.625V474.826ZM155.026 546.146V528.721L0.477409 603.936L0.477409 622.464L77.7518 660.182L155.026 697.899V681.136L112.636 660.623V566.66L155.026 546.146ZM97.8432 653.344L15.7115 613.641L97.8432 573.938V653.344Z"/>
        </svg>
      </div>
      <div class="hero-contact">
        <?php echo $site->email()->kirbytext() ?>
        <?php echo $site->instagram()->kirbytext() ?>
      </div>
    </div>
    <div class="services">
      <?php
        $servicesTitle = $page->children()->find('services')->title();
        $servicesTitleCount = strlen($servicesTitle);
        $servicesTitleFirst = floor(($servicesTitleCount / 2) - 1);
        $servicesTitleSecond = ($servicesTitleCount - $servicesTitleFirst);
        $servicesTitleFirstString = substr($servicesTitle, 0, $servicesTitleFirst);
        $servicesTitleSecondString = substr($servicesTitle, $servicesTitleFirst, $servicesTitleSecond);
      ?>
      
      <div class="services-title">
        <span><?php echo $servicesTitleSecondString ?></span>
        <span class="first"><?php echo $servicesTitleFirstString ?></span>
      </div>

      <?php
        $index = 0;
        foreach($page->children('services')->children() as $service): ?>
      <div class="service">
      <h2><?php $number = 2 + $index; echo '&#1010' . $number . ';'?> <?php echo $service->title() ?></h2>
      <?php echo $service->text()->kirbytext() ?>
        <ul>
          <?php foreach($service->steps()->split(',') as $step): ?>
            <li>&rarr; <?php echo $step ?></li>
          <?php endforeach ?> 
        </ul>
      </div>
      <?php $index++; endforeach ?> 
    </div>
  </div>
  <div
    class="clients marquee3k"
    data-speed="1.25"
    data-pausable="true">
    <div>
      <?php foreach($page->clients()->split(',') as $client): ?>
        <span><?php echo $client ?> &bull;&nbsp</span>
      <?php endforeach ?> 
    </div>
  </div>
  <div class="right">
    <div class="about">
      <?php $image = $page->images()->first(); ?>
      <?php if ($image): ?>
        <div class="overlay"></div>
        <div class="building" style="background-image: url(<?php echo $image->url() ?>)"></div>
      <?php endif ?>
      <div class="about-content">
        <div class="arrow">&darr;</div>
        <?php echo $page->abouttext()->kirbytext() ?>
      </div>
    </div>
  </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<?php snippet('footer') ?>