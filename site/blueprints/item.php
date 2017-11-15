<?php if(!defined('KIRBY')) exit ?>

title: Item
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  category:
    label: Category
    type: text
    width: 1/4
  subcategory:
    label: Sub category
    type: text
    width: 1/4
  details:
    label: Details
    type:  textarea
    width: 1/2
  publisher:
    label: Publisher
    type: text
    width: 1/4
  year:
    label: Year
    type: text
    width: 1/4
  text:
    label: Text
    type:  textarea
  biographies:
    label: Biographies
    type: textarea
