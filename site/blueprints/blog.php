<?php if(!defined('KIRBY')) exit ?>

title: Blog Post
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  author:
    label: Author
    type: text
    icon: user
    width: 1/2
  postdate:
    label: Publish Date
    type: date
    format: MM/DD/YYYY
    width: 1/2
  posttime:
    label: Publish Time
    type: time
    width: 1/2
  featured_image:
    label: Featured Image (200x200)
    type:  selector
    mode:  single
    required: false
    types:
      - image
  teaser:
    label: Article Teaser
    type: textarea
  text:
    label: Time to start writing!
    type: textarea
  tags:
    label: Tags
    type: tags