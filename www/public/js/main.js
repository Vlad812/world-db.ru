$(function () {

    // Объект управляющий приложением
    var worldDb = (function () {

        var app = {

            //
            "request": {

                'nameFilter': 'index',

                // Режим просмотра
                'modeView': '',

                // Отображать Количество записей (по умолчанию )
                'itemsPerPage': '',

                // Текущий номер пагинации
                'currentPagin': '',

                //
                'updateTotalItems': false,

                'updatePagination': false,

                //
                'url': function () {

                    return "/ajax/filter/index/" + this.nameFilter;
                },

                // пользовательский фильтр
                'filterData': function () {

                    var filterData = $('form#filterForm').serializeArray();

                    return (filterData) ? filterData : null;
                },

                //
                "createJSON": function() {

                    var data = {

                        'mode_view': this.modeView,

                        'user_filter': this.filterData(),

                        'items_per_page': this.itemsPerPage,

                        'current_pagin': this.currentPagin,

                        'update_total_items': this.updateTotalItems,

                        'update_pagination': this.updatePagination
                    };

                    return JSON.stringify(data);
                },

                // Ajax отправка запроса на:
                //  - обработку пользовательского фильтра,
                //  - переключение режима просмотра (таблица, карточки).
                //  На сервере запрос обрабатывается через Controller_Ajax_Filter
                "send": function () {

                    $.ajax ({

                        type: "POST",

                        url: this.url(),

                        data: {'user_data': this.createJSON()},

                        success: function (data) {

                            app.response.data = JSON.parse(data);

                            app.response.updateData() ;
                        }
                    });
                }
            },

            // ответ на действия пользователя
            "response": {

                //
                "data": {

                    'view' : '',

                    'total_items':'',

                    'pagination': ''
                },

                //
                "updateData": function(){

                    $('.widget-data .wp .view').html(this.data.view);

                    if(this.data.total_items !== null) $('span#totalItems').html(this.data.total_items);

                    if(this.data.pagination !== null)  $('ul.pagination').html(this.data.pagination)

                }
            },

            // инициализация
            "init": function () {

                var namefilter = $('#filterForm').data("namefilter");

                if(namefilter) {

                    this.request.nameFilter = namefilter;
                }

                var itemsPanel = $('.widget-data .wp form').get(0);

                if (itemsPanel){

                    itemsPanel.reset();
                }

                this.setFilterUse(this);

                this.getFilterList();

                this.setFilterHandler(this);

                this.setSwitchView(this);

                this.setChangeItemPerPage();

                this.setSwitchPagination();
            },

            // если пользователь использовал фильтр, то показать кнопку "Применить"
            "setFilterUse": function () {

                $('.form-control, input').on('click', function () {

                    $('#submitFilter button').show();

                });
            },

            // Ajax Подгрузка Списков для фильтра
            "getFilterList": function () {

                $('form').on('click', '.onList', function () {

                    var eventNode = $(this);

                    // Тип списка
                    var typeList = eventNode.data("type");

                    //
                    if (eventNode.data("state") != 'ok') {

                        $.ajax ({

                            url: "/ajax/Filter_List/" + typeList,

                            cache: false,

                            success: function (data) {

                                eventNode.html(data);
                            }
                        });
                        eventNode.attr('data-state', 'ok');
                    }
                });
            },

            // Установка Обработчика Фильтра пользователя
            "setFilterHandler": function () {

                $('#filterForm').on('click', '#submitFilter button', function (e) {

                    e.preventDefault();

                    app.applyFilter();

                });
            },

            // применить фильтр
            "applyFilter": function () {

                this.request.updateTotalItems = true;

                this.request.updatePagination = true;

                this.request.currentPagin = 1;

                this.request.send();
            },

            //
            "setSwitchView": function () {

                $('.view-switch').on('click', '[data-modeView]:not(.active)', function (e) {

                    var modeView = $(this).data('modeview');

                    $('.view-switch .active').removeClass('active');

                    $(this).addClass('active');

                    app.applySwitchView(modeView);
                })
            },

            // переключить режим представления
            "applySwitchView": function (modeView) {

                this.request.updateTotalItems = false;

                this.request.updatePagination = false;

                this.request.modeView = modeView;

                this.request.send();
            },


            // переключение пагинации

            "setSwitchPagination": function(){

                $('ul.pagination').on('click', 'li a.btn-pagination', function(e) {

                    e.preventDefault();

                    var currentPagin = parseInt( $(this).text());

                    if (currentPagin) {

                        app.applySwitchPagination(currentPagin);
                    }
                });

            },

            "applySwitchPagination": function(currentPagin){

                this.request.updatePagination = true;

                this.request.updateTotalItems = false;

                this.request.currentPagin = currentPagin;

                this.request.send();

            },

            // смена itemPerPage
            "setChangeItemPerPage": function(){

                $('select#item-per-page').on('change', function(){

                    app.applyChangeItemPerPage(this.value);

                });
            },

            "applyChangeItemPerPage": function(value){

                this.request.updatePagination = true;

                this.request.updateTotalItems = false;

                this.request.itemsPerPage = value;

                this.request.currentPagin = 1;

                this.request.send();

            },
        };

        return {

            "start": function () {

                app.init();
            }
        }
    })();

    worldDb.start();

});
