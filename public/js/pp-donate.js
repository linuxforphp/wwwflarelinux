$(document).ready(function() {
    $('#ppDonateButton').ClassyPaypal({
        type: 'donate', style: 'default', checkoutTarget:'_blank', tooltip:"I want to donate!"
    });
});