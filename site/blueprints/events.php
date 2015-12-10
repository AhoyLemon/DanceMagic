<?php if(!defined('KIRBY')) exit ?>

title: Events
files: false
pages: event
fields:
  title:
    label: Title
    type:  text
  text:
    label: Write a bit about your events (for SEO)
    type:  textarea
    buttons: false
  gcal_toggle:
    label: Start with Calendar?
    type: toggle
    text: yes/no
    icon: calendar-check-o
    width: 1/5
  gcal_url:
    label: Calendar URL
    type: url
    icon: calendar
    width: 3/5
  gcal_height:
    label: Calendar Height (in pixels)
    type: number
    step: 1
    min: 200
    icon: arrows-v
    width: 1/5