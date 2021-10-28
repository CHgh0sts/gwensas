
let difficulty = 0;
let btc_eur = 0;

const valdApi = async function (url,url2, url3) {
    let fetch1,fetch2,fetch3;
    let responce =  await fetch(url);
    if (responce.ok) {
        fetch1 = await responce.json()
        let difficulty =  await fetch(url2);
        if (difficulty.ok) {
            fetch2 = await difficulty.json()
            let tauxChange = await fetch(url3);
            if (tauxChange.ok) {
                fetch3 = await tauxChange.json()
                resultFetch(fetch1,fetch2,fetch3)
            } else {
                console.log('error')
            }
        } else {
            console.log('error')
        }
    } else {
        console.log('error')
    }
}
valdApi('https://api.coinlore.net/api/ticker/?id=90', 'https://blockchain.info/q/getdifficulty', 'https://v6.exchangerate-api.com/v6/664d78d9742c0959d9965d3e/latest/USD')


function startSimulator() {
    let login = document.querySelector('._working');
    login.classList.remove('login');
    let selectOffer = document.querySelectorAll('.select-offer');
    selectOffer[0].classList.add('selected');
    let durationContainer = document.querySelectorAll('.duration-container');
    durationContainer[0].classList.add('selected');
    let partenaires = document.querySelectorAll('.partenaires.Rentability li');
    partenaires[3].classList.add('selected');
}

function partenaires(val, typeFunction) {
    let partenaires = document.querySelectorAll('.partenaires.Rentability li');
    let partenairesSelected = document.querySelector('.partenaires.Rentability li.selected');
    partenairesSelected.classList.remove('selected');
    partenaires.forEach((e) => {
        if (e.getAttribute('duration') === val) {
            e.classList.add('selected');
        }
    })
    calculSimulator()
}

function resultFetch(fetch1,fetch2,fetch3) {
    difficulty = fetch2;
    btc_eur = fetch1[0].price_usd * fetch3.conversion_rates.EUR;
    document.querySelector('.NBT_BTC').innerHTML = Math.floor(btc_eur) + '€';
    console.log('la val est de :', btc_eur, ' avec un taux de difficulty à : ', difficulty);
    document.querySelectorAll('.loadingOffre').forEach((e) => {
        e.classList.remove('loadingOffre');
    })
    startSimulator()
    refreshValDuration()
    changeSlide()
}
/* --- a active si plus de reseau --- */
// document.querySelectorAll('.loadingOffre').forEach((e) => {
//     e.classList.remove('loadingOffre');
// })
// changeSlide()
/* --- --------- --- */
function verifClass(list, verif = '') {
    for (let i = 0; i < list.length;i++) {
        if (list[i] === verif) {
            return true;
        }
    }
    return false;
}
function refreshValDuration() {
    let val = document.querySelector('.select-offer.selected').getAttribute('valDuration');
    let carteDuration = val.split('@');
    let durationContainer = document.querySelectorAll('.duration-container');
    for (let i = 0;i < durationContainer.length;i++) {
        let valCarteDuration = carteDuration[i].split('!');
        durationContainer[i].querySelector('p').innerHTML = valCarteDuration[0] + '€/TH/s/mois';
        durationContainer[i].setAttribute('price', valCarteDuration[0]);
        durationContainer[i].setAttribute('electricity', valCarteDuration[1]);
        durationContainer[i].setAttribute('fees', valCarteDuration[2]);
    }
}

document.querySelectorAll('.select-offer').forEach((e) => {
    e.addEventListener('click', () => {
        if (!verifClass(e.classList, 'selected') && !verifClass(e.classList, 'soldout') && parseFloat(e.getAttribute('stock')) > 0) {
            console.log("stock :", e.getAttribute('stock'))
            document.querySelector('.select-offer.selected').classList.remove('selected');
            e.classList.add('selected');
            refreshValDuration()
            refreshValues2()
            // calculSimulator()
        }
    })
})
document.querySelectorAll('.duration-container').forEach((e) => {
    e.addEventListener('click', () => {
        if (!verifClass(e.classList, 'selected') && !verifClass(e.classList, 'soldout')) {
            document.querySelector('.duration-container.selected').classList.remove('selected');
            e.classList.add('selected');
            partenaires(e.getAttribute('durationDay'), 1)
            //add la function pour calculer les val
        }
    })
})

let sliderBar = document.querySelector('.sliderRange');
let sliderVal = document.querySelector('.sliderRangeVal');
sliderVal.textContent = sliderBar.value;

function changeSlide() {
    sliderBar.style  = '--ValRange :' + sliderBar.value + ';--valMaxRange :' + sliderBar.max;
    sliderVal.textContent = sliderBar.value;
    changeValDuration();
}
function changeValDuration() {
    let x = 1;
    let fixedPrice = 0,fixedPower = 0,fixedTmpDura = 0;
    let durationContainer =  document.querySelectorAll('.duration-container');
    let power = parseFloat(document.querySelector('.sliderRangeVal').innerHTML);
    durationContainer.forEach((e) => {
        let price = e.getAttribute('price');
        let tmp_dura = e.getAttribute('duration');
        e.querySelector('h3').innerHTML = Math.floor(price * power * tmp_dura, 2) + "€";
        if (x > 1) {
            e.querySelector('h4').innerHTML = "Aux lieu de " + Math.floor(fixedPrice * fixedPower * fixedTmpDura, 2) * x + "€";
        }else {
            fixedPrice = price;
            fixedPower = power;
            fixedTmpDura = tmp_dura;
            console.log(fixedPower,fixedPrice,fixedTmpDura)
        }
        e.querySelector('h2').innerHTML = ((price * power * tmp_dura)/btc_eur).toFixed(8) + " ₿";
        x++;
    })
    calculSimulator();
}
function refreshValues2() {
    let stock = parseFloat(document.querySelector('.select-offer.selected').getAttribute(`stock`));
    if(parseFloat(document.querySelector('.sliderRangeVal').innerHTML) > stock)  {
        document.querySelector('.sliderRangeVal').innerHTML = stock;
    }
    power = parseFloat(document.querySelector('.sliderRangeVal').innerHTML);
    document.querySelector('.parramOffre input.sliderRange').max = stock;
    changeSlide();

    // console.error("refresh");
    // amount = calcul_price()
    // console.log('amount', amount)
    ////$("#tx_amount").html(amount.toFixed(8) + " BTC")
    // calcul_simulator()
    ////draw_qrcode()
    ////draw_graph()
}
/**************************************************************************/

function calculDailyMined(hashrate)
{
    //(12.5 * power * $86400) / (difficulty * 2 ** 32)
    console.log('dif:', difficulty);
    console.log(12.5 * hashrate * 86400) / (difficulty * 2 ** 32)
    return (6.25 * hashrate * 86400) / (difficulty * 2 ** 32)
}
function calculSimulator() {
    let power = parseFloat(document.querySelector('.sliderRangeVal').innerHTML);

    let hashrate = parseFloat(document.querySelector('.sliderRangeVal').innerHTML) * 1000000000000;
    let price = document.querySelector('.duration-container.selected').getAttribute('price') / 30;
    let nb_days = document.querySelector('.partenaires.Rentability li.selected').getAttribute('duration');
    let power_cost_by_day = document.querySelector('.duration-container.selected').getAttribute('electricity') / 30;
    let fees =  document.querySelector('.duration-container.selected').getAttribute('fees') - 0;

    let mined_by_day = calculDailyMined(hashrate);
    let eur_by_day = mined_by_day * btc_eur;
    let mined = mined_by_day * nb_days;
    let mined_an = mined_by_day * 365   ;
    let eur = mined * btc_eur;
    let tmp_mined_eur_year = calculDailyMined(hashrate) * 365 * btc_eur;
    let power_cost = power_cost_by_day * nb_days * power;
    let cost = price * nb_days * power + power_cost;

    console.log("price", "*", "nb_days", "*", "#power", "+", "power_cost");
    console.log(price, "*", nb_days, "*", power, "+", power_cost);

    let profit = eur - cost;
    let profit_ratio = 100 - (fees + power_cost / eur) * profit ;
    refreshSimulator(profit, mined, cost, profit_ratio, tmp_mined_eur_year, power_cost, fees * 100, mined_an)
}


function refreshSimulator(profit, mined, cost, profit_ratio, tmp_mined_eur_year, power_cost, fees, mined_an)
{
    let tmp_mined = Math.round(mined * 100000) / 100000;
    let tmp_mined_an = Math.round(mined_an * 100000) / 100000;
    let tmp_profit  = Math.round(profit * 100) / 100
    let tmp_power_cost = Math.round(power_cost * 100) / 100
    let tmp_profit_ratio = Math.round(profit_ratio * 100) / 100
    let mined_eur = mined*btc_eur;
    let tmp_mined_eur = Math.round(mined_eur * 100) / 100
    let profit_btc = tmp_profit / btc_eur;
    let tmp_profit_btc = Math.round(profit_btc * 100000) / 100000
    let resultat = Math.round((tmp_mined_eur - power_cost - (tmp_mined_eur * (fees/100)))*100)/100//- ((fees/100)*tmp_mined_eur)
    console.log("fees", fees)
    // $("#profit_eur").html(Math.round(((fees/100)*mined_eur)*100)/100 + ' €');
    document.querySelector('#profit_eur').innerHTML = Math.round(((fees/100)*mined_eur)*100)/100 + ' €';

    // $("#profit").html(Math.round(((fees/100)*mined)*100000000)/100000000 + ' <i class="fa fa-bitcoin iconB"></i>');
    document.querySelector('#profit').innerHTML = Math.round(((fees/100)*mined)*100000000)/100000000 + ' ₿';

    //$("#profit_btc").html(tmp_profit_btc + ' Bitcoins');

    // $("#mined").html(tmp_mined + ' <i class="fa fa-bitcoin iconB"></i>');
    document.querySelector('#mined').innerHTML = tmp_mined + ' ₿';
    document.querySelector('.infoConso h3').innerHTML = tmp_mined_an + ' ₿/an';


    // $("#mined_eur").html( tmp_mined_eur + ' €');
    document.querySelector('#mined_eur').innerHTML = tmp_mined_eur + ' €';

    // $("#power_cost").html(formatEurNb(power_cost) + ' €');
    document.querySelector('#power_cost').innerHTML = power_cost.toFixed(2) + ' €';

    // $("#power_cost_btc").html((Math.round((power_cost/ btc_eur) * 100000) / 100000) + '  <i class="fa fa-bitcoin iconB"></i>');
    document.querySelector('#power_cost_btc').innerHTML = (Math.round((power_cost/ btc_eur) * 100000) / 100000) + ' ₿';

    // $("#profit_ratio").html(resultat + ' €');
    document.querySelector('#profit_ratio').innerHTML = resultat + ' €';

    // $("#profit_ratio_btc").html((Math.round((resultat/ btc_eur) * 100000) / 100000) + ' <i class="fa fa-bitcoin iconB"></i>');
    document.querySelector('#profit_ratio_btc').innerHTML = (Math.round((resultat/ btc_eur) * 100000) / 100000) + ' ₿';

    // $("#mined_eur_year").html( formatEurNb(tmp_mined_eur_year));
    let hash = parseFloat(document.querySelector('.sliderRangeVal').innerHTML) * 1000000000000;

    // document.querySelector('#mined_eur_year').innerHTML = ( await calculDailyMined(hashrate) * 365 * btc_eur).toFixed(2);
    let test = (12.5 * hash * 86400) / (difficulty * 2 ** 32) * 365 * btc_eur;
    document.querySelector('#mined_eur_year').innerHTML = test.toFixed(2) + '€ miné / an';

}

/************************************************************************************/

// $(".select-offer").on('click', function(e)
// {
//     console.error("stock :", $(this).attr('stock'))
//     if(!$(this).hasClass('selected-offer') && parseFloat($(this).attr('stock')) > 0)
//     {
//         $('.selected-offer').removeClass('selected-offer')
//         $(this).addClass('selected-offer');
//         $('.duration_group').css('display', 'none');
//         $('[offer-id='+$(this).attr('offer') + "]").css('display', 'flex');
//         $(".selected-duration").removeClass('selected-duration')
//         $('[offer-id='+$(this).attr('offer') + "] div").first().addClass('selected-duration')
//         refresh_values2()
//     }
// })
//
// $(".select-duration").on('click', function(e)
// {
//     if(!$(this).hasClass('selected-duration'))
//     {
//         $('.selected-duration').removeClass('selected-duration')
//         $(this).addClass('selected-duration');
//         var tmp_duration = parseInt($(this).attr('duration'))
//         if(tmp_duration == 12)
//         {
//             $( ".duration_simulator[duration=365]" ).trigger( "click" );
//
//         }
//         else if(tmp_duration == 24)
//         {
//             $( ".duration_simulator[duration=730]" ).trigger( "click" );
//         }
//         else if(tmp_duration == 36)
//         {
//             $( ".duration_simulator[duration=1095]" ).trigger( "click" );
//         }
//         else
//         {
//             $( ".duration_simulator[duration=365]" ).trigger( "click" );
//         }
//         refresh_values2()
//     }
// })
//
// $(".rentaCalendar").on('click', function(e)
// {
//     $('.selected').removeClass('selected')
//     $(this).addClass('selected');
// })
//
// $(document).ready(function() {
//     $('#coin').DataTable({
//         "bInfo" : false,
//         "paging": false
//     });
//     //$('.market_selected').removeClass('market_selected');
// } );
//
//
//
//
// // var difficulty = 1.5958652328578E13;
// // var btc_eur = conv_btc_eur;
// calcul_simulator()
// // Daily revenue = H x 25 x 600 x 65535 / 248 / D x 6 x 24
// //BTC earned per day = Block Reward / (Difficulty * 2**32 / hash rate / seconds in a day)
// //               btc = ($b * $power * $nb_second) / ($d * 2 ** 32)
// // 86,400 / (difficulty * 2^32 / hashrate)electricity
//
// $('.duration_simulator').on('click', function(e){
//     //$('.duration_simulator').removeClass('selected')
//     $(this).addClass('selected');
//     calcul_simulator()
// })
// //pad_section_dash marge_section_dash marketRenta duration_simulator rentaCalendar  market_selected
// //pad_section_dash marge_section_dash marketRenta duration_simulator rentaCalendar
//
// function calcul_daily_mined(hashrate)
// {
//     //(12.5 * power * $86400) / (difficulty * 2 ** 32)
//     console.log('dif:', difficulty);
//     console.log(12.5 * hashrate * 86400) / (difficulty * 2 ** 32)
//     return (6.25 * hashrate * 86400) / (difficulty * 2 ** 32)
// }
//
// function refresh_simulator(profit, mined, cost, profit_ratio, tmp_mined_eur_year, power_cost, fees)
// {
//     var tmp_mined = Math.round(mined * 100000) / 100000
//     var tmp_profit  = Math.round(profit * 100) / 100
//     var tmp_power_cost = Math.round(power_cost * 100) / 100
//     var tmp_profit_ratio = Math.round(profit_ratio * 100) / 100
//     var mined_eur = mined*btc_eur;
//     var tmp_mined_eur = Math.round(mined_eur * 100) / 100
//     var profit_btc = tmp_profit / btc_eur;
//     var tmp_profit_btc = Math.round(profit_btc * 100000) / 100000
//     var resultat = Math.round((tmp_mined_eur - power_cost - (tmp_mined_eur * (fees/100)))*100)/100//- ((fees/100)*tmp_mined_eur)
//     console.log("fees", fees)
//     $("#profit_eur").html(Math.round(((fees/100)*mined_eur)*100)/100 + ' €');
//     $("#profit").html(Math.round(((fees/100)*mined)*100000000)/100000000 + ' <i class="fa fa-bitcoin iconB"></i>');
//     //$("#profit_btc").html(tmp_profit_btc + ' Bitcoins');
//     $("#mined").html(tmp_mined + ' <i class="fa fa-bitcoin iconB"></i>');
//     $("#mined_eur").html( tmp_mined_eur + ' €');
//     $("#mined_eur_year").html( format_eur_nb(tmp_mined_eur_year));
//     $("#power_cost").html(format_eur_nb(power_cost) + '  €');
//     $("#power_cost_btc").html((Math.round((power_cost/ btc_eur) * 100000) / 100000) + '  <i class="fa fa-bitcoin iconB"></i>');
//     $("#profit_ratio").html(resultat + ' €');
//     $("#profit_ratio_btc").html((Math.round((resultat/ btc_eur) * 100000) / 100000) + ' <i class="fa fa-bitcoin iconB"></i>');
//
// }
//
// function calcul_simulator()
// {
//     var hashrate = $("#power").val() * 1000000000000;
//     var price = $(".selected-duration").attr('price') / 30;
//     var nb_days = $('.duration_simulator.selected').attr('duration');
//     var power_cost_by_day = $(".selected-duration").attr('electricity') / 30;
//     var fees = $(".selected-duration").attr('fees') - 0;
//
//     var mined_by_day = calcul_daily_mined(hashrate)
//     var eur_by_day = mined_by_day * btc_eur
//     var mined = mined_by_day * nb_days;
//     var eur = mined * btc_eur;
//     var tmp_mined_eur_year = calcul_daily_mined(hashrate) * 365 * btc_eur
//     var power_cost = power_cost_by_day * nb_days * $("#power").val();
//     var cost = price * nb_days * $("#power").val() + power_cost;
//     console.log("COST", cost)
//     console.log("price", "*", "nb_days", "*", "#power", "+", "power_cost")
//     console.log(price, "*", nb_days, "*", $("#power").val(), "+", power_cost)
//     console.warn(eur)
//     console.warn(power_cost)
//     console.warn(fees)
//     var profit = eur - cost;
//     var profit_ratio = 100 - (fees + power_cost / eur) * profit ;
//     refresh_simulator(profit, mined, cost, profit_ratio, tmp_mined_eur_year, power_cost, fees * 100)
// }
//
// function calcul_price()
// {
//     price_by_th = $(".selected-duration").attr('price');
//     power = $("#power").val();
//     duration = $(".selected-duration").attr('duration');
//     console.log(price_by_th , power , duration , raw_amount)
//     return price_by_th * power * duration + raw_amount;
// }
//
// function refresh_values2()
// {
//     if(parseFloat($('#power').val()) > parseFloat($(".selected-offer").attr('stock')))
//     {
//         $('#power').val(Math.floor($(".selected-offer").attr('stock')))
//     }
//     power = $('#power').val()
//     $("#sliderMarket").slider({
//         range: "min",
//         value: $('#power').val(),
//         step: 1,
//         min: 1,
//         max: Math.floor($(".selected-offer").attr('stock')),
//         slide: function( event, ui ) {
//             $( "#power" ).val( ui.value );
//             refresh_values2()
//         }
//     });
//     $( ".duration-container" ).each(function( index ) {
//         var price = this.parentNode.getAttribute('price')
//         var tmp_dura = this.parentNode.getAttribute('duration')
//         this.children[3].innerHTML = "Soit " + Math.floor(price * power * tmp_dura, 2) + "€"
//         this.children[4].innerHTML = ((price * power * tmp_dura)/btc_eur).toFixed(8) + "<i class='fa fa-bitcoin iconB'></i>"
//         //this.innerHTML = (price * power) + "€"
//     });
//     console.error("refresh");
//     amount = calcul_price()
//     console.log('amount', amount)
//     //$("#tx_amount").html(amount.toFixed(8) + " BTC")
//     calcul_simulator()
//     //draw_qrcode()
//     //draw_graph()
// }
//
// refresh_values2()
// var power = $("#power").val();
// var duration = $(".selected-duration").attr('duration');
// var price_by_th = $(".selected-duration").attr('price');
//
// var amount = price_by_th * power * duration + raw_amount
// //draw_qrcode()
// $("#tx_amount").html(amount.toFixed(8) + " <i class='fa fa-bitcoin iconB'></i>")
//
// $('#duration').on('change paste keyup', refresh_values)
// $('#power').on('change paste keyup', refresh_values)
//
//
// $("#show_daily").on('click', function(e)
// {
//     $("#myDiv2").css('display', 'none');
//     $("#myDiv").css('display', 'block');
// })
// $("#show_total").on('click', function(e)
// {
//     $("#myDiv2").css('display', 'block');
//     $("#myDiv").css('display', 'none');
// })
//
// //var current_date = new Date();
// //var midnight_day =  - (current_date.getHours()-1) * 60 * 60  - current_date.getMinutes()*60
// //var date_from = (Math.round((midnight_day - 6 * 30 * 24 * 60 * 60)) - current_date.getTime())/1000
//
//
//
// //draw_graph()
//
//
// $("#sliderMarket").slider({
//     range: "min",
//     value: 1,
//     step: 1,
//     min: 1,
//     max: Math.floor($(".selected-offer").attr('stock')),
//     slide: function( event, ui ) {
//         $( "#power" ).val( ui.value );
//         refresh_values2()
//     }
// });
//
//
// $("#power").change(function () {
//     var value = this.value;
//     console.log(value);
//     $("#sliderMarket").slider("value", parseInt(value));
//     refresh_values2()
// });
