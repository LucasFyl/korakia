<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
files: true
fields:
  title:
    label: Page title
    type:  text
    default: Contact us
  text:
    label: Body text
    type:  textarea
    width: 3/4
  contactInfos:
    label: Contact informations
    type:  textarea
    width: 1/4
    buttons: false
