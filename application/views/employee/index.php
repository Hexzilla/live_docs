<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة الموظفين</h3>
                <div class="box-tools">
                    <?php if ($this->auth->isAdd()) : ?>
                        <a href="<?php echo site_url('employee/add'); ?>" class="btn btn-success btn-sm">إضافة موضف</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table main_table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <div class="form-check" style="position: absolute; left: 40px; z-index: 10;">
                        <input type="checkbox" class="form-check-input" id="show_all_items" />
                        <label for="show_all_items" class="control-label" style="margin-right:8px;">Show all</label>
                    </div>

                    <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>المنصب</th>
                            <th>إسم الموظف</th>
                            <th>اسم المنشأة</th>
                            <th>الجوال</th>
                            <th>العملية</th>
                        </tr>

                    </thead>

                    <tbody>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.main_table').DataTable({
            "info": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
            }
        });

        let table_data = []

        function updateTable(showAll) {
            var table = $('.main_table').DataTable();
            table.rows().remove().draw();

            for (const i in table_data) {
                let item = table_data[i]
                if (!showAll && item.status !== "1") {
                    continue
                }

                let editButton = ""
                <?php if ($this->auth->isEdit()) { ?>
                    const siteUrl1 = "<?php echo site_url('employee/edit/') ?>" + item.employee_id;
                    editButton = "<a href='" + siteUrl1 + "' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Edit</a>&nbsp"
                <?php } ?>

                let deleteButton = ""
                <?php if ($this->auth->isDelete()) { ?>
                    const siteUrl2 = "<?php echo site_url('employee/remove/') ?>" + item.employee_id;
                    const div2 = $("<div></div")
                    deleteButton = $("<a>", {
                        "class": "btn btn-danger btn-xs"
                    })
                    deleteButton = deleteButton.html("<span class='fa fa-trash'></span>حذف").attr("href", siteUrl2)
                    deleteButton = deleteButton.attr("onclick", "javascript:check=confirm( 'Are sure you want to Delete?');if(check==false) return false;")
                    deleteButton = div2.append(deleteButton).html() + "&nbsp"
                <?php } ?>

                const siteUrl3 = "<?php echo site_url('employee/profile/') ?>" + item.employee_id;
                let profileButton = "<a href='" + siteUrl3 + "' class='btn bg-purple btn-xs'><span class='fa fa-bars'></span> Profile</a>&nbsp"

                table.row.add([
                    item.employee_id,
                    item.empposition,
                    item.emp_name,
                    item.companyname,
                    item.mobile,
                    editButton + deleteButton + profileButton,
                ]).draw(false)
            }
        }

        $("#show_all_items").change(function(e) {
            updateTable(this.checked)
        });


        $.ajax({
            type: "GET",
            url: "<?php echo base_url(); ?>employee/list",
            success: function(data) {
                table_data = JSON.parse(data);
                console.log(table_data)
                const checked = $("#show_all_items").prop('checked');
                updateTable(checked)
            }
        })

    });
</script>