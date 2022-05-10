function fillingCategories(obj) {
    let json = JSON.parse(obj);

    let category = '';
    json.forEach(el => {
        const {name, id} = el;
        category += `<option value="${id}">${name}</option>`;
    });
    $("#category").html(category);

    let firstSubcategory = '';
    json[0].subcats.forEach(el => {
        const {name, id} = el;
        firstSubcategory += `<option value="${id}">${name}</option>`;
    });
    $("#subcategory").html(firstSubcategory);

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
