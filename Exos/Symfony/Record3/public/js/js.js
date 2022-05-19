/* Fonction Heure */
function dsptime() {
    var heure;
    date = new Date();
    h = date.getHours();
    m = date.getMinutes();
    s = date.getSeconds();
    hh = date.getHours();
    h = h > 12 ? h % 12 : h;

    heure = (h < 10 ? '0' : '') + h + ':' + (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s + (hh < 12 ? ' am' : ' pm');

    document.querySelector('#time').innerHTML = heure;

    return heure;
}
dsptime();