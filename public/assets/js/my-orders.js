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
