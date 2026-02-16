<?php 


$business = [
  'name' => 'Laracasts',
  'cost' => 15,
  'categories' => ["Testing", "PHP", "JavaScript"]
];

if ($business['cost'] < 99) {
  echo "Not interested";
}

function register($user) {
  // create the user record in the database
  // log them in.
  // send a welcome email.
  // redirect to their new dashboard
}

require "index.view.php";