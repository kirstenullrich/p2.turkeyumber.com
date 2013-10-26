<?php

$q = "UPDATE users
    SET email = 'samseaborn@whitehouse.gov'
    WHERE email = 'seaborn@whitehouse.gov'";

# Run the command
echo DB::instance(DB_NAME)->query($q);
?>