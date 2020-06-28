$(function () {
    //Horizontal form basic
    $('#wizard_horizontal').steps({
        headerTag: 'h2',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            setButtonWavesEffect(event);
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        }
    });

    //Vertical form basic
    $('#wizard_vertical').steps({
        headerTag: 'h2',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        stepsOrientation: 'vertical',
        onInit: function (event, currentIndex) {
            setButtonWavesEffect(event);
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        }
    });

    //Advanced form with validation
    var form = $('#wizard_with_validation').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            $.AdminBSB.input.activate();

            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            // swal("Good job!", "Submitted!", "success");
           // $('#SubmitCreateProductForm').click();
			
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        // Create product Ajax request.
       // $('#SubmitCreateProductForm').click(function(e) {
         //    e.preventDefault();
            //return false;
			var formD=$("#wizard_with_validation");
           var formData = new FormData(this);

            $.ajax({
                url:save_url,
                method: 'post',
				cache:false,
                contentType: false,
                processData: false,                   
                data:formData,
                success: function(result) {
                    if(result.errors) {
                        $('.error').html('');
                        $.each(result.errors, function(key, value) {
                            $('.error').show();
                            $('.error').append('<div class="alert bg-red alert-dismissible" role="alert"> '+
                               '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '+value+'</div>');
                        });
                    } else {

                        $('#CreateProductModal').click();
                        $('.error').html('');
                        $('.datatable').DataTable().ajax.reload();
                        $('#categories_name').val('');
                        $('#descriptionription').val('');
                        showNotification('alert-success', result.success, 'top', 'center', 'animated zoomInDown', 'animated zoomOutDown');


                    }
                }
            });
        // });
			
			
        }
    });

    form.validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });
	
	/*    //Advanced form with validation
    var form = $('#wizard_with_validation_1').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            $.AdminBSB.input.activate();

            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            // swal("Good job!", "Submitted!", "success");
           // $('#SubmitCreateProductForm').click();
			
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        // Create product Ajax request.
       // $('#SubmitCreateProductForm').click(function(e) {
         //    e.preventDefault();
            //return false;
			var formD=$("#wizard_with_validation");
           var formData = new FormData(this);

            $.ajax({
                url:save_url,
                method: 'post',
				cache:false,
                contentType: false,
                processData: false,                   
                data:formData,
                success: function(result) {
                    if(result.errors) {
                        $('.error').html('');
                        $.each(result.errors, function(key, value) {
                            $('.error').show();
                            $('.error').append('<div class="alert bg-red alert-dismissible" role="alert"> '+
                               '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '+value+'</div>');
                        });
                    } else {

                        $('#CreateProductModal').click();
                        $('.error').html('');
                        $('.datatable').DataTable().ajax.reload();
                        $('#categories_name').val('');
                        $('#descriptionription').val('');
                        showNotification('alert-success', result.success, 'top', 'center', 'animated zoomInDown', 'animated zoomOutDown');


                    }
                }
            });
        // });
			
			
        }
    });

    form.validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    }); */
});

function setButtonWavesEffect(event) {
    $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
    $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
}