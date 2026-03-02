console.log("Hello world");

// function timesTwo(inputNumber){
//     return inputNumber * 2;
// }

const timesTwo = inputNumber => inputNumber * 2;

// const timesTwo = function (inputNumber){
//     return inputNumber * 2;
// }

const sum = function (inputNumber1, inputNumber2 = 1){
    return inputNumber1 + inputNumber2;
}

console.log(timesTwo(1) + 5);

// console.log(myName);

console.log(sum(1))

// let myName = "Oran Phillips";




// setTimeout(??, 3000); //delays a function running by 3 seconds (do not have brackets in function)

setTimeout(function(){
    console.log("Hi");
}, 3000);


let user = {
    firstName: "Oran",
    lastName: "Phillips",
    age: "19",
    hobbies: ["Gym", "Movies"],
    friends: [
        {
            firstName: "Tim",
            lastName: "Murphy",
            age: "25"
        },
        {
            firstName: "Jake",
            lastName: "Walsh",
            age: "28"
        }
    ]

    // friend: {
    //     firstName: "Tim",
    //     lastName: "Murphy",
    //     age: "25",

    // }
};

// console.log(user)
// // console.log(user.friend.firstName)
// console.log(user.friends[1].lastName)

let myName = "Oran";

console.log(myName.charAt(1));


let donuts = ["Chocolate", "Jam", "Custard"];

donuts.forEach((donut, i) => {
    // console.log("item " + (i+1) + ": " + donut);
    console.log(`item ${i+1}: ${donut}`);
});