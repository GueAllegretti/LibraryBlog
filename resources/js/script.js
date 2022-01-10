console.log("funziono")

let insertedAnn = document.querySelector("#italianLibraries")
let insertedCounter = 0
const INSERTED__VALUE = 2344
let insertedInterval = setInterval(() => {
    insertedCounter++
    insertedAnn.innerHTML = `${insertedCounter}`
    if(insertedCounter == INSERTED__VALUE) {
        clearInterval(insertedInterval)
    }
}, 1);

let completedAnn = document.querySelector("#insertedBooks")
let completedCounter = 0
const COMPLETED__VALUE = 1998
let completedInterval = setInterval(() => {
    completedCounter++
    completedAnn.innerHTML = `${completedCounter}`
    if(completedCounter == COMPLETED__VALUE) {
        clearInterval(completedInterval)
    }
}, 1);

let customerActive = document.querySelector("#insertedLibraries")
let customerCounter = 0
const CUSTOMER__VALUE = 1663
let activedInterval = setInterval(() => {
    customerCounter++
    customerActive.innerHTML = `${customerCounter}`
    if(customerCounter == CUSTOMER__VALUE) {
        clearInterval(activedInterval)
    }
}, 1);

let userActive = document.querySelector("#userActive")
let userCounter = 0
const USER__VALUE = 3663
let userInterval = setInterval(() => {
    userCounter++
    userActive.innerHTML = `${userCounter}`
    if(userCounter == USER__VALUE) {
        clearInterval(userInterval)
    }
}, 1);
