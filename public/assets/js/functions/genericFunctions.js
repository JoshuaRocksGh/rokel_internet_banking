function transactionSuccessToaster(message, timer = 3000) {
    Swal.fire({
        title: "Transaction Successful",
        text: message,
        imageUrl: "land_asset/images/statement_success.gif",
        imageHeight: "10rem",
        width: "20rem",
        imageAlt: "success image",
        confirmButtonColor: "#0388cb",
        timer: timer,
    });
}

function toaster(message, icon, timer = 3000) {
    let color = "#17a2b8";
    if (typeof icon === "string") {
        if (icon.toLowerCase() === "success") {
            color = "#1abc9c";
        } else if (icon.toLowerCase() === "warning") {
            color = "#fd7e14";
        } else if (icon.toLowerCase() === "error") {
            color = "#dc3545";
        }
        Swal.fire({
            html: `<span class="font-16 ">${message}</span>`,
            icon: icon,
            confirmButtonColor: color,
            width: 400,
        });
    }
}

function formatToCurrency(amount) {
    let ret = parseFloat(amount)
        .toFixed(2)
        .replace(/\d(?=(\d{3})+\.)/g, "$&,");
    if (ret === "NaN") {
        return "";
    } else return ret;
}

function somethingWentWrongHandler() {
    toaster("Something went wrong ... please hold on", "error", 3000);
    setTimeout(() => {
        location.reload();
    }, 3000);
}

function siteLoading(state) {
    if (state === "show") {
        $("#preloader").css("background-color", "#4fc6e17a");
        $(".preloader").fadeIn(500);
        return;
    }
    $(".preloader").fadeOut(1500);
    return;
}

function blockUi(data) {
    const defaults = {
        block: "#preloader",
        message: "Please Wait",
        size: "75px",
        bgColor: "#4fc6e1",
        opacity: "0.8",
    };
    data = Object.assign(defaults, data);
    const { block, message, size, bgColor, opacity } = data;
    $(block).block({
        message: `<div><img class="pulse" style="width: ${size};" src="assets/images/logoRKB.png" />
            <div class="mt-2 row"><span class="lds-hourglass"></span> <span class="text-semibold align-self-center ml-2 font-weight-bold">
                ${message}</span></div>`,
        overlayCSS: {
            backgroundColor: bgColor,
            opacity: opacity,
            cursor: "wait",
            "z-index": "9999",
        },
        css: {
            width: "auto",
            padding: "10px 15px",
            "-webkit-border-radius": 2,
            "-moz-border-radius": 2,
            border: 0,
            "z-index": "99999",
            "font-size": "1rem",
            transform: "translate(-50%, -50%)",
            backgroundColor: "none",
        },
    });
}
function unblockUi(block = "#preloader") {
    $(block).unblock();
}

$("#sidebar_logout").on("click", (e) => {
    e.preventDefault();
    Swal.fire({
        title: "Logout successful!",
        html: "Redirecting ...",
        icon: "success",
        showConfirmButton: false,
    });
    setTimeout(() => {
        window.location.replace("logout");
    }, 1000);
});
