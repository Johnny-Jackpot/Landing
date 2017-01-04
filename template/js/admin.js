$(document).ready(function(){
    var selects = $('select');
    var selectedOptions = selects.map(function(index, el){
        return $(el).val();
    });
    
    selects.on('change', function(e){
        var elem = $(this);
        var initialValue = selectedOptions[selects.index(elem)];
        var selectedValue = elem.val();
        var orderId = elem.data().orderId;
        var classes = {
            '1': 'status-payed',
            '2': 'status-active',
            '3': 'status-cancelled'
        };

        $.post("/admin/changeOrderStatus", {orderId: orderId, status: selectedValue})
            .done(function(data){
                elem.removeClass(elem.attr('class'))
                    .addClass(classes[selectedValue]);
                
            })
            .fail(function(error){
                elem.val(initialValue);
                alert(error.statusText + '\n' +
                'Changes wasn`t saved');
            });
    });
});