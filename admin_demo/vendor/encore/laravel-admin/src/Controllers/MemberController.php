<?php

namespace Encore\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Hash;

class MemberController extends AdminController
{
    /**
     * route: vender\encore\laravel-admin\src\admin.php
     * {@inheritdoc}
     */
    protected function title()
    {
        return trans('會員管理');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $userModel = config('admin.database.members_model');

        $grid = new Grid(new $userModel());

        $grid->column('id', 'ID')->sortable();;
        $grid->column('name', trans('admin.name'));
        $grid->column('email', trans('email'));
        $grid->column('role', trans('admin.role'));
        $grid->column('created_at', trans('admin.created_at'));
        $grid->column('updated_at', trans('admin.updated_at'));

        $grid->actions(function (Grid\Displayers\Actions $actions) {
            if ($actions->getKey() == 1) {
                $actions->disableDelete();
            }
        });

        $grid->tools(function (Grid\Tools $tools) {
            $tools->batch(function (Grid\Tools\BatchActions $actions) {
                $actions->disableDelete();
            });
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        $userModel = config('admin.database.members_model');

        $show = new Show($userModel::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('name', trans('admin.name'));
        $show->field('email', trans('email'));
        $show->field('role', trans('role'));
        $show->field('created_at', trans('admin.created_at'));
        $show->field('updated_at', trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        $members_model = config('admin.database.members_model');
        $permissionModel = config('admin.database.permissions_model');
        $roleModel = config('admin.database.roles_model');

        $form = new Form(new $members_model());

        $members_table = config('admin.database.members_table');
        $connection = config('admin.database.connection');

        $form->display('id', 'ID');
        $form->text('name', trans('admin.name'))
            ->creationRules(['required', "unique:{$connection}.{$members_table}"])
            ->updateRules(['required', "unique:{$connection}.{$members_table},name,{{id}}"]);

        $form->password('password', trans('admin.password'))->rules('required|confirmed');
        $form->password('password_confirmation', trans('admin.password_confirmation'))->rules('required')
            ->default(function ($form) {
                return $form->model()->password;
            });

        $form->ignore(['password_confirmation']);

        $form->display('email', trans('email'));

        $form->select('role','role')
            ->options(array('manager'=>'manager','user'=>'user'));

        $form->display('created_at', trans('admin.created_at'));
        $form->display('updated_at', trans('admin.updated_at'));

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = Hash::make($form->password);
            }
        });

        return $form;
    }
}
