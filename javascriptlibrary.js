var _ = {
map: function(arr, callback)
{
    console.log("Map", arr);
    var altArr = arr;
    for(index in arr)
    {
        arr[index] = callback(arr[index]);
    }
    return altArr;
},

reduce: function(arr, callback, starter)
{
    for(index in arr)
    {
        arr[index]=callback(arr[index], starter);
    }
    return arr
},

filter: function(arr, callback)
{
    var newArr = [];
    for(index in arr)
    {
        var temp = (callback(arr[index]));
        if(temp)
            {
                newArr.push(temp);
            }
    }
    return newArr;
}

}

var result = _.map([0,1,2], function(each){return each*3});
console.log("Results:", result);

// var result2 = _.reduce([0,1,2]), function(each){return each + starter}, starter);
// console.log("Results 2:", result2);

var result3 = _.filter([true, true, false, 0,1,2], function(each) {if(each){return each;};
