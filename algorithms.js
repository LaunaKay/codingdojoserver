// //CREATE NEW ARRAY

// var newArr=[];

// for (var i= 1; i<=10; i++)
// {
//     j=0;
//     newArr[i] = new Array();
//     while (j < 10)
//     {
//         randomnum = Math.random();
//         if (randomnum<0.5)
//             newArr[i][j] = 'D';
//         else
//             newArr[i][j] = 'E';
//         j++;
//     }
// }
// console.log(newArr);

// console.log(arr);

// //HASH ARRAY

// var arr1 = ['first', 'last', 'age'];
// var arr2 = ['testingfirst', 'testinglast', 30];
// var newarr = {};

// for (var i = 0; i< arr1.length; i++)
//     newarr[arr1[i]] = arr2[i];

// console.log(newarr);

// //THIRTY FIVE

// var sum = 0;

// for(i = 100; i<=4000000; i++)
// {
//     if (i%3 == 0 || i%5 == 0)
//     {
//         if(!(i%3 == 0 && i%5 == 0))
//         {
//             sum+=i;
//         }
//     }
// }
// console.log(sum);

// //BALANCE
// var arr=[1,0,0,0,0,0,0,0,0,1];
// var total=0;
// var righttotal=0;
// var lefttotal=0;
// var equality = false;

// for (i=0; i<=arr.length-1; i++)
// {
//     total=total + arr[i];
// }
// console.log(total);
// for (i=0; i<=arr.length-1; i++)
// {
//     lefttotal += arr[i];
//     righttotal = total - lefttotal;
//     if (lefttotal == righttotal)
//     {
//         var equality = true;
//         break;
//     }
// }
// console.log(equality);

//CENSOR
// function censor(str,cen)
// {
//     var len = cen.length;
//     var repStr = '';
//     for(var i = 0; i<len; i++)
//     {
//         repStr+='*';
//     }

//     arr = str.split(' ');
//     for (var i = 0; i<str.length; i++)
//     {
//         if (arr[i] == cen)
//             arr[i] = repStr;
//     }
//     return arr.join(' ');
// }
// console.log(censor('This is awesome!', 'is'));






