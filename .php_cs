<?php

$finder = PhpCsFixer\Finder::create()
  ->in([
    __DIR__.'/src',
  ]);

return BitValencia\style_rules($finder);
