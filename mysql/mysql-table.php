<?php

PHP/Mysql Batch
------------------------
Country
Table name: countries
Fields: id, name, status(1 - for enable, 2 for Disable), created_at, updated_at
------------------------
State
Table name: states
Fields: id, country_id, name, status(1 - for enable, 2 for Disable), created_at, updated_at
------------------------
City
Table name: cities
Fields: id, country_id, state_id, name, status(1 - for enable, 2 for Disable), created_at, updated_at
?>