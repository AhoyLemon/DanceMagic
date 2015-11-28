<?php if(!defined('KIRBY')) exit ?>

title: Generic Testamonials
pages: false
preview: false
files: false
deletable: false
fields:
  title:
    label: Title
    type:  text
  testamonials:
    label: Generic Testamonial
    type: structure
    entry: >
      {{text}}
    fields:
      text:
        label: Quote
        type: textarea
      cite:
        label: Author
        type: text