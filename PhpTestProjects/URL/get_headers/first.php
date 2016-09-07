<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/9/6
 * Time: 20:37
 */

print_r(@get_headers('http://www.baidu.com', 1));
print_r(parse_url('http://www.baidu.com/sound'));