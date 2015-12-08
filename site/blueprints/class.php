<?php if(!defined('KIRBY')) exit ?>

title: Class
pages: false
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
  classtype:
    label: Class Type
    type: select
    options:
      dance: Dance
      music: Music
      camp: Camp
    width: 1/2
  explevel:
    label: Experience Level
    type: select
    options:
      beginner: Beginner
      intermediate: Intermediate
      advanced: Advanced
      beginner_intermediate: Beginner/Intermediate
      intermediate_advanced: Intermediate/Advanced
      all: All
    width: 1/2
  session:
    label: Session
    type: select
    options:
      schoolyear: School Year
      summer: Summer
    width: 1/2
  minage:
    label: Min Age
    type: number
    min: 2
    max: 99
    width: 1/4
  maxage:
    label: Max Age
    type: number
    min: 2
    max: 99
    width: 1/4
  timestarts:
    label: Start Time
    type: time
    width: 1/4
  timeends:
    label: End Time
    type: time
    width: 1/4
  datestarts:
    label: Start Date
    type: date
    width: 1/4
  dateends:
    label: End Date
    type: date
    width: 1/4
  price:
    label: Price
    type: number
    width: 1/4
  priceper:
    label: Price Per
    type: select
    options:
      class: Class
      week: Week
      month: Month
      year: Year
      session: Session
    width: 1/4
  gender:
    label: Gender
    type: select
    options:
      boys: Boys Only
      girls: Girls Only
      male: Male Only
      female: Female Only
    width: 1/4
  weekday:
    label: Day of Week
    type: select
    options:
      mondays: Mondays
      tuesdays: Tuesdays
      wednesdays: Wednesdays
      thursdays: Thursdays
      fridays: Fridays
      saturdays: Saturdays
      sundays: Sundays
    width: 1/4
  additional_details:
    label: Additional Details
    type: markdown
    help: For example, the fees involved.
  testamonial:
    label: Testamonial
    type: textarea
    help: If this is blank, a generic testamonial will be chosen.
  citation:
    label: Testamonial Author
    type: text
  register_link:
    label: Register Link
    type: url
    width: 2/3
  registration_status:
    label: Registration Status
    type: select
    default: open
    options:
      pending: Pending
      open: Open
      sold-out: Sold Out
      closed: Closed
    width: 1/3
  sublisting_toggle:
    label: Has sublistings?
    type: toggle
    text: yes/no
    default: no
    width: 1/2
    help: This will overwrite values with sublistings.
  weekday_list:
    label: Days of Week
    type: tags
    data:
      - Mondays
      - Tuesdays
      - Wednesdays
      - Thursdays
      - Fridays
      - Saturdays
      - Sundays
    width: 1/2
    help: Overwrites single Day of Week selection
  sublistings:
    label: Class Sublistings
    type: structure
    entry: >
      {{weekday}} {{timestarts}}-{{timeends}}
    fields:
      info:
        type: info
        text: >
          Only fill in the fields which are unique to this sublisting.
          If the time is consistent, change time above and leave blank here.
      weekday:
        label: Day of Week
        type: select
        options:
          Mondays: Mondays
          Tuesdays: Tuesdays
          Wednesdays: Wednesdays
          Thursdays: Thursdays
          Fridays: Fridays
          Saturdays: Saturdays
          Sundays: Sundays
        width: 1/2
      register_link:
        label: Register Link
        type: url
        width: 1/2
      datestarts:
        label: Start Date
        type: date
        width: 1/2
      dateends:
        label: End Date
        type: date
        width: 1/2
      timestarts:
        label: Start Time
        type: time
        width: 1/2
      timeends:
        label: End Time
        type: time
        width: 1/2
      price:
        label: Price
        type: number
        width: 1/2
      priceper:
        label: Price Per
        type: select
        options:
          class: Class
          week: Week
          month: Month
          year: Year
          session: Session
        width: 1/2
    help: To use this, make sure "Multi Day Class" is set to "Yes".