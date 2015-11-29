<?php if(!defined('KIRBY')) exit ?>

title: Blogs
pages:
  template:
    - blog
fields:
  title:
    label: Title
    type:  text
  text:
    label: Write a bit about your blog posts (for SEO)
    type:  textarea
  mailinglist_title:
    label: Mailing List Headline
    type: text
  mailinglist_text:
    label: Mailing List Text
    type: markdown