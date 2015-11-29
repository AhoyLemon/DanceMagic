<?php if(!defined('KIRBY')) exit ?>

title: Home
pages:
  template:
    - class
    - free-class
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
  bgimage:
    label: Background Image
    type:  selector
    mode:  single
    required: true
    types:
      - image
  cta_a:
    label: Call To Action (Line 1)
    type: text
    width: 1/2
  cta_b:
    label: Call To Action (Line 2)
    type: text
    width: 1/2