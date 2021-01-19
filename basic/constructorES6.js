// // Constructor function
// function Person(firstName, lastName, dob) 
// {
//     this.firstName = firstName;
//     this.lastName = lastName;
//     this.dob = new Date(dob);
//     // Old Method
//     // this.getBirthYear = function() {
//     //     return this.dob.getFullYear();
//     // }
//     // this.getFullName = function() {
//     //     return `${this.firstName} ${this.lastName}`;
//     // }
// }

// // Method with prototype (POO)
// Person.prototype.getBirthYear = function() 
// {
//     return this.dob.getFullYear();
// }

// Person.prototype.getFullName = function() 
// {
//     return `${this.firstName} ${this.lastName}`;
// }

// Class (Constructor function but using ES6)
class Person {
    constructor(firstName, lastName, dob) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.dob = new Date(dob);
    }
    // Method
    getBirthYear() {
        return this.dob.getFullYear();
    }

    getFullName() {
        return `${this.firstName} ${this.lastName}`;
    }
}

// Instantiate object
const person1 = new Person('John', 'Doe', '1980-4-3');
const person2 = new Person('Mary', 'Smith', '1987-05-16');

console.log(person2.dob);
console.log(person1.getBirthYear());
console.log(person1.getFullName());