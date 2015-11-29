<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Write a bit about the location (for SEO)
    type:  textarea
    buttons: false
  address_one:
    label: Street Address
    type: text
    width: 1/2
  address_two:
    label: City, ST ZIP
    type: text
    width: 1/2
  email:
    label: Email Address
    type: email
    width: 1/2
  tel:
    label: Phone Number
    type: tel
    width: 1/2
  map_link:
    label: Map (link)
    type: url
    default: https://www.google.com/maps/place/Dance-N-Magic/@44.9467784,-93.1409836,17z/data=!3m1!4b1!4m2!3m1!1s0x87f62a62bdd18bd7:0xc62729d3168661f6
  map_frame:
    label: Map (iFrame)
    type: text
    default: <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2823.846989864544!2d-93.14098358427036!3d44.94677837583939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f62a62bdd18bd7%3A0xc62729d3168661f6!2sDance-N-Magic!5e0!3m2!1sen!2sus!4v1448750304598" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>