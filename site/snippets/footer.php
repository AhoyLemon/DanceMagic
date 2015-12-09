    <footer>
      <div class="inner">
        <section>
          <a href="<?php echo $site->google_map(); ?>" class="address">
            <img src="<?php echo $site->url(); ?>/assets/svg/gmap.svg" class="logo">
            <address>
              <span><?php echo $site->title(); ?></span>
              <span><?php echo $site->street_address(); ?></span>
              <span><?php echo $site->city(); ?>,<?php echo $site->state(); ?> <?php echo $site->zip(); ?></span>
            </address>
          </a>
        </section>
        <section class="contact email">
          <a href="mailto:<?php echo $site->email(); ?>" class="email">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <path d="M53.5 5.97c-8.5 0-16.5 2-24 6.5s-13.5 10.5-18 18S5 45.97 5 53.97c0 11.5 4 21 12.5 28.5s19.5 11.5 33 11.5c9 0 17-1.5 23.5-4.5 2-1 3-3 2.5-5.5-1-2-3-3-5.5-2.5-6 2.5-13 4-20.5 4-6 0-11.5-1.5-17-4s-10-6.5-13.5-11.5-5-10.5-5-16.5c0-6.5 1.5-12.5 5-18.5s8-11 14-15 12.5-6 19-6c9 0 16.5 3 23.5 8.5 7 6 10.5 12.5 10.5 20 0 6-1.5 11.5-5 16s-7 7-10.5 7c-3 0-5-1.5-5-4.5 0-1 0-2.5.5-4l6.5-23.5c.5-2.5-1-4.5-3.5-4.5s-5 2-6 4.5l-.5 1.5c-1-2.5-2.5-4.5-4.5-5.5-1.5-1-4-1.5-6.5-1.5-4.5 0-9 1-12.5 3.5s-7.5 6.5-9.5 10.5c-2.5 5.5-3.5 9-3.5 15 0 4.5 1.5 9 5 12 3 3.5 7 5 11.5 5 6 0 11-2.5 15-7.5.5 2 2 4 4.5 5.5 2 1.5 5 2 8 2 2.5 0 5.5-.5 8.5-2s5.5-3.5 8-6 4.5-5.5 6-9.5 2.5-8 2.5-12.5c0-12-4-21-12-28.5-7.5-6-17.5-9.5-30.5-9.5zm-.5 30c2.5 0 4.5 1 6 2.5s2 4 2 7.5c0 4.5-1.5 9-4.5 13.5s-6.5 7-10.5 7c-2.5 0-4.5-1-6-3s-2-4.5-2-7.5c0-5 1.5-9.5 4.5-14 3.5-4 7-6 10.5-6z"></path>
            </svg>
            <span><?php echo $site->email(); ?></span>
          </a>
        </section>
        <section class="contact phone">
          <a href="tel:<?php echo $site->tel(); ?>" class="phone">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <path d="M91.7 67.6c-6.4 0-12.5-1-18.3-2.9-1.8-.5-3.8-.1-5.2 1.2L57 77.2C42.5 69.8 30.7 58 23.3 43.5l11.2-11.3c1.4-1.3 1.8-3.3 1.3-5.1-1.9-5.7-2.9-11.9-2.9-18.2 0-2.8-2.3-5.1-5.1-5.1H9.9c-2.8-.1-5.1 2.2-5.1 5 0 48 38.9 86.9 86.9 86.9 2.8 0 5.1-2.3 5.1-5.1V72.8c.1-2.9-2.3-5.2-5.1-5.2z"></path>
            </svg>
            <span><?php echo $site->tel(); ?></span>
          </a>
        </section>
        <section class="social">
          <a href="<?php echo $site->facebook(); ?>" class="facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <path d="M91.6 3.8H9.9c-2.8 0-5.1 2.3-5.1 5.1v81.7c0 2.8 2.3 5.1 5.1 5.1h44V60.2h-12V46.3h12V36.1c0-11.8 7.2-18.3 17.8-18.3 5.1 0 9.4.3 10.7.5v12.3h-7.3c-5.8 0-6.9 2.8-6.9 6.8v8.9h13.7l-1.8 13.9H68.2v35.5h23.4s5.1-2.2 5.1-5V8.9c0-2.8-2.3-5.1-5.1-5.1z" class="box"></path>
            </svg>
          </a>
          <a href="<?php echo $site->instagram(); ?>" class="instagram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <path d="M85.9 3.8H15.7c-6 0-10.9 4.9-10.9 10.9v70.2c0 6 4.9 10.9 10.9 10.9h70.1c6 0 10.9-4.9 10.9-10.9V14.7c.1-6-4.8-10.9-10.8-10.9zM68.7 16.9c0-1.4 1.2-2.6 2.6-2.6h12.4c1.4 0 2.6 1.1 2.6 2.6v12.4c0 1.4-1.2 2.6-2.6 2.6H71.3c-1.4 0-2.6-1.1-2.6-2.6V16.9zM50.9 32.3c9.8 0 17.7 7.9 17.7 17.7 0 9.7-7.9 17.7-17.7 17.7-9.8 0-17.7-7.9-17.7-17.7 0-9.8 7.9-17.7 17.7-17.7zm35.6 50.2c0 1.4-1.2 2.6-2.6 2.6h-66c-1.4 0-2.6-1.1-2.6-2.6v-40h8.6c-.6 2.4-1 4.8-1 7.4 0 15.4 12.6 27.9 28 27.9s28-12.5 28-27.9c0-2.6-.3-5-1-7.4h8.6v40z" class="camera"></path>
            </svg>
          </a>
        </section>
      </div>
    </footer>
    <?php snippet('analytics') ?>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
    <?php echo js('assets/js/min/dance.min.js') ?>
  </body>
</html>