<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: false
files:
  sortable: true
fields:
  info:
    label: Information
    type: info
    text: >
      You should make sure to feel in the fields correctly.

      To add images inside an article make sure to name them accordingly:
      ** 01-xxx.jpg ** , ** 02-xxx.jpg ** , ** 03-xxx.jpg ** etc...

      Empty fields won't be displayed on the website
  title:
    label: Article title
    type:  text
  date:
    label: Date
    type:  date
    format: MM/DD/YYYY
  text:
    label: Body text
    type: textarea
    size: medium
