
function scroll_to_class(element_class, removed_height) {
    var scroll_to = $(element_class).offset().top - removed_height;
    if($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({scrollTop: scroll_to}, 0);
    }
}

function bar_progress(progress_line_object, direction) {
    var number_of_steps = progress_line_object.data('number-of-steps');
    var now_value = progress_line_object.data('now-value');
    var new_value = 0;
    if(direction == 'right') {
        new_value = now_value + ( 100 / number_of_steps );
    }
    else if(direction == 'left') {
        new_value = now_value - ( 100 / number_of_steps );
    }
    progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

jQuery(document).ready(function() {

    //highlight current / active link
    $('ul.main-menu li a').each(function () {
        if ($($(this))[0].href == String(window.location))
            $(this).parent().addClass('active');
    });
    $('#full_name_transporters, #phone_number_transporters, #email_transporters').on('input', function(){
        var Customer_name = $('#full_name_transporters').val();
        var Customer_phone = $('#phone_number_transporters').val();
        var Customer_email = $('#email_transporters').val();
        $('.summaryName').text(Customer_name);
        $('.summaryPhone').text(Customer_phone);
        $('.summaryEmail').text(Customer_email);
    });
    $('#vehicleCategory').on('change', function(){
        var category = $(this).val();
        switch(category){
            case 'Bus':
                $('#fieldsetBus').fadeIn();
                $('#fieldsetTaxi').fadeOut();
                $('#fieldsetMiniCoaches').fadeOut();
                $('#fieldsetLuxiriousBuses').fadeOut();
                $('#fieldsetCoorporateVehicles').fadeOut();
                $('#fieldsetGeneral').fadeOut();
                $('#specialPrevTrans').hide();
                $('.divAmountSpaceBus, .divAmountSpaceTaxi,.divAmountSpaceMiniCoaches,.divAmountSpaceLuxiriousBuses, .divAmountSpaceCoorporateVehicles, .divAmountSpaceGeneral').hide();
                //This is for the summary part
                $('div.summaryCategory').text(category);
                $('#inputCategory').val(category);
                $('span.vehicle').html(category);
                var bus = category.substr(0,3);
                $('span#cat').text(bus+ '-');
                break;
            case 'Taxi':
                $('#fieldsetBus').fadeOut();
                $('#fieldsetTaxi').fadeIn('slow');
                $('#fieldsetMiniCoaches').fadeOut();
                $('#fieldsetLuxiriousBuses').fadeOut();
                $('#fieldsetCoorporateVehicles').fadeOut();
                $('#fieldsetGeneral').fadeOut();
                $('#specialPrevTrans, #specialPrev').hide();
                $('.divAmountSpaceBus, .divAmountSpaceTaxi,.divAmountSpaceMiniCoaches,.divAmountSpaceLuxiriousBuses, .divAmountSpaceCoorporateVehicles, .divAmountSpaceGeneral').hide();
                //This is for the summary part
                $('div.summaryCategory').text(category);
                $('#inputCategory').val(category);
                $('span.vehicle').html(category);
                var tax = category.substr(0,3);
                $('span#cat').text(tax+ '-');
                break;
            case 'Mini Coach':
                $('#fieldsetBus').fadeOut();
                $('#fieldsetTaxi').fadeOut();
                $('#fieldsetMiniCoaches').fadeIn('slow');
                $('#fieldsetLuxiriousBuses').fadeOut();
                $('#fieldsetCoorporateVehicles').fadeOut();
                $('#fieldsetGeneral').fadeOut();
                $('#specialPrevTrans, #specialPrev').hide();
                $('.divAmountSpaceBus, .divAmountSpaceTaxi,.divAmountSpaceMiniCoaches,.divAmountSpaceLuxiriousBuses, .divAmountSpaceCoorporateVehicles, .divAmountSpaceGeneral').hide();
                //This is for the summary part
                $('div.summaryCategory').text(category);
                $('#inputCategory').val(category);
                $('span.vehicle').html(category);
                var mini = category.substr(0,3);
                $('span#cat').text(mini+ '-');
                break;
            case 'Luxirious Bus':
                $('#fieldsetBus').fadeOut();
                $('#fieldsetTaxi').fadeOut();
                $('#fieldsetMiniCoaches').fadeOut();
                $('#fieldsetLuxiriousBuses').fadeIn('slow');
                $('#fieldsetCoorporateVehicles').fadeOut();
                $('#fieldsetGeneral').fadeOut();
                $('#specialPrevTrans, #specialPrev').hide();
                $('#inputCategory').val(category);
                $('.divAmountSpaceBus, .divAmountSpaceTaxi,.divAmountSpaceMiniCoaches,.divAmountSpaceLuxiriousBuses, .divAmountSpaceCoorporateVehicles, .divAmountSpaceGeneral').hide();
                //This is for the summary part
                $('div.summaryCategory').text(category);
                $('span.vehicle').html(category);
                var lux = category.substr(0,3);
                $('span#cat').text(lux+ '-');
                break;
            case 'Corporate Vehicle':
                $('#fieldsetBus').fadeOut();
                $('#fieldsetTaxi').fadeOut();
                $('#fieldsetMiniCoaches').fadeOut();
                $('#fieldsetLuxiriousBuses').fadeOut();
                $('#fieldsetCoorporateVehicles').fadeIn('slow');
                $('#fieldsetGeneral').fadeOut();
                $('#specialPrevTrans, #specialPrev').hide();
                $('.divAmountSpaceBus, .divAmountSpaceTaxi,.divAmountSpaceMiniCoaches,.divAmountSpaceLuxiriousBuses, .divAmountSpaceCoorporateVehicles, .divAmountSpaceGeneral').hide();
                //This is for the summary part
                $('div.summaryCategory').text(category);
                $('#inputCategory').val(category);
                $('span.vehicle').html(category);
                var corp = category.substr(0,3);
                $('span#cat').text(corp+ '-');
                break;
            case 'General Conveyance':
                $('#fieldsetBus').fadeOut();
                $('#fieldsetTaxi').fadeOut();
                $('#fieldsetMiniCoaches').fadeOut();
                $('#fieldsetLuxiriousBuses').fadeOut();
                $('#fieldsetCoorporateVehicles').fadeOut();
                $('#fieldsetGeneral').fadeIn('slow');
                $('#specialPrevTrans, #specialPrev').hide();
                $('.divAmountSpaceBus, .divAmountSpaceTaxi,.divAmountSpaceMiniCoaches,.divAmountSpaceLuxiriousBuses, .divAmountSpaceCoorporateVehicles, .divAmountSpaceGeneral').hide();
                //This is for the summary part
                $('div.summaryCategory').text(category);
                $('#inputCategory').val(category);
                $('span.vehicle').html(category);
                var gen = category.substr(0,3);
                $('span#cat').text(gen+ '-');
                break;
            case 'Please Choose your vehicle type...':
                $('#fieldsetBus').fadeOut();
                $('#fieldsetTaxi').fadeOut();
                $('#fieldsetMiniCoaches').fadeOut();
                $('#fieldsetLuxiriousBuses').fadeOut();
                $('#fieldsetCoorporateVehicles').fadeOut();
                $('#fieldsetGeneral').fadeOut();
                $('#specialPrevTrans').hide();
                $('#specialPrev').show('fast');
                $('.divAmountSpaceBus, .divAmountSpaceTaxi,.divAmountSpaceMiniCoaches,.divAmountSpaceLuxiriousBuses, .divAmountSpaceCoorporateVehicles, .divAmountSpaceGeneral').hide();

        }
    });
    $('#taxiDefaultAmount, #miniCoachesDefaultAmount, #bigBusDefaultAmount, #busDefaultAmount, #luxiriousBusesDefaultAmount, #cooporateVehiclesDefaultAmount, #generalDefaultAmount').on('input', function(){
        var defaultNumber = $(this).val();
        if(defaultNumber < 35.60){
            defaultNumber = $(this).val('35.60');
        }
    });
    $('#taxiPlan, #bigBusPlan, #busPlan, #miniCoachesPlan, #luxiriousBusesPlan, #cooporateVehiclesPlan, #generalPlan').on('input', function(){
        var defaultPlan = $(this).val();
        if(defaultPlan !== 'Monthly'){
            defaultPlan = $(this).val('Monthly');
        }
    });
    $('#taxiDefaultMonths, #bigBusDefaultMonth, #miniCoachesMonths, #busDefaultMonths, #luxiriousBusesDefaultMonths, #cooporateVehiclesDefaultMonths, #generalDefaultMonths').on('input', function(){
        var defaultMonths = $(this).val();
        if(defaultMonths < 3){
            defaultMonths = $(this).val('3');
        }
    });
    $('#taxiCapacity').on('input', function(){
        var taxiCapacity = $(this).val();
        if(taxiCapacity < 4){
            taxiCapacity = $(this).val('4');
        }
    });
    $('#busCapacity').on('input', function(){
        var busCapacity = $(this).val();
        if(busCapacity < 10){
            busCapacity = $(this).val('10');
        }
    });
    $('#bigBusCapacity').on('input', function(){
        var busCapacity = $(this).val();
        if(busCapacity < 18){
            busCapacity = $(this).val('18');
        }
    });
    $('#miniCoachesCapacity').on('input', function(){
        var miniCoachesCapacity = $(this).val();
        if(miniCoachesCapacity < 25){
            miniCoachesCapacity = $(this).val('25');
        }
    });
    $('#luxiriousBusesCapacity').on('input', function(){
        var luxiriousBusesCapacity = $(this).val();
        if(luxiriousBusesCapacity < 52){
            luxiriousBusesCapacity = $(this).val('52');
        }
    });
    $('#cooporateVehiclesCapacity').on('input', function(){
        var cooporateVehiclesCapacity = $(this).val();
        if(cooporateVehiclesCapacity < 18){
            cooporateVehiclesCapacity = $(this).val('18');
        }
    });
    $('#generalCapacity').on('input', function(){
        var generalCapacity = $(this).val();
        if(generalCapacity < 20){
            generalCapacity = $(this).val('20');
        }
    });
    $('#taxiTrips').on('input', function(){
        var taxiTrips = $(this).val();
        if(taxiTrips < 5){
            taxiTrips = $(this).val('5');
        }
    });
    $('#busTrips').on('input', function(){
        var busTrips = $(this).val();
        if(busTrips < 7){
            busTrips = $(this).val('7');
        }
    });
    $('#bigBusTrips').on('input', function(){
        var bigBusTrips = $(this).val();
        if(bigBusTrips < 7){
            bigBusTrips = $(this).val('7');
        }
    });
    $('#miniCoachesTrips').on('input', function(){
        var miniCoachesTrips = $(this).val();
        if(miniCoachesTrips < 5){
            miniCoachesTrips = $(this).val('5');
        }
    });
    $('#luxiriousBusesTrips').on('input', function(){
        var luxiriousBusesTrips = $(this).val();
        if(luxiriousBusesTrips < 5){
            luxiriousBusesTrips = $(this).val('5');
        }
    });
    $('#cooporateVehiclesTrips').on('input', function(){
        var cooporateVehiclesTrips = $(this).val();
        if(cooporateVehiclesTrips < 3){
            cooporateVehiclesTrips = $(this).val('3');
        }
    });
    $('#generalTrips').on('input', function(){
        var generalTrips = $(this).val();
        if(generalTrips < 5){
            generalTrips = $(this).val('5');
        }
    });
    $('#coorporateVehiclesNumber, #busNumber, #taxiNumber, #miniCoachNumber, #luxiriousBusesNumber, #coorporateVehiclesNumber, #generalNumber').on('input', function(){
        var generalAll = $(this).val();
        if(generalAll < 1){
            generalAll = $(this).val('1');
        }
    });
    $('#busCategory').on('change', function(){
        var busCategory = $(this).val();
        switch(busCategory){
            case 'Bus':
                $('#bus').show('fast');
                $('#bigBus').hide();
                $('#specialPrev').hide('fast');
                break;
            case 'Big Bus':
                $('#bus').hide();
                $('#bigBus').show('fast');
                $('#specialPrev').hide('fast');
                break;
            case 'Please Choose your bus type...':
                $('#bus').hide();
                $('#bigBus').hide();
                break;
        }
    });
    /*
            For calculating Taxi
            */
    $('#taxiDefaultAmount, #taxiCapacity, #taxiTrips, #taxiDefaultMonths, #taxiNumber').on('input', function(){
        $('#taxiHowMany').show('fast');
        var taxiNumber = $('#taxiNumber').val();
        $('.summaryVehiclesNumber').text(taxiNumber);
        $('#inputVehiclesNumber').val(taxiNumber);
        $('span.vehicle').html('Taxis');
        var taxiDefaultAmount = $('#taxiDefaultAmount').val();
        var taxiCapacity = $('#taxiCapacity').val();
        var taxiTrips = $('#taxiTrips').val();
        var taxiDefaultMonths = $('#taxiDefaultMonths').val();
        $('.summaryPlan').text('Monthly');
        $('#inputPlan').val('Monthly');
        var months = 'months';
        var  theRenewal =  moment().add(taxiDefaultMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal+'-');
        if(taxiDefaultMonths == 1){
            $('.summaryDuration').text(taxiDefaultMonths + ' Month');
            $('#inputDuration').val(taxiDefaultMonths + ' Month');
        }
        else{
            $('.summaryDuration').text(taxiDefaultMonths + ' Months');
            $('#inputDuration').val(taxiDefaultMonths + ' Months');
        }
        var total = taxiDefaultAmount*taxiCapacity*taxiTrips*taxiDefaultMonths*taxiNumber;
        $('.divAmountSpaceTaxi').show('fast');
        $('div#amountSpaceTaxi, div.summaryTotal').text('₦ '+ parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function(){
            return $(this).text();}).get();
        value =  $.trim(value);
        $('#inputTransId').val(value);
    });
    /*
            For calculating Bus
            */
    $('#busDefaultAmount, #busCapacity, #busTrips, #busDefaultMonths, #busNumber').on('input', function(){
        $('#busHowMany').show('fast');
        var busNumber = $('#busNumber').val();
        $('.summaryVehiclesNumber').text(busNumber);
        $('#inputVehiclesNumber').val(busNumber);
        $('span.vehicle').html('Buses');
        var busDefaultAmount = $('#busDefaultAmount').val();
        var busCapacity = $('#busCapacity').val();
        var busTrips = $('#busTrips').val();
        var busDefaultMonths = $('#busDefaultMonths').val();
        $('.summaryPlan').text('Monthly');
        $('#inputPlan').val('Monthly');
        var months = 'months';
        var theRenewal =  moment().add(busDefaultMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal+'-');
        if(busDefaultMonths == 1){
            $('.summaryDuration').text(busDefaultMonths + ' Month');
            $('#inputDuration').val(busDefaultMonths + ' Month');
        }
        else{
            $('.summaryDuration').text(busDefaultMonths + ' Months');
            $('#inputDuration').val(busDefaultMonths + ' Months');
        }
        var total = busDefaultAmount*busCapacity*busTrips*busDefaultMonths*busNumber;
        $('.divAmountSpaceBus').show('fast');
        $('div#amountSpaceBus, div.summaryTotal').text('₦ '+ parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function(){
            return $(this).text();}).get();
        value =  $.trim(value);
        $('#inputTransId').val(value);
    });

    //For calculating big bus
    $('#bigBusDefaultAmount, #bigBusCapacity, #bigBusTrips, #bigBusDefaultMonths, #bigBusNumber').on('input', function(){
        $('#bigBusHowMany').show('fast');
        var bigBusNumber = $('#bigBusNumber').val();
        $('.summaryVehiclesNumber').text(bigBusNumber);
        $('#inputVehiclesNumber').val(bigBusNumber);
        $('span.vehicle').html('Big Buses');
        var bigBusDefaultAmount = $('#bigBusDefaultAmount').val();
        var bigBusCapacity = $('#bigBusCapacity').val();
        var bigBusTrips = $('#bigBusTrips').val();
        var bigBusDefaultMonths = $('#bigBusDefaultMonths').val();
        $('.summaryPlan').text('Monthly');
        $('#inputPlan').val('Monthly');
        var months = 'months';
        var theRenewal =  moment().add(bigBusDefaultMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal+'-');
        if(bigBusDefaultMonths == 1){
            $('.summaryDuration').text(bigBusDefaultMonths + ' Month');
            $('#inputDuration').val(bigBusDefaultMonths + ' Month');
        }
        else{
            $('.summaryDuration').text(bigBusDefaultMonths + ' Months');
            $('#inputDuration').val(bigBusDefaultMonths + ' Monthd');
        }
        var total = bigBusDefaultAmount*bigBusCapacity*bigBusTrips*bigBusDefaultMonths*bigBusNumber;
        $('.divAmountSpaceBigBus').show('fast');
        $('div#amountSpaceBigBus, div.summaryTotal').text('₦ '+ parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function(){
            return $(this).text();}).get();
        value =  $.trim(value);
        $('#inputTransId').val(value);
    });
    /*
            For calculating Mini Coaches
            */
    $('#miniCoachesNumber, #miniCoachesDefaultAmount, #miniCoachesCapacity, #miniCoachesTrips, #miniCoachesDefaultMonths').on('input', function(){
        $('#miniCoachesHowMany').show('fast');
        var miniCoachesNumber = $('#miniCoachesNumber').val();
        $('.summaryVehiclesNumber').text(miniCoachesNumber);
        $('#inputVehiclesNumber').val(miniCoachesNumber);
        $('span.vehicle').html('Mini Coaches');
        var miniCoachesDefaultAmount = $('#miniCoachesDefaultAmount').val();
        var miniCoachesCapacity = $('#miniCoachesCapacity').val();
        var miniCoachesTrips = $('#miniCoachesTrips').val();
        var miniCoachesDefaultMonths = $('#miniCoachesDefaultMonths').val();
        $('.summaryPlan').text('Monthly');
        $('#inputPlan').val('Monthly');
        var months = 'months';
        var theRenewal =  moment().add(miniCoachesDefaultMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal+'-');
        if(miniCoachesDefaultMonths == 1){
            $('.summaryDuration').text(miniCoachesDefaultMonths + ' Month');
            $('#inputDuration').val(miniCoachesDefaultMonths + ' Month');
        }
        else{
            $('.summaryDuration').text(miniCoachesDefaultMonths + ' Months');
            $('#inputDuration').val(miniCoachesDefaultMonths + ' Months');
        }
        var total = miniCoachesNumber*miniCoachesDefaultAmount*miniCoachesCapacity*miniCoachesTrips*miniCoachesDefaultMonths;
        $('.divAmountSpaceMiniCoaches').show('fast');
        $('div#amountSpaceMiniCoaches, div.summaryTotal').text('₦ '+ parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function(){
            return $(this).text();}).get();
        value =  $.trim(value);
        $('#inputTransId').val(value);
    });
    /*
            For calculating Luxirious Bus
            */
    $('#luxiriousBusesNumber, #luxiriousBusesDefaultAmount, #luxiriousBusesCapacity, #luxiriousBusesTrips, #luxiriousBusesDefaultMonths').on('input', function(){
        $('#luxiriousBusesHowMany').show('fast');
        var luxiriousBusesNumber = $('#luxiriousBusesNumber').val();
        $('.summaryVehiclesNumber').text(luxiriousBusesNumber);
        $('#inputVehiclesNumber').val(luxiriousBusesNumber);
        $('span.vehicle').html('Luxirious Buses');
        var luxiriousBusesDefaultAmount = $('#luxiriousBusesDefaultAmount').val();
        var luxiriousBusesCapacity = $('#luxiriousBusesCapacity').val();
        var luxiriousBusesTrips = $('#luxiriousBusesTrips').val();
        var luxiriousBusesDefaultMonths = $('#luxiriousBusesDefaultMonths').val();
        $('.summaryPlan').text('Monthly');
        $('#inputPlan').val('Monthly');
        var months = 'months';
        var theRenewal =  moment().add(luxiriousBusesDefaultMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal+'-');
        if(luxiriousBusesDefaultMonths == 1){
            $('.summaryDuration').text(luxiriousBusesDefaultMonths + ' Month');
            $('#inputDuration').val(luxiriouBusesDefaultMonths + ' Month');
        }
        else{
            $('.summaryDuration').text(luxiriousBusesDefaultMonths + ' Months');
            $('#inputDuration').val(luxiriousBusesDefaultMonths + ' Months');
        }
        var total = luxiriousBusesNumber*luxiriousBusesDefaultAmount*luxiriousBusesCapacity*luxiriousBusesTrips*luxiriousBusesDefaultMonths;
        $('.divAmountSpaceLuxiriousBuses').show('fast');
        $('div#amountSpaceLuxiriousBuses, div.summaryTotal').text('₦ '+ parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function(){
            return $(this).text();}).get();
        value =  $.trim(value);
        $('#inputTransId').val(value);
    });
    /*
            For calculating Cooporate Vehicles
            */
    $('#coorporateVehiclesNumber, #cooporateVehiclesDefaultAmount, #coorporateVehiclesCapacity, #coorporateVehiclesTrips, #coorporateVehiclesDefaultMonths').on('input', function(){
        $('#coorporateVehiclesHowMany').show('fast');
        var coorporateVehiclesNumber = $('#coorporateVehiclesNumber').val();
        $('.summaryVehiclesNumber').text(coorporateVehiclesNumber);
        $('#inputVehiclesNumber').val(coorporateVehiclesNumber);
        $('span.vehicle').html('Coorporate Vehicles');
        var coorporateVehiclesDefaultAmount = $('#coorporateVehiclesDefaultAmount').val();
        var coorporateVehiclesCapacity = $('#coorporateVehiclesCapacity').val();
        var coorporateVehiclesTrips = $('#coorporateVehiclesTrips').val();
        var coorporateVehiclesDefaultMonths = $('#coorporateVehiclesDefaultMonths').val();
        $('.summaryPlan').text('Monthly');
        $('#inputPlan').val('Monthly');
        var months = 'months';
        var theRenewal =  moment().add(coorporateVehiclesDefaultMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal+'-');
        if(coorporateVehiclesDefaultMonths == 1){
            $('.summaryDuration').text(coorporateVehiclesDefaultMonths + ' Month');
            $('#inputDuration').val(coorporateVehiclesDefaultMonths + ' Month');
        }
        else{
            $('.summaryDuration').text(coorporateVehiclesDefaultMonths + ' Months');
            $('#inputDuration').val(coorporateVehiclesDefaultMonths + ' Months');
        }
        var total = coorporateVehiclesNumber*coorporateVehiclesDefaultAmount*coorporateVehiclesCapacity*coorporateVehiclesTrips*coorporateVehiclesDefaultMonths;
        $('.divAmountSpaceCoorporateVehicles').show('fast');
        $('div#amountSpaceCoorporateVehicles, div.summaryTotal').text('₦ '+ parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function(){
            return $(this).text();}).get();
        value =  $.trim(value);
        $('#inputTransId').val(value);
    });
    /*
            For calculating General Conveyances
            */
    $('#generalNumber, #generalDefaultAmount, #generalCapacity, #generalTrips, #generalDefaultMonths').on('input', function(){
        $('#generalHowMany').show('fast');
        var generalNumber = $('#generalNumber').val();
        $('.summaryVehiclesNumber').text(generalNumber);
        $('#inputVehiclesNumber').val(generalNumber);
        $('span.vehicle').html('General Conveyances');
        var generalDefaultAmount = $('#generalDefaultAmount').val();
        var generalCapacity = $('#generalCapacity').val();
        var generalTrips = $('#generalTrips').val();
        var generalDefaultMonths = $('#generalDefaultMonths').val();
        $('.summaryPlan').text('Monthly');
        $('#inputPlan').val('Monthly');
        var months = 'months';
        var theRenewal =  moment().add(generalDefaultMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal+'-');
        if(generalDefaultMonths == 1){
            $('.summaryDuration').text(generalDefaultMonths + ' Month');
            $('#inputDuration').val(generalDefaultMonths + ' Month');
        }
        else{
            $('.summaryDuration').text(generalDefaultMonths + ' Months');
            $('#inputDuration').val(generalDefaultMonths + ' Months');
        }
        var total = generalNumber*generalDefaultAmount*generalCapacity*generalTrips*generalDefaultMonths;
        $('.divAmountSpaceGeneral').show('fast');
        $('div#amountSpaceGeneral, div.summaryTotal').text('₦ '+ parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function(){
            return $(this).text();}).get();
        value =  $.trim(value);
        $('#inputTransId').val(value);
    });

});
/*
        Fullscreen background
        */
//$.backstretch("<?php echo $this->webroot;?>img/backgrounds/1.jpg");

$('#top-navbar-1').on('shown.bs.collapse', function(){
    $.backstretch("resize");
});
$('#top-navbar-1').on('hidden.bs.collapse', function(){
    $.backstretch("resize");
});

/*
        Form
        */
$('.f1 fieldset:first').fadeIn('slow');

$('.f1 input[type="text"], .f1 input[type="password"], .f1 input[type="email"], .f1 input[type="number"]').on('focus', function() {
    $(this).removeClass('input-error');
});


//Disabling the enter button
$(document).on('keypress', '.f1', function(e){
    if(e.which == 13){
        alert("Please use the available buttons");
        return false;
    }
});


// next step
$('.f1 .btn-next').on('click', function() {
    var parent_fieldset = $(this).parents('fieldset');
    var next_step = true;
    // navigation steps / progress steps
    var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    var progress_line = $(this).parents('.f1').find('.f1-progress-line');

    // fields validation
    parent_fieldset.find('input[type="text"], input[type="password"],  input[type="email"], input[type="number"]').each(function() {
        if( $(this).val() == "" ) {
            $(this).addClass('input-error');
            next_step = false;
        }
        else {
            $(this).removeClass('input-error');
        }
        // Validating the email
        var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var email = $('input[type="email"]');
        var is_email=regex.test(email.val());
        if(is_email){
            email.removeClass("input-error");
        }
        else {
            email.addClass("input-error");
            next_step = false;
        }

        //Validating the password
        if($('#password-1').val() !== $('#password-2').val()){
            $('input[type=password]').addClass('input-error');
            next_step = false;
        }
        else{
            $('input[type=password]').removeClass('input-error');
        }
    });

    // fields validation
    if( next_step ) {
        parent_fieldset.fadeOut(400, function() {
            // change icons
            current_active_step.removeClass('active').addClass('activated').next().addClass('active');
            // progress bar
            bar_progress(progress_line, 'right');
            // show next step
            $(this).next().fadeIn();
            // scroll window to beginning of the form
            scroll_to_class( $('.f1'), 20 );
        });
    }

});

// previous step
$('.f1 .btn-previous').on('click', function() {
    // navigation steps / progress steps
    var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    var progress_line = $(this).parents('.f1').find('.f1-progress-line');

    $(this).parents('fieldset').fadeOut(400, function() {
        // change icons
        current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
        // progress bar
        bar_progress(progress_line, 'left');
        // show previous step
        $(this).prev().fadeIn();
        // scroll window to beginning of the form
        scroll_to_class( $('.f1'), 20 );
    });
});

// submit
$('.f1').on('submit', function(e) {

    // fields validation
    $(this).find('input[type="text"], input[type="password"], input[type="number"], input[type="email"]').each(function() {
        if( $(this).val() == "" ) {
            e.preventDefault();
            $(this).addClass('input-error');
        }
        else {
            $(this).removeClass('input-error');
        }
    });
    // fields validation

});
