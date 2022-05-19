$(document).ready(function () {
    $(document).on('click', '.opt-orders', function () {
        const id = $(this).attr("data-id");
        location.href = `/order/${id}`;
    });

    $(document).on('click', '.opt-categories', function () {
        const id = $(this).attr("data-id");
        location.href = `/order-list?c=${id}`;
    });

    let orders = new Bloodhound({
        datumTokenizer: function (datum) {
            return Bloodhound.tokenizers.whitespace(datum.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            wildcard: '%QUERY',
            url: "/search/%QUERY",
            transform: function (response) {
                return response.orders[0];
            }
        }
    });

    let categories = new Bloodhound({
        datumTokenizer: function (datum) {
            return Bloodhound.tokenizers.whitespace(datum.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            wildcard: '%QUERY',
            url: "/search/%QUERY",
            transform: function (response) {
                return response.categories[0];
            }
        }
    });

    $('#typeahead').typeahead({
            'hint': true,
            'highlight': true,
            'minLength': 0
        }, {
            'name': 'orders',
            'display': 'name',
            'source': orders,
            'limit': 'Infinity',
            templates: {
                header: '<h5 class="typeahead-title"><b>Заказы</b></h5>',
                suggestion: function (data) {
                    return `<div class="opt-orders" data-id="${data.id}">${data.name}</div>`;
                }
            }
        },
        {
            'name': 'categories',
            'display': 'name',
            'source': categories,
            'limit': 'Infinity',
            templates: {
                header: '<h5 class="typeahead-title"><b>Категории</b></h5>',
                suggestion: function (data) {
                    return `<div class="opt-categories" data-id="${data.id}">${data.name}</div>`;
                }
            }
        }
    );
});
