(function(){
    var tblCodes = "";
    var dataCode = [
        {IDcheckbox: 1, IDrow: 1, Code: "Agriculture"},
        {IDcheckbox: 2, IDrow: 2, Code: "Fishery"},
        {IDcheckbox: 3, IDrow: 3, Code: "Construction"}
    ]
    var dataJobCategories = [];


    $(document).ready(function(){
        GetJobCategories();

    });

    function GetJobCategories(){
        $("#tblCodes").DataTable({
            data: dataCode,
            searching: false,
            columns: [
                {
                    title: "<input type='checkbox' id='CheckAllitem' />",
                    render: function (data, row, meta){
                        return "<input type='checkbox' class='CheckItem text-center' value='" + meta.IDcheckbox + "'>";
                    },
                    width: "2%", orderable: false
                },
                { title: 'ID', data: "IDrow", width: "4%", className: "dt-center"},
                { title: 'Code', data: "Code", width: "18%"},   
            ],

            order: [[1, "asc"]],
            "initComplete": function () {
                $("#tblCodes thead #trSearch").remove();
                var thead1 = "<tr id='trSearch'>";
                $.each(this.api().column(0).context[0].aoColumns, function (k, v) {
                    if (v.sName != "") {
                        thead1 += "<th data-field='" + v.sName + "'>" + v.sTitle + "</th>";
                    }
                    else if (!$.trim(JSON.stringify(v.data))) {
                        thead1 += "<th></th>";
                    } else {
                        thead1 += "<th data-field='" + v.data + "'>" + v.sTitle + "</th>";
                    }
                });
                thead1 += "</tr>";
                $("#tblCodes thead").append(thead1);
                $('#tblCodes thead #trSearch th').each(function () {
                    var title = $(this).text();
                    var field = $(this).data("field");
                    if (field) {
                        $(this).html("<input class='form-control form-control-sm text-center columnSearch' style='display: inline;width: 100%;height: 100%box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;border: none;' placeholder='" + title + "' type='text'/>");
                        $('#tblCodes thead #trSearch th').each(function () {
                            var field = $(this).data("field");
                        });
                    }
                });
            },
        });
    }
})();