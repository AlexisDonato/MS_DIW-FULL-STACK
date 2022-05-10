// $('#mcd').click( () => {
//     $('#content').load('mcd')
// })
$(document).ready(function () {
    $('button').click(function() {
        console.log($(this).attr('id'))
        let id = $(this).attr('id')
        $('#content').load(id)
    })
})