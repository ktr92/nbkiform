$(document).ready(function(){

 

    function checkRadio(radio) {
        $(".radiotype label").removeClass("active")
        $(".resultblock__main").removeClass("active")
        if (radio.is(":checked")) {
            radio.closest(".radiotype").find("label").addClass("active")
            radio
            .closest(".radiotype")
            .find(".resultblock__main")
            .addClass("active")
        }
    }
    checkRadio($('.calcresults__item:visible:first input[type="radio"]'))
    $(document).on(
        "change",
        '.radiotype input[type="radio"]',
        function (e) {
            checkRadio($(this))
        }
      )

    $('#cityInput1').on('keyup', function(){
        var $this = $(this);
        var q = $this.val();
        
        
        if(q.length >= 3){
            console.log(q.length);
            
            $.ajax({
                type: 'POST',
                url: 'http://62.109.31.113/calc/ajax.php',
                data: {
                    action: 'getCityShipment',
                    q: q
                },
                dataType: 'json',
                success: function(response){
                    console.log(response);
                    $('#cityList1 .cityListContainer').empty();
                    if(response.data.length == 0){
                        $('#cityList1').hide();
                    }else{
                        $.each(response.data, function(i, item){
                            $('#cityList1 .cityListContainer').append('<li><a class="item_cityList1" data-entity="city-autocomplete-select" href="#" data-city-kladr-id="'+item.id+'" data-kladr-id="'+item.id+'">'+item.city+'</a></li>');
                        });

                        $('#cityList1').show();
                    }
                }
            }).done(function () {
                console.log('success');
            }).fail(function () {
                console.log('fail');
            });
        }else{
            $('#cityList1').hide();
        }
    });
    
    $('#cityInput2').on('keyup', function(){
        var $this = $(this);
        var q = $this.val();
        var shipment_city_id = $('#cityInput1').data('kladrId');
        
        if(q.length >= 3){
            console.log(q.length);
            
            $.ajax({
                type: 'POST',
                url: 'http://62.109.31.113/calc/ajax.php',
                data: {
                    action: 'getCityReceived',
                    q: q,
                    shipment_city_id: shipment_city_id
                },
                dataType: 'json',
                success: function(response){
                    console.log(response);
                    $('#cityList2 .cityListContainer').empty();
                    if(response.data.TerminalTerminal.length == 0){
                        $('#cityList2').hide();
                    }else{
                        $.each(response.data.TerminalTerminal, function(i, item){
                            $('#cityList2 .cityListContainer').append('<li><a class="item_cityList2" data-entity="city-autocomplete-select" href="#" data-city-kladr-id="'+item.id+'" data-kladr-id="'+item.id+'">'+item.city+'</a></li>');
                        });

                        $('#cityList2').show();
                    }
                }
            }).done(function () {
                console.log('success');
            }).fail(function () {
                console.log('fail');
            });
        }else{
            $('#cityList1').hide();
        }
    });
    
    $(document).on('click', '.item_cityList1', function () {
        $('#cityList1').hide();
        
        var $this = $(this);
        console.log($(this).data('kladrId'));
        
        var shipment_city_id = $(this).data('kladrId');
        var q = $this.val();
        
        $('#cityInput1').val($this.text()).data('kladrId', shipment_city_id).trigger('change');
        $('[name="shipment_city_id"]').val(shipment_city_id).trigger('change');
        
        $('#cityInput2').attr('disabled', false).val("").trigger('change');
        $('#cityList2 .cityListContainer').empty();
        $('#cityList2').closest('.inputLocation').removeClass('complete');
        
        $this.closest('.inputLocation').addClass('complete');
        
        $.ajax({
            type: 'POST',
            url: 'http://62.109.31.113/calc/ajax.php',
            data: {
                action: 'getCityReceived',
                q: q,
                shipment_city_id: shipment_city_id
            },
            dataType: 'json',
            success: function(response){
                console.log(response);
                $('#cityList2 .cityListContainer').empty();
                if(response.data.TerminalTerminal.length == 0){
                    $('#cityList2').hide();
                }else{
                    $.each(response.data.TerminalTerminal, function(i, item){
                        $('#cityList2 .cityListContainer').append('<li><a class="item_cityList2" data-entity="city-autocomplete-select" href="#" data-city-kladr-id="'+item.id+'" data-kladr-id="'+item.id+'">'+item.city+'</a></li>');
                    });

                    $('#cityList2').show();
                }
            }
        }).done(function () {
            console.log('success');
        }).fail(function () {
            console.log('fail');
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
    
    $(document).on('click', '.item_cityList2', function () {
        $('#cityList2').hide();
        
        var $this = $(this);
        console.log($(this).data('kladrId'));
        
        var city_id = $(this).data('kladrId');
        
        $('#cityInput2').val($this.text()).data('kladrId', city_id).trigger('change');
        $('[name="received_city_id"]').val(city_id).trigger('change');
        $this.closest('.inputLocation').addClass('complete');
        
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
        
        console.log($(this));
        
        var $form = $(this);
        var disabled = $form.find(':input:disabled').removeAttr('disabled');
        var data = $form.serialize();
        disabled.attr('disabled','disabled');
        
        const $button = document.querySelector("[data-calc='calc']");
        const $result = document.querySelector("[data-calc='result']");
        const $title = document.querySelector(".calcresults__title");
        
        $('.price').text('');
        $('.delivery_time').text('');
        $('.insurance').text('');
        $('.marking').text('');
        $('.lathing').text(0);
        $('.total').text('');
        $('.calcblock__results').removeClass('active');
        $('.fail_result').hide();
        
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.success == 1){
                    if(response.auto.price !== null){
                        $('#auto').show();
                        $('#auto .price').text(response.auto.price);
                        $('#auto .delivery_time').text(response.auto.delivery_time.min+' - '+response.auto.delivery_time.max);
                        $('#auto .insurance').text(response.auto.insurance);
                        $('#auto .marking').text(response.auto.services.marking);
                        $('#auto .lathing').text((response.auto.services.lathing) ? response.auto.services.lathing : 0);
                        $('#auto .total').text(response.auto.total);
                        $('#auto .success_result').show();
                        $('#auto .fail_result').hide();
                    }else{
                        $('#auto').hide();
                        $('#auto .success_result').hide();
                        $('#auto .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.avia.price !== null){
                        $('#avia').show();
                        $('#avia .price').text(response.avia.price);
                        $('#avia .delivery_time').text(response.avia.delivery_time.min+' - '+response.avia.delivery_time.max);
                        $('#avia .insurance').text(response.avia.insurance);
                        $('#avia .marking').text(response.avia.services.marking);
                        $('#avia .lathing').text(response.avia.services.lathing ? response.avia.services.lathing : 0);
                        $('#avia .total').text(response.avia.total);
                        $('#avia .success_result').show();
                        $('#avia .fail_result').hide();
                    }else{
                        $('#avia').hide();
                        $('#avia .success_result').hide();
                        $('#avia .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.container.price !== null){
                        $('#container').show();
                        $('#container .price').text(response.container.price);
                        $('#container .delivery_time').text(response.container.delivery_time.min+' - '+response.container.delivery_time.max);
                        $('#container .insurance').text(response.container.insurance);
                        $('#container .marking').text(response.container.services.marking);
                        $('#container .lathing').text(response.container.services.lathing ? response.container.services.lathing : 0);
                        $('#container .total').text(response.container.total);
                        $('#container .success_result').show();
                        $('#container .fail_result').hide();
                    }else{
                        $('#container').hide();
                        $('#container .success_result').hide();
                        $('#container .fail_result').show().css('display', 'block');
                    }   
                    
                    if(response.container2.price !== null){
                        $('#container2').show();
                        $('#container2 .price').text(response.container2.price);
                        $('#container2 .delivery_time').text(response.container2.delivery_time.min+' - '+response.container2.delivery_time.max);
                        $('#container2 .insurance').text(response.container2.insurance);
                        $('#container2 .marking').text(response.container2.services.marking);
                        $('#container2 .lathing').text(response.container2.services.lathing ? response.container2.services.lathing : 0);
                        $('#container2 .total').text(response.container2.total);
                        $('#container2 .success_result').show();
                        $('#container2 .fail_result').hide();
                    }else{
                        $('#container2').hide();
                        $('#container2 .success_result').hide();
                        $('#container2 .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.express.price !== null){
                        $('#express').show();
                        $('#express .price').text(response.express.price);
                        $('#express .delivery_time').text(response.express.delivery_time.min+' - '+response.express.delivery_time.max);
                        $('#express .insurance').text(response.express.insurance);
                        $('#express .marking').text(response.express.services.marking);
                        $('#express .lathing').text(response.express.services.lathing ? response.express.services.lathing : 0);
                        $('#express .total').text(response.express.total);
                        $('#express .success_result').show();
                        $('#express .fail_result').hide();
                    }else{
                        $('#express').hide();
                        $('#express .success_result').hide();
                        $('#express .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.fairyboat.price !== null){
                        $('#fairyboat').show();
                        $('#fairyboat .price').text(response.fairyboat.price);
                        $('#fairyboat .delivery_time').text(response.fairyboat.delivery_time.min+' - '+response.fairyboat.delivery_time.max);
                        $('#fairyboat .insurance').text(response.fairyboat.insurance);
                        $('#fairyboat .marking').text(response.fairyboat.services.marking);
                        $('#fairyboat .lathing').text(response.fairyboat.services.lathing ? response.fairyboat.services.lathing : 0);
                        $('#fairyboat .total').text(response.fairyboat.total);
                        $('#fairyboat .success_result').show();
                        $('#fairyboat .fail_result').hide();
                    }else{
                        $('#fairyboat').hide();
                        $('#fairyboat .success_result').hide();
                        $('#fairyboat .fail_result').show().css('display', 'block');
                    }
                    
                    if(response.superexpreess.price !== null){
                        $('#superexpreess').show();
                        $('#superexpreess .price').text(response.superexpreess.price);
                        $('#superexpreess .delivery_time').text(response.superexpreess.delivery_time.min+' - '+response.superexpreess.delivery_time.max);
                        $('#superexpreess .insurance').text(response.superexpreess.insurance);
                        $('#superexpreess .marking').text(response.superexpreess.services.marking);
                        $('#superexpreess .lathing').text(response.superexpreess.services.lathing ? response.superexpreess.services.lathing : 0);
                        $('#superexpreess .total').text(response.superexpreess.total);
                        $('#superexpreess .success_result').show();
                        $('#superexpreess .fail_result').hide();
                    }else{
                        $('#superexpreess').hide();
                        $('#superexpreess .success_result').hide();
                        $('#superexpreess .fail_result').show().css('display', 'block');
                    }
                    
                    $button.classList.add('active');
                    $result.classList.add('active');
                    $title.classList.add('active');
                    $result.scrollIntoView();
                    checkRadio($('.calcresults__item:visible:first input[type="radio"]'))

                    
                    $('.checkout').attr('href', 'https://azlog.ru/calc/?from_text=' + $('[name="from_text"]').val() + '&from=' + $('[name="shipment_city_id"]').val() + '&to_text=' + $('[name="to_text"]').val() + '&to=' + $('[name="received_city_id"]').val() + '&weight=' + $('[name="weight"]').val() + '&volume=' + $('[name="volume"]').val());

                }else{
                    $.each(response.errors, function(i, error){
                        $('.errorcode').text(error.code);
                        return;
                    });
                    $('.errortext').show();
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