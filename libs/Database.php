<?php

class Database extends PDO {
     function __construct() {
        parent:: _construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.', '.DB_USER.', '.DB_PASS.'' );
    }
}
