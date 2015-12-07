<?php require_once( 'header.php' ); ?>

	<div id="wpsp-container">
  <!-- === Title === -->
    <img class="logo__position logo__size"
   src="wp-content/plugins/wp-splash-page/templates/kakenya/KakenyasDream_logo.png"/>

  <img class="bar__width bar__padding" src="wp-content/plugins/wp-splash-page/templates/kakenya/KakenyasDream_bar_long.png"/>

<div class="secondary-background">
    <h1 class="tagline__position" id="wpsp-title"><?php echo esc_html( $this->settings['title'] ); ?></h1>
  <div class="profiles__position">
    <div class="display-inline-block profile__text__size">
      <h4 class="profile__text__align profile__color">Linet's Story</h4>
      <p class="profile__text__align">The story of Linet Moposhi's inspiring meeting and conversation with President Barak Obama during his visit to Kenya shows the power of girls education. Her story and that conversation which was covered in <i>The Washington Post</i> and Kenya's <i>The Standard</i> newspaper, touched many around the world.</p>
    </div>
    <div class="display-inline-block profile__image__size">
      <img class="profile__image__size" src="wp-content/plugins/wp-splash-page/templates/kakenya/placeholder.jpg"/>
    </div>
  </div>
  <div class="profiles__position">
    <div class="display-inline-block profile__image__size">
      <img class="profile__image__size" src="wp-content/plugins/wp-splash-page/templates/kakenya/placeholder.jpg"/>
    </div>
    <div class="display-inline-block profile__text__size">
      <h4 class="profile__text__align profile__color">Cynthia's Story</h4>
      <p class="profile__text__align">The story of Linet Moposhi's inspiring meeting and conversation with President Barak Obama during his visit to Kenya shows the power of girls education. Her story and that conversation which was covered in <i>The Washington Post</i> and Kenya's <i>The Standard</i> newspaper, touched many around the world.</p>
    </div>
  </div>
  <div class="calltoaction__position">
  <h2 class="calltoaction__color">Yes! I will dream with kenya and help girls like Linet and Cynthia reach their goals!</h2>
  <a class="button__donate" href="https://donatenow.networkforgood.org/1440322">Donate</a>
  	<a class="button__continue" href="<?php echo esc_url( $this->current_url ); ?>" ><?php echo esc_html( $this->settings['continue_button_text'] ); ?></a>
  </div>
</div>
</body>
</html>
