<?php if(!defined('KIRBY')) exit ?>

title: Classes
pages:
  template:
    - class
    - free-class
fields:
  title:
    label: Title
    type:  text
  text:
    label: Write a bit about your classes (for SEO)
    type:  textarea
  info:
    type: info
    label: Describe each experience level
  beginner_desc:
    label: Beginner
    type: text
    width: 1/3
  intermediate_desc:
    label: Intermediate
    type: text
    width: 1/3
  advanced_desc:
    label: Advanced
    type: text
    width: 1/3
  beginnerintermediate_desc:
    label: Beginner/Intermediate
    type: text
    width: 1/3
  intermediateadvanced_desc:
    label: Intermediate/Advanced
    type: text
    width: 1/3
  any_desc:
    label: Any
    type: text
    width: 1/3