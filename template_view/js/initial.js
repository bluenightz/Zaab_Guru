/*
 * @version : 1.0.0
 * @update : 2015-06-11
 * @author: Emedia
 * @comment : SNP
 */

/* Validate Required */
$.validator.setDefaults({ignore: []});

$().ready(function () {
    // validate the comment form when it is submitted
    // $("#commentForm").validate();

    // validate signup form on keyup and submit
    /*$(".form-horizontal").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required: true,
                minlength: 2
            },
            'translation[EN][title]': "required",
            password: {
                required: true,
                minlength: 3
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            topic: {
                required: "#newsletter:checked",
                minlength: 2
            },
            agree: "required"
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address",
            agree: "Please accept our policy"
        },
        highlight: function (element) {
            $(element).parents('div.form-group').addClass("has-error");
        },
        unhighlight: function (element) {
            $(element).parents('div.form-group').removeClass("has-error");
        }
    });*/

    // propose username by combining first- and lastname
    $("#username").focus(function () {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        if (firstname && lastname && !this.value) {
            this.value = firstname + "." + lastname;
        }
    });

});

$(document).ready(function ()
{
    if ($('.tab-data').length > 0 || $('.tab ul li').length > 0) {
        $('.tab ul li').eq(0).addClass('active');
        $('.tab-data').eq(0).show();
    }

    $(document).on('click', '.tab ul li', function (e) {
        e.preventDefault();
        var check_tab = $(this).index();
        $('.tab-data').hide();
        $('.tab ul li').removeClass('active');
        $('.tab-data').eq(check_tab).show();
        $('.tab-data').eq(check_tab).addClass('active');
        $(this).addClass('active');
    });
    /* End Tab General */

    $('.tab-data').on('click', 'ul li', function (e) {
        var $tab = $(this).index();
        $(this).parents('.tab-lang').find('.tab-pane').hide();
        $(this).parents('.tab-lang').find('.tab-pane').eq($tab).show();

    });

    $("a").each(function () {
        if ($(this).attr("href") === "#") {
            $(this).click(function (e) {
                e.preventDefault();
            });
        }
    });
    
    
    
});


function str_format(str, col) {
    col = typeof col === 'object' ? col : Array.prototype.slice.call(arguments, 1);

    return str.replace(/\{\{|\}\}|\{(\w+)\}/g, function (m, n) {
        if (m == "{{") {
            return "{";
        }
        if (m == "}}") {
            return "}";
        }
        return col[n];
    });
}

$(".numeric").each(function () {
    $(this).keypress(function (e) {
        return key_number(e)
    });
});

function key_number(e) {
    var KeyCode = (e.keyCode ? e.keyCode : e.which);
    var CharCode = (e.charCode ? e.charCode : 0);
    CharCode = ($.browser.msie ? -1 : CharCode);

    return ((KeyCode == 8) // backspace
            || (KeyCode == 9) // tab
            || (KeyCode == 37) // left arrow
            || (KeyCode == 39) // right arrow
            || ((KeyCode == 46) && (CharCode == 0)) // delete
            || (CharCode == 0)
            || ((KeyCode > 47) && (KeyCode < 58)) // 0 - 9
            || (KeyCode == 46) // .
            );
}