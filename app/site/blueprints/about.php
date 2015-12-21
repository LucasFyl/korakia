<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
fields:
  title:
    label: Page title
    type:  text
    default: About
  landingTitle1:
    label: Page title - Landing - 1st line
    type:  text
    default: About Korokia Hotel
  landingTitle2:
    label: Page title - Landing - 2nd line
    type:  text
    default: Morrocain & Mediterranean Villa
  line:
  	type: line	
  introTitle:
    label: Intro title
    type:  text
    default: Escape, mediterranean style
  introText1stCol:
    label: Intro text - 1st column
    type:  textarea
    width: 1/2
  introText2ndCol:
    label: Intro text - 2nd column
    type:  textarea
    width: 1/2
  line2:
  	type: line
  historyTitle:
  	label: First Part title
  	type: text
  	default: our history
  firstTitle:
  	label: Title 1st part
  	type: text
  	default: The Mediterranean Villa
  	width: 1/2
  secondTitle:
  	label: Title 2nd part
  	type: text
  	default: The Maroccan Villa
  	width: 1/2
  firstText:
  	label: Main text 1st part
  	type: textarea
  	width: 1/2
  secondText:
  	label: Main text 2nd part
  	type: textarea
  	width: 1/2
  line3:
  	type: line
  charitiesTitle:
  	label: Second Part title
  	type: text
  	default: charities
  charitiesText:
  	label: Main text second part
  	type: textarea