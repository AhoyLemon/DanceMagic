<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - home
    - classes
    - events
    - about
    - blogs
    - contact
    - testamonials
fields:
  title:
    label: Title
    type:  text
  email:
    label: Site Admin Email
    type: email
    required: true
    width: 1/2
  tel:
    label: Phone Number
    type: tel
    required: true
    width: 1/2
  street_address:
    label: Street Address
    type: text
    width: 2/5
    required: true
  city:
    label: City
    type: text
    width: 1/5
    required: true
  state:
    label: State
    type: text
    max: 2
    width: 1/5
    required: true
  zip:
    label: ZIP
    type: text
    max: 5
    width: 1/5
    required: true
  facebook:
    label: Facebook Page
    type: url
    icon: facebook
    width: 1/2
  instagram:
    label: Instagram Page
    type: url
    icon: instagram
    width: 1/2
  googleplus:
    label: Google+ Page
    type: url
    icon: google-plus
    width: 1/2
  google_map:
    label: Google Map Link
    type: url
    icon: map
    required: true
    width: 1/2
  description:
    label: Page Description (will be used if page does not have one)
    type:  textarea
    buttons: false
  social_media_image:
    label: Social Media Image (square)
    type:  selector
    mode:  single
    required: true
    types:
      - image
  schema_image:
    label: Schema Image (logo)
    type:  selector
    mode:  single
    required: true
    types:
      - image