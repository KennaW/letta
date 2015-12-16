<?php require_once( 'header.php' ); ?>

	<div id="wpsp-container">
  <!-- === Title === -->
    <img class="logo__position logo__size"
   src="wp-content/plugins/wp-splash-page/templates/kakenya/KakenyasDream_logo.png"/>

  <img class="bar__width bar__padding" src="wp-content/plugins/wp-splash-page/templates/kakenya/KakenyasDream_bar_long.png"/>

<div class="secondary-background">
    <h1 class="tagline__position" id="wpsp-title"><?php echo esc_html( $this->settings['title'] ); ?></h1>
<div class="letter__margin">
	<div class="letter__width letter__position">
		<!-- <img class="hero_image__width" src="wp-content/plugins/wp-splash-page/templates/kakenya/school.jpg"/> -->
		<p>
			During this season of giving, I hope you will join me in transforming the lives of girls in Kenya. Today, I share the stories of Linet and Cynthia, graduates of our boarding school, and perfect examples of what we can accomplish together. With your help, we can provide quality education, comprehensive support for their daily needs and a community-focused approach that changes the outlook for girls likely to undergo female genital mutilation and be forced into early marriage.
		</p>
		<div class="display-inline-block">
		<img class="signature_position" src="wp-content/plugins/wp-splash-page/templates/kakenya/Kakenya_signature.png"/>
		<br/>
		<span class="kakenya__position">Kakenya Ntaiya</span>
		<!-- <img class="bar__width bar__padding" src="wp-content/plugins/wp-s
		plash-page/templates/kakenya/KakenyasDream_bar_long.png"/> -->
		</div>

		<div class="display-inline-block profile__image__size">
			<a id="myHeader2" href="javascript:showonlyone('newboxes2');" >
			<img class="profile__image__size" src="wp-content/plugins/wp-splash-page/templates/kakenya/Linet_small.jpg"/>
			<h4 class="profile__text__align profile__color">Linet's Story</h4></a>
		</div>

		<div class="display-inline-block profile__image__size">
			<a id="myHeader3" href="javascript:showonlyone('newboxes3');" >
			<img class="profile__image__size" src="wp-content/plugins/wp-splash-page/templates/kakenya/cynthia_small.jpg"/>
			<h4 class="profile__text__align profile__color">Cynthia's Story</h4></a>
		</div>
	</div>
</div>
<div>

			<div class="newboxes" id="newboxes2" style="padding: 10px 30px 10px 30px; background-color: #EEE; display: none;">The story of Linet Moposhi's inspiring meeting and conversation with President Barak Obama during his visit to Kenya shows the power of girls education.Her story and that conversation which was covered in <i>The Washington Post</i> and Kenya's <i>The Standard</i> newspaper, touched many around the world.</div>
    </div>

     <div class="newboxes" id="newboxes3" style="padding: 10px 30px 10px 30px; background-color: #EEE; display: none;"><p>
			Cynthia Lasoi had her moment with the Kenyan First Lady, Mrs. Margaret Kenyatta. Cynthia, who is 14 years old and in 9th grade, scored the highest mark in our county last year on her national exam. Cynthia, once one of our shyest students, was invited along with 94 other students to Pupils Reward Scheme (PURES) which is a mentorship, motivation and reward program established by Kenya’s First Lady to encourage the brightest boys and girls in the district.</p></div>

<script type="text/javascript">
function showonlyone(thechosenone) {
     $('.newboxes').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).toggle(200);
          }
          else {
               $(this).hide(600);
          }
     });
}
</script>


  <div class="calltoaction__position">
  <h2 class="calltoaction__color">Double your impact!<br/> Your gift will be matched by our Board of Directors through December 31st!</h2>
	<div class="button__continue__padding">
  	<a class="button__donate" href="https://donatenow.networkforgood.org/1440322">Donate</a>
	</div>
  	<a class="button__continue button__continue__padding" href="<?php echo esc_url( $this->current_url ); ?>" ><?php echo esc_html( $this->settings['continue_button_text'] ); ?></a>
  </div>
</div>
</body>
</html>
