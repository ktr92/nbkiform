$(document).ready(function () {
    $('#shipment_city_id').select2({
        ajax: {
            url: 'http://62.109.31.113/calc/ajax.php',
            dataType: 'json',
            method: 'POST',
            data: function (params) {
                console.log(params);
                var queryParameters = {
                    action: 'getCityShipment',
                    q: params.term
                };
                return queryParameters;
            },
            processResults: function (response) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                let objResults = [];
                $.each(response.data, function (i, el) {
                    objResults[i] = {
                        "id": el.id,
                        "text": el.city
                    };
                });
                return {"results": objResults};
            }
            // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
        }
    });

    $('#shipment_city_id').on('change', function () {
        console.log($(this).val());
        var shipment_city_id = $(this).val();
        $('#received_city_id').attr('disabled', false).val("").select2({
            ajax: {
                url: 'http://62.109.31.113/calc/ajax.php',
                dataType: 'json',
                method: 'POST',
                data: function (params) {
                    console.log(params);
                    var queryParameters = {
                        action: 'getCityReceived',
                        q: params.term,
                        shipment_city_id: shipment_city_id
                    };
                    return queryParameters;
                },
                processResults: function (response) {
                    // Transforms the top-level key of the response object from 'items' to 'results'
                    let objResults = [];
                    console.log(response.data.TerminalTerminal);
                    $.each(response.data.TerminalTerminal, function (i, el) {
                        objResults[i] = {
                            "id": el.id,
                            "text": el.city
                        };
                    });
                    return {"results": objResults};
                }
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });
        
        $.ajax({
            type: 'POST',
            url: 'http://62.109.31.113/calc/ajax.php',
            data: {
                action: 'getTerminals',
                city_id: shipment_city_id
            },
            dataType: 'json',
            success: function(response){
                console.log(response);
                if(response.onlyDoor == true){
                    $('#shipment_intake').prop("checked", true).attr('disabled', true);
                }else{
                    $('#shipment_intake').prop("checked", false).attr('disabled', false);
                }
            }
        }).done(function () {
            console.log('success');
        }).fail(function () {
            console.log('fail');
        });
    });
    
    $('#received_city_id').on('change', function () {
        var city_id = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'http://62.109.31.113/calc/ajax.php',
            data: {
                action: 'getTerminals',
                city_id: city_id
            },
            dataType: 'json',
            success: function(response){
                if(response.onlyDoor == true){
                    $('#received_intake').prop("checked", true).attr('disabled', true);
                }else{
                    $('#received_intake').prop("checked", false).attr('disabled', false);
                }
            }
        }).done(function () {
            console.log('success');
        }).fail(function () {
            console.log('fail');
        });
    });

    $('form').submit(function (e) {
        
        var $form = $(this);
        var disabled = $form.find(':input:disabled').removeAttr('disabled');
        var data = $form.serialize();
        disabled.attr('disabled','disabled');
        
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.success == 1){
                    if(response.auto.price !== null){
                        $('#auto .price').text(response.auto.price);
                        $('#auto .delivery_time').text(response.auto.delivery_time.min+' - '+response.auto.delivery_time.max);
                        $('#auto .insurance').text(response.auto.insurance);
                        $('#auto .marking').text(response.auto.services.marking);
                        $('#auto .lathing').text((response.auto.services.lathing) ? response.auto.services.lathing : 0);
                        $('#auto .total').text(response.auto.total);
                        $('#auto .success_result').show();
                        $('#auto .fail_result').hide();
                    }else{
                        $('#auto .success_result').hide();
                        $('#auto .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.avia.price !== null){
                        $('#avia .price').text(response.avia.price);
                        $('#avia .delivery_time').text(response.avia.delivery_time.min+' - '+response.avia.delivery_time.max);
                        $('#avia .insurance').text(response.avia.insurance);
                        $('#avia .marking').text(response.avia.services.marking);
                        $('#avia .lathing').text(response.avia.services.lathing ? response.avia.services.lathing : 0);
                        $('#avia .total').text(response.avia.total);
                        $('#avia .success_result').show();
                        $('#avia .fail_result').hide();
                    }else{
                        $('#avia .success_result').hide();
                        $('#avia .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.container.price !== null){
                        $('#container .price').text(response.container.price);
                        $('#container .delivery_time').text(response.container.delivery_time.min+' - '+response.container.delivery_time.max);
                        $('#container .insurance').text(response.container.insurance);
                        $('#container .marking').text(response.container.services.marking);
                        $('#container .lathing').text(response.container.services.lathing ? response.container.services.lathing : 0);
                        $('#container .total').text(response.container.total);
                        $('#container .success_result').show();
                        $('#container .fail_result').hide();
                    }else{
                        $('#container .success_result').hide();
                        $('#container .fail_result').show().css('display', 'block');
                    }   
                    
                    if(response.container2.total !== null){
                        $('#container2 .price').text(response.container2.price);
                        $('#container2 .delivery_time').text(response.container2.delivery_time.min+' - '+response.container2.delivery_time.max);
                        $('#container2 .insurance').text(response.container2.insurance);
                        $('#container2 .marking').text(response.container2.services.marking);
                        $('#container2 .lathing').text(response.container2.services.lathing ? response.container2.services.lathing : 0);
                        $('#container2 .total').text(response.container2.total);
                        $('#container2 .success_result').show();
                        $('#container2 .fail_result').hide();
                    }else{
                        $('#container2 .success_result').hide();
                        $('#container2 .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.express.price !== null){
                        $('#express .price').text(response.express.price);
                        $('#express .delivery_time').text(response.express.delivery_time.min+' - '+response.express.delivery_time.max);
                        $('#express .insurance').text(response.express.insurance);
                        $('#express .marking').text(response.express.services.marking);
                        $('#express .lathing').text(response.express.services.lathing ? response.express.services.lathing : 0);
                        $('#express .total').text(response.express.total);
                        $('#express .success_result').show();
                        $('#express .fail_result').hide();
                    }else{
                        $('#express .success_result').hide();
                        $('#express .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.fairyboat.price !== null){
                        $('#fairyboat .price').text(response.fairyboat.price);
                        $('#fairyboat .delivery_time').text(response.fairyboat.delivery_time.min+' - '+response.fairyboat.delivery_time.max);
                        $('#fairyboat .insurance').text(response.fairyboat.insurance);
                        $('#fairyboat .marking').text(response.fairyboat.services.marking);
                        $('#fairyboat .lathing').text(response.fairyboat.services.lathing ? response.fairyboat.services.lathing : 0);
                        $('#fairyboat .total').text(response.fairyboat.total);
                        $('#fairyboat .success_result').show();
                        $('#fairyboat .fail_result').hide();
                    }else{
                        $('#fairyboat .success_result').hide();
                        $('#fairyboat .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.superexpreess.price !== null){
                        $('#superexpreess .price').text(response.superexpreess.price);
                        $('#superexpreess .delivery_time').text(response.superexpreess.delivery_time.min+' - '+response.superexpreess.delivery_time.max);
                        $('#superexpreess .insurance').text(response.superexpreess.insurance);
                        $('#superexpreess .marking').text(response.superexpreess.services.marking);
                        $('#superexpreess .lathing').text(response.superexpreess.services.lathing ? response.superexpreess.services.lathing : 0);
                        $('#superexpreess .total').text(response.superexpreess.total);
                        $('#superexpreess .success_result').show();
                        $('#superexpreess .fail_result').hide();
                    }else{
                        $('#superexpreess .success_result').hide();
                        $('#superexpreess .fail_result').show().css('display', 'block');
                    }
                    
                }
                $('#result').show();
            }
        }).done(function () {
            console.log('success');
        }).fail(function () {
            console.log('fail');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
    });
});