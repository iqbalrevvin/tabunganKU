var DatatableHtmlMetronic = {
    init: function() {
        var e;
        e = $(".m-datatable").mDatatable({
            data: {
                saveState: {
                    cookie: !1
                }
            },
            search: {
                input: $("#generalSearch")
            }
        })
    }
};
jQuery(document).ready(function() {
    DatatableHtmlMetronic.init()
});