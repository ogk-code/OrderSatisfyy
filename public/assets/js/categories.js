function fillingCategories(obj, idSelectedCategories=1, idSelectedSubCategories=1) {
    let json = JSON.parse(obj);

    let category = '<option value="all">Все</option>';
    json.forEach(el => {
        const {name, id} = el;
        category += `<option value="${id}">${name}</option>`;
    });
    $("#category").html(category);
    $(`#category option[value=${idSelectedCategories}]`).prop('selected', true);

    let subcategory = '<option value="all">Все</option>';
    const indexCategory = json.findIndex(el => el.id === Number(idSelectedCategories));
    if (indexCategory !== -1) {
        json[indexCategory].subcats.forEach(el => {
            const {name, id} = el;
            subcategory += `<option value="${id}">${name}</option>`;
        });
    }
    $("#subcategory").html(subcategory);

    if (idSelectedSubCategories) $(`#subcategory option[value=${idSelectedSubCategories}]`).prop('selected', true);
    else $('#subcategory option:first').prop('selected', true);

    $('#category').on('change', function () {
        let subcategory = '';
        let category = json.find(el => el.id == this.value);
        category.subcats.forEach(el => {
            const {name, id} = el;
            subcategory += `<option value="${id}">${name}</option>`;
        });
        $("#subcategory").html(subcategory);
    });
}
