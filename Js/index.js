// online order part
function submitOrder() {
    var name = document.getElementById("name").value;
    var foodname = document.getElementById("foodname").value
    var phoneNumber = document.getElementById("phoneNumber").value;
    var quantity = document.getElementById("quantity").value;
    var orderDetails = document.getElementById("orderDetails");

    if (name && phoneNumber && quantity) {
        orderDetails.innerHTML = `
            <h2>Order Details</h2>
            <p><strong>Name:</strong> ${name}</p>
            <p><strong>Food name:</strong> ${foodname}</p>
            <p><strong>Phone Number:</strong> ${phoneNumber}</p>
            <p><strong>Quantity:</strong> ${quantity}</p>
            <p>Thank you for your order! We'll contact you shortly.</p>
        `;
    } else {
        orderDetails.innerHTML = "<p>Please fill out all fields to complete the order.</p>";
    }
}
console.log(submitReservation);
