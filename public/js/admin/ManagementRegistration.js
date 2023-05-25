
(function(){
    var tblManagementRegistration = "";
    var data = [
        {IDcheckbox: 1, IDrow: 1, Name: "Lenard", JobCategories: "Cultivate Agriculture", Show: 1, InterviewDate: "01/01/2023", Company: "Seiko", Age: 27, ToAbroad: 0}
    ];

    $(document).ready(function(){
        drawDataTable();
        $(".carousel").carousel({
            interval: 2000
        });  

        $(".show").change(function(){
            var x = $(this).attr('id').split('_')[1];
            if ($(this).val() == 0){
                $(".inputs_" + x).attr('disabled', true);
                $(".inputs_" + x).val("");
            }
            else
                $(".inputs_" + x).removeAttr('disabled');
        });
    })

    function drawDataTable(){
        $("#tblManagementRegistration").DataTable({
            data: data,
            columns: [
                {
                    title: "<input type='checkbox' id='CheckAllitem' />",
                    render: function (data, row, meta){
                        return "<input type='checkbox' class='CheckItem text-center' value='" + meta.IDcheckbox + "'>";
                    },
                    width: "2%", orderable: false
                },
                { title: 'ID', data: "IDrow", width: "3%", className: "dt-center"},
                { title: 'Name', data: "Name", width: "18%"},
                { title: 'JobCategories', data: "JobCategories", width: "17%"},
                { 
                    title: 'Show', 
                    render: function (data, row, meta, ){
                        var isSelected = meta.Show == 0 ? 'selected' : '';
                        var isSelected2 = meta.Show == 1 ? 'selected' : '';
                        return "<select class='form-control show' id='show_"+ meta.IDrow +"' style='width:50%; height:12px; font-size: 11px;'>" +
                                "<option value='0' "+ isSelected +"> No </option>" +
                                "<option value='1' "+ isSelected2 +"> Yes </option>" +
                                "</select>";
                    },
                    width: "5%"
                },
                { 
                    title: 'InterviewDate', 
                    render: function(data, row, meta){
                        return "<input class='form-control inputs_"+ meta.IDrow +"' style='width:50%; height:12px; font-size: 11px;' type='text' value='"+ meta.InterviewDate +"'>"
                    }, width:"5%"
                },
                { 
                    title: 'Company', 
                    render: function(data, row, meta){
                        return "<input class='form-control inputs_"+ meta.IDrow +"' style='width:83%; height:12px; font-size: 11px;' type='text' value='"+ meta.Company +"'>"
                    }, width:"25%"
                },
                { title: 'Age', data: "Age", width:"4%", className: "dt-center"},
                { 
                    title: 'To Abroad', 
                    render: function (data, row, meta, ){
                        var isSelected = meta.ToAbroad == 0 ? 'selected' : '';
                        var isSelected2 = meta.ToAbroad == 1 ? 'selected' : '';
                        return "<select class='form-control' style='width:50%; height:12px; font-size: 11px;'>" +
                                "<option value='0' "+ isSelected +"> No </option>" +
                                "<option value='1' "+ isSelected2 +"> Yes </option>" +
                                "</select>";
                    },
                    width: "1%"
                },
            ],

            order: [[1, "asc"]],
            "initComplete": function () {
                $("#tblManagementRegistration thead #trSearch").remove();
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
                $("#tblManagementRegistration thead").append(thead1);
                $('#tblManagementRegistration thead #trSearch th').each(function () {
                    var title = $(this).text();
                    var field = $(this).data("field");
                    if (field) {
                        $(this).html("<input class='form-control form-control-sm text-center columnSearch' style='display: inline;width: 100%;height: 100%box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;border: none;' placeholder='" + title + "' type='text'/>");
                        $('#tblManagementRegistration thead #trSearch th').each(function () {
                            var field = $(this).data("field");
                        });
                    }
                });
            },
        });
    }
})();