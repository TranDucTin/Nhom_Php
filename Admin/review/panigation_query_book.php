<?php
$panigation_query = 'SELECT customer.CustomerName,review.ReviewByDate,review.Content FROM `review` JOIN `customer` on review.CustomerID = customer.CustomerID';

?>