define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'manystoreextend/auth_groupx_lead/index' + location.search,
                    add_url: 'manystoreextend/auth_groupx_lead/add',
                    edit_url: 'manystoreextend/auth_groupx_lead/edit',
                    del_url: 'manystoreextend/auth_groupx_lead/del',
                    multi_url: 'manystoreextend/auth_groupx_lead/multi',
                    table: 'manystoreextend_auth_groupx_lead',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'manystore_id',
                sortName: 'manystore_id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'manystore_id', title: __('Manystore_id')},
                        {field: 'manystore_auth_groupx_id', title: __('Manystore_auth_groupx_id')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});