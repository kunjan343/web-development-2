function getValue() {
    return document.converterForm.inputUnit.value;
}

function setValue(val) {
    return document.converterForm.outputUnit.value = val.toFixed(2);
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("toCelsius").onclick = function () {
        var fahrenheit = getValue();
        if (isNaN(fahrenheit)) {
            alert("Invalid value");
            return;
        }
        setValue((fahrenheit - 32) * (5 / 9));
    };

    document.getElementById("toFahrenheit").onclick = function () {
        var celsius = getValue();
        if (isNaN(celsius)) {
            alert("Invalid value");
            return;
        }
        setValue(celsius * (9 / 5) + 32);
    };

    document.getElementById("toFeet").onclick = function () {
        var meter = getValue();
        if (isNaN(meter)) {
            alert("Invalid value");
            return;
        }
        if (meter < 0) {
            alert("Value should be more then 0");
            return;
        }
        setValue(meter * 3.2808);
    };

    document.getElementById("toMeters").onclick = function () {
        var feet = getValue();
        if (isNaN(feet)) {
            alert("Invalid value");
            return;
        }
        if (feet < 0) {
            alert("Value should be more then 0");
            return;
        }
        setValue(feet / 3.2808);
    };

    document.getElementById("toInches").onclick = function () {
        var centimeter = getValue();
        if (isNaN(centimeter)) {
            alert("Invalid value");
            return;
        }
        if (centimeter < 0) {
            alert("Value should be more then 0");
            return;
        }
        setValue(centimeter / 2.54);
    };

    document.getElementById("toCentimeters").onclick = function () {
        var inches = getValue();
        if (isNaN(inches)) {
            alert("Invalid value");
            return;
        }
        if (inches < 0) {
            alert("Value should be more then 0");
            return;
        }
        setValue(inches * 2.54);
    };

    document.getElementById("toPounds").onclick = function () {
        var kilogram = getValue();
        if (isNaN(kilogram)) {
            alert("Invalid value");
            return;
        }
        if (kilogram < 0) {
            alert("Value should be more then 0");
            return;
        }
        setValue(kilogram * 2.204);
    };

    document.getElementById("toKilograms").onclick = function () {
        var pound = getValue();
        if (isNaN(pound)) {
            alert("Invalid value");
            return;
        }
        if (pound < 0) {
            alert("Value should be more then 0");
            return;
        }
        setValue(pound / 2.204);
    };
});
