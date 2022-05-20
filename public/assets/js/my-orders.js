$('.delete').on('click', function () {
    const id = Number($(this).attr("data-id"));
    $.ajax({
        url: '/delete-order',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {"id": id},
        success: function (data) {
            location.href = location.href;
        },
        error: function (data) {
            alert(data);
        }
    });
});

$('#status').on('change', function () {
    const status = $(this).val();
    const id = $(this).attr('data-id');
    $.ajax({
        url: '/edit-order-status',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {"order_id": id, "status":status},
        success: function (data) {
            location.href = location.href;
        },
        error: function (data) {
            alert(data);
        }
    });
});
