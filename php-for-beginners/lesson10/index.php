<?php
$books = [
  [
    'title' => "The Heroes",
    'author' => "Joe Abercrombie",
    'purchaseUrl' => "http://www.amazon.com",
    'publishYear' => 2011
  ],
  [
    'title' => "Raven Tower",
    'author' => "Ann Leckie",
    'purchaseUrl' => "http://www.amazon.com",
    'publishYear' => 2019
  ],
  [
    'title' => "Babel",
    'author' => "R.F. Kuang",
    'purchaseUrl' => "http://www.amazon.com",
    'publishYear' => 2022
  ],
  [
    'title' => "The Blade Itself",
    'author' => "Joe Abercrombie",
    'purchaseUrl' => "http://www.amazon.com",
    'publishYear' => 2006
  ]
];

function filter($items, $predicate) {
  $filteredItems = [];

  foreach ($items as $item) {
    if ($predicate($item)) {
      $filteredItems[] = $item;
    }
  }
  return $filteredItems;
}

$filteredBook = array_filter($books, function ($item) {
  return $item['publishYear'] >= 1950 && $item['publishYear'] <= 2020;
});

require 'index.view.php';
