document.getElementById("tang").addEventListener("click", function(event) {
    event.preventDefault();
    let quantityInput = document.getElementById("soluong_input");
    let currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
});

document.getElementById("giam").addEventListener("click", function(event) {
    event.preventDefault();
    let quantityInput = document.getElementById("soluong_input");
    let currentValue = parseInt(quantityInput.value);
    
    if (currentValue > 1) { // Đảm bảo giá trị không xuống dưới 1
        quantityInput.value = currentValue - 1;
    }
});