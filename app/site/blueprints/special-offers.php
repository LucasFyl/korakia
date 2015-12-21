<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
    default: Special offers
  landingTitle: 
  	label: Page title - Landing 
  	type: text
  	default: Special Occasions
  weddingTitle:
  	label: Wedding part title
  	type: text
  	default: Weddings
  weddingText1st:
  	label: Main text wedding - 1st column
  	type: textarea
  	width: 1/2
  weddingText2nd:
  	label: Main text wedding - 2nd column
  	type: textarea
  	width: 1/2
  engagementsTitle:
  	label: Engagements part title
  	type: text
  	default: Engagements
  engagementsText:
  	label: Main text Engagements
  	type: textarea
  eventsTitle:
  	label: Events part title
  	type: text
  	default: Events & Retreats
  eventsText:
  	label: Main text Events & Retreats
  	type: textarea
  photosTitle:
  	label: Photoshoots part title
  	type: text
  	default: Photoshoots
  photosText:
  	label: Main text Photoshoots
  	type: textarea