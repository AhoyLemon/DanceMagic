<?php if(!defined('KIRBY')) exit ?>

title: Staff Profiles
pages: false
fields:
  title:
    label: Page Title
    type: text
  staff:
    label: Staff Profile
    type: structure
    entry: >
      {{title}}
    fields:
      title:
        label: Name
        type: text
      jobtitle:
        label: Job Title
        type: text
      staff_image:
        label: Staff Image [recommend 200x300]
        type:  selector
        mode:  single
        types:
          - image
      text:
        label: Profile Text
        type: markdown
      facebook:
        label: Facebook Page
        type: url
        width: 1/2
      twitter:
        label: Twitter Page
        type: url
        width: 1/2
      linkedin:
        label: LinkedIn Page
        type: url
        width: 1/2
      pinterest:
        label: Pinterest Page
        type: url
        width: 1/2
      email:
        label: Email Address
        type: email