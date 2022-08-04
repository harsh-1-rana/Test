function celsiusToFahrenheit(temp_cel) {
    let temp_far = (temp_cel * (9 / 5)) + 32;
    console.log("Temperature in degree fahrenheit is " + temp_far);
}
celsiusToFahrenheit(0);

function fahrenheitToCelsius(temp_far) {
    let temp_cel = ((temp_far - 32) * (5 / 9));
    console.log("Temperature in degree fahrenheit is " + temp_cel);
}
fahrenheitToCelsius(98.6);