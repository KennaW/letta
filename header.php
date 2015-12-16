<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- === Page Title === -->
	<title><?php echo esc_html( $this->settings['page_title'] ); ?></title>

	<!-- === Embedding style.css === -->
	<link rel="stylesheet" href="<?php echo esc_url( $this->template_url . 'style.css' ); ?>" type="text/css" media="all"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- === Dynamic Style === -->
	<style type="text/css">

		body {
			background-color: #<?php echo $this->settings['background_color']; ?>;
			background-image: <?php echo ( ! empty( $this->settings['image_url'] ) ) ? 'url(' . $this->settings['image_url'] . ')' : 'none'; ?>;
			background-repeat: <?php echo $this->settings['repeat_image']; ?>;
			background-position: <?php echo $this->settings['center_image']; ?>;
			color: #<?php echo $this->settings['text_color']; ?>;
      font-family: helvetica, sans-serif;
		}
    h1, h2, h3, h4 {
      font-family: "Rosario", helvetica;
    }
    h4 {
      margin-bottom: 0;
    }
    p {
      margin-top: .5em;
    }

    .secondary-background {
      background-color: white;
      padding-top: 20px;
      padding-bottom: 50px;
    }

    /* == Layout ==*/
    .display-inline-block {
      display: inline-block;
    }

		.hero_image__width{
			max-width: 100%;
			height: auto;
		}

		.letter__width {
			width: 80%;
		}

		.letter__position {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		.signature_width {
			max-width: 25%;
			height: auto;
		}

		.signature_position {
			text-align: center;
		}

		.kakenya__position{
			margin-left: 15px;
		}

    .logo__position {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .logo__size {
      width: 10%
    }

    .bar__width {
      width: 100%;
    }

    .bar__padding {
      padding-top: 10px;
    }

    .tagline__position {
      text-align: center;
    }

    .profiles__position{
      width: 100%;
      text-align: center;
    }

    .profiles__background{
      background-color: white;
    }

    .profile__image__size{
      width: 100px;
    }

    .profile__text__size{
      width: 600px;
    }

    .profile__text__align {
      text-align: left;
    }

    .profile__color {
      color: #ad1a27;
    }

    .calltoaction__color {
      color: #F37021;
    }

    .calltoaction__position {
      text-align: center;
    }

    .button__donate {
				margin-bottom: 50px;
        text-decoration: none;
        background-color: #F37021;
        color: white;
        border-radius: 4px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        padding: 10px 16px;
        font-size: 2em;
    }

    .button__continue {
      color: #7A121C;
      font-size: 1.5em;
    }

		.button__continue__padding {
			padding-top: 30px;
			padding-bottom: 20px;
		}

		/* === Highlight === */
		::selection {
			color: #<?php echo $this->settings['background_color']; ?>;
			background-color: #<?php echo $this->settings['title_color']; ?>;
		}

		#wpsp-title {
			color: #<?php echo $this->settings['title_color']; ?>;
		}

		#wpsp-continue {
			background-color: #<?php echo $this->settings['continue_button_bg_color']; ?>;
			color: #<?php echo $this->settings['continue_button_text_color']; ?>;
		}

		#wpsp-continue:hover {
			background-color: #<?php echo $this->settings['continue_button_text_color']; ?>;
			color: #<?php echo $this->settings['continue_button_bg_color']; ?>;
		}
  /*<!-- === Popup === -->*/
		a.selected {
		  background-color:#1F75CC;
		  color:white;
		  z-index:100;
		}

		.messagepop {
		  background-color:#FFFFFF;
		  border:1px solid #999999;
		  cursor:default;
		  display:none;
		  margin-top: 15px;
		  position:absolute;
		  text-align:left;
		  width:394px;
		  z-index:50;
		  padding: 25px 25px 20px;
		}

		label {
		  display: block;
		  margin-bottom: 3px;
		  padding-left: 15px;
		  text-indent: -15px;
		}

		.messagepop p, .messagepop.div {
		  border-bottom: 1px solid #EFEFEF;
		  margin: 8px 0;
		  padding-bottom: 8px;
		}

	</style>
  <!-- === Fonts === -->
<link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Pacifico%7CCabin%3A400%2C700%2C600%2C500%7CPacifico%3Aregular%7CArchivo+Narrow%3Aregular%7CRosario%3Aregular%7CRosario%3Aregular%7CRosario%3Aregular&ver=4.3.1" type="text/css" media="all">
</head>
<body>
