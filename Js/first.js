function test(num) {
    if (num > 0) {
        test(num - 1);
    }
    console.log(num);
}

test(3);