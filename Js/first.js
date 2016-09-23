var obj = {};

obj.test = function (num) {
    if (num > 0) {
        obj.test(num - 1);
        console.log(num);
        obj.test(num - 1);
    }
}

obj.test(3);