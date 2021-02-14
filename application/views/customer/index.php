<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة العملاء</h3>
                <div class="box-tools">
                    <?php if ($this->auth->isAdd()) : ?>
                        <a href="<?php echo site_url('customer/add'); ?>" class="btn btn-success btn-sm">اضافة</a>
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
                            <th>رقم العميل</th>
                            <th>اسم العميل</th>
                            <th>الجنسية</th>
                            <th>البريد الالكتروني</th>
                            <th>الجوال</th>
                            <th>رقم الهوية</th>
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
                    const siteUrl1 = "<?php echo site_url('customer/edit/') ?>" + item.customer_id;
                    editButton = "<a href='" + siteUrl1 + "' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Edit</a>&nbsp"
                <?php } ?>

                let deleteButton = ""
                <?php if ($this->auth->isDelete()) { ?>
                    const siteUrl2 = "<?php echo site_url('customer/remove/') ?>" + item.customer_id;
                    const div2 = $("<div></div")
                    deleteButton = $("<a>", {
                        "class": "btn btn-danger btn-xs"
                    })
                    deleteButton = deleteButton.html("<span class='fa fa-trash'></span>حذف").attr("href", siteUrl2)
                    deleteButton = deleteButton.attr("onclick", "javascript:check=confirm('Are sure you want to Delete ?');if(check==false) return false;")
                    deleteButton = div2.append(deleteButton).html() + "&nbsp"
                <?php } ?>

                const siteUrl3 = "<?php echo site_url('customer/profile/') ?>" + item.customer_id;
                let profileButton = "<a href='" + siteUrl3 + "' class='btn bg-purple btn-xs'><span class='fa fa-bars'></span> Profile</a>&nbsp"

                table.row.add([
                    item.customer_id,
                    item.Customer_name,
                    item.Nationality,
                    item.email,
                    item.mobile,
                    item.IDcard,
                    editButton + deleteButton + profileButton,
                ]).draw(false)
            }
        }

        $("#show_all_items").change(function(e) {
            updateTable(this.checked)
        });


        $.ajax({
            type: "GET",
            url: "<?php echo base_url(); ?>customer/list",
            success: function(data) {
                table_data = JSON.parse(data);
                const checked = $("#show_all_items").prop('checked');
                updateTable(checked)
            }
        })

    });
</script>