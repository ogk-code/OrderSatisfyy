$('.categories').on('change', function () {
    const c = $('#category').val();
    const sc = $('#subcategory').val();
    location.search = `?c=${c}&sc=${sc}`;
});
