const params = getParams(location.href);
let categoryId = getParams(location.href).c;
let subcategoryId = getParams(location.href).sc;

categoryId = categoryId === undefined ? "all" : categoryId;
subcategoryId = subcategoryId === undefined ? "all" : subcategoryId;

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
    location.search = `?c=${c}&sc=${sc}`;
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
