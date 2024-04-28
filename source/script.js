document.getElementById("konv-btn").onclick = function () {
    const input_text = document.getElementById("input-text").value;

    if (input_text.trim() === "") {
        var customAlert = document.getElementById("costumAlert");
        customAlert.innerText = "Favor Prense Lai Valor!";
        customAlert.style.display = "block";
        setTimeout(function() {
            customAlert.style.display = "none";
        }, 4000);
    } else {
        if (input_text >= 8.5 && input_text <= 10) {
            document.getElementById("output-text").value = "A";
        }
        else if (input_text >= 7 && input_text <= 8.4) {
            document.getElementById("output-text").value = "B";
        }
        else if (input_text >= 5.5 && input_text <= 6.9) {
            document.getElementById("output-text").value = "C";
        }
        else if (input_text >= 4 && input_text <= 5.4) {
            document.getElementById("output-text").value = "D";
        }
        else if (input_text >= 0 && input_text <= 3.9) {
            document.getElementById("output-text").value = "E";
        }
        else {
            var customAlert = document.getElementById("costumAlert");
            customAlert.innerText = "Valor Invalidu!";
            customAlert.style.display = "block";
            setTimeout(function() {
                customAlert.style.display = "none";
            }, 4000);
        }
    }
}
