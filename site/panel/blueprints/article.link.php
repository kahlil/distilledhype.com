<?php if(!defined('KIRBY')) exit ?>

# link blueprint

title: Page
pages: false
files: true
fields:
    title:
        label: Title
        type:  text

    link:
        label: Link
        type: text

    text:
        label: Text
        type:  textarea
        size:  large