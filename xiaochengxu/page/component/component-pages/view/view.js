var pageObject = {
    data: {
        item: {
            index: 0,
            msg: 'template test',
            time: new Date().getTime()
        }        
    },
    meiTest: function(e) {
        e.currentTarget.offsetTop = -100
       console.log(11);
        var result = {};
        console.log(this.data.item.index);
        result.index = this.data.item.index + 1;
        result.msg = 'template change' + result.index,
        result.time = new Date().getTime(),
        this.setData({item: result}); 
    },
    tapName: function(e) {
        console.log('tapName')
    }
}
Page(pageObject)