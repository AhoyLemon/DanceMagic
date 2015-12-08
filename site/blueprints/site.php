<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - default
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
  twitter:
    label: Twitter Page
    type: url
    icon: twitter
    width: 1/4
  twitter_handle:
    label: Twitter Handle (no @)
    type: text
    placeholder: (no @)
    icon: twitter
    width: 1/4
    required: true
  pinterest:
    label: Pinterest Page
    type: url
    icon: pinterest
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
    label: Generic Page Description
    type:  textarea
    buttons: false
    help: This will be used if page does not have a description.
  social_media_image:
    label: Social Media Image (square)
    type:  selector
    mode:  single
    required: true
    types:
      - image
    help: Backup social media image in case the page doesn't have one.
  schema_image:
    label: Schema Image
    type:  selector
    mode:  single
    required: true
    types:
      - image
    help: Make sure this is just a logo.