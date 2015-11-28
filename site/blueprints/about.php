<?php if(!defined('KIRBY')) exit ?>

title: About Us
pages: staff
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
  staff_title:
    label: Staff Section Title
    type: text
  staff_text:
    label: Staff Section Text
    type: markdown
  staff_image:
    label: Staff Section Image
    type:  selector
    mode:  single
    types:
      - image
  staff_button_text:
    label: Staff Button Text
    type: text
  faq_title:
    label: FAQ Section Title
    type: text
  faq_text:
    label: FAQ Section Text
    type: markdown
  faqs:
    label: FAQs
    type: structure
    entry: >
      {{question}}
    fields:
      question:
        label: Question
        type: text
      answer:
        label: Answer
        type: textarea