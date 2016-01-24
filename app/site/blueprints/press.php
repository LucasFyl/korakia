<?php if(!defined('KIRBY')) exit ?>

title: News
pages:
  template: single-news
files: false
deletable: false
paginate: true
fields:
  title:
    label: Page Title
    type:  text
    default: News & Press
  baseline:
    label: Landing baseline
    type: text
    default: News & Press
  photosTitle:
  	label: Photoshoots part title
  	type: text
  	default: Photoshoots
  photosText:
  	label: Main text Photoshoots
  	type: textarea
