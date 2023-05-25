(function () {
    const HelperClass = function () {
        return new HelperClass.init();
    }
    HelperClass.init = function () {
        //$D.init.call(this);
        this.monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        this.dateago = new Date();
        this.dateago.setFullYear(this.dateago.getFullYear() - 15);
        this.responseData = {};
    }
    HelperClass.prototype = {
        FileExtension: function (ext) {
            var data = {
                icon: "",
                ext: ""
            };
            switch (ext.toLowerCase()) {
                // Audio files
                case ".cda":
                case ".mid":
                case ".midi":
                case ".mp3":
                case ".mpa":
                case ".ogg":
                case ".wav":
                case ".wma":
                case ".wpl":
                case ".aif":
                    return "fa fa-file-audio-o";
                    break;

                // Compressed files
                case ".7z":
                case ".tar.gz":
                case ".deb":
                case ".rpm":
                case ".arj":
                case ".pkg":
                case ".rar":
                case ".z":
                case ".zip":
                    return "fa fa-file-archive-o";
                    break;

                // Image Files
                case ".gif":
                case ".bmp":
                case ".svg":
                case ".ps":
                case ".psd":
                case ".png":
                case ".ai":
                case ".ico":
                case ".jpeg":
                case ".jpg":
                case ".tif":
                case ".tiff":
                    return "fa fa-file-image-o";
                    data;
                    break;

                // Internet Files
                case ".aps":
                case "aspx":
                case ".cer":
                case ".cfm":
                case ".css":
                case ".html":
                case ".htm":
                case ".js":
                case ".jsp":
                case ".part":
                case ".php":
                case ".py":
                case ".rss":
                case ".xhtml":
                    return "fa fa-file-code-o";
                    break;

                // Presentation Files
                case ".key":
                case ".odp":
                case ".pps":
                case ".ppt":
                case ".pptx":
                    return "fa fa-file-powerpoint-o";
                    break;

                // Spreadsheet
                case ".ods":
                case ".xls":
                case ".xlsm":
                case ".xlsx":
                    return "fa fa-file-excel-o";
                    break;

                // Video files
                case ".3g2":
                case ".3gp":
                case ".avi":
                case ".flv":
                case ".h264":
                case ".m4v":
                case ".mkv":
                case ".mov":
                case ".mp4":
                case ".mpg":
                case ".mpeg":
                case ".rm":
                case ".wmv":
                    return "fa fa-file-video-o";
                    break;

                // Word Docu files
                case ".txt":
                case ".csv":
                    return "fa fa-file-text-o";
                    break;

                case ".pdf":
                    return "fa fa-file-pdf-o";
                    break;

                case ".docx":
                case ".doc":
                case ".odt":
                case ".rtf":
                case ".tex":
                case ".wpd":
                    return "fa fa-file-word-o";
                    break;

                default:
                    return "fa fa-file-o";
                    break;
            }
        },
        ConvertNumberToSuffix: function (i) {
            var j = i % 10,
                k = i % 100;
            if (j == 1 && k != 11) {
                return i + "st";
            }
            if (j == 2 && k != 12) {
                return i + "nd";
            }
            if (j == 3 && k != 13) {
                return i + "rd";
            }
            return i + "th";
        },
        ConvertDateToWordFormat: function (value) {
            if (value != "") {
                var separatedVal = value.split('/');
                if (separatedVal == null)
                    return value;
                var month = parseInt(separatedVal[0]);
                if (month > 12)
                    return value;

                var day = separatedVal[1];
                var year = separatedVal[2];

                var date = this.monthNames[month] + " " + day + ", " + year;
                return date;
            }
            return value;
        },
        ConvertWordFormatDateToDate: function (value) {
            if (value != "") {
                var separatedVal = value.split(' ');
                if (separatedVal == null)
                    return value;
                var month = separatedVal[0];
                if (month == "")
                    return value;

                var idxMonth = this.monthNames.findIndex(x => x === month.trim());
                var day = separatedVal[1];
                var year = separatedVal[2];

                if (idxMonth < 10)
                    idxMonth = "0" + idxMonth.toString();

                var date = idxMonth + "/" + day + "/" + year;
                return date;
            }
            return value;
        },
        LoadInputs: function () {
            var self = this;
            $('.select2-manual').select2({
                placeholder: '-Please Select-',
                theme: 'bootstrap4',
                closeOnSelect: true,
                allowClear: true,
                width: "auto"
            });

            $('.select2-manual-tags').select2({
                placeholder: '-Please Select-',
                width: 'auto',
                theme: 'bootstrap4',
                tags: true,
            });

            if ($.trim($('#body').attr('class')) != "") {
                if ($('#body').attr('class').indexOf("ReadAndWrite") > -1) {
                    $(".ReadAndWrite").show();
                } else {
                    $(".ReadAndWrite").hide();
                }

                if ($('#body').attr('class').indexOf("DeleteEnabled") > -1) {
                    $(".DeleteEnabled").show();
                } else {
                    $(".DeleteEnabled").hide();
                }
            }

            $('.btnPrint').attr("disabled", "disabled");

            $(".date-format").datepicker({
                autoclose: true,
                autocomplete: false,
                todayHighlight: true,
                format: "yyyy/mm/dd",
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true,
                orientation: "bottom",
                enableOnReadonly: false,
            });

            $(".year-month-format").datepicker({
                format: "yyyymm",
                autocomplete: false,
                viewMode: "months",
                minViewMode: "months",
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true,
                enableOnReadonly: false,
                autoclose: true,
                orientation: "top",
                defaultViewDate: {
                    year: new Date().getFullYear(),
                    month: new Date().getMonth() - 1
                }
            });

            $(".month-year-format").datepicker({
                format: "mm/yyyy",
                autocomplete: false,
                viewMode: "months",
                minViewMode: "months",
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true,
                enableOnReadonly: false,
                autoclose: true,
                orientation: "top",
                defaultViewDate: {
                    year: new Date().getFullYear(),
                    month: new Date().getMonth() - 1
                }
            }).datepicker("setDate", new Date(new Date().getFullYear().toString() + "/" + new Date().getMonth().toString() + "/1"));

            $(".Number-Only").on("input change paste", function () {
                var newVal = $(this).val().replace(/[^0-9\.-]/g, '');
                $(this).val(newVal.replace(/,/g, ''));
            });
            $(".decimal-format").change(function () {
                var newVal = $(this).val().replace(/[^0-9\.]/g, '');
                $(this).val(self.DecimalFormat(newVal.replace(/,/g, '')));
            });
            $('.date-format').each(function () {
                if (!$.trim($(this).attr('maxlength'))) {
                    $(this).attr("maxlength", 10);
                }
            });
            $('.number-format').each(function () {
                if ($(this).attr('data-maxlenght') != "false") {
                    if (!$.trim($(this).attr('maxlength'))) {
                        $(this).attr("maxlength", 19);
                    }
                }
            });
            $('.input').each(function () {
                if ($(this).attr('data-maxlenght') != "false") {
                    if (!$.trim($(this).attr('maxlength'))) {
                        $(this).attr("maxlength", 60);
                    }
                }

            });
            $(".number-format").on("input change paste", function () {
                var newVal = $(this).val().replace(/[^0-9\.-]/g, '');
                $(this).val(self.numberFormat(newVal.replace(/,/g, '')));
            });
            $(".number-format").on("keypress", function (e) {
                if (e.key == ".") {
                    e.preventDefault();
                }

                if ($(this).val().indexOf("-") != -1 && e.key == "-") {
                    e.preventDefault();
                }
            });
            $('.date-format').change(function () {
                if ($(this).val().length == 10) {
                    if (new Date($(this).val()) == "Invalid Date") {
                        $(this).val('');
                    }
                } else {
                    $(this).val('');
                }


                if ($(this).attr('data-End')) {
                    $("#" + $(this).attr('data-End')).datepicker('setStartDate', $(this).val());
                }
                if ($(this).attr('data-Start')) {
                    $("#" + $(this).attr('data-Start')).datepicker('setEndDate', $(this).val());
                }
            });
            $('.UploadFile').change(function () {
                var UploadFileLabel = "#" + $(this).attr("data-label");
                if ($(this)[0].files.length) {
                    var files = $(this)[0].files;
                    var fileNames = [];
                    var err = false;
                    var arrErr = [];
                    for (var i = 0; i <= files.length - 1; i++) {
                        var fname = files.item(i).name;
                        var fsize = files.item(i).size;
                        if (fsize > 10000 > 16) {
                            $M().showError("File size is above 16 MB. Filename: " + fname);
                            err = true;
                        } else {
                            fileNames.push(fname);
                        }
                    }
                    if (err) {
                        $(UploadFileLabel).val("");
                        $(UploadFileLabel).prop("readonly", false);
                        $(this).val(null);
                    } else {
                        $(UploadFileLabel).val(fileNames.join(", "));
                        $(UploadFileLabel).prop("readonly", true);
                    }

                } else {
                    $(UploadFileLabel).val("");
                    $(this).val(null);
                    $(UploadFileLabel).prop("readonly", false);
                }
            });
            $("select").on('change', function (e) {
                if ($(this).val() || $(this).val() != "") {
                    $(this).parsley().destroy();
                }
            });


            var checkboxes = $('input[type=radio]:checked')
            $('input[type=radio]')
                .click(function () {
                    checkboxes.filter(':not(:checked)').trigger('deselect');
                    checkboxes = $('input[type=radio]:checked')
                })
                .bind('deselect', function () {
                    self.rdChange(this);
                }).change(function (e) {
                    checkboxes.filter(':not(:checked)').trigger('deselect');
                    checkboxes = $('input[type=radio]:checked')
                    self.rdChange(this);
                });

            $("input[type=checkbox]").change(function (e) {
                self.rdChange(this);
            });
            if ($.trim($('#tblFASearchMaster')[0]) != '') {
                $("#btnSearch").click(function () {
                    $("#mdlAssestCodeSearch").modal("show");
                });
                if (!$.fn.DataTable.isDataTable('#tblFASearchMaster')) {
                    $('#tblFASearchMaster').DataTable({
                        processing: true,
                        serverSide: true,
                        "order": [[0, "asc"]],
                        "pageLength": 25,
                        "ajax": {
                            "url": "/FixedAssetControl/FAMaster/GetFAMasterList",
                            "type": "POST",
                            "datatype": "json",
                        },
                        responsive: true,
                        columns: [
                            { title: "Asset Code", data: "AssetCode" },
                            { title: "Asset Description", data: "AssetDescription" },
                            { title: "Extended Description", data: "ExtendedDescription" },
                            { title: "Department", data: "Department" },
                            { title: "Product", data: "Product" },
                            {
                                title: "", render: function (data) {
                                    return '<button type="button" class="btn btn-sm btn-primary btn-block btnDisplay"><span class="fa fa-hand-pointer-o"> Display</span></button>'
                                }
                            },
                        ],
                    })
                }
                $("#tblFASearchMaster").on("click", '.btnDisplay', function () {
                    var trData = $("#tblFASearchMaster").DataTable().row($(this).parents('tr')).data();
                    $("#KeyAssetCode").val(trData.AssetCode);
                    $("#btnGo").trigger("click");
                    $("#mdlAssestCodeSearch").modal("hide");
                });
            }
        },
        UploadImageUser: function () {
            $('#FileUploadLayout').change(function () {
                if ($('#FileUploadLayout')[0].files.length) {
                    var files = $('#FileUploadLayout')[0].files;
                    var fileNames = [];
                    var err = false;
                    var arrErr = [];
                    for (var i = 0; i <= files.length - 1; i++) {
                        var fname = files.item(i).name;
                        var fsize = files.item(i).size;
                        if (fsize / 1000000 > 50) {
                            arrErr.push("File size is above 50MB. Filename: " + fname);
                            err = true;
                        } else {
                            fileNames.push(fname);
                        }
                    }
                    if (err) {
                    } else {
                        $("#lblFileUploadLayout").val(fileNames.join(", "));
                        $("#lblFileUploadLayout").prop("readonly", true);
                    }

                } else {
                    $("#lblFileUploadLayout").val("");
                    $("#lblFileUploadLayout").prop("readonly", false);
                }
            });
            $('#btnHeaderUploadImage').click(function () {
                $("#lblFileUploadLayout").val("");
                $("#lblFileUploadLayout").prop("readonly", false);
                $("#mdlUploadLayout").modal("show");
            });
            $("#btnUploadFileLayout").click(function () {
                var uploadFile = new FormData();
                var file = $("#FileUploadLayout").get(0).files;
                uploadFile.append("UserMaster", file[0]);
                $.ajax({
                    type: 'POST',
                    url: '/MasterMaintenance/UserMaster/UploadImageSession',
                    data: uploadFile,
                    cache: false,
                    processData: false,
                    contentType: false,
                }).done(function () {
                    iziToast.show({
                        title: "Success",
                        message: "Image was successfully uploaded.",
                        position: 'topRight',
                        backgroundColor: "success",
                        theme: 'light', // dark
                        color: "green", // blue, red, green, yellow
                        timeout: 5000,
                    });
                    $("#mdlUploadLayout").modal("hide");
                }).fail(function () {

                });
            });
        },
        numberFormat: function (number, style, currency) {
            var num;
            if (style === '' && currency === '') {
                num = new Intl.NumberFormat('en', {
                    style: style,
                    currency: currency
                }).format(number)

                if ('NaN' == num) {
                    num = '';
                }
                return num;
            }

            num = new Intl.NumberFormat('en').format(number);

            if ('NaN' == num) {
                num = '';
            }

            return num;
        },
        DecimalFormat: function (number) {
            var num;
            var t = number.toString();
            var digit = 0;
            if (t.indexOf(".") > -1) {
                t = t.toString().replace(/\.?0+$/, '');
                digit = t.substr(t.toString().replace(/\.?0+$/, '').indexOf("."), 5).length - 1;
            }
            if (number % 1 == 0)
                num = new Intl.NumberFormat('en', {
                    style: "decimal",
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0,
                }).format(number)
            else
                num = new Intl.NumberFormat('en', {
                    style: "decimal",
                    minimumFractionDigits: digit,
                }).format(number)



            if ('NaN' == num) {
                num = '';
            }
            return num;
        },
        DateFormat: function (date_value) {
            var d = new Date(date_value);
            var today_date = ("0" + (d.getMonth() + 1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2) + "/" + d.getFullYear();
            return today_date;
        },
        TimeNow: function (time_value) {
            var d = new Date(time_value);
            var today_date = ("0" + (d.getHours())).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2);
            return today_date;
        },
        DateNow: function () {
            var d = new Date();
            var today_date = ("0" + (d.getMonth() + 1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2) + "/" + d.getFullYear();
            return today_date;
        },
        TimeNow: function () {
            var d = new Date();
            var today_date = ("0" + (d.getHours())).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2);
            return today_date;
        },
        DateMonthStart: function () {
            var d = new Date();
            var today_date = ("0" + (d.getMonth() + 1)).slice(-2) + "/" + "01" + "/" + d.getFullYear();
            return today_date;
        },
        DateNowPlusWeek: function () {
            var date = new Date();
            var d = date.addDays(7);
            var today_date = ("0" + (d.getMonth() + 1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2) + "/" + d.getFullYear();
            return today_date;
        },
        DateMonthEnd: function () {
            var date = new Date();
            var d = new Date(date.getFullYear(), date.getMonth() + 1, 0);
            var today_date = ("0" + (d.getMonth() + 1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2) + "/" + d.getFullYear();
            return today_date;
        },
        serializeToArray: function (formArray) {
            var returnArray = {};
            for (var i = 0; i < formArray.length; i++) {
                returnArray[formArray[i]['name']] = formArray[i]['value'];
            }
            return returnArray;
        },
        checkAllCheckboxesInTable: function (tblID, checkAllClass, checkItemClass) {

            if ($('#body').attr('class').indexOf("ReadAndWrite") > -1) {
                $(checkItemClass).show();
                $(checkAllClass).show();
            } else {
                $(checkAllClass).hide();
                $(checkItemClass).hide();
            }

            $(checkAllClass).on('change', function (e) {

                //$('td input:checkbox', tblID).not(this).prop('checked', this.checked);
                $('input:checkbox' + checkItemClass).not(this).prop('checked', this.checked);

                var checked = 0;
                var table = $(tblID).DataTable();
                for (var x = 0; x < table.context[0].aoData.length; x++) {
                    if ($.trim(table.context[0].aoData[x].anCells[0].firstChild)) {
                        if (table.context[0].aoData[x].anCells[0].firstChild.checked == true) {
                            checked++;
                        }
                    }

                }
            });
        },
        dataTableLanguageVariable: function () {
            var Language = {};
            if (this.GetStoreData("SystemLanguage") == "JP") {
                Language = {
                    "decimal": "",
                    "emptyTable": "テーブル内のデータなし",
                    "info": "_TOTAL_エントリのうち_START_から_END_を表示している",
                    "infoEmpty": "0エントリの0から0を表示",
                    "infoFiltered": "（_MAX_合計エントリからフィルタリング）",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "_MENU_エントリを表示",
                    "loadingRecords": "データを読み込んでいる...",
                    "processing": "処理データ...",
                    "search": "検索:",
                    "zeroRecords": "該当するデータが見つかりません。",
                    "paginate": {
                        "first": "最初",
                        "last": "最終",
                        "next": "次",
                        "previous": "前"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    },
                };
            }
            return Language;
        },
        showInputError: function (id, msg) {
            $('.' + id + '_grp').addClass("has-error");
        },
        hideInputError: function (id) {
            $('.' + id + '_grp').removeClass("has-error");
        },
        ParleyLocale: function () {
            Parsley.addMessages('ja', {
                defaultMessage: "無効な値です。",
                type: {
                    email: "有効なメールアドレスを入力してください。",
                    url: "有効なURLを入力してください。",
                    number: "数値を入力してください。",
                    integer: "整数を入力してください。",
                    digits: "数字を入力してください。",
                    alphanum: "英数字を入力してください。"
                },
                notblank: "この値を入力してください",
                required: "この値は必須です。",
                pattern: "この値は無効です。",
                min: "%s 以上の値にしてください。",
                max: "%s 以下の値にしてください。",
                range: "%s から %s の値にしてください。",
                minlength: "%s 文字以上で入力してください。",
                maxlength: "%s 文字以下で入力してください。",
                length: "%s から %s 文字の間で入力してください。",
                mincheck: "%s 個以上選択してください。",
                maxcheck: "%s 個以下選択してください。",
                check: "%s から %s 個選択してください。",
                equalto: "値が違います。"
            });
        },

        select2maker: function (idField, idTable, text, table, db, condition, display)
        {
            idField.select2({
                ajax: {
                    url: "/General/GetSelect2Data",
                    data: function (params) {
                        return {
                            q: params.term,
                            id: idTable,
                            text: text,
                            table: table,
                            db: db,
                            condition: condition,
                            display: display,
                        };
                    },
                },
                placeholder: '--Please Select--',
                allowClear: true
            });
        },

        ddlSelectValue: function (id, text, value) {
            $(id).html("");
            var Options = new Option(text, value, true, true);
            $(id).append(Options).trigger('change');
        },
        GetStoreData: function (name) {
            if (typeof (Storage) !== 'undefined') {
                return localStorage.getItem(name)
            } else {
                window.alert('Please use a modern browser to properly view this template!')
            }
        },
        StoreData: function (name, val) {
            if (typeof (Storage) !== 'undefined') {
                localStorage.setItem(name, val)
            } else {
                window.alert('Please use a modern browser to properly view this template!')
            }
        },
        SelectAppend: function (data, value) {
            var shtml = "<option value=''></option>";
            $.each(data, function (key, val) {
                $.each(val, function (k, v) {
                    var x = (key == "barangay_list" ? v : k);
                    shtml += "<option value='" + x + "' data-id='" + JSON.stringify(v) + "' >";
                    shtml += x;
                    shtml += '</option>';
                });
            });
            return shtml;
        },
        onlyUnique: function (value, index, self) {
            return self.indexOf(value) === index;
        },
        AddParsleyDesign: function () {
            $("div.form-check.form-check-inline.parsley-error").each(function () {
                $($(this)[0].parentElement).css("padding", "0px");
                $($(this)[0].parentElement).css("border", "1px solid #ff5b57");
                $($(this)[0].parentElement).css("border-radius", "5%");
            });
        },
        MakeFirstLetterUpper: function (val) {
            return val.charAt(0).toUpperCase() + val.slice(1);
        },
        PopulateDataTable: function (id ,url, ordering = [true, 1], pageLength = [true, 75]) {
            var self = this;
            var ajax = $D();
            var Col = [];
            var PageHeight = ($(window).height() - 360);
            self.GetDataTableData(url).then(function (data) {
                var data = self.responseData;
                $.each(data.DataCol, function (k, v) {
                    Col.push({
                        data: v,
                        title: v
                    });
                });
                return $('#' + id).on('draw.dt', function () {
                        $('#loading_modal').modal("show");
                    })
                    .on('init.dt', function () {
                        $('#' + id).off('draw.dt');
                        $('#loading_modal').modal('hide');
                    }).DataTable({
                        scrollX: true,
                        scrollY: PageHeight + 'px',
                        "paging": pageLength[0],
                        "lengthChange": pageLength[0],
                        "lengthMenu": [10, 25, 50, 75, 100],
                        "pageLength": pageLength[1],
                        ordering: ordering[0],
                        "order": [ordering[1], "asc"],
                        columns: Col,
                        data: data.DataRow,
                        "initComplete": function (settings, json) {
                            $('.dataTables_scrollBody thead tr').css({ visibility: 'collapse' });
                        },
                        "fnDrawCallback": function () {
                            self.LoadInputs();
                            $('.dataTables_scrollBody thead tr').css({ visibility: 'collapse' });
                            $('#' + id).DataTable().columns().every(function (i, x) {
                                var column = this;
                                var title = $($(column.header()))[0].innerText;
                                if ($(".columnSearch_" + title.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '')).length == 0) {
                                    $("<br/><input class='form-control form-control-sm text-center columnSearch_" + title.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '') + "' style='width: 100%;height: 100%' placeholder='" + title.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '') + "' type='text'/>")
                                        .appendTo($(column.header()))
                                        .on('change', function () {
                                            var val = $.fn.dataTable.util.escapeRegex(
                                                $(this).val()
                                            );
                                            var regexr = '({search})';
                                            column.search(
                                                this.value != ''
                                                    ? regexr.replace('{search}', '(((' + val + ')))')
                                                    : '',
                                                this.value != '',
                                                this.value == ''
                                            ).draw();
                                        });
                                }
                            });
                        },
                    });
            });
        },
        GetDataTableData: function (url) {
            var self = this;
            var ajax = $D();
            let promiseObj = new Promise(function (resolve, reject) {
                ajax.formAction = url;
                ajax.sendData().then(function () {
                    self.responseData = ajax.responseData;
                    resolve(true);
                });
            });
            return promiseObj;
        },
        rdChange: function (self) {
            var x = this;
            var r = x.rdChangeEvent(self);
            $.each($("." + r), function (k, v) {
                x.rdChangeEvent(v);
            });
        },
        rdChangeEvent: function (self) {
            var OtherInput = $(self).attr('data-input');
            if ($(self).hasClass("rdChange")) {
                if ($.trim($(self).attr('data-isDisabled')) != "") {
                    $("." + OtherInput).prop('readonly', $(self).is(":checked"));
                    $("." + OtherInput).attr('disabled', $(self).is(":checked"));
                } else {
                    $("." + OtherInput).prop('readonly', !$(self).is(":checked"));
                    $("." + OtherInput).attr('disabled', !$(self).is(":checked"));
                }
                $("." + OtherInput + ":text").val("");
                $("select." + OtherInput).val("").trigger('change.select2');
                $("." + OtherInput + ":radio").prop("checked", false);
                $.each($("div." + OtherInput), function (k, v) {
                    if (k > 0)
                        $(v).remove();
                });
            }
            return OtherInput;
        },
        GetApprovers: function (MonthYear) {
            var ajax = $D();
            ajax.jsonData = {
                MonthYear: MonthYear
           };
            ajax.formAction = '/FixedCostAllocation/GenerateData/GetApprovers';
            ajax.sendData().then(function () {
                var x = ajax.responseData;
                $("#Prepared").val(x.Prepared);
                $("#Checker").val(x.Checker);
                $("#Approver").val(x.Approver);
            });
        },
        GetMonthYear: function () {
            var ajax = $D();
            ajax.formAction = '/General/GetMonthYear';
            ajax.jsonData = { };
            ajax.sendData().then(function () {
                $(".year-month-format").datepicker("setDate", new Date(ajax.responseData.Year + "/" + ajax.responseData.Month + "/1"));
            });
        },
    }
    HelperClass.init.prototype = $.extend(HelperClass.prototype);
    return window.HelperClass = window.$Helper = HelperClass;
}());

var helper = $Helper();
$(document).ready(function () {
    Date.prototype.addDays = function (days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
    }
    helper.UploadImageUser();
    helper.LoadInputs();
});
//Select2SearchPlaceHolder
(function ($) {

    var Defaults = $.fn.select2.amd.require('select2/defaults');

    $.extend(Defaults.defaults, {
        searchInputPlaceholder: ''
    });

    var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

    var _renderSearchDropdown = SearchDropdown.prototype.render;

    SearchDropdown.prototype.render = function (decorated) {

        // invoke parent method
        var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

        this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

        return $rendered;
    };

})(window.jQuery);