$(document).ready(function () {
    let orders = new Bloodhound({
        datumTokenizer: function (datum) {
            return Bloodhound.tokenizers.whitespace(datum.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            wildcard: '%QUERY',
            url: "search/%QUERY",
            transform: function (response) {
                return response.orders[0].map(el => el.name);
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
            url: "search/%QUERY",
            transform: function (response) {
                return response.categories[0].map(el => el.name);
            }
        }
    });

    $('#typeahead').typeahead({
            'hint': true,
            'highlight': true,
            'minLength': 0
        }, {
            'name': 'orders',
            'source': orders,
            'limit': 'Infinity',
            templates: {
                header: '<h5 class="typeahead-title"><b>Заказы</b></h5>'
            }
        },
        {
            'name': 'categories',
            'source': categories,
            'limit': 'Infinity',
            templates: {
                header: '<h5 class="typeahead-title"><b>Категории</b></h5>'
            }
        }
    );
});
