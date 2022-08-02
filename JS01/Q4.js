let car = {
    name: "Audi",
    color: "Black",
    model: "RS7"
}
for (let property in car) {
    console.log(property + "=" + car[property])
}