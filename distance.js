var array = ["", "banana", "lemon", "mango"];
var results = [];


for (var i = 0; i < array.length - 1; i++) {

 for (var j = i + 1; j < array.length; j++) {
  results.push(array[i] + ' ' + array[j]);
 }
}

console.log(results);



