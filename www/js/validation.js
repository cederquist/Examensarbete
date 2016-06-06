
    jQuery(window).load(function($){
        jQuery.validator.addMethod(
            "tel",
            function(value, element) {

                var phoneno = /^\+?[0-9\-]+\*?$/;
                return (element.value.match(phoneno))
            },
            "Var vänlig och ange ett giltigt telefonnummer"
        );
        jQuery("#submitForm").click(function(){

        });
        jQuery("#checkoutForm").validate({
            rules: {
                "inputName": "required",
                "inputEmail": {
                    required: true,
                    email: true
                },
                "inputTel": {
                    required: true,
                    tel: true
                },
                "inputAddress": "required",
                "inputZip": {
                    required: true,
                    digits: true
                },
                "inputCity": "required"
            },
            messages: {
                "inputName": {
                    required: "Var vänlig och fyll i detta fält."
                },
                "inputEmail": {
                    required: "Var vänlig och fyll i detta fält.",
                    email: "Var vänlig och ange en korrekt emailadress."
                },
                "inputTel": {
                    required: "Var vänlig och fyll i detta fält.",
                    tel: "Var vänlig och fyll i ett giltigt telefonnummer."
                },
                "inputAddress": {
                    required: "Var vänlig och fyll i detta fält."
                },
                "inputZip": {
                    required: "Var vänlig och fyll i detta fält.",
                    digits: true
                },
                "inputCity":  {
                    required: "Var vänlig och fyll i detta fält."
                }
            },
            errorElement: "span",
            wrapper: "a",  // a wrapper around the error message
            errorPlacement: function(error, element)
            {
                error.next().addClass("tooltips");
                error.addClass("tooltips");
                error.insertAfter(element);
            }
        });
        jQuery('#checkoutForm').attr('novalidate', 'novalidate');
    });
