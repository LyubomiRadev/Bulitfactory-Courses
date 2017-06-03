<?php


    // DIRECTORY_SEPARATOR is a more secure than using /

// Първо вмъкваме чистата php логика
    include "lang/index-lang.php";

//вмъкваме template-а - чистата HTML структура на DOM
    include "template".DIRECTORY_SEPARATOR."app.php";

//вмъкване на различните HMTL структури
    include "views/main-header.php";
    include "views/main-footer.php";

