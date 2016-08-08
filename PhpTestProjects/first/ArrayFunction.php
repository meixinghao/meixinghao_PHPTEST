<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/3
 * Time: 19:56
 */

function arrayTest()
{
    $array = array('name' => 'meixinghao', 'sex' => 'man');
    print_r(array_change_key_case($array));            //array_change_key_case — 返回字符串键名全为小写或大写的数组
    print_r(array_chunk($array, 1));                   //array_chunk - 将一个数组分成多个,参数1为要分的数组，参数2为要几个为一组

}

//arrayTest();

function arrayTest1()
{
    $array = array(
        array(
            'id' => 1,
            'name' => 'meixinghao',
        ),

        array(
            'id' => 2,
            'name' => 'meixinghao1',
        ),

        array(
            'id' => 3,
            'name' => 'meixinghao2',
        )
    );

    $name = array_column($array, 'name');               //返回指定的一列
    print_r($name);
}

//arrayTest1();

function filter($var)
{
    return ($var & 1);
}

function array_map1($n)
{
    return ($n * $n * $n);
}

function arrayTest2()
{
    $array = array('a' => 1, 'b' => 2); // array_combine — 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
    $array1 = array('m' => 'x', 'n' => 'y');
    print_r(array_diff_key($array, $array1));//array_diff_key — 使用键名比较计算数组的差集,该数组包括了所有出现在 array1 中但是未出现在任何其它参数数组中的键名的值。
    $array3 = array_combine($array, $array1);
    print_r(array_diff_assoc($array, $array1));//array_diff_assoc — 带索引检查计算数组的差集
    print_r($array3);
    print_r(array_count_values($array));//array_count_values — 统计数组中所有的值出现的次数
    //array_diff_uassoc — 用用户提供的回调函数做索引检查来计算数组的差集
    //array_diff_ukey — 用回调函数对键名比较计算数组的差集var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
    print_r(array_diff($array, $array1)); //array_diff — 计算数组的差集
    print_r(array_fill_keys($array, $array1)); //array_fill_keys — 使用指定的键和值填充数组
    print_r(array_fill(5, 6, 'hello'));//array_fill — 用给定的值填充数组,例从5开始填充6个
    print_r(array_fill(-2, 4, 'world'));
    print_r(array_filter($array, "filter"));//array_filter — 用回调函数过滤数组中的单元 如果没有提供 callback 函数， 将删除 input 中所有等值为 FALSE 的条目。
    print_r(array_flip($array));//array_flip — 交换数组中的键和值
    print_r(array_intersect($array, $array1));//array_intersect_assoc — 带索引检查计算数组的交集
    print_r(array_intersect_key($array, $array1)); //array_intersect_key — 使用键名比较计算数组的交集
    //array_intersect_uassoc — 带索引检查计算数组的交集，用回调函数比较索引
    //array_intersect_ukey — 用回调函数比较键名来计算数组的交集
    print_r(array_intersect($array, $array1));//array_intersect — 计算数组的交集
    var_dump(array_key_exists('a', $array));//array_key_exists — 检查给定的键名或索引是否存在于数组中
    print_r(array_keys($array, 1, true));
    print_r(array_map("array_map1", $array));//array_map — 将回调函数作用到给定数组的单元上
    print_r(array_merge_recursive($array, $array1));//array_merge_recursive — 递归地合并一个或多个数组
    print_r(array_merge($array, $array1));//array_merge — 合并一个或多个数组
    array_multisort($array, $array1); //array_multisort — 对多个数组或多维数组进行排序
    print_r($array);
    print_r($array1);
    print_r(array_pad($array, 30, 4));//array_pad — 用值将数组填补到指定长度
    print_r(array_pop($array));//array_pop — 将数组最后一个单元弹出（出栈）
    print_r(array_product($array));//array_product — 计算数组中所有值的乘积

    print_r(array_push($array, 3, 4, 5, 6));//array_push — 将一个或多个单元压入数组的末尾（入栈）返回处理之后数组的元素个数。
    print_r($array);

    print_r(array_rand($array, 3));//array_rand — 从数组中随机取出一个或多个单元
    print_r(array_reduce($array, "filter"));//array_reduce — 用回调函数迭代地将数组简化为单一的值
    $base = array('citrus' => array("orange"), 'berries' => array("blackberry", "raspberry"),);//array_replace_recursive — 使用传递的数组递归替换第一个数组的元素
    $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

    $basket = array_replace_recursive($base, $replacements);
    print_r($basket);

    $basket = array_replace($base, $replacements);
    print_r($basket);

    $basket1 = array_replace($base, $replacements); //array_replace — 使用传递的数组替换第一个数组的元素
    print_r($basket1);

    print_r(array_reverse($array));//array_reverse — 返回一个单元顺序相反的数组
    print_r(array_search(4, $array));//array_search — 在数组中搜索给定的值，如果成功则返回相应的键名
    print_r(array_shift($array));//array_shift — 将数组开头的单元移出数组
    print_r(array_slice($array, 1, 3, true));//array_slice — 从数组中取出一段
    print_r(array_splice($array, 1, 3, array(0, 1, 10)));//array_splice — 把数组中的一部分去掉并用其它值取代
    print_r(array_sum($array));
    //$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));//array_udiff_assoc — 带索引检查计算数组的差集，用回调函数比较数据
    //array_udiff_uassoc — 带索引检查计算数组的差集，用回调函数比较数据和索引
    array_unique($array);//array_unique — 移除数组中重复的值
    array_unshift($array, 2);//array_unshift — 在数组开头插入一个或多个单元

    print_r(array_values($array));

}


//arrayTest2();

function callBack($a, $b)
{
    echo $a . "=>" . $b;
}

function arrayTest3()
{
    $array = array('a' => 1, 'b' => 2);
    $array1 = array('c' => 3, 'd' => 4);

    array_walk_recursive($array, 'callBack');
    array_walk($array, 'callBack');//array_walk — 使用用户自定义函数对数组中的每个元素做回调处理
}

//arrayTest3();

function arrayTest4()
{
    $a = 1;
    $b = 2;
    $array = array('a' => 1, 'b' => 2, 'c' => 3);//arsort — 对数组进行逆向排序并保持索引关系
    var_dump(arsort($array));
    print_r($array);
    var_dump(sort($array, SORT_REGULAR));//sort — 对数组排序
    var_dump(asort($array, SORT_REGULAR));//asort — 对数组进行排序并保持索引关系
    print_r($array);
    print_r(compact("a", "b"));//compact — 建立一个数组，包括变量名和它们的值
    print_r(count(array('a' => array(1, 2, 4), 'b' => array(4, 5, 6)), 1));//count — 计算数组中的单元数目或对象中的属性个数,参数2如果可选的 mode 参数设为 COUNT_RECURSIVE（或 1），count() 将递归地对数组计数。对计算多维数组的所有单元尤其有用。mode 的默认值是 0。count() 识别不了无限递归。
    print_r(current($array));//current — 返回数组中的当前单元
    print_r(each($array));//each — 返回数组中当前的键／值对并将数组指针向前移动一步
    print_r(end($array));//end — 将数组的内部指针指向最后一个单元

}

//arrayTest4();

function arrayTest5()
{
    $array = array(
        'a' => 1,
        'b' => 2,
        'c' => 3
    );
    print_r(extract($array));//extract — 从数组中将变量导入到当前的符号表
    echo "$a", "$b", "$c";

    var_dump(in_array('1', $array, true));//in_array — 检查数组中是否存在某个值,如果第三个参数 strict 的值为 TRUE 则 in_array() 函数还会检查 needle 的类型是否和 haystack 中的相同。
    var_dump(key_exists('a', $array));//key_exists — 别名 array_key_exists()
    print_r(key($array));//key — 从关联数组中取得键名
    print_r(krsort($array, SORT_REGULAR));//krsort — 对数组按照键名逆向排序
    var_dump(ksort($array, SORT_REGULAR));
}

//arrayTest5();

function arrayTest6()
{
    $array = array(1, 2, 3, 4);   //list — 把数组中的值赋给一些变量
    list($a, $b, $c, $d) = $array;
    echo $a, $b, $c, $d;
    var_dump(natcasesort($array));//natcasesort — 用“自然排序”算法对数组进行不区分大小写字母的排序
    var_dump(natsort($array));//natsort — 用“自然排序”算法对数组排序
    print_r(next($array));
    print_r(pos($array));//pos — current() 的别名
    print_r(prev($array));//将数组的指针倒回一位
    print_r(range(0, 100, 2));//range — 建立一个包含指定范围单元的数组
    print_r(reset($array));//reset — 将数组的内部指针指向第一个单元
    print_r(rsort($array, SORT_REGULAR));//rsort — 对数组逆向排序
    var_dump(shuffle($array));//shuffle — 将数组打乱
    print_r(sizeof($array));//sizeof — count() 的别名
    var_dump(sort($array));//sort — 对数组排序
    //var_dump(uasort($array, function));
    //var_dump(uksort($array, funcyion));//uksort — 使用用户自定义的比较函数对数组中的键名进行排序
    //var_dump(usort($array, function));//usort — 使用用户自定义的比较函数对数组中的值进行排序
}
arrayTest6();