function scroll_to_class(element_class, removed_height) {
    var scroll_to = $(element_class).offset().top - removed_height;
    if ($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({
            scrollTop: scroll_to
        }, 0);
    }
}

function bar_progress(progress_line_object, direction) {
    var number_of_steps = progress_line_object.data('number-of-steps');
    var now_value = progress_line_object.data('now-value');
    var new_value = 0;
    if (direction == 'right') {
        new_value = now_value + (100 / number_of_steps);
    } else if (direction == 'left') {
        new_value = now_value - (100 / number_of_steps);
    }
    progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

jQuery(document).ready(function () {

    //highlight current / active link
    $('ul.main-menu li a').each(function () {
        if ($($(this))[0].href == String(window.location))
            $(this).parent().addClass('active');
    });
});
// //var defaultAmountRoadShows = 88998.22;
// var defaultAmountRoadShows = parseFloat(88998.22, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
// $('#defaultAmountRoadShows').val(defaultAmountRoadShows);
// //$('#defaultAmountRoadShows').val(parseFloat(defaultAmountRoadShows, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
// var salonAmountPerYear = 5000;
// $('#salonAmountPerYear').val(parseFloat(salonAmountPerYear, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
// var exhibitionAmount = 57441.54;
// $('#exhibitionAmount').val(parseFloat(exhibitionAmount, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
// var fitnessDefaultAmountMonthly = 10000;
// $('#fitnessDefaultAmountMonthly').val(parseFloat(fitnessDefaultAmountMonthly, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
//  var fitnessDefaultAmountYearly = 120000;
// $('#fitnessDefaultAmountYearly').val(parseFloat(fitnessDefaultAmountYearly, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
$('#bankingNumber, #officeNumber, #clubsNumber, #hotelsNumber, #roadshowsNumber, #salonNumber, #exhibitionNumber, #fitnessNumber, #eventNumber, #resNumber, #mallsNumber, #retailNumber').on('input', function () {
    var CategoryAll = $(this).val();
    if (CategoryAll < 1) {
        CategoryAll = $(this).val('1');
    }
});

function forAppendingMonths(id_of_input, text) {
    var input_id = '#' + id_of_input;
    $(input_id).val($(input_id).val() + text);
}

function forAppendingYears(id_of_input, text) {
    var input_id = '#' + id_of_input;
    $(input_id).val($(input_id).val() + text);
}
$('#company_name, #phone_number, #email_address, #contact_person').on('input', function () {
    var Company_name = $('#company_name').val();
    var Contact_phone = $('#phone_number').val();
    var Contact_person = $('#contact_person').val();
    var Contact_email = $('#email_address').val();
    $('div#summaryName').text(Company_name);
    //$('#inputCompanyName').val(Company_name);
    $('div#summaryContact').text(Contact_person);
    //$('#inputCompanyContactPerson').val(Contact_person);
    $('div#summaryEmail').text(Contact_email);
    // $('#inputCompanyEmail').val(Contact_email);
    $('div#summaryPhone').text(Contact_phone);
    //$('#inputCompanyPhoneNumber').val(Contact_phone);
});
var Company_name = $('#company_name').val();
var Contact_phone = $('#phone_number').val();
var Contact_person = $('#contact_person').val();
var Contact_email = $('#email_address').val();
if ($.trim(Company_name) != '') {
    $('div#summaryName').text(Company_name);
}
if ($.trim(Contact_person) != '') {
    $('div#summaryContact').text(Contact_person);
}
if ($.trim(Contact_phone) != '') {
    $('div#summaryPhone').text(Contact_phone);
}
if ($.trim(Contact_email) != '') {
    $('div#summaryEmail').text(Contact_email);
}
//For Fitness Centres
$('#fitnessPlanCategory').on('change', function () {
    //$('#divAmountSpaceFitnessNext').show('fast');
    var fitnessPlan = $(this).find("option:selected").text();
    $('div#summaryPlan').text(fitnessPlan);
    $('#inputPlan').val(fitnessPlan);
});
//For Event Centres
$('#eventPaymentDuration').on('change', function () {
    var eventPlan = $(this).find("option:selected").text();
    $('div#summaryPlan').text(eventPlan);
    $('#inputPlan').val(eventPlan);
});
//Display Duration on salon input
$('#salonNumberOfYears').on('input', function () {
    var value = $(this).val();
    if (value == 1) {
        $('#summaryDuration').text(value + ' Year');
        $('#inputDuration').val(value);
    } else {
        $('#summaryDuration').text(value + ' Years');
        $('#inputDuration').val(value);
    }
});
//Display Duration on RMSROSE input
$('#restaurantNumberOfYears, #mallsNumberOfYears, #bankingNumberOfYears').on('input', function () {
    var value = $(this).val();
    if (value == 1) {
        $('#summaryDuration').text(value + ' Year');
        $('#inputDuration').val(value);
    } else {
        $('#summaryDuration').text(value + ' Years');
        $('#inputDuration').val(value);
    }
});
$('#planCategory').on('change', function () {
    var category = $(this).val();
    switch (category) {
        case 'Clubs':
            $('#fieldsetClubs').fadeIn();
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#specialPrev').hide();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            //This is for the summary part
            $('div#summaryCategory').text(category);
            $('div#summaryPlan').text('Yearly');
            $('#inputCategory').val(category);
            var clubs = category.substr(0, 4);
            $('span#cat').text(clubs + '-');
            break;
        case 'Roadshows':
            $('#fieldsetRoadshows').fadeIn();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            $('#specialPrev').hide();
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            //This is for the summary part
            $('div#summaryPlan').text('Daily');
            $('#inputPlan').val('Daily');
            $('#inputCategory').val(category);
            $('div#summaryCategory').text(category);
            var road = category.substr(0, 4);
            $('span#cat').text(road + '-');

            break;
        case 'Hotels':
            $('#fieldsetHotels').fadeIn();
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#specialPrev').hide();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            //This is for the summary part
            $('div#summaryCategory').text(category);
            $('#inputCategory').val(category);
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            var hotels = category.substr(0, 4);
            $('span#cat').text(hotels + '-');
            break;
        case 'Salons and Barbers shops':
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeIn();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#specialPrev').hide();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            //This is for the summary part
            $('div#summaryPlan').text('Yearly');
            $('#inputPlan').val('Yearly');
            $('div#summaryCategory').text(category);
            $('#inputCategory').val(category);
            var salon = category.substr(0, 4);
            $('span#cat').text(salon + '-');
            break;
        case 'Exhibitions and Trade fairs':
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeIn();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#specialPrev').hide();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            //This is for the summary part
            $('div#summaryPlan').text('Daily');
            $('#inputPlan').val('Daily');
            $('div#summaryCategory').text(category);
            $('#inputCategory').val(category);
            var exhibit = category.substr(0, 4);
            $('span#cat').text(exhibit + '-');
            break;
        case 'Fitness Centres and Gyms':
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeIn();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#specialPrev').hide();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            //This is for the summary part
            $('div#summaryCategory').text(category);
            $('#inputCategory').val(category);
            var fitness = category.substr(0, 4);
            $('span#cat').text(fitness + '-');
            break;
        case 'Restaurants, Malls, Shops, Retail Outlets, Offices and Similar Establishments':
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeIn();
            $('#fieldsetEvent').fadeOut();
            $('#specialPrev').hide();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            //This is for the summary part
            $('div#summaryPlan').text('Yearly');
            $('#inputPlan').val('Yearly');
            $('div#summaryCategory').text(category);
            $('#inputCategory').val(category);
            var restaurant = category.substr(0, 4);
            $('span#cat').text(restaurant + '-');
            break;
        case 'Event Centres and Similar Establishments':
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeIn();
            $('#specialPrev').hide();
            $('#selectVehicle').hide();
            $('#fieldsetBus').fadeOut();
            $('#fieldsetTaxi').fadeOut();
            $('#fieldsetMiniCoaches').fadeOut();
            $('#fieldsetLuxiriousBuses').fadeOut();
            $('#fieldsetCoorporateVehicles').fadeOut();
            $('#fieldsetGeneral').fadeOut();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            $('#numberOfVehicle').hide();
            $('#numberOfCategory').show();
            //This is for the summary part
            $('div#summaryCategory').text(category);
            $('#inputCategory').val(category);
            var event = category.substr(0, 4);
            $('span#cat').text(event + '-');
            break;
        case 'Transporters':
            $('#selectVehicle').fadeIn();
            $('#specialPrevTrans').hide();
            $('#specialPrev').show('fast');
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#numberOfVehicle').show();
            $('#numberOfCategory').hide();
            break;
        case 'Please Choose your category...':
            $('#fieldsetRoadshows').fadeOut();
            $('#fieldsetClubs').fadeOut();
            $('#fieldsetHotels').fadeOut();
            $('#fieldsetSalonsAndBarbersShops').fadeOut();
            $('#fieldsetExhibitionsAndTradeFairs').fadeOut();
            $('#fieldsetFitnessCentresAndGyms').fadeOut();
            $('#fieldsetRMSROSE').fadeOut();
            $('#fieldsetEvent').fadeOut();
            $('#emptyCategory').fadeIn();
            $('#specialPrev').show('fast');
            $('#selectVehicle').hide();
            $('#busCategory').hide();
            $('.divAmountSpaceRMSROSE, .divAmountSpaceHotels, .divAmountSpaceExhibition,.divAmountSpaceSalon,.divAmountSpaceRoadshows, .divAmountSpaceFitness, .divAmountSpaceClubs').hide();
            break;
    }
});
$('#roadshowsNumberOfDays, #clubsHowManyYears, #exhibitionDays, #bankingNumberOfPersons, #bankingNumberOfYears, #mallsNumberOfYears, #restaurantNumberOfYears, #roadshowsNumberOfDays, #salonNumberOfYears, #clubsNumberOfYears #fitnessNumberOfMonths, #fitnessNumberOfYears').on('input', function () {
    var defaultNumber = $(this).val();
    if (defaultNumber < 1) {
        defaultNumber = $(this).val('1');
    }
});
$('#clubCapacity').on('input', function () {
    var clubCapacity = $(this).val();
    if (clubCapacity < 25) {
        clubCapacity = $(this).val('25');
    }
});
$('#bankingNumberOfPersons').on('input', function () {
    var bankingNumberOfPersons = $(this).val();
    if (bankingNumberOfPersons < 100) {
        bankingNumberOfPersons = $(this).val('100');
    }
});
$('#restaurantNumberOfPersons').on('input', function () {
    var restaurantNumberOfPersons = $(this).val();
    if (restaurantNumberOfPersons < 50) {
        restaurantNumberOfPersons = $(this).val('50');
    }
});
$('#mallsNumberOfPersons').on('input', function () {
    var mallsNumberOfPersons = $(this).val();
    if (mallsNumberOfPersons < 1000) {
        mallsNumberOfPersons = $(this).val('1000');
    }
});
$('#clubDefaultDays').on('input', function () {
    var clubDefaultDays = $(this).val();
    if (clubDefaultDays < 3) {
        clubDefaultDays = $(this).val('3');
    }
});
$('#eventDays').on('input', function () {
    var eventDays = $(this).val();
    if (eventDays < 3) {
        eventDays = $(this).val('3');
    }
});
$('#eventCapacity').on('input', function () {
    var eventCapacity = $(this).val();
    if (eventCapacity < 16) {
        eventCapacity = $(this).val('16');
    }
});

$('#fitnessPlanCategory').on('change', function () {
    var fitnessDuration = $(this).val();
    switch (fitnessDuration) {
        case 'How do you plan to pay?...':
            $('#forFitnessMonths').hide();
            $('#forFitnessYears').hide();
            break;
        case 'Monthly':
            $('#forFitnessMonths').show('fast');
            $('#divAmountFitnessMonthly').show('fast');
            $('#forFitnessYears').hide('fast');
            break;
        case 'Yearly':
            $('#forFitnessYears').show('fast');
            $('#forFitnessMonths').hide('fast');
            $('#divAmountFitnessYearly').show('fast');
            break;
    }
});
//   $('#eventPaymentDuration').on('change', function() {
//      var eventDuration = $(this).val();
//      switch(eventDuration){
//         case 'Monthly':
//         $('#eventMonthly').show('fast');
//         $('#eventYearly').hide('fast');
//         break;
//         case 'Yearly':
//         $('#eventYearly').show('fast');
//          $('#eventMonthly').hide('fast');
//         break;
//     }
// });
$('#RMSROSE').on('change', function () {
    var RMSROSEDuration = $(this).val();
    switch (RMSROSEDuration) {
        case 'Please select your specific category':
            $('#forRestaurants').hide();
            $('#forMalls').hide();
            $('#forRetail').hide();
            $('#forOffices').hide();
            $('#forBanking').hide();
            break;
        case 'Restaurants':
            $('#forRestaurants').show('fast');
            $('#forMalls').hide('fast');
            $('#forBanking').hide('fast');
            $('#forRetail').hide('fast');
            $('#forOffices').hide('fast');
            break;
        case 'Malls':
            $('#forMalls').show('fast');
            $('#forRestaurants').hide('fast');
            $('#forBanking').hide('fast');
            $('#forRetail').hide('fast');
            $('#forOffices').hide('fast');
            break;
        case 'Retail Outlets':
            $('#forRetail').show('fast');
            $('#forRestaurants').hide('fast');
            $('#forBanking').hide('fast');
            $('#forMalls').hide('fast');
            $('#forOffices').hide('fast');
            break;
        case 'Banking Halls':
            $('#forMalls').hide('fast');
            $('#forRestaurants').hide('fast');
            $('#forBanking').show('fast');
            $('#forRetail').hide('fast');
            $('#forOffices').hide('fast');
            break;
        case 'Offices and Similar Establishments':
            $('#forMalls').hide('fast');
            $('#forRestaurants').hide('fast');
            $('#forBanking').hide('fast');
            $('#forRetail').hide('fast');
            $('#forOffices').show('fast');
            break;

    }
});
/*
     For calculating Clubs
     */
//For Clubs Duration
$('#clubsHowManyYears').on('input', function () {
    $('#divAmountSpaceClubsNext').show('fast');
    var Duration = $(this).val();
    if (Duration == 1) {
        $('#summaryDuration').text(Duration + ' Year');
        $('#inputDuration').val(Duration);
    } else {
        $('#summaryDuration').text(Duration + ' Years');
        $('#inputDuration').val(Duration);
    }
});
//  $('#clubsHowManyMonths').on('input', function(){
//      $('#divAmountSpaceClubsNext').show('fast');
//     var Duration = $(this).val();
//     if(Duration == 1){
//         $('#summaryDuration').text(Duration + ' Month');
//         }
//         else{
//             $('#summaryDuration').text(Duration + ' Months');
//         }
// });
// function forClubsOnLoad() {
//   $('#clubDefaultAmount, #clubDefaultDays, #clubCapacity, #clubsHowManyMonths, #clubsHowManyYears').on('input', function(){
//     var defaultAmount = $('#clubDefaultAmount').val();
//     var clubCapacity = $('#clubCapacity').val();
//     var clubDefaultDays = $('#clubDefaultDays').val();
//     var clubsHowManyYears = $('#clubsHowManyMonths').val();
//     var totalMonthly = 4*defaultAmount*clubCapacity*clubDefaultDays;
//     var totalYearly = 12*4*defaultAmount*clubCapacity*clubDefaultDays*clubsHowManyYears;
//     $('.divAmountSpaceClubs').show('fast');
//     $("#displayMonthly").text('₦ '+parseFloat(totalMonthly, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
//     $("#displayYearly").text('₦ '+parseFloat(totalYearly, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
//     });
// }
function forCalcClubYearly() {
    $('#clubsNumber, #clubDefaultAmount, #clubDefaultDays, #clubCapacity, #clubsHowManyYears').on('input', function () {
        $('#clubsHowMany').show('fast');
        var clubsNumber = $('#clubsNumber').val();
        $('span.userCat').html('Club Centres');
        $('.summaryUserCategoryNumber').text(clubsNumber);
        $('#inputUserCategoryNumber').val(clubsNumber);
        var defaultAmount = $('#clubDefaultAmount').val();
        var clubCapacity = $('#clubCapacity').val();
        var clubDefaultDays = $('#clubDefaultDays').val();
        var clubsHowManyYears = $('#clubsHowManyYears').val();
        if (clubsHowManyYears == 1) {
            $('#summaryDuration').text(clubsHowManyYears + ' Year');
            $('#inputDuration').val(clubsHowManyYears + ' Year');
        } else {
            $('#summaryDuration').text(clubsHowManyYears + ' Years');
            $('#inputDuration').val(clubsHowManyYears + ' Years');
        }
        var years = 'years';
        var theRenewal = moment().add(clubsHowManyYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        var total = 12 * 4 * defaultAmount * clubCapacity * clubDefaultDays * clubsHowManyYears * clubsNumber;
        $('.divAmountSpaceClubs, #dispYearMonth').show('fast');
        $("div#amountSpaceClubs, div#summaryTotal").text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#summaryPlan').text('Yearly');
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputPlan').val('Yearly');
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}
forCalcClubYearly();
//forClubsOnLoad();
// $('#clubPaymentDuration').on('change', function(){
//      var calcTotal = $(this).find("option:selected").text();
//      switch(calcTotal){
//         case 'Yearly':
//         forCalcClubYearly();
//         $('#divClubsHowManyMonths').hide('fast');
//         $('#divClubsHowManyYears').show('fast');
//          $('#summaryPlan').text('Yearly');
//         break;
//         case 'How do you plan to pay?...':
//         $('#divClubsHowManyYears').hide('fast');
//         break;
//     }
// });
/*
   For calculating Roadshows
   */
$('#roadshowsNumber, #defaultAmountRoadShows, #roadshowsNumberOfDays').on('input', function () {
    $('#roadshowsHowMany').show('fast');
    var roadshowsNumber = $('#roadshowsNumber').val();
    $('span.userCat').html('Roadshow Events');
    $('.summaryUserCategoryNumber').text(roadshowsNumber);
    $('#inputUserCategoryNumber').val(roadshowsNumber);
    var RoadshowAmount = $('#defaultAmountRoadShows').val();
    var RoadshowDays = $('#roadshowsNumberOfDays').val();
    $('#summaryPlan').text('Daily');
    var days = 'days';
    var theRenewal = moment().add(RoadshowDays, days).format('DD-MM-YYYY');
    $('.summaryRenewal').text(theRenewal);
    $('#inputRenewal').val(theRenewal);
    var replacedRenewal = theRenewal.replace(/-/g, '');
    $('span#renew').text(replacedRenewal + '-');
    if (RoadshowDays == 1) {
        $('#summaryDuration').text(RoadshowDays + ' Day');
        $('#inputDuration').val(RoadshowDays + ' Day');
    } else {
        $('#summaryDuration').text(RoadshowDays + ' Days');
        $('#inputDuration').val(RoadshowDays + ' Days');
    }
    var total = RoadshowDays * RoadshowAmount * roadshowsNumber;
    $('.divAmountSpaceRoadshows').show('fast');
    $('div#amountSpaceRoadshows, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
    $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
    var value = $("#transId").map(function () {
        return $(this).text();
    }).get();
    value = $.trim(value);
    $('#inputTransId').val(value);
});
/*
  For calculating Salon and Barbers shops
  */

$('input[name=salonCategory], #salonNumber, #salonDefaultAmount, #salonNumberOfYears').on('change', function () {
    $('#salonHowMany').show('fast');
    var salonNumber = $('#salonNumber').val();
    $('span.userCat').html('Salon/Barber Shops');
    $('.summaryUserCategoryNumber').text(salonNumber);
    $('#inputUserCategoryNumber').val(salonNumber);
    var salonAmount = $('input[name=salonCategory]:checked').val();
    var salonYears = $('#salonNumberOfYears').val();
    var salonDefaultAmount = $('#salonDefaultAmount').val();
    var years = 'years';
    var theRenewal = moment().add(salonYears, years).format('DD-MM-YYYY');
    $('.summaryRenewal').text(theRenewal);
    $('#inputRenewal').val(theRenewal);
    var replacedRenewal = theRenewal.replace(/-/g, '');
    $('span#renew').text(replacedRenewal + '-');
    if (salonAmount == 15000) {
        var total = salonAmount * salonYears * salonDefaultAmount * salonNumber;
        $('.divAmountSpaceSalon').show('fast');
        $('div#amountSpaceSalon, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
    } else if (salonAmount == 5000) {
        var total = salonAmount * salonYears * salonDefaultAmount * salonNumber;
        $('.divAmountSpaceSalon').show('fast');
        $('div#amountSpaceSalon, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
    }
    if (salonYears == 1) {
        $('#summaryDuration').text(salonYears + ' Year');
        $('#inputDuration').val(salonYears + ' Year');
    } else {
        $('#summaryDuration').text(salonYears + ' Years');
        $('#inputDuration').val(salonYears + ' Years');
    }
    var value = $("#transId").map(function () {
        return $(this).text();
    }).get();
    value = $.trim(value);
    $('#inputTransId').val(value);
});
/*
 For calculating Exhibition and trade fairs
 */
$('#exhibitionAmount, #exhibitionDays, #exhibitionNumber').on('input', function () {
    $('#exhibitionHowMany').show('fast');
    var exhibitionNumber = $('#exhibitionNumber').val();
    $('.summaryUserCategoryNumber').text(exhibitionNumber);
    $('#inputUserCategoryNumber').val(exhibitionNumber);
    $('span.userCat').html('Exhibition and Trade Fair Centres');
    var ExhibitionAmount = $('#exhibitionAmount').val();
    var ExhibitionDays = $('#exhibitionDays').val();
    var days = 'days';
    var theRenewal = moment().add(ExhibitionDays, days).format('DD-MM-YYYY');
    $('.summaryRenewal').text(theRenewal);
    $('#inputRenewal').val(theRenewal);
    var replacedRenewal = theRenewal.replace(/-/g, '');
    $('span#renew').text(replacedRenewal + '-');
    if (ExhibitionDays == 1) {
        $('#summaryDuration').text(ExhibitionDays + ' Day');
        $('#inputDuration').val(ExhibitionDays + ' Day');
    } else {
        $('#summaryDuration').text(ExhibitionDays + ' Days');
        $('#inputDuration').val(ExhibitionDays + ' Days');
    }
    var total = ExhibitionDays * ExhibitionAmount * exhibitionNumber;
    $('.divAmountSpaceExhibition').show('fast');
    $('div#amountSpaceExhibition, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
    $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
    var value = $("#transId").map(function () {
        return $(this).text();
    }).get();
    value = $.trim(value);
    $('#inputTransId').val(value);
});
/*
            For calculating Fitness and gyms
            */
function forCalcFitnessMonthly() {
    $('#fitnessDefaultAmountMonthly, #fitnessNumberOfMonths, #fitnessNumber').on('input', function () {
        $('#fitnessHowMany').show('fast');
        var fitnessNumber = $('#fitnessNumber').val();
        $('.summaryUserCategoryNumber').text(fitnessNumber);
        $('#inputUserCategoryNumber').val(fitnessNumber);
        $('span.userCat').html('Fitness Centres');
        $('#divAmountSpaceFitnessNext').show('fast');
        var fitnessAmountMonthly = $('#fitnessDefaultAmountMonthly').val();
        var fitnessMonths = $('#fitnessNumberOfMonths').val();
        var months = 'months';
        var theRenewal = moment().add(fitnessMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (fitnessMonths == 1) {
            $('#summaryDuration').text(fitnessMonths + ' Month');
            $('#inputDuration').val(fitnessMonths + ' Month');
        } else {
            $('#summaryDuration').text(fitnessMonths + ' Months');
            $('#inputDuration').val(fitnessMonths + ' Months');
        }
        var total = fitnessAmountMonthly * fitnessMonths * fitnessNumber;
        $('.divAmountSpaceFitness, #dispYearMonthFitness').show('fast');
        $('div#amountSpaceFitness, #displayFitnessMonthly, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}
forCalcFitnessMonthly();

function forCalcFitnessYearly() {
    $('#fitnessDefaultAmountYearly, #fitnessNumberOfYears, #fitnessNumber').on('input', function () {
        $('#fitnessHowMany').show('fast');
        var fitnessNumber = $('#fitnessNumber').val();
        $('.summaryUserCategoryNumber').text(fitnessNumber);
        $('#inputUserCategoryNumber').val(fitnessNumber);
        $('span.userCat').html('Fitness Centres');
        var fitnessDefaultAmountYearly = $('#fitnessDefaultAmountYearly').val();
        var fitnessYears = $('#fitnessNumberOfYears').val();
        var years = 'years';
        var theRenewal = moment().add(fitnessYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (fitnessYears == 1) {
            $('#summaryDuration').text(fitnessYears + ' Year');
            $('#inputDuration').val(fitnessYears + ' Year');
        } else {
            $('#summaryDuration').text(fitnessYears + ' Years');
            $('#inputDuration').val(fitnessYears + ' Years');
        }
        var total = fitnessDefaultAmountYearly * fitnessYears * fitnessNumber;
        $('.divAmountSpaceFitness, #dispYearMonthFitness').show('fast');
        $('div#amountSpaceFitness, #displayFitnessYearly, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}
forCalcFitnessYearly();
$('#fitnessPlanCategory').on('change', function () {
    var calcTotal = $(this).find("option:selected").text();
    switch (calcTotal) {
        case 'Monthly':
            forCalcFitnessMonthly();
            break;
        case 'Yearly':
            forCalcFitnessYearly();
            break;
    }
});

/*
For calculating RMSROSE->Restaurants
*/
function forRestaurants() {
    $('.defaultPlanSubscriptionRMSROSE, #resNumber, #restaurantNumberOfYears, #restaurantDefaultAmount, #restaurantNumberOfPersons').on('input', function () {
        $('#resHowMany').show('fast');
        var resNumber = $('#resNumber').val();
        $('.summaryUserCategoryNumber').text(resNumber);
        $('#inputUserCategoryNumber').val(resNumber);
        $('span.userCat').html('Restaurants');
        var Plan = $('.defaultPlanSubscriptionRMSROSE').val();
        var resAmount = $('#restaurantDefaultAmount').val();
        var resPersons = $('#restaurantNumberOfPersons').val();
        var resYears = $('#restaurantNumberOfYears').val();
        var years = 'years';
        var theRenewal = moment().add(resYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (resYears == 1) {
            $('#summaryDuration').text(resYears + ' Year');
            $('#inputDuration').val(resYears + ' Year');
        } else {
            $('#summaryDuration').text(resYears + ' Years');
            $('#inputDuration').val(resYears + ' Years');
        }
        var total = resPersons * Plan * resAmount * resYears * resNumber;
        $('.divAmountSpaceRMSROSE').show('fast');
        $('#amountSpaceRMSROSE, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}

function forMalls() {
    $('.divAmountSpaceRMSROSE').hide();
    $('.defaultPlanSubscriptionRMSROSE, #mallsNumber, #mallsNumberOfYears, #mallsDefaultAmount, #mallsNumberOfPersons').on('input', function () {
        $('#mallsHowMany').show('fast');
        var mallsNumber = $('#mallsNumber').val();
        $('.summaryUserCategoryNumber').text(resNumber);
        $('#inputUserCategoryNumber').val(mallsNumber);
        $('span.userCat').html('Malls');
        var Plan = $('.defaultPlanSubscriptionRMSROSE').val();
        var mallsAmount = $('#mallsDefaultAmount').val();
        var mallsPersons = $('#mallsNumberOfPersons').val();
        var mallsYears = $('#mallsNumberOfYears').val();
        var years = 'years';
        var theRenewal = moment().add(mallsYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (mallsYears == 1) {
            $('#summaryDuration').text(mallsYears + ' Year');
            $('#inputDuration').val(mallsYears + ' Year');
        } else {
            $('#summaryDuration').text(mallsYears + ' Years');
            $('#inputDuration').val(mallsYears + ' Years');
        }
        var total = mallsPersons * Plan * mallsAmount * mallsYears * mallsNumber;
        $('.divAmountSpaceRMSROSE').show('fast');
        $('#amountSpaceRMSROSE, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}

function forRetail() {
    $('.divAmountSpaceRMSROSE').hide();
    $('.defaultPlanSubscriptionRMSROSE, #retailNumber, #retailNumberOfYears, #retailDefaultAmount, #retailNumberOfPersons').on('input', function () {
        $('#retailHowMany').show('fast');
        var retailNumber = $('#retailNumber').val();
        $('span.userCat').html('Retail Outlets');
        $('.summaryUserCategoryNumber').text(retailNumber);
        $('#inputUserCategoryNumber').val(retailNumber);
        var Plan = $('.defaultPlanSubscriptionRMSROSE').val();
        var retailAmount = $('#retailDefaultAmount').val();
        var retailPersons = $('#retailNumberOfPersons').val();
        var retailYears = $('#retailNumberOfYears').val();
        var years = 'years';
        var theRenewal = moment().add(retailYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (retailYears == 1) {
            $('#summaryDuration').text(retailYears + ' Year');
            $('#inputDuration').val(retailYears + ' Year');
        } else {
            $('#summaryDuration').text(retailYears + ' Years');
            $('#inputDuration').val(retailYears + ' Years');
        }
        var total = retailPersons * Plan * retailAmount * retailYears * retailNumber;
        $('.divAmountSpaceRMSROSE').show('fast');
        $('#amountSpaceRMSROSE, div#summaryTotal').text('₦ ' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}

function forBanking() {
    $('.divAmountSpaceRMSROSE').hide();
    $('.defaultPlanSubscriptionRMSROSE, #bankingNumber, #bankingNumberOfYears, #bankingDefaultAmount, #bankingNumberOfPersons').on('input', function () {
        $('#bankingHowMany').show('fast');
        var bankingNumber = $('#bankingNumber').val();
        $('span.userCat').html('Banking Halls');
        $('.summaryUserCategoryNumber').text(bankingNumber);
        $('#inputUserCategoryNumber').val(bankingNumber);
        var Plan = $('.defaultPlanSubscriptionRMSROSE').val();
        var bankingAmount = $('#bankingDefaultAmount').val();
        var bankingPersons = $('#bankingNumberOfPersons').val();
        var bankingYears = $('#bankingNumberOfYears').val();
        var years = 'years';
        var theRenewal = moment().add(bankingYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (bankingYears == 1) {
            $('#summaryDuration').text(bankingYears + ' Year');
            $('#inputDuration').val(bankingYears + ' Year');
        } else {
            $('#summaryDuration').text(bankingYears + ' Years');
            $('#inputDuration').val(bankingYears + ' Years');
        }
        var total = bankingPersons * Plan * bankingAmount * bankingYears * bankingNumber;
        $('.divAmountSpaceRMSROSE').show('fast');
        $('#amountSpaceRMSROSE, div#summaryTotal').text('₦' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}

function forOffices() {
    $('.divAmountSpaceRMSROSE').hide();
    $('.defaultPlanSubscriptionRMSROSE, #officeNumber, #officesNumberOfYears, #officesDefaultAmount, #officesNumberOfPersons').on('input', function () {
        $('#officeHowMany').show('fast');
        var officeNumber = $('#officeNumber').val();
        $('span.userCat').html('Offices');
        $('.summaryUserCategoryNumber').text(officeNumber);
        $('#inputUserCategoryNumber').val(officeNumber);
        var Plan = $('.defaultPlanSubscriptionRMSROSE').val();
        var officesAmount = $('#officesDefaultAmount').val();
        var officesPersons = $('#officesNumberOfPersons').val();
        var officesYears = $('#officesNumberOfYears').val();
        var years = 'years';
        var theRenewal = moment().add(officesYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (officesYears == 1) {
            $('#summaryDuration').text(officesYears + ' Year');
            $('#inputDuration').val(officesYears + ' Year');
        } else {
            $('#summaryDuration').text(officesYears + ' Years');
            $('#inputDuration').val(officesYears + ' Years');
        }
        var total = officesPersons * Plan * officesAmount * officesYears * officeNumber;
        $('.divAmountSpaceRMSROSE').show('fast');
        $('#amountSpaceRMSROSE, div#summaryTotal').text('₦' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}
$('#RMSROSE').on('change', function () {
    var RMSROSE = $(this).val();
    switch (RMSROSE) {
        case 'Restaurants':
            forRestaurants();
            break;
        case 'Malls':
            forMalls();
            break;
        case 'Retail Outlets':
            forRetail();
            break;
        case 'Offices and Similar Establishments':
            forOffices();
            break;
        case 'Banking Halls':
            forBanking();
            break;
    }
});
/*
   For calculating Event Centres
   */
function forEventOnLoad() {
    $('#eventDefaultAmount, #eventNumber, #eventDays, #eventCapacity, #eventHowManyMonths, #eventHowManyYears').on('input', function () {
        $('#eventHowMany').show('fast');
        var eventNumber = $('#eventNumber').val();
        $('span.userCat').html('Event Centres');
        $('.summaryUserCategoryNumber').text(eventNumber);
        $('#inputUserCategoryNumber').val(eventNumber);
        var eventDefaultAmount = $('#eventDefaultAmount').val();
        var eventCapacity = $('#eventCapacity').val();
        var eventDays = $('#eventDays').val();
        var eventHowManyMonths = $('#eventHowManyMonths').val();
        var eventHowManyYears = $('#eventHowManyYears').val();
        var years = 'years';
        var theRenewal = moment().add(eventHowManyYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        var totalMonthly = 4 * eventDefaultAmount * eventCapacity * eventDays * eventHowManyMonths * eventNumber;
        var totalYearly = 12 * 4 * eventDefaultAmount * eventCapacity * eventDays * eventHowManyYears;
        $('.divAmountSpaceEvent, #dispYearMonthEvent').show('fast');
        $('#displayMonthlyEvent').text('₦ ' + parseFloat(totalMonthly, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#displayYearlyEvent').text('₦ ' + parseFloat(totalYearly, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}

function forCalcEventMonthly() {
    $('#eventDefaultAmount, #eventNumber, #eventDays, #eventCapacity, #eventHowManyMonths').on('input', function () {
        $('#eventHowMany').show('fast');
        var eventNumber = $('#eventNumber').val();
        $('span.userCat').html('Event Centres');
        $('.summaryUserCategoryNumber').text(eventNumber);
        $('#inputUserCategoryNumber').val(eventNumber);
        var eventMonthly = $('#eventMonthly').val();
        var eventDefaultAmount = $('#eventDefaultAmount').val();
        var eventCapacity = $('#eventCapacity').val();
        var eventDays = $('#eventDays').val();
        var eventHowManyMonths = $('#eventHowManyMonths').val();
        var months = 'months';
        var theRenewal = moment().add(eventHowManyMonths, months).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (eventHowManyMonths == 1) {
            $('#summaryDuration').text(eventHowManyMonths + ' Month');
            $('#inputDuration').val(eventHowManyMonths + ' Month');
        } else {
            $('#summaryDuration').text(eventHowManyMonths + ' Months');
            $('#inputDuration').val(eventHowManyMonths + ' Months');
        }
        var total = 2 * eventDefaultAmount * eventCapacity * eventDays * eventHowManyMonths * eventNumber;
        $('.divAmountSpaceEvent, #dispYearMonthEvent').show('fast');
        $('div#amountSpaceEvent, div#summaryTotal, #displayMonthlyEvent').text('₦' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}

function forCalcEventYearly() {
    $('#eventDefaultAmount, #eventNumber, #eventDays, #eventCapacity, #eventHowManyYears').on('input', function () {
        $('#eventHowMany').show('fast');
        var eventNumber = $('#eventNumber').val();
        $('span.userCat').html('Event Centres');
        $('.summaryUserCategoryNumber').text(eventNumber);
        $('#inputUserCategoryNumber').val(eventNumber);
        var eventDefaultAmount = $('#eventDefaultAmount').val();
        var eventCapacity = $('#eventCapacity').val();
        var eventDays = $('#eventDays').val();
        var eventHowManyYears = $('#eventHowManyYears').val();
        var years = 'years';
        var theRenewal = moment().add(eventHowManyYears, years).format('DD-MM-YYYY');
        $('.summaryRenewal').text(theRenewal);
        $('#inputRenewal').val(theRenewal);
        var replacedRenewal = theRenewal.replace(/-/g, '');
        $('span#renew').text(replacedRenewal + '-');
        if (eventHowManyYears == 1) {
            $('#summaryDuration').text(eventHowManyYears + ' Year');
            $('#inputDuration').val(eventHowManyYears + ' Year');
        } else {
            $('#summaryDuration').text(eventHowManyYears + ' Years');
            $('#inputDuration').val(eventHowManyYears + ' Years');
        }
        var total = 12 * 4 * eventDefaultAmount * eventCapacity * eventDays * eventHowManyYears * eventNumber;
        $('.divAmountSpaceEvent, #dispYearMonthlyEvent').show('fast');
        $('div#amountSpaceEvent, div#summaryTotal, #displayYearlyEvent').text('₦' + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        $('#inputAmount').val(parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var value = $("#transId").map(function () {
            return $(this).text();
        }).get();
        value = $.trim(value);
        $('#inputTransId').val(value);
    });
}
forEventOnLoad();
$('#eventPaymentDuration').on('change', function () {
    var calcTotal = $(this).find('option:selected').text();
    switch (calcTotal) {
        case 'Monthly':
            forCalcEventMonthly();
            $('#divEventHowManyMonths').show('fast');
            $('#divEventHowManyYears').hide('fast');
            break;
        case 'Yearly':
            forCalcEventYearly();
            $('#divEventHowManyMonths').hide('fast');
            $('#divEventHowManyYears').show('fast');
            break;
        case 'Please choose your plan...':
            $('#divEventHowManyMonths').hide('fast');
            $('#divEventHowManyYears').hide('fast');
            break;
    }
});
$('#eventHowManyMonths, #eventHowManyYears').on('input', function () {
    $('#divAmountSpaceEventNext').show('fast');
});
/*
    For calculating Hotels
    */
$('#hotelType').on('change', function () {
    var hotelType = $(this).val();
    switch (hotelType) {
        case '97.90':
            forCalcHotelsInternational();
            $('#roomRates, #barAndResRates, #eventHallRates').text('');
            break;
        case '48.00':
            forCalcHotelsNational();
            $('#roomRates, #barAndResRates, #eventHallRates').text('');
            break;
        case '26.70':
            forCalcHotelsUrban();
            $('#roomRates, #barAndResRates, #eventHallRates').text('');
            break;
    }
});

function forCalcHotelsInternational() {
    $('#hotelRooms').on('input', function () {
        var hotelRooms = $('#hotelRooms').val();
        var roomRates = hotelRooms * 365 * 97.90;
        $('.divAmountSpaceHotels').show('fast');
        $('span.userCat').html('Hotels');
        $("div#roomRates").text('₦ ' + parseFloat(roomRates, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var barAndResRates = (20 / 100) * (roomRates);
        $("div#barAndResRates").text('₦ ' + parseFloat(barAndResRates, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var eventHallRates = 'Not yet calculated';
        $("div#eventHallRates").text('₦ ' + eventHallRates);
    });
}

function forCalcHotelsNational() {
    $('#hotelRooms').on('input', function () {
        var hotelRooms = $('#hotelRooms').val();
        var roomRates = hotelRooms * 365 * 48.00;
        $('.divAmountSpaceHotels').show('fast');
        $('span.userCat').html('Hotels');
        $("div#roomRates").text('₦ ' + parseFloat(roomRates, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var barAndResRates = (20 / 100) * (roomRates);
        $("div#barAndResRates").text('₦ ' + parseFloat(barAndResRates, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var eventHallRates = 'Not yet calculated';
        $("div#eventHallRates").text('₦ ' + eventHallRates);
    });
}

function forCalcHotelsUrban() {
    $('#hotelRooms').on('input', function () {
        var hotelRooms = $('#hotelRooms').val();
        var roomRates = hotelRooms * 365 * 26.70;
        $('.divAmountSpaceHotels').show('fast');
        $('span.userCat').html('Hotels');
        $("div#roomRates").text('₦ ' + parseFloat(roomRates, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var barAndResRates = (20 / 100) * (roomRates);
        $("div#barAndResRates").text('₦ ' + parseFloat(barAndResRates, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
        var eventHallRates = 'Not yet calculated';
        $("div#eventHallRates").text('₦ ' + eventHallRates);
    });
}
/*
    Fullscreen background
    */
//$.backstretch("<?php echo $this->webroot;?>img/backgrounds/1.jpg");

$('#top-navbar-1').on('shown.bs.collapse', function () {
    $.backstretch("resize");
});
$('#top-navbar-1').on('hidden.bs.collapse', function () {
    $.backstretch("resize");
});
/*
    Form
    */
$('.f1 fieldset:first').fadeIn('slow');

$('.f1 input[type="text"], .f1 input[type="password"], .f1 input[type="email"], .f1 input[type="number"]').on('focus', function () {
    $(this).removeClass('input-error');
});


//Disabling the enter button
$(document).on('keypress', '.f1', function (e) {
    if (e.which == 13) {
        alert("Please use the available buttons");
        return false;
    }
});

// $('#company_name').keypress(function(){
// $('#errorAllCompany').hide('fast');
// });
// $('#contact_person').keypress(function(){
// $('#errorAllPerson').hide('fast');
// });
// $('#email_address').keypress(function(){
// $('#errorAll').hide('fast');
// });
// $('#phone_number').keypress(function(){
// $('#errorAllPhone').hide('fast');
// });
// $('#password-1').keypress(function(){
// $('#errorAllPassword-1').hide('fast');
// });
// $('#password-2').keypress(function(){
// $('#errorAllPassword-2').hide('fast');
// });
// next step
$('.f1 .btn-next').on('click', function () {
    var parent_fieldset = $(this).parents('fieldset');
    var next_step = true;
    // navigation steps / progress steps
    var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    var progress_line = $(this).parents('.f1').find('.f1-progress-line');

    // fields validation
    parent_fieldset.find('input[type="text"], input[type="password"],  input[type="email"], input[type="number"]').each(function () {
        if ($(this).val() == "") {
            $(this).addClass('input-error');
            next_step = false;
        } else {
            $(this).removeClass('input-error');
        }
        // Validating the email
        var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var email = $('input[type="email"]');
        var is_email = regex.test(email.val());
        if (is_email) {
            email.removeClass("input-error");
        } else {
            email.addClass("input-error");
            next_step = false;
        }

        //Validating the password
        if ($('#password-1').val() !== $('#password-2').val()) {
            $('input[type=password]').addClass('input-error');
            next_step = false;
        } else {
            $('input[type=password]').removeClass('input-error');
        }
    });

    // fields validation
    if (next_step) {
        parent_fieldset.fadeOut(400, function () {
            // change icons
            current_active_step.removeClass('active').addClass('activated').next().addClass('active');
            // progress bar
            bar_progress(progress_line, 'right');
            // show next step
            $(this).next().fadeIn();
            // scroll window to beginning of the form
            scroll_to_class($('.f1'), 20);
        });
    }

});

// previous step
$('.f1 .btn-previous').on('click', function () {
    // navigation steps / progress steps
    var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    var progress_line = $(this).parents('.f1').find('.f1-progress-line');

    $(this).parents('fieldset').fadeOut(400, function () {
        // change icons
        current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
        // progress bar
        bar_progress(progress_line, 'left');
        // show previous step
        $(this).prev().fadeIn();
        // scroll window to beginning of the form
        scroll_to_class($('.f1'), 20);
    });
});

// submit
$('.f1').on('submit', function (e) {

    // fields validation
    $(this).find('input[type="text"], input[type="password"], input[type="number"], input[type="email"]').each(function () {
        if ($(this).val() == "") {
            e.preventDefault();
            $(this).addClass('input-error');
        } else {
            $(this).removeClass('input-error');
        }
    });
    // fields validation

});
