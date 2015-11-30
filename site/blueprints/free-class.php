<?php if(!defined('KIRBY')) exit ?>

title: Free Class
pages: default
fields:
  title:
    label: Title
    type:  text
  desc:
    label: Short Description (for box)
    type:  textarea
  featured_image:
    label: Featured Image (600x400)
    type:  selector
    mode:  single
    required: false
    types:
      - image
  text:
    label: Long Description (for page)
    type:  markdown