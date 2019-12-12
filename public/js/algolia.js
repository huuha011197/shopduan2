(function() {
    var client = algoliasearch('0CESHZVR8B', '109872ce9b4e9327a5a4443d191e7677');
    var index = client.initIndex('products');
    var enterPressed = false;
    //initialize autocomplete on search input (ID selector must match)
    autocomplete('#aa-search-input',
        { hint: false }, {
            source: autocomplete.sources.hits(index, { hitsPerPage: 10 }),
            //value to be displayed in input control after user's suggestion selection
            displayKey: 'name',
            //hash of templates used when rendering dataset
            templates: {
                //'suggestion' templating function used to render a single suggestion
                suggestion: function (suggestion) {
                    const markup = `
                        <div class="algolia-result">
                            <span>
                                <img src="${window.location.origin}/shopduan2/public//client/images/${suggestion.image}" alt="img" class="algolia-thumb">
                                ${suggestion._highlightResult.name.value}
                            </span>
                            <span>${(suggestion.unit_price).toLocaleString('vi', {style : 'currency', currency : 'VND'})}</span>
                        </div>
                    `;
                    return markup;
                },
                empty: function (result) {
                    return 'Sorry, we did not find any results for "' + result.query + '"';
                }
            }
        }).on('autocomplete:selected', function (event, suggestion, dataset) {
            window.location.href = window.location.origin + '/shopduan2/public/ctsanpham/' + suggestion.id;
            enterPressed = true;
        })
})();
