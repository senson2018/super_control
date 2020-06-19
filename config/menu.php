<?php
/**
 * 菜单配置文件
 */

return [
	    [
	        "type" => "file",
	        "name" => "manystoreextend",
	        "title" => "多商家超管权控",
	        "icon" => "fa fa-list",
	        "condition" => "",
	        "remark" => "",
	        "ismenu" => 1,
	        "sublist" => [
	            [
	                "type" => "file",
	                "name" => "manystoreextend/auth_groupx",
	                "title" => "超管分组",
	                "icon" => "fa fa-circle-o",
	                "condition" => "",
	                "remark" => "",
	                "ismenu" => 1,
	                "sublist" => [
	                    [
	                        "type" => "file",
	                        "name" => "manystoreextend/auth_groupx/index",
	                        "title" => "查看",
	                        "icon" => "fa fa-circle-o",
	                        "condition" => "",
	                        "remark" => "",
	                        "ismenu" => 0
	                    ],
	                    [
	                        "type" => "file",
	                        "name" => "manystoreextend/auth_groupx/add",
	                        "title" => "添加",
	                        "icon" => "fa fa-circle-o",
	                        "condition" => "",
	                        "remark" => "",
	                        "ismenu" => 0
	                    ],
	                    [
	                        "type" => "file",
	                        "name" => "manystoreextend/auth_groupx/edit",
	                        "title" => "编辑",
	                        "icon" => "fa fa-circle-o",
	                        "condition" => "",
	                        "remark" => "",
	                        "ismenu" => 0
	                    ],
	                    [
	                        "type" => "file",
	                        "name" => "manystoreextend/auth_groupx/del",
	                        "title" => "删除",
	                        "icon" => "fa fa-circle-o",
	                        "condition" => "",
	                        "remark" => "",
	                        "ismenu" => 0
	                    ],
	                    [
	                        "type" => "file",
	                        "name" => "manystoreextend/auth_groupx/multi",
	                        "title" => "批量更新",
	                        "icon" => "fa fa-circle-o",
	                        "condition" => "",
	                        "remark" => "",
	                        "ismenu" => 0
	                    ]
	                ]
	            ]
	        ]
	    ]
	];