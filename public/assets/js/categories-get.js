let params = getParams(location.href);
let categoryId = params.c;
let subcategoryId = params.sc;
let statusFilter = params.status;
let sort = params.sort;

categoryId = categoryId === undefined ? "all" : categoryId;
subcategoryId = subcategoryId === undefined ? "all" : subcategoryId;

$(`#status-filter option[value=${statusFilter}]`).prop('selected', true);
$(`#sort option[value=${sort}]`).prop('selected', true);

function fillingCategories(obj) {
    let json = JSON.parse(obj);

    let category = '<option value="all">Все</option>';
    json.forEach(el => {
        const {name, id} = el;
        category += `<option value="${id}">${name}</option>`;
    });
    $("#category").html(category);
    $(`#category option[value=${categoryId}]`).prop('selected', true);

    let subcategory = '<option value="all">Все</option>';
    const indexCategory = json.findIndex(el => el.id === Number(categoryId));
    if (indexCategory !== -1) {
        json[indexCategory].subcats.forEach(el => {
            const {name, id} = el;
            subcategory += `<option value="${id}">${name}</option>`;
        });
    }
    $("#subcategory").html(subcategory);

    if (subcategoryId) $(`#subcategory option[value=${subcategoryId}]`).prop('selected', true);
    else $('#subcategory option:first').prop('selected', true);
}

$('.categories').on('change', function () {
    let c = $('#category').val();
    let sc = $('#subcategory').val();
    if (c === "all") sc = "all";

    params.c = c;
    params.sc = sc;

    let search="?";
    for (let key in params) {
        search+=`${key}=${params[key]}&`;
    }
    search = search.substring(0, search.length - 1);

    location.search = search;
});

$('#status-filter').on('change', function () {
    let status = $('#status-filter').val();

    params.status = status;

    let search="?";
    for (let key in params) {
        search+=`${key}=${params[key]}&`;
    }
    search = search.substring(0, search.length - 1);

    location.search = search;
});

$('#sort').on('change', function () {
    let sort = $('#sort').val();

    params.sort = sort;

    let search="?";
    for (let key in params) {
        search+=`${key}=${params[key]}&`;
    }
    search = search.substring(0, search.length - 1);

    location.search = search;
});

function getParams(str) {
    let results = str.split("?");
    results.shift();
    results = results.join().split("&");
    let arr = {};
    for (let i = 0; i < results.length; i++) {
        let temp = results[i].split("=");
        if (temp[1] != undefined)
            arr[temp[0]] = temp[1];
    }
    return arr;
}
