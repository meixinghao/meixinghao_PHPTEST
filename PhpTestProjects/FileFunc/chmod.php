<?php

function test()
{

//    mkdir("first_file", 0777);

//    rename("first_file1", "first_file");

//    echo fileperms('first_file');

//    touch("first_file/a.text");

    touch("first_file/b.text", time() - 60 * 60, time() - 60 * 50);
}


test();