<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: false
fields:
  title:
    label: Title
    type:  text
  desc:
    label: Short Description (for box)
    type:  textarea
  text:
    label: Long Description (for page)
    type:  markdown
  featured_image:
    label: Featured Image (600x400)
    type:  selector
    mode:  single
    required: false
    types:
      - image
  eventdate:
    label: Event Date
    type: date
    width: 1/3
  timestarts:
    label: Time Starts
    type: time
    width: 1/3
  timeends:
    label: Time Ends
    type: time
    width: 1/3
  price:
    label: Price
    type: number
    width: 1/2
  register_link:
    label: Register Link
    type: url
    width: 1/2