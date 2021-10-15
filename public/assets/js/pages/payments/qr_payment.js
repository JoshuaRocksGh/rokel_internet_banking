$(() => {
    let qrData = new Object();

    $("#accounts").change(function () {
        if (!$("#accounts").val()) {
            return false;
        }
        qrData.accountNumber = $("#accounts").val().split("~")[2];
    });

    $("#amount").on("keyup", () => {
        qrData.amount = $("#amount").val();
    });

    $("#generate_qr").on("click", () => {
        const { accountNumber, amount } = qrData;
        if (!accountNumber) {
            toaster("select account number", "warning");
            return false;
        }
        if (!amount || isNaN(amount)) {
            console.log(amount);
            toaster("invalid amount", "warning");
            return false;
        }
        $("#qrcode").empty();
        let qrCode = new QRCode(document.getElementById("qrcode"), {
            text: JSON.stringify(qrData),
            logo: "assets/images/rokel_logo.png",
            logoWidth: 80,
            logoHeight: 80,
            width: 200,
            height: 200,
            // logoBackgroundColor: "#ffffff",
            logoBackgroundTransparent: true,
        });
    });
});
