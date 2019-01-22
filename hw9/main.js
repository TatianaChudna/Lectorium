
//Задача на if/else

let MyNumber = prompt ('Enter the number', '');
if (MyNumber > 10) {
    console. log('This number is more than 10');
}
else {
    console. log('This number is less than 10');
}

//Задача на switch

let lang = prompt('Choose and enter en or ru', '');
switch (lang) {
    case "ru":
        console. log("Январь Февраль Март Апрель Май Июнь Июль Август Сентябрь Октябрь Ноябрь Декабрь");
        break;
    case "en":
        console. log("January February March April May June July August September October November December");
        break;
    default:
        console. log("Error");
}

//Зaдача на for

for (let i = 2; i <= 10; i++) {
    if (i % 2 === 0) {
        console. log(i);
    }
}

//Задача на while

let i = 1;
while (i <= 15) {
    console. log(i);
    i++;
}

//Калькулятор

let Number1 = prompt("Enter the number1", '');
let Number2 = prompt("Enter the number2", '');
console. log( +Number1 + +Number2 );
console. log (Number1 - Number2);
console. log(Number1 * Number2);
console. log(Number1 / Number2);
