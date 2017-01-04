function Helper() { }
Helper.prototype.validateEmail = function (email) {
    // http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};
Helper.prototype.validatePhone = function (phone) {
    var re = /\d{10}/;
    return re.test(phone);
};
Helper.prototype.errMes = function (target, message) {
    if ($('#feedFail')[0]) return;

    $(target).prepend(
        '<div id="feedFail" class="alert alert-danger" role="alert">'
        + message
        + '</div>');
    setTimeout(function () {
        $('#feedFail').remove();
    }, 7000);
};
Helper.prototype.checkUserData = function (userName, userEmail, userPhone, target) {
    if (!userName) {
        this.errMes(target, 'Full Name is required');
        return false;
    }

    if (!userEmail) {
        this.errMes(target, 'Email is required');
        return false;
    }

    if (!this.validateEmail(userEmail)) {
        this.errMes(target, 'Invalid email. Please, check your email');
        return false;
    }

    if (!userPhone) {
        this.errMes(target, 'Phone number is required');
        return false;
    }

    if (!this.validatePhone(userPhone)) {
        this.errMes(target, 'Please enter phone number whith only 10 digits');
        return false;
    }

    return true;
};

$(document).ready(function () {

    $('#order').submit(function (event) {
        event.preventDefault();
        var target = this;
        var userData = $(target).serializeArray();

        var userName = userData[0]['value'],
            userEmail = userData[1]['value'],
            userPhone = userData[2]['value'];
            
        var helper = new Helper();
        if (!helper.checkUserData(userName, userEmail, userPhone, target)) return;

        $.post('makeOrder', userData)

            .done(function () {
                $('#feedFail').remove();

                ['#userName', '#userEmail', '#userPhone'].map(function (item) {
                    $(item).val('');
                });

                $(target).prepend('<div id="feedSuccess" ' +
                    'class="alert alert-success" ' +
                    ' role="alert">Feedback was send successfull</div>');
                setTimeout(function () {
                    $('#feedSuccess').remove();
                }, 7000);
            })

            .fail(function () {
                helper.errMes(target, 'Server error occured. Try again later.');
                setTimeout(function () {
                    $('#feedFail').remove();
                }, 7000);
            });

    });
});