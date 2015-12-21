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