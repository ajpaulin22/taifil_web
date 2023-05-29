(function(){
    var tblCodes = "";
    var tblJobCategories = "";
    var tblOperations = "";
    var dataCodes = [
        {IDcheckbox: 1, IDrow: 1, Code: "Agriculture"},
        {IDcheckbox: 2, IDrow: 2, Code: "Fishery"},
        {IDcheckbox: 3, IDrow: 3, Code: "Construction"}
    ]
    var dataJobCategories = [];
    var dataOperations = [];

    $(document).ready(function(){
        drawCodesTable();
        drawJobCategoriesTable();
        drawOperationsTable();
        $('#tblCodes tbody').on('click', 'tr', function(e){
            var data = tblCodes.row($(this)).data();
            switch (e.target.localName) {
                case "button":
                    break;
                case "span":
                    break;
                case "checkbox":
                    break;
                case "i":
                    break;
                case "textbox":
                    break;
                case "input":
                    break;
                default:
                    if ($.trim(data) != "") {
                        if ($(this).hasClass('selected')) {
                            data = "";
                            tblCodes.$('tr.selected').removeClass('selected');
                        }
                        else {
                            tblCodes.$('tr.selected').removeClass('selected');
                            $(this).addClass('selected');
                            if (data.Code == "Agriculture")
                            {
                                dataJobCategories = [
                                    {IDcheckbox: 1, IDrow: 1, Code: "Cultivation Agriculture"},
                                    {IDcheckbox: 2, IDrow: 2, Code: "Livestock Agriculture"},
                                ]
                                tblJobCategories.clear().draw();
                                tblJobCategories.rows.add(dataJobCategories);
                                tblJobCategories.draw();
                            }
                            else if (data.Code == "Fishery")
                            {
                                dataJobCategories = [
                                    {IDcheckbox: 1, IDrow: 1, Code: "Fishing Boat Fisheries"},
                                    {IDcheckbox: 2, IDrow: 2, Code: "Aquaculture"},
                                ]
                                tblJobCategories.clear().draw();
                                tblJobCategories.rows.add(dataJobCategories);
                                tblJobCategories.draw();
                            }
                            else{
                                dataJobCategories = [
                                    {IDcheckbox: 1, IDrow: 1, Code: "Well Drilling"},
                                    {IDcheckbox: 2, IDrow: 2, Code: "Building Sheet Metal Work"},
                                    {IDcheckbox: 3, IDrow: 3, Code: "Freezing And Air Conditioning"},
                                    {IDcheckbox: 4, IDrow: 4, Code: "Fixture Making"},
                                    {IDcheckbox: 5, IDrow: 5, Code: "Carpentry"},
                                    {IDcheckbox: 6, IDrow: 6, Code: "Frame Working"},
                                    {IDcheckbox: 7, IDrow: 7, Code: "Reinforcing Bar Construction"},
                                    {IDcheckbox: 8, IDrow: 8, Code: "Scaffolding"},
                                    {IDcheckbox: 9, IDrow: 9, Code: "Building Stone Construction"},
                                    {IDcheckbox: 10, IDrow: 10, Code: "Tiling"},
                                    {IDcheckbox: 11, IDrow: 11, Code: "Tile Roofing"},
                                    {IDcheckbox: 12, IDrow: 12, Code: "Plastering"},
                                    {IDcheckbox: 13, IDrow: 13, Code: "Plumbing"},
                                    {IDcheckbox: 14, IDrow: 14, Code: "Heat Insulation"},
                                    {IDcheckbox: 15, IDrow: 15, Code: "Interior Finishing"},
                                    {IDcheckbox: 16, IDrow: 16, Code: "Sash Setting"},
                                    {IDcheckbox: 17, IDrow: 17, Code: "Waterproofing"},
                                    {IDcheckbox: 18, IDrow: 18, Code: "Concrete Pressure Feeding"},
                                    {IDcheckbox: 19, IDrow: 19, Code: "Well Point Construction"},
                                    {IDcheckbox: 20, IDrow: 20, Code: "Paper Hanging"},
                                    {IDcheckbox: 21, IDrow: 21, Code: "Application of Construction Equipment"},
                                    {IDcheckbox: 22, IDrow: 22, Code: "Furnace Installation"}
                                ]
                                tblJobCategories.clear().draw();
                                tblJobCategories.rows.add(dataJobCategories);
                                tblJobCategories.draw();
                            }
                        }
                    }
                    break;
            }
        });
    
        $('#tblJobCategories tbody').on('click', 'tr', function(e){
            var data = tblJobCategories.row($(this)).data();
            var JobCategoriesValue = [];
            switch (e.target.localName) {
                case "button":
                    break;
                case "span":
                    break;
                case "checkbox":
                    break;
                case "i":
                    break;
                case "textbox":
                    break;
                case "input":
                    break;
                default:
                    if ($.trim(data) != "") {
                        if ($(this).hasClass('selected')) {
                            data = "";
                            tblJobCategories.$('tr.selected').removeClass('selected');
                        }
                        else {
                            tblJobCategories.$('tr.selected').removeClass('selected');
                            $(this).addClass('selected');
                            if (data.Code == "Cultivation Agriculture")
                            {
                                JobCategoriesValue = [];
                                JobCategoriesValue.push('Facility Horticulture', 'Upland Field Cropping / Vegetable Growing');
                                OperationsData(JobCategoriesValue);
                            }
                            else if (data.Code == "Fishery")
                            {
                                dataJobCategories = [
                                    {IDcheckbox: 1, IDrow: 1, Code: "Fishing Boat Fisheries"},
                                    {IDcheckbox: 2, IDrow: 2, Code: "Aquaculture"},
                                ]
                                tblJobCategories.clear().draw();
                                tblJobCategories.rows.add(dataJobCategories);
                                tblJobCategories.draw();
                            }
                            else{
                                dataJobCategories = [
                                    {IDcheckbox: 1, IDrow: 1, Code: "Well Drilling"},
                                    {IDcheckbox: 2, IDrow: 2, Code: "Building Sheet Metal Work"},
                                    {IDcheckbox: 3, IDrow: 3, Code: "Freezing And Air Conditioning"},
                                    {IDcheckbox: 4, IDrow: 4, Code: "Fixture Making"},
                                    {IDcheckbox: 5, IDrow: 5, Code: "Carpentry"},
                                    {IDcheckbox: 6, IDrow: 6, Code: "Frame Working"},
                                    {IDcheckbox: 7, IDrow: 7, Code: "Reinforcing Bar Construction"},
                                    {IDcheckbox: 8, IDrow: 8, Code: "Scaffolding"},
                                    {IDcheckbox: 9, IDrow: 9, Code: "Building Stone Construction"},
                                    {IDcheckbox: 10, IDrow: 10, Code: "Tiling"},
                                    {IDcheckbox: 11, IDrow: 11, Code: "Tile Roofing"},
                                    {IDcheckbox: 12, IDrow: 12, Code: "Plastering"},
                                    {IDcheckbox: 13, IDrow: 13, Code: "Plumbing"},
                                    {IDcheckbox: 14, IDrow: 14, Code: "Heat Insulation"},
                                    {IDcheckbox: 15, IDrow: 15, Code: "Interior Finishing"},
                                    {IDcheckbox: 16, IDrow: 16, Code: "Sash Setting"},
                                    {IDcheckbox: 17, IDrow: 17, Code: "Waterproofing"},
                                    {IDcheckbox: 18, IDrow: 18, Code: "Concrete Pressure Feeding"},
                                    {IDcheckbox: 19, IDrow: 19, Code: "Well Point Construction"},
                                    {IDcheckbox: 20, IDrow: 20, Code: "Paper Hanging"},
                                    {IDcheckbox: 21, IDrow: 21, Code: "Application of Construction Equipment"},
                                    {IDcheckbox: 22, IDrow: 22, Code: "Furnace Installation"}
                                ]
                                tblJobCategories.clear().draw();
                                tblJobCategories.rows.add(dataJobCategories);
                                tblJobCategories.draw();
                            }
                        }
                    }
                    break;
            }
        });
    });

    function drawCodesTable(){
        if (!$.fn.DataTable.isDataTable("#tblCodes"))
        {
            tblCodes = $("#tblCodes").DataTable({

                data: dataCodes,
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
                // "initComplete": function () {
                //     $("#tblCodes thead #trSearch").remove();
                //     var thead1 = "<tr id='trSearch'>";
                //     $.each(this.api().column(0).context[0].aoColumns, function (k, v) {
                //         if (v.sName != "") {
                //             thead1 += "<th data-field='" + v.sName + "'>" + v.sTitle + "</th>";
                //         }
                //         else if (!$.trim(JSON.stringify(v.data))) {
                //             thead1 += "<th></th>";
                //         } else {
                //             thead1 += "<th data-field='" + v.data + "'>" + v.sTitle + "</th>";
                //         }
                //     });
                //     thead1 += "</tr>";
                //     $("#tblCodes thead").append(thead1);
                //     $('#tblCodes thead #trSearch th').each(function () {
                //         var title = $(this).text();
                //         var field = $(this).data("field");
                //         if (field) {
                //             $(this).html("<input class='form-control form-control-sm text-center columnSearch' style='display: inline;width: 100%;height: 100%box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;border: none;' placeholder='" + title + "' type='text'/>");
                //             $('#tblCodes thead #trSearch th').each(function () {
                //                 var field = $(this).data("field");
                //             });
                //         }
                //     });
                // },
            })
        }
    }

    function drawJobCategoriesTable(){
        if (!$.fn.DataTable.isDataTable("#tblJobCategories"))
        {
            tblJobCategories = $("#tblJobCategories").DataTable({
                data: dataJobCategories,
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
            })
        }
    }

    function drawOperationsTable(){
        if (!$.fn.DataTable.isDataTable("#tblOperations"))
        {
            tblOperations = $("#tblOperations").DataTable({
                data: dataOperations,
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
            })
        }
    }

    function OperationsData(JobCategoriesValue){
        for (var i = 0; i < JobCategoriesValue.length; i++){
            dataOperations[i].push = {IDcheckbox: i + 1, IDrow: i + 1, Code: JobCategoriesValue[i]};
        }
        tblOperations.clear().draw();
        tblOperations.rows.add(dataOperations);
        tblOperations.draw();
    }
})();