<style>
    #main_tbl th, td {
        text-align: center;
        vertical-align: middle;
    }

</style>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height: 1305px;">
        <h1 class="page-title"><?php echo $this->lang->line('panel_title_51'); ?>
            <small></small>
        </h1>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="table-toolbar">
                        <!------Tool bar parts (add button and search function------>
                        <div class="row">
                            <div class="col-md-5">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-5 control-label"><?php echo $this->lang->line('role_keyword'); ?>
                                                :</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="keyword_search"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-7">
                                <div class="btn-group right-floated">
                                    <button class=" btn blue" id="add_new_admin_btn"><i
                                                class="fa fa-plus"></i>&nbsp<?php echo $this->lang->line('role_add_admin'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!------Tool bar parts (add button and search function------>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="main_tbl">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('order_number_abbr'); ?></th>
                                <th><?php echo $this->lang->line('role_admin_account'); ?></th>
                                <th><?php echo $this->lang->line('role_admin_label'); ?></th>
                                <th width="300px;"><?php echo $this->lang->line('role_operate'); ?></th>
                            </tr>
                            </thead>
                            <tbody><?= $tbl_content ?></tbody>
                        </table>
                        <div id="pageNavPos"></div>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!---add new admin modal--->
<div id="add_admin_modal" class="modal fade" tabindex="-1" data-width="400">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title"><?php echo $this->lang->line('role_add_modal'); ?></h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" action="" id="add_admin_submit_form" role="form"
              method="post" accept-charset="utf-8">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('role_admin_account'); ?>:</label>
                    <div class="col-md-7" style="padding-left: 0">
                        <input type="text" class="form-control" name="add_admin_fullname" id="add_add_fullname"
                               value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('role_pwd_modal'); ?>:</label>
                    <div class="col-md-7" style="padding-left: 0">
                        <input type="password" class="form-control" name="add_admin_password" id="add_admin_password"
                               value="" onkeyup="confirmPassword();">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('role_confirm_pwd_modal'); ?>:</label>
                    <div class="col-md-7" style="padding-left: 0">
                        <input type="password" class="form-control" onkeyup="confirmPassword();"
                               name="add_admin_repeatpassword" id="add_admin_repeatpassword" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('role_name_modal'); ?>:</label>
                    <div class="col-md-7" style="padding-left: 0">
                        <input type="text" class="form-control" name="add_admin_label" id="add_admin_label" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer form-actions">
                <button type="submit" class="btn green"
                        id="add_admin_saveBtn"><?php echo $this->lang->line('role_save_btn'); ?></button>
            </div>
        </form>
    </div>
</div>
<!---add new admin modal--->

<!-------Modal to New Assign Role to admin ---------->
<div id="add_assign_admin_modal" class="modal fade" tabindex="-1" data-width="900">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title"><?php echo $this->lang->line('assign_permission'); ?></h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" action="" id="add_assign_admin_submit_form" role="form"
              method="post" accept-charset="utf-8">
            <div class="form-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left;" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="0" data-type="mainmenu">分类管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="0" data-subid="00" data-type="submenu">科目分类
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="0" data-subid="01" data-type="submenu">册次分类
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="0" data-subid="02" data-type="submenu">课程分类
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="0" data-subid="03" data-type="submenu">资源类型分类
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="1" data-type="mainmenu">标准内容管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="1" data-subid="10" data-type="submenu">资源管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="1" data-subid="11" data-type="submenu">课件管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="1" data-subid="12" data-type="submenu">题目管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="2" data-type="mainmenu">首页管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="2" data-subid="20" data-type="submenu">Banner管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="2" data-subid="21" data-type="submenu">资源精选管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="2" data-subid="22" data-type="submenu">课件精选管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-type="mainmenu">移动端管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="30" data-type="submenu">Banner管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="31" data-type="submenu">资源精选管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="32" data-type="submenu">小学语文
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="33" data-type="submenu">小学数学
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="34" data-type="submenu">初中数学
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="35" data-type="submenu">初中物理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="5" data-type="mainmenu">用户内容管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="5" data-subid="50" data-type="submenu">备课管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="5" data-subid="51" data-type="submenu">作业管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="4" data-type="mainmenu">后台管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="4" data-subid="40" data-type="submenu">管理员管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-type="mainmenu">数据统计
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="60" data-type="submenu">用户信息管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="61" data-type="submenu">登录信息统计
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="62" data-type="submenu">资源使用详情
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="63" data-type="submenu">课件使用详情
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="64" data-type="submenu">题目使用详情
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="65" data-type="submenu">学校信息统计
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="66" data-type="submenu">使用情况统计
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn green"
                        id="add_assign_admin_saveBtn"><?php echo $this->lang->line('done'); ?></button>
                <button type="button" class="btn green"
                        onclick="$('#add_assign_admin_modal').modal('toggle');">
                    <?php echo $this->lang->line('cancel'); ?></button>
            </div>
        </form>
    </div>
</div>
<!-------Modal to Assign Role to admin ---------->
<!----publish modal-->
<div id="item_publish_modal" class="modal fade" tabindex="-1" data-width="400">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title"><?php echo $this->lang->line('message'); ?></h4>
    </div>
    <div class="modal-body" style="text-align:center;">
        <h4 class="modal-title"></h4>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn green" onclick="publish_perform(this);"
                id="publish_perform"><?php echo $this->lang->line('ok'); ?></button>
    </div>
</div>
<!----edit admin modal--->
<div id="edit_admin_modal" class="modal fade" tabindex="-1" data-width="400">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title"><?php echo $this->lang->line('role_update_modal'); ?></h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" action="" id="edit_admin_submit_form" role="form"
              method="post" accept-charset="utf-8">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('account'); ?>:</label>
                    <label class="col-md-7 control-label" id="edit_admin_fullname"
                           style="text-align:left;font-weight:bold;"><?php echo $this->lang->line('account'); ?>:</label>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('role_pwd_modal'); ?>:</label>
                    <div class="col-md-7" style="pediting-left: 0">
                        <input type="password" class="form-control" name="edit_admin_password" id="edit_admin_password"
                               value="" onkeyup="confirmEditPassword();">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('role_confirm_pwd_modal'); ?>:</label>
                    <div class="col-md-7" style="pediting-left: 0">
                        <input type="password" class="form-control" name="item_repeat_password"
                               id="edit_admin_repeatpassword" value="" onkeyup="confirmEditPassword();">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"
                           style="text-align:center;"><?php echo $this->lang->line('role_name_modal'); ?>:</label>
                    <div class="col-md-7" style="pediting-left: 0">
                        <input type="text" class="form-control" name="edit_admin_label" id="edit_admin_label" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer form-actions">
                <button type="submit" class="btn green"
                        id="edit_admin_saveBtn"><?php echo $this->lang->line('role_save_btn'); ?></button>
                <!--<button type="button" class="btn green"
                        onclick="$('#edit_admin_modal').modal('toggle');">
                    <?php /*echo $this->lang->line('cancel'); */?></button>-->
            </div>
        </form>
    </div>
</div>
<!----delete modal-->
<div id="item_delete_modal" class="modal fade" tabindex="-1" data-width="300">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <!--<h4 class="modal-title"><?php /*echo $this->lang->line('delete_course'); */?></h4>-->
    </div>
    <div class="modal-body" style="text-align:center;">
        <h4 class="modal-title"><?php echo $this->lang->line('role_delete_course_confirm'); ?></h4>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn green" onclick="delete_admin(this);"
                id="delete_admin_btn"><?php echo $this->lang->line('yes'); ?></button>
        <button type="button" class="btn green" onclick="$('#admin_delete_modal').modal('toggle');">
            <?php echo $this->lang->line('no'); ?></button>
    </div>
</div>
<!-------Modal to Assign Role to admin ---------->
<div id="assign_admin_modal" class="modal fade" tabindex="-1" data-width="900">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title"><?php echo $this->lang->line('assign_permission'); ?></h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" action="" id="assign_admin_submit_form" role="form"
              method="post" accept-charset="utf-8">
            <div class="form-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left;" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="0" data-type="mainmenu">上传介绍视频
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="0" data-subid="00" data-type="submenu">上传介绍视频
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="1" data-type="mainmenu">激活码管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="1" data-subid="10" data-type="submenu">激活码管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="2" data-type="mainmenu">分类管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="2" data-subid="20" data-type="submenu">课程管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="2" data-subid="21" data-type="submenu">课次管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-type="mainmenu">拼音项目管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="30" data-type="submenu">素材管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="31" data-type="submenu">课件管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="32" data-type="submenu">参考资料管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="3" data-subid="33" data-type="submenu">题库管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="5" data-type="mainmenu">用户管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="5" data-subid="50" data-type="submenu">教师账户管理
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="5" data-subid="51" data-type="submenu">学生账户管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-type="mainmenu">统计管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="60" data-type="submenu">登录统计
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="61" data-type="submenu">用户购买统计
                                <span></span>
                            </label>
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="6" data-subid="62" data-type="submenu">更多统计
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10" style="text-align:left" data-type="mainMenuCheck">
                            <label class="mt-checkbox mt-checkbox-outline" style="font-weight:bold">
                                <input type="checkbox" data-id="4" data-type="mainmenu">后台管理
                                <span></span>
                            </label>
                        </div>
                        <div class="col-md-offset-2 col-md-9" style="text-align:left">
                            <label class="mt-checkbox mt-checkbox-outline col-md-3" style="font-weight:bold">
                                <input type="checkbox" data-id="4" data-subid="40" data-type="submenu">角色管理
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn green"
                        id="assign_admin_saveBtn"><?php echo $this->lang->line('done'); ?></button>
                <button type="button" class="btn green"
                        onclick="$('#assign_admin_modal').modal('toggle');">
                    <?php echo $this->lang->line('cancel'); ?></button>
            </div>
        </form>
    </div>
</div>
<!-------Modal to Assign Role to admin ---------->
<script>
    $('a.nav-link[menu_id="<?= $roleName; ?>"]').addClass('menu-selected');

    //*************************pagenation module
    var prevstr = "<?php echo $this->lang->line('PrevPage');?>";
    var nextstr = "<?php echo $this->lang->line('NextPage');?>";
    var currentShowedPage = 1;
    var showedItems = <?=$this->lang->line('records_per_page')?>;

    function Pager(tableName, itemsPerPage) {
        this.tableName = tableName;
        this.itemsPerPage = itemsPerPage;
        this.currentPage = 1;
        this.pages = 0;
        this.inited = false;

        this.showRecords = function (from, to) {
            var rows = document.getElementById(tableName).rows;
            // i starts from 1 to skip table header row
            for (var i = 1; i < rows.length; i++) {
                if (i < from || i > to)
                    rows[i].style.display = 'none';
                else
                    rows[i].style.display = '';
            }

        };

        this.showPage = function (pageNumber) {
            if (!this.inited) {
                alert("not inited");
                return;
            }
            this.showPageNav('pager', 'pageNavPos');
            var oldPageAnchor = document.getElementById('pg' + this.currentPage);
            if (oldPageAnchor) {
                oldPageAnchor.className = 'pg-normal';

                this.currentPage = pageNumber;
                var newPageAnchor = document.getElementById('pg' + this.currentPage);
                newPageAnchor.className = 'pg-selected';

                var from = (pageNumber - 1) * itemsPerPage + 1;
                var to = from + itemsPerPage - 1;
                this.showRecords(from, to);
            } else {

                return;
            }
        };

        this.prev = function () {
            if (this.currentPage > 1) {

                currentShowedPage = this.currentPage - 1;
                this.showPage(this.currentPage - 1);
            }
        };

        this.next = function () {
            if (this.currentPage < this.pages) {
                currentShowedPage = this.currentPage + 1;
                this.showPage(this.currentPage + 1);
            }
        };

        this.init = function () {
            var rows = document.getElementById(tableName).rows;
            var records = (rows.length - 1);
            this.pages = Math.ceil(records / itemsPerPage);
            this.inited = true;
        };

        this.showPageNav = function (pagerName, positionId) {
            if (!this.inited) {
                alert("not inited");
                return;
            }
            var element = document.getElementById(positionId);

            var pagerHtml = '<button class = "btn btn blue pg-normal" onclick="' + pagerName + '.prev();">' + prevstr + '</button>  ';
            pagerHtml += '<span class="pagination-num">第' + currentShowedPage + '页  ( 共' + this.pages + '页 )</span>';
            for (var page = 1; page <= this.pages; page++)
                pagerHtml += '<button hidden id="pg' + page + '" class="pg-normal" onclick="' + pagerName + '.showPage(' + page + ');">' + page + '</button>  ';
            pagerHtml += '<button  class = "btn btn blue pg-normal" onclick="' + pagerName + '.next();">' + nextstr + '</button>';

            element.innerHTML = pagerHtml;
        };
    }

    var pager = new Pager('main_tbl', showedItems);
    pager.init();
    pager.showPage(1);

    function executionPageNation() {
        pager = new Pager('main_tbl', showedItems);
        pager.init();
        pager.showPage(currentShowedPage);
    }

    //pagenation module

</script>
<script>

    $(function () {
        $('input[type="checkbox"]').off('click');
        $('input[type="checkbox"]').on('click', function () {
            var type = $(this).attr('data-type');
            var menu_id = $(this).attr('data-id');
            switch (type) {
                case 'mainmenu':
                    $('input[data-id="' + menu_id + '"]').prop('checked', this.checked);
                    break;
                case 'submenu':
                    var subMenus = $('input[data-id="' + menu_id + '"][data-type="submenu"]');
                    var isAllChecked = true;
                    for (var i = 0; i < subMenus.length; i++) {
                        if (subMenus[i].checked) continue;
                        isAllChecked = false;
                        break;
                    }
                    if (isAllChecked) $('input[data-id="' + menu_id + '"][data-type="mainmenu"]').prop('checked', true);
                    else $('input[data-id="' + menu_id + '"][data-type="mainmenu"]').prop('checked', false);
                    break;
            }
        });
    });

    function delete_admin(self) {
        var admin_id = self.getAttribute("admin_id");
        $("#delete_admin_btn").attr("admin_id", admin_id);
        $("#admin_delete_modal").modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    function edit_admin(self) {

        var admin_id = self.getAttribute('admin_id');
        $("#edit_admin_saveBtn").attr("admin_id", admin_id);
        var tdtag = self.parentNode;
        var trtag = tdtag.parentNode;
        var username = trtag.cells[1].innerHTML;
        var admin_pass = trtag.cells[2].innerHTML;
        var admin_label = trtag.cells[3].innerHTML;

        $('#edit_admin_fullname').text(username);
        $('#edit_admin_password').val('1');///old pass

        //$('#edit_admin_password').val(admin_pass);
        //$('#edit_admin_repeatpassword').val(admin_pass);///confirm pass

        $('#edit_admin_repeatpassword').val('1');///confirm pass

        $('#edit_admin_label').val(admin_label);

        $('#edit_admin_modal').modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    function publish_item(self) {
        var item_id = self.getAttribute("item_id");
        var item_status = self.getAttribute("item_status");
        var msg_body = $('#item_publish_modal').find('.modal-body h4');
        if (item_status == '0')
            msg_body.html('<?= $this->lang->line('publish_admin_confirm'); ?>');
        else
            msg_body.html('<?= $this->lang->line('unpublish_admin_confirm'); ?>');
        $("#publish_perform").attr("item_id", item_id);
        $("#publish_perform").attr("item_status", self.innerHTML.trim());
        $("#publish_perform").attr("onclick", 'publish_perform(this)');
        $("#item_publish_modal").modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    function publish_perform(self) {

        var item_id = self.getAttribute("item_id");
        var publish = "<?php echo $this->lang->line('enable');?>";
        var curBtnText = self.getAttribute("item_status");
        var pub_st = '1';
        if (publish != curBtnText) pub_st = '0';

        ///ajax process for publish/unpublish
        $.ajax({
            type: "post",
            url: baseURL + "admin/admins/publish_admin",
            dataType: "json",
            data: {item_id: item_id, publish_state: pub_st},
            success: function (res) {
                if (res.status == 'success') {
                    var table = document.getElementById("main_tbl");
                    var tbody = table.getElementsByTagName("tbody")[0];
                    tbody.innerHTML = res.data;
                    executionPageNation();
                    $('#item_publish_modal').modal('toggle');
                    console.log('publish has been successed!')
                }
                else//failed
                {
                    alert("Cannot change publish status.");
                }
            }
        });
    }

    function initAssignModal(permissionJSONStr) {
        var perm = JSON.parse(permissionJSONStr);
        $('input[type="checkbox"]').prop('checked', false);
        for (var key in perm) {
            if (typeof perm[key] !== 'function' && perm[key] == '1') {
                $('input[type="checkbox"][data-subid="' + key.substr(-2) + '"]').trigger('click');
            }
        }
    }
    function makeJsonArr() {
        var jsonArr = {};
        var allMenus = $('input[type="checkbox"][data-type="submenu"]');
        for (var i = 0; i < allMenus.length; i++) {
            var elem = allMenus[i];
            var subid = $(elem).attr('data-subid');
            jsonArr['menu_' + subid] = (elem.checked ? 1 : 0);
        }
        return jsonArr;
    }

    function assign_admin(self) {
        var admin_id = self.getAttribute('admin_id');
        var tdtag = self.parentNode;
        var trtag = tdtag.parentNode;

        var permissionJSONStr = trtag.cells[4].innerHTML;
        if (permissionJSONStr != '') {
            initAssignModal(permissionJSONStr);
            var user_id = '<?= $this->session->userdata("admin_loginuserID");?>';
            if (user_id == '1' && admin_id == '1') {
                $('input[type="checkbox"][data-id="4"]').attr('disabled', 'disabled');
                $('input[type="checkbox"][data-id="4"]').prop('checked', true);
            } else $('input[type="checkbox"][data-id="4"]').removeAttr('disabled');
        }

        $('#assign_admin_saveBtn').attr('admin_id', admin_id);
        $("#assign_admin_modal").modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    $('#assign_admin_submit_form').submit(function (e) {
        var admin_id = $('#assign_admin_saveBtn').attr('admin_id');
        e.preventDefault();
        jQuery.ajax({
            url: baseURL + "admin/admins/assign",
            type: "post",
            data: {admin_id: admin_id, role_info: makeJsonArr()},
            success: function (res) {
                var ret = JSON.parse(res);
                if (ret.status == 'success') {
                    if (admin_id == '1')
                        location.href = baseURL + "admin/signin/signout";
                    else
                        location.reload();
                }
                else//failed
                {
                    alert("操作失败");
                }
            }
        });
        jQuery('#assign_admin_modal').modal('toggle');
    });

    function initAddNewModal() {
        $('#add_add_fullname').val('');
        $('#add_admin_label').val('');
        $('#add_admin_password').val('');
        $('#add_admin_repeatpassword').val('');
    }

    function confirmPassword() {
        var addSaveButton = document.getElementById('add_admin_saveBtn');
        var userPassBox = document.getElementById("add_admin_password");
        var userpass = userPassBox.value;
        var userRepeatPassBox = document.getElementById("add_admin_repeatpassword");
        var userRepeatPass = userRepeatPassBox.value;
        if (userpass == userRepeatPass) {
            userRepeatPassBox.style.borderColor = '#c2cad8';
            userRepeatPassBox.style.borderWidth = '1px';
            userRepeatPassBox.style.borderStyle = 'solid';
            addSaveButton.disabled = false;
        } else {
            userRepeatPassBox.style.borderColor = '#f00';
            userRepeatPassBox.style.borderWidth = '2px';
            userRepeatPassBox.style.borderStyle = 'solid';
            addSaveButton.disabled = true;
        }

    }

    function confirmEditPassword() {
        var addSaveButton = document.getElementById('edit_admin_saveBtn');
        var userPassBox = document.getElementById("edit_admin_password");
        var userpass = userPassBox.value;
        var userRepeatPassBox = document.getElementById("edit_admin_repeatpassword");
        var userRepeatPass = userRepeatPassBox.value;
        if (userpass == userRepeatPass) {
            userRepeatPassBox.style.borderColor = '#c2cad8';
            userRepeatPassBox.style.borderWidth = '1px';
            userRepeatPassBox.style.borderStyle = 'solid';
            addSaveButton.disabled = false;
        } else {
            userRepeatPassBox.style.borderColor = '#f00';
            userRepeatPassBox.style.borderWidth = '2px';
            userRepeatPassBox.style.borderStyle = 'solid';
            addSaveButton.disabled = true;
        }
    }

    $("#add_new_admin_btn").click(function () {
        initAddNewModal();
        $('#add_admin_modal').modal({
            backdrop: 'static',
            keyboard: false
        });
    });

    $("#add_admin_submit_form").submit(function (e) {
        e.preventDefault();
        var username = $('#add_add_fullname').val();
        var password = $('#add_admin_password').val();
        if(username =='' || password ==''){
            alert('<?= $this->lang->line('userinfo_invalid');?>');
            return;
        }

        initAllCheckBox();
        $('#add_admin_modal').modal('toggle');
        $('#add_assign_admin_modal').modal({
            backdrop: 'static',
            keyboard: false
        });
    });

    $('#add_assign_admin_submit_form').submit(function (e) {
        var admin_id = $('#assign_admin_saveBtn').attr('admin_id');
        var role_info = makeArrayFromChkSt();
        var submit_form = document.getElementById('add_admin_submit_form');
        var fdata = new FormData(submit_form);
        fdata.append("permission", JSON.stringify(role_info));
        e.preventDefault();
        $.ajax({
            url: baseURL + "admin/admins/add",
            type: "post",
            data: fdata,
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function (res) {
                var ret = JSON.parse(res);
                if (ret.status == 'success') {
                    var table = document.getElementById("main_tbl");
                    var tbody = table.getElementsByTagName("tbody")[0];
                    tbody.innerHTML = ret.data;
                    executionPageNation();
                }
                else//failed
                {
                    alert("Cannot modify Unit Data.");
                }
            }
        });
        $('#add_assign_admin_modal').modal('toggle');
    });

    $("#edit_admin_submit_form").submit(function (e) {

        e.preventDefault();
        var admin_id = $("#edit_admin_saveBtn").attr('admin_id');
        var fdata = new FormData(this);
        fdata.append("admin_id", admin_id);
        jQuery.ajax({
            url: baseURL + "admin/admins/edit",
            type: "post",
            data: fdata,
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function (res) {
                var ret = JSON.parse(res);
                if (ret.status == 'success') {
                    location.href = "<?= base_url('admin/signin/index') ?>";
//                var table = document.getElementById("main_tbl");
//                var tbody = table.getElementsByTagName("tbody")[0];
//                tbody.innerHTML = ret.data;
//                executionPageNation();

                }
                else//failed
                {
                    alert("Cannot modify Unit Data.");
                }
            }
        });
        jQuery('#edit_admin_modal').modal('toggle');
    });

    $("#keyword_search").keyup(function () {
        search_action();
    });

    function search_action() {

        var keyword = $('#keyword_search').val();

        var txt1 = '';//$('#sel1_search').val();
        var txt2 = '';//$('#sel2_search').val();
        var txt3 = '';//$('#sel3_search').val();

        var create_ds = '';//$('#date1_search').val();
        var create_de = '';//$('#date2_search').val();
        var act_ds = '';//$('#date3_search').val();
        var act_de = '';//$('#date4_search').val();

        if (keyword != '') keyword = keyword.toUpperCase();

        if (txt1 != '') txt1 = txt1.toUpperCase();
        if (txt2 != '') txt2 = txt2.toUpperCase();
        if (txt3 != '') txt3 = txt3.toUpperCase();

        if (create_ds != '') create_ds = Date.parse(create_ds);
        if (create_de != '') create_de = Date.parse(create_de);
        if (act_ds != '') act_ds = Date.parse(act_ds);
        if (act_de != '') act_de = Date.parse(act_de);

        var table = document.getElementById("main_tbl");
        var tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
        if (tr.length < 2) return;
        for (var i = 1; i < tr.length; i++) {

            var cmpst = 0;
            for (var j = 0; j < 2; j++)//5 is search filed count
            {
                var td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    var txt = td.innerHTML.toUpperCase();
                    if (txt != '' && txt.indexOf(keyword) > -1) cmpst++;
                }
            }
            var create_d = tr[i].getElementsByTagName("td")[2].innerHTML;
            var act_d = tr[i].getElementsByTagName("td")[5].innerHTML;
            if (act_d == '') act_d = '3000-01-01';
            create_d = Date.parse(create_d);
            act_d = Date.parse(act_d);
            if (cmpst > 0) {
                if (txt1 != '' && tr[i].getElementsByTagName("td")[4].innerHTML.toUpperCase() != txt1)
                    tr[i].style.display = "none";
                else if (txt2 != '' && tr[i].getElementsByTagName("td")[3].innerHTML.toUpperCase() != txt2)
                    tr[i].style.display = "none";
                else if (txt3 != '' && tr[i].getElementsByTagName("td")[6].innerHTML.toUpperCase() != txt3)
                    tr[i].style.display = "none";
                else if (create_ds != '' && create_d < create_ds)
                    tr[i].style.display = "none";
                else if (create_de != '' && create_d > create_de)
                    tr[i].style.display = "none";
                else if (act_ds != '' && act_d < act_ds)
                    tr[i].style.display = "none";
                else if (act_de != '' && act_d > act_de)
                    tr[i].style.display = "none";
                else
                    tr[i].style.display = "";
                console.log(act_d);
            }
            else tr[i].style.display = "none";
        }

        if (keyword == '' && txt1 == '' && txt2 == '' && txt3 == '' &&
            create_ds == '' && create_de == '' && act_ds == '' && act_de == '')
            executionPageNation();
    }
</script>
<script src="<?= base_url('assets/js/my_custom_admin.js') ?>" type="text/javascript"></script>




